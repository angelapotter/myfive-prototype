<?php
$title='View Ticket &amp; Share';
$bodyId='viewTicket';
include 'header.php';
?>

<!-- SHARING OLD SIDEBAR -->
  <div id="shareSidebar" style="display:none;">
    <div class="item">
      <img class="left iconStartLine" src="images/profile-pic-40.png" />
      <div id="createdBy"><!-- fill created by --></div>
      <div id="creationDate"><?php echo date("n/j/y").' at '.date("h:ia"); ?> </div>
      <div class="clear"></div>
    </div>
    <div class="item topMarg20">
      <img src="images/pass.png" alt="(pass icon)" />
      <h2 id="shareHeading" class="inline teal">Share this gig!</h2>
      <div id="notSharedYet" class="small"><strong>This gig hasn't been shared yet.</strong> Select the participants you want to share with, then hit "Share now."</div>
    </div>
    <div class="item right">
    </div>
    <div class="clear"></div>
    <hr />
    <div class="item">
    </div>
  </div>
        
<!--LEFT BOX-->
<div class="contentFrame">
  <div class="grayHeader">
    <div>
      <h2 id="gigTitle"><!-- fill title --></h2>
      <div class="editLink inlineBlock"><a href="#">edit</a></div>
    </div>
    <div>
      <img class="iconStartLine" src="images/collapsed-arrow.png" style="margin-bottom: -2px;" />
      <h3 class="darkGray inlineBlock">Options</h3>
    </div>
  </div>
  <div class="manageSharing sharedWithFrame yellowBG left allPad10"><!-- filed shared with info --></div>
  <div class="content">
    <div class="notificationGreen">Congrats! Your gig has been created. If you want you can invite guests, edit the ticket, or update the progress of the gig. <a href="#">See all active gigs</a></div>
      
    <?php include 'progress-bar.php'; ?>
    
    <div id="shareCallOut" class="manageSharing center"><button class="botMarg30 tealButton bigButton" type="button"><span>Bring someone into the loop</span></button></div>

    <?php include 'contact-cards.php'; ?>

    <!--description-->
    <h2 class="teal topMarg20 botMarg10">Description</h2>
    <div id="gigDescription" class="botMarg20 inlineBlock"><!-- fill description --></div><div class="editLink indent15"><a href="#">edit</a></div>

    <!--personal notes-->
    <div class="personalNotes topMarg20">
      <div class="header center">
        <img src="images/your-eyes-only-black.png" />
        <h2 class="inline black">PERSONAL NOTES</h2>
        <div class="small topMarg10 darkGray">The information you enter here is confidential.<br />We'll never share your personal notes with anyone.</div>
      </div>
      <div class="insetArea">
        <div class="center">
          <h3 class="inlineBlock"><strong>How much business is this gig worth to you?</strong><span class="indent20">$</span></h3>
          <input id="dollarValue" type="text" maxlength="10" />
        </div>
        <hr class="topMarg20 botMarg20" />
        <h3 class="darkGray">Note to self:</h3>
        <div class="noteFrame">
          <textarea id="noteToSelf" rows="4" cols="120" placeholder="Write a private note here. No one else will ever see it."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'share-lb.php'; ?>

<?php include 'footer.php'; ?>