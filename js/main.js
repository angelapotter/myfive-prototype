$(document).ready(function() {

  /************************/
  /*** GLOBAL VARIABLES ***/
  /************************/
  
  // PERSON CLASS DEFINITIONS
  
  var personArray = [];

  function Person() {
    this.nickName = '';
    this.tile = '';
    this.frontContent = '';
    this.backContent = '';
    this.role = '';
    this.added = false;
    this.dropped = false;
    personArray.push(this);
  }
  Person.prototype.setName = function (first, last) {
    this.nickName = first;
    this.firstName = first;
    this.lastName = last;
    this.fullName = first + ' ' + last;
  }
  function User() { // define User
    Person.call(this);
    this.added = true;
  }
  User.prototype = new Person(); //inherit Person

  // USER
  var user = new User();
  user.setName('Test', 'User');
  user.nickName = 'you';
  user.tile = 'tileUser';
  user.workEmail = 'your.work.email@yourdomain.com';
  user.frontContent = ' \
                    <img class="profile" src="images/profile-pic-80.png" /> \
                    <h3>Your Name</h3> \
                    <p class="jobTitle">Your Job Title</p> \
                    <img class="iconStartLine" src="images/org-icon-16.png" /> \
                    <p class="inline">Your Company</p> \
                    <div class="clear"></div> \
                    ';
  user.backContent = '\
                    <h3>Your name</h3> \
                    <p class="jobTitle">Your Job Title</p> \
                    <div class="connector">Introduced by Connector Name</div> \
                    <div class="rolesHist"> \
                       <div class="recipient color">R</div> \
                       <div class="source color">S</div> \
                       <div class="client color">P</div> \
                    </div> \
                    ';

  var contactArray = []; // store claire & joe
                      
  function Contact() { //define Contact
    Person.call(this);
    this.added = false;
    //this.dropped = false; //in person
    contactArray.push(this);
    // add to gig
  }
  Contact.prototype = new Person();

  // CLAIRE SMITH
  var claire = new Contact();
  claire.setName('Claire', 'Smith');
  claire.tile = 'tileClaire';
  claire.workEmail = 'claire@clairesmithwebdesign.com';
  claire.frontContent = ' \
                    <img class="profile" src="images/profile-pic-80.png" /> \
                    <h3>' + claire.fullName + '</h3> \
                    <p class="jobTitle">Web Designer</p> \
                    <img class="iconStartLine" src="images/org-icon-16.png" /> \
                    <p class="inline">Claire Smith Web Design</p> \
                    <div class="clear"></div> \
                    ';
  claire.backContent = '\
                    <h3>' + claire.fullName + '</h3> \
                    <p class="jobTitle">Web Designer</p> \
                    <div class="connector">Introduced by Connector Name</div> \
                    <div class="rolesHist"> \
                       <div class="recipient color">R</div> \
                       <div class="source color">S</div> \
                       <div class="client color">P</div> \
                    </div> \
                    ';

  // JOE SCHMO
  var joe = new Contact();
  joe.setName('Joe', 'Schmo');
  joe.tile = 'tileJoe';
  joe.workEmail = 'joe@joeschmoaccounting.com';
  joe.frontContent = ' \
                    <img class="profile" src="images/profile-pic-80.png" /> \
                    <h3>' + joe.fullName + '</h3> \
                    <p class="jobTitle">Certified Public Accountant</p> \
                    <img class="iconStartLine clear" src="images/org-icon-16.png" /> \
                    <p class="inline">Joe Schmo Accounting</p> \
                    <div class="clear"></div> \
                    ';
  joe.backContent = '\
                    <h3>' + joe.fullName + '</h3> \
                    <p class="jobTitle">Certified Public Accountant</p> \
                    <div class="connector">Introduced by Connector Name</div> \
                    <div class="rolesHist"> \
                       <div class="recipient color">R</div> \
                       <div class="source color">S</div> \
                       <div class="client color">P</div> \
                    </div> \
                    ';
  
  // STEPS OBJECT
  
  var stepArray = [];
  
  function Step() {
    this.name = '';
    this.wording = '';
    this.done = false;
    this.next = false;
    this.date = '';
    this.reminderSetting = '';
    stepArray.push(this);
  }
  Step.prototype.setName = function (name, wording) {
    this.name = name;
    this.wording = wording;
  }
  
  var open = new Step();
  open.setName('open', '<strong>open</strong> this gig');
  open.done = true;
  
  var contact = new Step();
  contact.setName('contact', '<strong>make contact</strong> with ' + getInfoFromRole('client'));
  contact.reminderSetting = 'in 48 hours';
  contact.next = true;
  
  var close = new Step();
  close.setName('close', '<strong>close business</strong> for this gig');
  close.reminderSetting = 'in 2 months';
  
  var thank = new Step();
  thank.setName('thank', '<strong>thank</strong> ' + getInfoFromRole('source'));
  thank.reminderSetting = 'in 48 hours';
  
  var followup = new Step();
  followup.setName('followup', '<strong>follow up</strong> with ' + getInfoFromRole('source'));
  followup.reminderSetting = 'in 2 months';
  
  // NON-CLASS GLOBALS
  
  var tilesDropped = 0;
  var allRoles = ['recipient', 'source', 'client'];
  var sharedRoles = [];
  
  // tracking
  var timeFrameFocused = false;
  var dateFocused = false;
  var lastStepDone = stepArray[0];
  var nextStep = stepArray[1];
  
  /**************************************/
  /*** INSTANTIATE JQUERY UI ELEMENTS ***/
  /**************************************/
  
  // tooltip
  $(document).tooltip({
    position: { my: "left bottom", at: "left top", collision: "flipfit" }
  });
  // alert template
  $('#alert').dialog({
    autoOpen: false,
    height: 'auto',
    modal: true,
    buttons: {
      Ok: function() {
        $(this).dialog('close');
      }
    }
  });
  // lightbox template
  $('.lightbox').dialog({
    autoOpen: false,
    height: 'auto',
    width: 500,
    modal: true,
    show: 'fade',
    buttons: {
      Ok: function() {
        $(this).dialog('close');
      }
    }
  });
  // share lb
  $('#sharing').dialog({
    autoOpen: false,
    height: 'auto',
    width: 630,
    modal: true,
    show: 'fade',
    buttons: {}
  });
  // datepicker
  $('input.date').datepicker({
    showOn: 'both',
    buttonImage: 'images/calendar.png',
    buttonImageOnly: true,
    dateFormat: 'm/d/y'
  });
  
  /***********************/
  /*** UNIVERSAL STUFF ***/
  /***********************/
  
  $('#resetGig').click(function() {
    clearCookies();
    location.reload();
    resetCreateGig();
  });
  $('.greeting').html('Hello, ' + user.firstName);
  
  /**************************/
  /****** PARTICIPANTS ******/
  /**************************/
  
  // DECLARE FUNCTIONS
  
  // cookies
  function setCookie(cName, value, expDays) {
    var expDate = new Date();
    expDate.setDate(expDate.getDate() + expDays);
    var cValue=escape(value) + ((expDays===null) ? '' : '; expires=' + expDate.toUTCString());
    document.cookie = cName + '=' + cValue;
  }
  function getCookie(cName) {
    var i,x,y,cookiesArray = document.cookie.split(';');
    for (i = 0; i < cookiesArray.length; i++) {
      x = cookiesArray[i].substr(0,cookiesArray[i].indexOf('='));
      y = cookiesArray[i].substr(cookiesArray[i].indexOf('=')+1);
      x = x.replace(/^\s+|\s+$/g,'');
      if (x === cName) {
        return unescape(y);
      }
    }
  }
  function clearCookies() {
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf('=');
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 GMT';
    }
  }
  // convert strings to boolean
  function toBoolean(string) {
    if (string === 'true') {
      return true;
    } else if (string === 'false') {
      return false;
    }
  }
  // return to where you left off if you refresh page
  function resetCreateGig() {
    for (var i = 0; i < personArray.length; i++) {
      var person = personArray[i];
      if (getCookie(person.firstName + 'Added') !== undefined) {
        person.added = toBoolean(getCookie(person.firstName + 'Added'));
      }
      if (getCookie(person.firstName + 'Dropped') !== undefined) {
        person.dropped = toBoolean(getCookie(person.firstName + 'Dropped'));
      }
      // not added
      if (person.added === false) {
        $('.' + person.firstName + '.tile').hide();
        // $('.selectContactInfo').hide();
      }
      // added but not dropped
      if (person.added === true && person.dropped == false) {
        $('.' + person.firstName + '.tile').show();
        //console.log(person.firstName+' has been added');
      }
      // dropped
      if (person.dropped === true) {
        //console.log(person.firstName+' has been dropped');
        $('.' + person.firstName + '.tile').hide();
        // $('.selectContactInfo').show();
        $('.' + person.role + '.contact.card.droppable').droppable('destroy');
      }
    }
    //console.log('tiles dropped cookie: ' + getCookie('tilesDropped'));
    tilesDropped = parseInt(getCookie('tilesDropped')) || 0;
    //console.log('tiles dropped variable: ' + tilesDropped);
    updateReminderMessage();
    // get filled contact cards
    for (var i = 0; i < personArray.length; i++) {
      var person = personArray[i];
      person.role = getCookie(person.firstName + 'Role');
      $('.' + person.role + '.contact.card.droppable .front.content').html(person.frontContent);
      $('.' + person.role + '.contact.card.droppable .back.content').html(person.backContent);
      $('.' + person.role + '.contact.card.droppable .hint').hide();
    }
  }

  // submit contact input
  function clearInput(inputID) {
    $('#'+inputID).val('');
  }
  function wrongInput(inputID, message) {
    $('#alert').html(message).dialog('open');
    clearInput(inputID);
  }
  function addContact(inputID) {
    var inputValue = $('#' + inputID).val();
    var contactMatches = false;
    for (var i = 0; i < contactArray.length; ++i) {
      var contact = contactArray[i];
      // enters contact correctly
      if (inputValue.indexOf(contact.fullName) >= 0) {
        contactMatches = true;
        // contact not added yet
        if (contact.added === false) {
          $('.' + contact.firstName + '.tile').fadeIn('fast');
          clearInput(inputID);
          contact.added = true;
          setCookie(contact.firstName + 'Added', contact.added, 1);
        }
        // contact already added
        else if (contact.added === true) {
          // added but not dropped
          if (contact.dropped === false) {
            wrongInput(inputID,"You've already added " + contact.fullName + ". Drag the tile into one of the boxes below to assign "+contact.firstName+" a role in this gig.");
            //console.log(contact.firstName + ' added not dropped');
          // added and dropped
          } else {
            wrongInput(inputID, contact.fullName + " is already in this gig.");
            //console.log(contact.firstName + ' added and dropped');
          }
        }
      }
    }
    if (contactMatches === false) {
      wrongInput(inputID, "For the purposes of this test, you can only use \"Claire Smith\" and \"Joe Schmo.\"");
      //console.log(inputValue + ' not a participant');
    }
  }
  // gig title functions
  function titleNeedsUpdating() {
    if ($('body').hasClass('newGig') || $('body').hasClass('viewTicket')) {
      var inputValue = $('#gigTitle').val();
      // var inputHTML = $('#' + inputID).html();
      if (inputValue === '' || inputValue === ' ' || (inputValue.indexOf('For') === 0 && inputValue.indexOf('Re') > 3 && inputValue.indexOf('From') > 9)) {
        return true;
      }
    }
  }
  function setDefaultTitle() {
    var inputValue = $('#gigTitle').val();
    var defaultTitle = 'For ' + getInfoFromRole('recipient') + ' Re ' + getInfoFromRole('client') + ' From ' + getInfoFromRole('source') + ' ' + dateInTitle;
    //console.log(inputValue);
    if (titleNeedsUpdating()) { // second part checks if title is an old default
      $('#gigTitle').val(defaultTitle);
      $('#gigTitle').html(defaultTitle);
    }
  }
  
  // EXECUTE FUNCTIONS
  
  // instantiate "add participants" autocomplete
  $('#contactInput').autocomplete({
    source: [claire.fullName, joe.fullName],
    minLength:0
  }).focus(function() {
    $(this).autocomplete('search');
  });
  $('#addToGig').click(function() {
    addContact('contactInput');
  });
  // trigger "Add" on enter key -- dialogs not working
  $('#contactInput').keydown(function(e) {
    if (e.keyCode === 13) {
      e.preventDefault;
      $('#addToGig').trigger('click');
    }
  });
  $('.contact.tile').draggable({
    revert: 'invalid',
    scrollSpeed: 5,
    zIndex: 999999
  });
  $('.contact.card.droppable').droppable({
    hoverClass: 'dropHere',
    accept: '.contact.tile',
    drop: function(event,ui) {
      var frontTarget = $(this).find('.front.content');
      var backTarget = $(this).find('.back.content');
      var assignedRole = $(this).attr('class').split(' ')[0];
      //console.log('assigned role: ' + assignedRole);
      // hide tile
      ui.draggable.hide();
      // iterate through participants
      for (var i = 0; i < personArray.length; i++) {
        var person = personArray[i];
        if (ui.draggable.attr('class').split(' ')[0] === person.firstName) {
          // fill contact info
          $(frontTarget).hide().html(person.frontContent).fadeIn();
          $(backTarget).hide().html(person.backContent).fadeIn();
          person.role = assignedRole;
          // store assigned role as a cookie
          setCookie(person.firstName + 'Role', person.role, 1);
          person.dropped = true;
          // store whether the paricipant has been assigned as a cookie
          setCookie(person.firstName + 'Dropped', person.dropped, 1);
          // console.log(getCookie('ClaireDropped'));
        }
      }
      setDefaultTitle();
      // to swap out "someone" in the reminder message
      updateStepWording();
      updateReminderMessage();
      tilesDropped++;
      setCookie('tilesDropped', tilesDropped, 1);
      //console.log('tiles dropped cookie: ' + getCookie('tilesDropped'));
      $(this).droppable('destroy');
    }
  });
  // prevent imgs from dragging
  $('img').on('dragstart', function(e) {
    e.preventDefault();
  });
  // reset page if refreshed
  resetCreateGig();
  
  /*******************************/
  /*** PASSING GIG TEXT INPUTS ***/
  /******************************/
  
  // DECLARE FUNCTIONS
  
  function getInfoFromRole(role, infoType) {
    for (var i = 0; i < personArray.length; i++) {
      var person = personArray[i];
      //console.log(person.firstName); // OK
      person.role = getCookie(person.firstName + 'Role');
      if (person.role === role) {
        if (infoType === 'fullName') {
          return person.fullName;
        } if (infoType === 'workEmail') {
          return person.workEmail;
        } else {
          return person.nickName;
        }
      }
    }
    // to prevent "undefined"
    return 'someone';
  }
  
  function fillField(cName, inputID) {
    $('#' + inputID).html(getCookie(cName));
    $('input#' + inputID).val(getCookie(cName));
    // change field to say "(field left blank)" and .editLink to say "add" if nothing was entered
    if ($('body').attr('id') !== 'createGig' && (getCookie(cName) === '' || getCookie(cName) === ' ' || getCookie(cName) === undefined)) {
      $('#' + inputID).html('<span class="gray small"> (field left blank)</span>');
      $('#' + inputID + ' .editLink a').html('add');
    }
  }
  
  // EXECUTE FUNCTIONS
  
  fillField('gigTitle', 'gigTitle');
  fillField('gigDescription', 'gigDescription');
  fillField('noteToSelf', 'noteToSelf');
  fillField('dollarValue', 'dollarValue');
  // store inputs as cookies
  $('#saveAndView').click(function(e) {
    if (tilesDropped < 3) {
      e.preventDefault();
      $('#alert').html('You must assign roles to all three participants.').dialog('open');
    }
    setCookie('gigTitle', $('#gigTitle').val(), 1);
    setCookie('gigDescription', $('#gigDescription').val(), 1);
    setCookie('noteToSelf', $('#noteToSelf').val(), 1);
    setCookie('dollarValue', $('#dollarValue').val(), 1);
  });
  setDefaultTitle();
  
  /*******************/
  /****** TRACK ******/
  /*******************/
  
  // DECLARE FUNCTIONS
  
  // works at beginning of sentence
  function hasOrHave(role) {
    if (getInfoFromRole(role) === 'you') {
      return 'Have';
    } else {
      return 'Has';
    }
  }
  
  // fix this later
  function updateStepWording() {
    contact.wording = '<strong>make contact</strong> with ' + getInfoFromRole('client');
    thank.wording = '<strong>thank</strong> ' + getInfoFromRole('source');
  }
  function openReminderLB() {
    $('.setReminder').click(function(e) {
      //console.log('clicked set reminder');
      var reminderDate = $('.reminderDate').parents('.reminderTypeFrame');
      var reminderTimeFrame = $('.reminderTimeFrame').parents('.reminderTypeFrame');
      e.preventDefault();
      $('.contact.reminder').dialog('open');
      //console.log('after dialog opened');
      $('.stepWording').html(nextStep.wording);
      $('.contact.reminder').find('select').prop('selectedIndex', 1);
      $('.reminderTimeFrame').focus(function() {
        $(reminderDate).addClass('grayedOut');
        $(reminderTimeFrame).removeClass('grayedOut');
        timeFrameFocused = true;
        dateFocused = false;
        //console.log('time frame focused');
      });
      $('.reminderDate').focus(function() {
        $(reminderDate).removeClass('grayedOut');
        $(reminderTimeFrame).addClass('grayedOut');
        dateFocused = true;
        timeFrameFocused = false;
        //console.log('date focused');
        //console.log('value: ' + $(this).val());
      });
      // return false;
    });
  }
  function updateReminderMessage() {
    //console.log('nextStep: ' + nextStep.name);
    // if (lastStepDone.done === true && nextStep.done === false) {
    $('.reminderMessage').html('You will be reminded to ' + nextStep.wording + ' ' + nextStep.reminderSetting + '. <a class="setReminder" href="#">Edit reminder</a>');
    console.log(nextStep.wording);
    openReminderLB();
    //console.log('updated reminder message');
    // }
  }
  function updateProgBar() {
    // var lastStepDone = stepArray[0];
    // var nextStep = stepArray[1];
    // catch default open date
    setCookie('openDate', $('div.' + open.name + '.date').html(), 1);
    console.log('open date: ' + getCookie('openDate'));
    for (var i = 0; i < stepArray.length; i++) {
      step = stepArray[i];
      step.date = getCookie(step.name + 'Date');
      //console.log('date cookie: ' + getCookie(step.name + 'Date'));
      // get dates
      if (step.date !== undefined) {
        // change to green if a real date
        if (step.date.length > 4) {
          $('.' + step.name + '.date').html(getCookie(step.name + 'Date'));
          $('.' + step.name + '.bar, .' + step.name + '.ball').addClass('lightGreenBG');
          $('.' + step.name + '.icon img').attr('src', 'images/' + step.name + '-16-green.png');
          $('.' + step.name + '.title').addClass('lightGreen');
          step.done = true;
          step.next = false;
          lastStepDone = step;
          nextStep = stepArray[i + 1];
          if (nextStep !== undefined) {
            nextStep.next = true;
            nextStep.done = false;
          }
          //console.log(lastStepDone.name + ' done: ' + lastStepDone.done);
          //console.log(nextStep.name + ' done: ' + nextStep.done);
          if (nextStep !== undefined) {
            updateReminderMessage();
          } else {
            $('.reminderMessage').html('You\'re done! No reminders set.');
          }
        }
        // change back to gray
        else {
          $('.' + step.name + '.date').html('');
          step.date = $('.' + step.name + '.date').html();
          $('.' + step.name + '.bar img').attr('src', 'images/progress-bar/gray-bar.png');
          $('.' + step.name + '.ball img').attr('src', 'images/progress-bar/gray-ball.png');
          lastStepDone = stepArray[i - 1];
          step.done = false;
          nextStep.next = false;
          step.next = true;
          //stepArray[i + 2].next = false;
          nextStep = stepArray[i];
          //console.log(lastStepDone.name + ' done: ' + lastStepDone.done);
          //console.log(nextStep.name + ' done: ' + nextStep.done);
          updateReminderMessage();
          // prevents it from running again
          return false;
        }
        //console.log('step wording :' + step.wording);
      }
    }
  }

  
  // instantiate reminder lb
  $('.reminder.lb').dialog({
    autoOpen: false,
    height: 'auto',
    width: 500,
    modal: true,
    show: 'fade',
    buttons: {
      Ok: function() {
        $(this).dialog('close');
      }
    },
    beforeClose: function(event, ui) {
      if (timeFrameFocused === true) {
        nextStep.reminderSetting = 'in ' + $('.reminderTimeFrame').children('option').filter(':selected').text();
      } else if (dateFocused === true) {
        nextStep.reminderSetting = 'on ' + $('.reminderDate').val();
      }
      setCookie('reminderSetting', nextStep.reminderSetting, 1);
      updateReminderMessage();
    }
  });
  
  // EXECUTE FUNCTIONS
  
  // openReminderLB();
  // view mode is default, at least on prog bar
  $('.editing').hide();
  // update prog bar on each page
  updateProgBar();
  
  // fill progress bar tooltips
  $('.contactTooltip').attr('title', hasOrHave('recipient') + ' ' + getInfoFromRole('recipient') + ' made contact with ' + getInfoFromRole('client') + '?');
  $('.thankTooltip').attr('title', hasOrHave('recipient') + ' ' + getInfoFromRole('recipient') + ' thanked ' + getInfoFromRole('source') + '?');
  $('.followupTooltip').attr('title', hasOrHave('recipient') + ' ' + getInfoFromRole('recipient') + ' followed up with ' + getInfoFromRole('source') + '?');
  

  $('.topLabels, .progressBar .actualBar, .progressBar .inlineDateInputs.viewing, .editDates').click(function() {
    // if currently editing, clicking changes to view mode
    if ($('.editing').is(':visible')) {
      //console.log('finished editing');
      $('.editing').hide();
      $('.viewing').fadeIn('fast');
      for (var i = 0; i < stepArray.length; i++) {
        var step = stepArray[i];
        if ($('input.' + step.name + '.date').val().length > 4) {
          setCookie(step.name + 'Date', $('.' + step.name + '.date').val(), 1);
        }
        else {
          // if not a date, set to blank
          setCookie(step.name + 'Date', '', 1);
        }
      }
      // change button
      $('.editDates').find('span').html('Add/edit dates');
      updateProgBar();
    }
    // if currently viewing, clicking changes to edit mode
    else if ($('.viewing').is(':visible')) {
      //console.log('started editing');
      $('.viewing').hide();
      $('.editing').fadeIn('fast');
      for (var i = 0; i < stepArray.length; i++) {
        var step = stepArray[i];
        $('.' + step.name + '.date').val(step.date);
      }
      // change button
      $('.editDates').find('span').html('Done');
    }
  });
  
  /********************/
  /****** STEP 4 ******/
  /********************/
  
  // execute functions
  // $('.submitComment').prop('disabled', true).addClass('disabledButton');
  // $('#cantSubmit').show(); // can't submit comments until shared
  
  $('.editLink a').click(function(e) {
    e.preventDefault();
    $('#alert').html("This prototype doesn't support inline editing, but you'll be able to do it in the final version.");
    $('#alert').dialog('option', 'title', 'No inline edits yet...').dialog('open');
  });
  
  
  /********************/
  /*** VIEW & SHARE ***/
  /********************/
  
  // DECLARE FUNCTIONS
  
  // remove from array
  Array.prototype.remove = function() {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
      what = a[--L];
      while ((ax = this.indexOf(what)) !== -1) {
        this.splice(ax, 1);
      }
    }
    return this;
  }
  function fillRoleInfo(role) {
    $('.' + role + '.nickName').html(getInfoFromRole(role));
    $('.' + role + '.workEmail').html(getInfoFromRole(role, 'workEmail'));
  }
  
  // EXECUTE FUNCTIONS
  
  // put contact info in
  for (var i = 0; i < personArray.length; i++) {
    var person = personArray[i];
    fillRoleInfo(person.role);
  }
  
  /*****************/
  /*** REMINDERS ***/
  /*****************/
  
  
  $('.flipFrame > div').click(function() {
    var backContent = $(this).find('.back.frame');
    console.log('reminder card clicked');
    if (!$(this).hasClass('flipped')) {
      console.log('card flipped');
      $(this).flippy({
        color_target: 'white',
        direction: 'RIGHT',
        verso: backContent,
        duration: '400',
        onStart: function(){
          console.log('in the middle of the animation');
          //$(backContent).show();
        }
      });
      $(this).addClass('flipped');
    }
    else {
      console.log('card not flipped');
      $(this).flippyReverse({
        onStart: function() {
          $(this).find('.back').hide();
        }
      });
      $(this).removeClass('flipped');
    }
  });
  
});