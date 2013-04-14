<?php
$title='Step 2: Enter Details';
$bodyId='step2';
include 'header.php';
?>

<!--RIGHT NAV-->
<div id="rightFrame">
  <?php include 'right-nav.php'; ?>

  <div class="nextStepFrame">
    <a id="step3button" class="inheritColor" href="step3.php">
      <div class="nextStep"><div>Step 3</div></div>
    </a>
  </div>
  
</div>

<!--LEFT BOX-->
<div class="mainContentFrame">
  <div class="grayHeader">
    <h2 class="left">Enter Details</h2>
    <p class="gray right"><i>All changes saved in Drafts.</i></p>
    <div class="clear"></div>
  </div>
  <div class="mainContent">
    <h3>Give this gig a title <span class="small">(or leave it as is)</span></h3>
    <input id="gigTitle" type="text" value="" maxlength="48" />
    <br />
    <h3 class="topMarg10">Enter a brief description</h3>
    <textarea id="gigDescription" rows="4" cols="88" placeholder="Fill this out now, or leave it for later. Edit it any time you want. If you decide to share this gig, the description will be visible to other participants."></textarea>
  </div>
</div>


<!-- GIG VALUE -->
<div id="yourEyesOnly" class="mainContentFrame topMarg20">
  <div class="grayHeader vertMid">
    <div style="width:41px;"><img src="images/wink.png" /></div>
    <div><h2 class="inline">What's the value of the gig?</h2></div>
    <div class="clear"></div>
  </div>
  <div class="mainContent">
    <div class="yourEyesTitle">
      <img src="images/your-eyes-only.png" />
      <h2>FOR YOUR EYES ONLY</h2>
    </div>
    <div class="grayArea">
      <div class="center">
        <h3 class="inlineBlock"><strong>How much business is this gig worth to you?</strong><span class="indent20">$</span></h3>
        <input id="dollarValue" type="text" maxlength="10" />
      </div>
      <hr class="topMarg20 botMarg20" />
      <h3 class="darkGray">Note to self:</h3>
      <div class="noteFrame">
        <textarea id="noteToSelf" rows="4" cols="82" placeholder="Write a private note here. No one else will ever see it."></textarea>
      </div>
    </div>
  </div>
</div>
          
<?php include 'footer.php'; ?>