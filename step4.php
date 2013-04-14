<?php
$title='Step 4: Preview &amp; Publish';
$bodyId='step4';
include 'header.php';
?>

<!--RIGHT NAV-->
<div id="rightFrame">
  
  <?php include 'right-nav.php'; ?>
  
  <div id="publishFrame">
    <div class="botMarg10 bold">Publish to view sharing options.</div>
    <a href="view-ticket.php"><button id="publishButton" class="tealButton" type="button"><span>Publish now</span></button></a>
    <div class="red topMarg10 small">Participants cannot be changed once the gig is published. All other info can be edited at any time.</div>
  </div>
  
</div>
        
<!--LEFT BOX-->
<div class="mainContentFrame">
  <div class="grayHeader">
    <h2 class="left">Preview &amp; publish</h2>
    <p class="gray right"><i>All changes saved in Drafts.</i></p>
    <div class="clear"></div>
  </div>
  <div class="mainContent">
  
    <?php include 'progress-bar.php'; ?>
    
    <span class="darkGray">Title:</span><h2 id="gigTitle" class="inline indent10"><!-- fill gig title --></h2><div class="editLink indent15"><a href="#">edit</a></div>
    <h2 class="teal topMarg20 botMarg10">Description</h2>
    <div id="gigDescription" class="botMarg20 inlineBlock"><!-- fill description --></div><div class="editLink indent15"><a href="#">edit</a></div>
    
    <?php include 'contact-cards.php'; ?>
    
    <div class="clear"></div>
  </div>
</div>

<?php include 'for-your-eyes-only.php'; ?>

<?php include 'footer.php'; ?>