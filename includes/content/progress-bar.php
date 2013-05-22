
    <div class="progressBar left">
      <div class="topLabels">
        <div class="progLabel" title="This is the date that the referral or recommendation was passed. It defaults to today, but you can set it to any date you like.">
          <div class="open icon"><img src="images/open-16-lightGray.png" /></div>
          <div class="open title">gig<br />OPENED</div>
        </div>
        <div class="progLabel contactTooltip">
          <div class="contact icon"><img src="images/contact-16-lightGray.png" /></div>
          <div class="contact title">client<br />CONTACTED</div>
        </div>
        <div class="progLabel" title="Has business closed for this gig?">
          <div class="close icon"><img src="images/close-16-lightGray.png" /></div>
          <div class="close title">business<br />CLOSED</div>
        </div>
        <div class="progLabel thankTooltip">
          <div class="thank icon"><img src="images/thank-16-lightGray.png" /></div>
          <div class="thank title">source<br />THANKED</div>
        </div>
        <div class="progLabel followupTooltip">
          <div class="followup icon"><img src="images/followup-16-lightGray.png" /></div>
          <div class="followup title">FOLLOWED<br />UP</div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="actualBar">
        <div class="open ball"></div>
        <div class="contact bar"></div>
        <div class="contact ball"></div>
        <div class="close bar"></div>
        <div class="close ball"></div>
        <div class="thank bar"></div>
        <div class="thank ball"></div>
        <div class="followup bar"></div>
        <div class="followup ball"></div>
        <div class="clear"></div>
      </div>
      <div class="inlineDateInputs editing topMarg10">
        <div class="progLabel"><input class="open date" type="text" value="<?php echo date("n/j/y"); ?>" /></div>
        <div class="progLabel"><input class="contact date" type="text" /></div>
        <div class="progLabel"><input class="close date" type="text" /></div>
        <div class="progLabel"><input class="thank date" type="text" /></div>
        <div class="progLabel"><input class="followup date" type="text" /></div>
        <div class="clear"></div>
      </div>
      <div class="inlineDateInputs viewing topMarg10 lightGreen">
        <div class="progLabel open date"><?php echo date("n/j/y"); ?></div>
        <div class="progLabel contact date"></div>
        <div class="progLabel close date"></div>
        <div class="progLabel thank date"></div>
        <div class="progLabel followup date"></div>
        <div class="clear"></div>
      </div>
      <div class="block"><button class="editDates" type="button"><span>Add/edit dates</span></button></div>
      <div class="reminderMessage botMarg10">You will be reminded to make contact in 48 hours. <a class="setReminder" href="#">Edit reminder</a></div>
    </div>
    <div class="left indent50">
      <div class="topMarg30">
        Gig opened <?php echo date("n/j/y"); ?>
      </div>
    </div>
    <div class="clear"></div>
  <!--REMINDER LIGHTBOX -->
  <div class="contact reminder lb" title="Set Reminder">
    <div class="topMarg20">
      <div class="reminderTypeFrame botMarg20">
        <img class="iconStartLine" src="images/reminder.png" alt="(reminder)" />
        <div class="inline">
          You will be reminded to <span class="stepWording"></span> in
          <select class="reminderTimeFrame">
            <option value="24hrs">24 hours</option>
            <option value="48hrs">48 hours</option>
            <option value="4days">4 days</option>
            <option value="1wk">1 week</option>
            <option value="2wks">2 weeks</option>
            <option value="1mo">1 month</option>
            <option value="3mo">3 months</option>
            <option value="6mo">6 months</option>
          </select>
        </div>
      </div>
      <hr />
      <div class="inlineBlock topMarg20 reminderTypeFrame">
        <strong>Or</strong> pick your reminder date here: <div class="inlineBlock indent10"><input class="date reminderDate" type="text" /></div>
      </div>
    </div>
  </div>