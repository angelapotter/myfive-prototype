<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>myFIVE prototype - <?php echo $title; ?></title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/generics.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="http://html5demos.com/h5utils.js"></script>
    <script src="http://guilhemmarty.com/wp-content/themes/g/js/flippy.min.js"></script>
    <script src="js/main.js"></script>
    <?php include 'class-lib.php'; ?>
  </head>
  <body id="<?php echo $bodyId; ?>" class="<?php echo $bodyClass; ?>">
    <?php   
    
      $dateInTitle = date("dMy");
      $user = new Person("Test","User");
      // $user->set_jobTitle("Your Job Title");
      // $user->set_orgName("Your Company");
      // $user->set_workEmail("you@yourcompany.com");
      // $user->set_linkedIn("yourname/555");
      // $user->set_linkedIn("yourtwitterhandle");
      
      $claire = new Person("Claire","Smith");
      // $claire->set_jobTitle("Web Designer");
      // $claire->set_orgName("Claire Smith Web Design");
      // $claire->set_workEmail("claire@clairesmithwebdesign.com");
      // $claire->set_linkedIn("clairesmith/555");
      // $claire->set_linkedIn("designerclairesmith");

      $joe = new Person("Joe","Schmo");
      // $joe->set_jobTitle("Certified Public Accountant");
      // $joe->set_orgName("Joe Schmo Accounting");
      // $joe->set_workEmail("joe@joeschmoaccounting.com");
      // $joe->set_linkedIn("joeschmo/555");
      // $joe->set_linkedIn("accountantjoeschmo");

    ?>
    <script type="text/javascript"> // have to put php variables here to pass to js
      var dateInTitle = '<?php echo $dateInTitle; ?>';
      var bodyID = '<?php echo $bodyId; ?>';
    </script>
    <!--dialog-->
    <div id="alert" title="Oops!" style="max-height: 100px !important;"></div>
    <!-- PAGE -->
    <div id="grayBar">
      <div class="mainArea">
        <div class="left">About myFIVE</div>
        <div class="greeting right" style="margin-left:0;"><!-- fill greeting --></div>
        <div class="right" style="margin-right:0;"><img class="profile iconInline" src="images/profile-pic-16.png" /></div>
      </div>
    </div>
    <div class="mainArea">
      <div id="navBar">
        <a id="elephant" class="tab" href="#"><img src="images/maynard-40h.png" /></a>
        <a class="tab" href="reminders.php">My Gigs</a>
        <a class="tab" href="analytics.php">Analytics</a>
        <a class="tab"href="contacts.php">Contacts</a>
        <a class="tab" href="sources-to-thank.php">Thank You Labs</a>
        <a id="track" class="tab" href="create-gig.php">TRACK A NEW GIG >></a>
      </div>
