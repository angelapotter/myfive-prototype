<!-- SHARE LIGHTBOX -->
<div id="sharing" title="Manage Sharing">
  <input type='text' size='1' style='position:absolute; top: -40px; z-index: -9;' />
  <h3>Want to keep the participants up to date on the gig's progress? Keep them in the loop by granting them access to this ticket.</h3>
  <hr class="topMarg20 botMarg20" />
  <h2 class="center teal botMarg20">What your guests WILL see:</h2>
  <div class="left alignR indent70 sidePad">
    <div class="topMarg10 botMarg20">the title</div>
    <div class="topMarg20 botMarg30">the progress bar</div>
    <div class="topMarg20 botMarg20">names &amp; photos<br />of the participants</div>
    <div class="topMarg30 botMarg30">the description</div>
    <div class="topMarg20">any private messages<br />to that guest</div>
  </div>
  <div class="left"><img src="images/ticket-thumb.png" /></div>
  <div class="clear"></div>
  <h3 class="teal topMarg20 center">They'll also see the contact info you decide to share</h3>
  <div class="small center">You choose what contact info your guests have access to.<br />This will be visible to anyone you share this gig with.</div>
  <div class="chooseInfoFrame">
    <div class="chooseInfo">
      <div class="center big"><img class="iconInline" src="images/recipient-icon-16.png" /><span class="recipient nickName"></span></div>
      <div class="topMarg10">
        <input type="checkbox" /><span class="infoType">Work email</span><br />
        <span class="infoValue recipient workEmail"></span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Home email</span><br />
        <span class="infoValue">some-email@gmail.com</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Work phone</span><br />
        <span class="infoValue">555.555.5555</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Cell phone</span><br />
        <span class="infoValue">555.555.5555</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">LinkedIn</span><br />
        <span class="infoValue">linkedin.com/some-name/777</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Twitter</span><br />
        <span class="infoValue">twitter.com/some-twitter-handle</span>
      </div>
    </div>
    <div class="chooseInfo">
      <div class="center big"><img class="iconInline" src="images/connector-icon-16.png" /><span class="connector nickName"></span></div>
      <div class="topMarg10">
        <input type="checkbox" /><span class="infoType">Work email</span><br />
        <span class="infoValue connector workEmail"></span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Cell phone</span><br />
        <span class="infoValue">555.555.5555</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">LinkedIn</span><br />
        <span class="infoValue">linkedin.com/some-name/777</span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Twitter</span><br />
        <span class="infoValue">twitter.com/some-twitter-handle</span>
      </div>
    </div>
    <div class="chooseInfo">
      <div class="center big"><img class="iconInline" src="images/client-icon-16.png" /><span class="client nickName"></span></div>
      <div class="topMarg10">
        <input type="checkbox" /><span class="infoType">Work email</span><br />
        <span class="infoValue client workEmail"></span>
      </div>
      <div>
        <input type="checkbox" /><span class="infoType">Cell phone</span><br />
        <span class="infoValue">555.555.5555</span>
      </div>
    </div>
  </div>
  <h2 class="center teal topMarg20 botMarg20">What your guests WON'T EVER see:</h2>
  <div class="grayBox">
    <ul>
      <li>reminders you've set for yourself</li>
      <li>your personal notes, dollar values, and ratings</li>
      <li>your private messages to OTHER guests</li>
    </ul>
  </div>
  <hr class="topMarg20 botMarg20" />
  <div class="botMarg10">Right now, <strong>only you</strong> have access to this ticket. Select a participant to give them access. Don't worry &mdash; nothing will happen until you click the big share button at the bottom.</div>
  
  <!-- share with RECIPIENT -->
  <div id="recipientShare" class="item sharePerson recipient grayBG">
    <div class="mainLine grayedOut">
      <div class="middle"><input class="clickToShare" type="checkbox" /></div>
      <div class="middle"><img src="images/recipient-icon-16.png" /></div>
      <div class="middle"><img src="images/profile-pic-26.png" /></div>
      <div class="middle">
        <div class="fullName"><!-- fill recipient name --></div>
        <div class="small onExpand emailForSharing"><!-- fill recipient email --></div>
      </div>
    </div>
    
    <?php include 'share-options.php'; ?>
    
  </div>
  <!-- share with CONNECTOR -->
  <div id="connectorShare" class="item sharePerson connector grayBG">
    <div class="mainLine grayedOut">
      <div class="middle"><input class="clickToShare" type="checkbox" /></div>
      <div class="middle"><img src="images/connector-icon-16.png" /></div>
      <div class="middle"><img src="images/profile-pic-26.png" /></div>
      <div class="middle">
        <div class="fullName"><!-- fill connector name --></div>
        <div class="small onExpand emailForSharing"><!-- fill connector email --></div>
      </div>
    </div>
    
    <?php include 'share-options.php'; ?>
    
  </div>
  <!-- share with CLIENT -->
  <div id="clientShare" class="item sharePerson connector grayBG">
    <div class="mainLine grayedOut">
      <div class="middle"><input class="clickToShare" type="checkbox" /></div>
      <div class="middle"><img src="images/client-icon-16.png" /></div>
      <div class="middle"><img src="images/profile-pic-26.png" /></div>
      <div class="middle">
        <div class="fullName"><!-- fill client name --></div>
        <div class="small onExpand emailForSharing"><!-- fill client email --></div>
      </div>
    </div>
    
    <?php include 'share-options.php'; ?>
    
  </div>
  <div class="clear"></div>
  <div class="teal big topMarg20">Gig permalink</div>
  <div class="darkGray small">This link is only accessible to those you've shared this gig with.</div>
  <input id="gigLink" class="topMarg10" type="text" value="http://myfive.com/gigID" />
  <hr class="topMarg20 botMarg20" />
  <div class="center"><button id="shareNow" class="tealButton bigButton disabledButton" type="button" disabled><span>Select someone to share</span></button></div>
</div>