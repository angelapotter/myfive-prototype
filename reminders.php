<?php
  $title='My Gigs &mdash; Reminders';
  $bodyId='reminders';
  $bodyClass='myGigs reminders';
  include 'includes/header-footer/header.php';
?>

<!--LEFT NAV-->

<div id="leftNav">
  <div class="active"><div class="tab"><a href="reminders.php">Reminders</a></div></div>
  <div class="tab">Active gigs</div>
  <div class="tab">Archived gigs</div>
</div>
<div class="mainFrame leftNav inlineBlock">
  <div class="content">
    <div><h1 class="inlineBlock">Reminders</h1><span class="big">&nbsp; (7)</span></div>
    <div><h2 class="inlineBlock topMarg10 botMarg15 red">Overdue</h1><span class="red">&nbsp; (3)</span></div>
    
    <?php include 'includes/content/reminder-card.php'; ?>
    <?php include 'includes/content/reminder-card.php'; ?>
    <?php include 'includes/content/reminder-card.php'; ?>
    
    <div class="clear"><h2 class="inlineBlock topMarg20 botMarg15">Due today</h1><span>&nbsp; (1)</span></div>
    
    <?php include 'includes/content/reminder-card.php'; ?>
    
    <div class="clear"><h2 class="inlineBlock topMarg20 botMarg15 gray">Due soon</h1><span class="gray">&nbsp; (3)</span></div>
    
    <?php include 'includes/content/reminder-card.php'; ?>
    <?php include 'includes/content/reminder-card.php'; ?>
    <?php include 'includes/content/reminder-card.php'; ?>
    
  </div>
</div>

<?php include 'includes/header-footer/footer.php'; ?>