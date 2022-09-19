<?php require_once("header.php"); ?>
<br><br/>
<h5 style="text-align:center; margin:auto;">
  HTTP POST Form Submit:
<h5/>
<br><br/><br><br/>
<div style="text-align:center; margin:auto">
  <form action="handlepost.php" method="get">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
<div/>
<?php require_once("footer.php"); ?>
