<?php
$title='Create a New Gig';
$bodyId='createGig';
$bodyClass='newGig createGig';
include 'includes/header-footer/header.php';
?>

<div class="mainFrame">
  <div id="instructions">
    <h1>Create a new gig</h1>
    <p class="darkGray">Fill in the details, then begin tracking. You can always edit the gig info later. Once you create the gig, you'll have the option to share it with others. Participants you share the gig with can add more information and keep you up to date on the progress. But don't worry &mdash; everything will be private unless you decide to share.</p>
  </div>
  <h2 class="floating">Add participants</h2>
    
  <div class="mainFrame">
    <div class="main margR10">
      <div class="content">
        <h3 id="whosParticipating">Who are the 3 participants in this gig?</h3>
        <div id="addContact">
          <input id="contactInput" type="text" placeholder="Type a name to add a participant" />
          <button id="addToGig" class="submit" type="button"><span>Add</span></button>
        </div>
        <!-- YOU tile -->
        <div class="Test contact tile">
          <div><img class="profile" src="images/profile-pic-16.png" draggable="false" /></div>
          <div class="sidePad" style="padding-left:0;">You</div>
        </div>
        <!-- Joe tile -->
        <div class="Joe contact tile">
          <div><img class="profile" src="images/profile-pic-16.png" /></div>
          <div class="sidePad" style="padding-left:0;"><?php echo $joe->get_fullName(); ?></div>
        </div>
        <!-- Claire tile -->
        <div class="Claire contact tile">
          <div><img class="profile" src="images/profile-pic-16.png" /></div>
          <div class="padR10"><?php echo $claire->get_fullName(); ?></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>

  <h3 id="whatRolesQ" class="topMarg30 clear">What roles do they each play?</h3>
  <div id="whatRolesI" class="small botMarg10">Drag &amp; drop into the boxes below.</div>

  <?php include 'includes/content/contact-droppables.php'; ?>  <!--contact droppables here-->

  <div class="clear"></div>

  <h2 class="floating">Enter details</h2>
  <div class="mainFrame">
    <div class="main">
      <div class="content">
        <h3>Enter a title <span class="small">(or leave it as is)</span></h3>
        <input id="gigTitle" type="text" value="" maxlength="50" placeholder="Give this gig a title (or leave it as is)" />
      </div>
    </div>
  </div>
  <div class="mainFrame left w66">
    <div class="main margR1of20">
      <div class="content">
        <h3>Enter a description</h3>
        <textarea id="gigDescription" rows="6" cols="94" placeholder="Enter a description for this gig. Fill it out now, or leave it for later. Edit it any time you want."></textarea>
      </div>
    </div>
  </div>
  <div class="mainFrame right w33">
    <div class="main margL2of20 yellowBG">
      <div class="content">
        <h3>Notes</h3>
        <textarea id="noteToSelf" rows="6" cols="40" placeholder="Type in any other notes you want to record about this gig. Include notes to yourself, things not to forget, or whatever else you think of."></textarea>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <!--personal notes-->
  <div class="mainFrame">
    <div class="main">
      <div class="content">
        <h2 class="teal inlineBlock">Ratings &nbsp;</h2>
        <div class="small inlineBlock botMarg10 darkGray">Don't worry &mdash; we'll never share your info</div>
        <div class="center topMarg30 botMarg20">
          <h3 class="inlineBlock"><strong>How much business is this gig worth to you?</strong><span class="indent20">$</span><input id="dollarValue" class="indent5" type="text" maxlength="10"></input></h3>
        </div>
      </div>
    </div>
  </div>
  <h2 class="darkGray floating">Start tracking</h2>
  <div class="mainFrame">
    <div class="main darkGrayBG">
      <div class="content lightGray">
      <h3 class="lightGray">How far along is this gig?</h3>
      <div class="small">Add/edit dates as you complete each step.</div>

      <?php include 'includes/content/progress-bar.php'; ?>

      </div>
    </div>
  </div>

  <a id="saveAndView" href="view-ticket.php"><button class="navigate hugeButton" type="button"><span>Save and View Gig</span></button></a>
</div>

<?php include 'includes/header-footer/footer.php'; ?>