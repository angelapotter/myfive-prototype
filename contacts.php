<?php
  $title='Contacts &mdash; All';
  $bodyId='allContacts';
  $bodyClass='contacts';
  include 'includes/header-footer/header.php';
?>

<div id="leftNav">
  <div class="active"><div class="tab"><a href="contacts.php">All contacts</a></div></div>
  <div class="tab">Sources</div>
  <div class="tab">Recipients</div>
  <div class="tab">Clients</div>
</div>
<div class="mainFrame leftNav inlineBlock">
  <div class="content">
  <div class="botMarg20">
    <div class="inlineBlock w33"><button class="navigate" type="button">+ New contact</button></div>
    <div class="inlineBlock w33 center">Sort by&nbsp;
      <select class="sortBy">
        <option value="lastName">last name</option>
        <option value="recent">recent activity</option>
      </select>
    </div>
    <div class="inlineBlock w33 alignR"><input class="search" type="text" placeholder="Search contacts" /><button class="indent5 submit" type="button">Search</button></div>
  </div>
  <div class="tags right grayBG">
    <div class="content">
      <h3>Tags</h3>
      <p class="italic">Tags are coming soon!</p>
    </div>
  </div>
    
    <?php include 'includes/content/contact-card.php'; ?>
    <?php include 'includes/content/contact-card.php'; ?>
    <?php include 'includes/content/contact-card.php'; ?>
    <?php include 'includes/content/contact-card.php'; ?>
    <?php include 'includes/content/contact-card.php'; ?>
    <?php include 'includes/content/contact-card.php'; ?>
    
  </div>
</div>

<?php include 'includes/header-footer/footer.php'; ?>