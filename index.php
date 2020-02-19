<?php

$mysqli=new mysqli("localhost","coolGuy","dootdoot8","dominosChat");

//sql
$result=$mysqli->query("
SELECT * FROM chatmessages
");

//INNER JOIN user_names ON
SELECT usernames.name SELECT chatmessages.message, usernames.name AS 'user name',
	chatrooms.roomName AS 'room'
FROM chatmessages
		 INNER JOIN chat_rooms ON
		 chatmessages.sender = usernames.ID
		INNER JOIN usernames ON
		chatmessages.room = chatrooms.ID
");


$result_count = $mysqli->field_count;

//html
$html="
	<html>
	<head>
	</head>
		<body>
			<table>
				<tr>
					<td><b>Message</b></td>
					<td><b>User</b></td>
					<td><b>Room</b></td>
				</tr>
";
//loops
while($row=$result->fetch_array()){ //fatal error, call to member fetch_array on boolean???? not problem with fetch array, bad SQL request
	$html.="<tr>";
	for($i=0; $i<$result_count; $i++){
		$html.="<td>".$row[$i]."</td>";
	}
	$html.="</tr>";
}


//done
$html.="
		</table>
	</body>
</html>
";

echo $html;



?>
