<?php
$title='View Ticket &amp; Share';
$bodyId='viewTicket';
$bodyClass='myGigs viewTicket';
include 'includes/header-footer/header.php';
?>

<!--LEFT BOX-->
<div class="mainFrame">
  <div class="main darkGrayBG">
    <div class="grayHeader">
      <div>
        <h2 id="gigTitle"><!-- fill title --></h2>
        <div class="editLink inlineBlock"><a href="#">edit</a></div>
      </div>
      <div>
        <h3 class="darkGray inlineBlock">Edit gig</h3>
      </div>
    </div>
    <div class="content lightGray">
          
    <?php include 'includes/content/progress-bar.php'; ?>
    
    </div>
  </div>
</div>

<?php include 'includes/content/contact-droppables.php'; ?>

<!--description-->
<div class="mainFrame left w66">
  <div class="main margR1of20">
    <div class="content">
      <h2 class="teal botMarg10">Description</h2>
      <div id="gigDescription" class="botMarg20 inlineBlock"><!-- fill description --></div><div class="editLink indent15"><a href="#">edit</a></div>
    </div>
  </div>
</div>
<div class="mainFrame right w33">
  <div class="main margL2of20 yellowBG">
    <div class="content">
      <h2 class="botMarg10">Notes</h2>
      <div id="noteToSelf" class="botMarg20 inlineBlock"><!-- fill notes --></div><div class="editLink indent15"><a href="#">edit</a></div>
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
        <h3 class="inlineBlock"><strong>How much business is this gig worth to you?</strong><span class="indent20">$</span><span id="dollarValue" type="text" maxlength="10"></span></h3><div class="editLink indent15"><a href="#">edit</a></div>
      </div>
    </div>
  </div>
</div>

<!-- footer options -->
<div class="mainFrame">
  <div class="main">
    <div class="content footerOptions">
      <div>Edit</div>
      <div>Duplicate</div>
      <div>Archive</div>
      <div>Delete</div>
      <div class="clear"></div>
    </div>
  </div>
</div>

<?php include 'includes/header-footer/footer.php'; ?>