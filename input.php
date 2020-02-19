<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/get.php" method="get">
  User name:<br>
  <input type="text" name="user" value="MickeyMooMoo">
  <br>
  Chat Room:<br>
  <input type="text" name="chatnum" value="1">
  <br>
  Message:<br>
  <input type="text" name="msg" value="Hello...">
  <br>
  <br>
  <input type="submit" value="Submit Get">
</form> 

<form action="/post.php" method="post">
  User name:<br>
  <input type="text" name="user" value="MickeyMooMoo">
  <br>
  Chat Room Number:<br>
  <input type="text" name="chatnum" value="1">
  <br>
  Message:<br>
  <input type="text" name="msg" value="Hello...">
  <br>
  <br>
  <input type="submit" value="Submit post">
</form> 


<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
