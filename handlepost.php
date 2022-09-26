<?php require_once("header.php"); ?>
<?php require_once("ThankYouMessage.php"); ?>
<br><br/>
<h5 style="text-align:center;">
  Thank you for your submission.
<h5/>
<br><br/><br><br/>
<div style="text-align:center; margin:auto;">
  Welcome, <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<div/>
<div style="text-align:center; margin:auto;">
  <?php ThankYouMessage(); ?>
<div/>
<?php require_once("footer.php"); ?>
