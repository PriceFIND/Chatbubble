<html>
<body>

<?php

Welcome <?php echo $_POST["username"]; ?><br>
The Chatroom is: <?php echo $_POST["chat"]; ?><br>
Your Message is: <?php echo $_POST["message"]; ?><br>
<?php
$mysqli=new mysqli("localhost","Buffalo","Toshy200","chatty");

$sql = "INSERT INTO `chat_messages`
(`time_date`, `message`, `sender`, `room`, `emojis`, `ID`)
VALUES (?, ?, ?, ?, ?, ?);";

$name=$_POST["uName"];
$mess=["message"];
$stmt = $mysqli->prepare ($sql,);

$stmt->bind_param("ssssss", "2020-01-21 16:17:05", $mess, $name, $_POST["chatNum"], '', NULL);

$stmt->execute();
?>
</body>
</html>