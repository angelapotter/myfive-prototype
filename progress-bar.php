    <div class="center">
      <div class="botMarg10 topLabels">
        <div class="inlineBlock progLabel" title="This is the date that the referral or recommendation was passed. It defaults to today, but you can set it to any date you like.">
          <div><img src="images/open-16.png" /></div>
          <div>gig<br />OPENED</div>
        </div>
        <div class="inlineBlock progLabel contactTooltip">
          <div><img src="images/contact-16.png" /></div>
          <div>client<br />CONTACTED</div>
        </div>
        <div class="inlineBlock progLabel" title="Has business closed for this gig?">
          <div><img src="images/close-16.png" /></div>
          <div>business<br />CLOSED</div>
        </div>
        <div class="inlineBlock progLabel thankTooltip">
          <div><img src="images/thank-16.png" /></div>
          <div>connector<br />THANKED</div>
        </div>
      </div>
      <div id="progressBar">
        <div class="open ball inlineBlock"><img src="images/progress-bar/green-ball.png" alt="Gig progress" /></div>
        <div class="contact bar inlineBlock indent10"><img src="images/progress-bar/gray-bar.png" alt="Gig progress" /></div>
        <div class="contact ball inlineBlock indent10"><img src="images/progress-bar/gray-ball.png" alt="Gig progress" /></div>
        <div class="close bar inlineBlock indent10"><img src="images/progress-bar/gray-bar.png" alt="Gig progress" /></div>
        <div class="close ball inlineBlock indent10"><img src="images/progress-bar/gray-ball.png" alt="Gig progress" /></div>
        <div class="thank bar inlineBlock indent10"><img src="images/progress-bar/gray-bar.png" alt="Gig progress" /></div>
        <div class="thank ball inlineBlock indent10"><img src="images/progress-bar/gray-ball.png" alt="Gig progress" /></div>
      </div>
      <div class="inlineDateInputs editing topMarg10">
        <div class="inlineBlock progLabel"><input class="open date" type="text" value="<?php echo date("n/j/y"); ?>" /></div>
        <div class="inlineBlock progLabel"><input class="contact date" type="text" /></div>
        <div class="inlineBlock progLabel"><input class="close date" type="text" /></div>
        <div class="inlineBlock progLabel"><input class="thank date" type="text" /></div>
      </div>
      <div class="inlineDateInputs viewing topMarg10">
        <div class="inlineBlock progLabel open date"><?php echo date("n/j/y"); ?></div>
        <div class="inlineBlock progLabel contact date"></div>
        <div class="inlineBlock progLabel close date"></div>
        <div class="inlineBlock progLabel thank date"></div>
      </div>
      <div><button class="editDates clear submitButton topMarg20 botMarg10" type="button"><span>Add/edit dates</span></button></div>
      <div class="reminderMessage">You will be reminded to make contact in 48 hours. <a class="setReminder" href="#">Edit reminder</a></div>
    </div>
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