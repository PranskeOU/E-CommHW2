<?php require_once("header.php"); ?>
<style>
      div {text-align: center;}
<style/>
<h5>Form Submit</h5>
<div>
  <form action="handlepost.php" method="get">
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
<div/>
<?php require_once("footer.php"); ?>
