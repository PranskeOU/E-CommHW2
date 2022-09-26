<?php require_once("header.php"); ?>
<br><br/>
<h5 style="text-align:center;">
  <?php ThankYouMessage(); ?>
<h5/>
<br><br/><br><br/>
<div style="text-align:center; margin:auto;">
  Welcome, <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<div/>
<?php require_once("footer.php"); ?>
