<?php
$title='Create a New Gig';
$bodyId='createGig';
include 'header.php';
?>

<div class="contentFrame">
  <div class="content">
    <div id="instructions">
      <h1>Create a new gig</h1>
      <p class="darkGray">Fill in the details, then begin tracking. You can always edit the gig info later. Once you create the gig, you'll have the option to share it with others. Participants you share the gig with can add more information and keep you up to date on the progress. But don't worry &mdash; everything will be private unless you decide to share.</p>
    </div>
    <hr class="topMarg20 botMarg10" />
    <h2 class="darkGray indent10">Add participants</h2>
    <hr class="topMarg10 botMarg30" />
    <h3 id="whosParticipating">Who are the 3 participants in this gig?</h3>
    <div id="addContact">
      <input id="contactInput" type="text" placeholder="Type a name to add a participant" />
      <button id="addToGig" class="submitButton" type="button"><span>Add</span></button>
    </div>
    <!-- YOU tile -->
    <div id ="tileUser" class="contactTile" draggable="true">
      <div><img class="profile" src="images/profile-pic-16.png" draggable="false" /></div>
      <div class="sidePad" style="padding-left:0;">You</div>
    </div>
    <!-- Joe tile -->
    <div id ="tileJoe" class="contactTile" draggable="true">
      <div><img class="profile" src="images/profile-pic-16.png" draggable="false" /></div>
      <div class="sidePad" style="padding-left:0;"><?php echo $joe->get_fullName(); ?></div>
    </div>
    <!-- Claire tile -->
    <div id ="tileClaire" class="contactTile" draggable="true">
      <div><img class="profile" src="images/profile-pic-16.png" draggable="false" /></div>
      <div class="sidePad" style="padding-left:0;"><?php echo $claire->get_fullName(); ?></div>
    </div>
    <br />
    <h3 id="whatRolesQ" class="topMarg10">What roles do they each play?</h3>
    <div id="whatRolesI" class="small">Drag &amp; drop into the boxes below.</div>

    <?php include 'contact-cards.php'; ?>  <!--contact cards here-->

    <div class="clear"></div>
    
    <hr class="topMarg30 botMarg10" />
    <h2 class="darkGray indent10">Enter details</h2>
    <hr class="topMarg10 botMarg30" />
    <h3>Give this gig a title <span class="small">(or leave it as is)</span></h3>
      <input id="gigTitle" type="text" value="" maxlength="48" />
      <br />
      <h3 class="topMarg10">Enter a description</h3>
      <textarea id="gigDescription" rows="5" cols="140" placeholder="Fill this out now, or leave it for later. Edit it any time you want. If you decide to share this gig, the description will be visible to other participants."></textarea>
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
    <hr class="topMarg30 botMarg10" />
    <h2 class="darkGray indent10">Start tracking</h2>
    <hr class="topMarg10 botMarg30" />
    
    <?php include 'progress-bar.php'; ?>
    
    <hr class="topMarg30 botMarg30" />
    <a id="saveAndView" class="block center" href="view-ticket.php"><button class="tealButton hugeButton" type="button"><span>Save and View Gig</span></button></a>
  </div>
</div>

<?php include 'footer.php'; ?>