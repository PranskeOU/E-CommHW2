<?php require_once("header.php"); ?>
<br><br/>
<h5 style="text-align:center; margin:auto;">
  HTTP GET Form Submit:
<h5/>
<br><br/><br><br/>
<div style="text-align:center; margin:auto">
  <form action="handleget.php" method="get">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
<div/>
<?php require_once("footer.php"); ?>
