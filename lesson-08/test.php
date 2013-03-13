<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Music DB</title>
<link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="test.css" rel="stylesheet">
</head>

<body>
   <div class="container">
<h2>Lesson 7 Homework: Master Detail Database Structure</h2>

<table>
  <tr>
    <th scope="col"><h4>Artist</h4></th>
    <th scope="col"><h4>Track</h4></th>
    </tr>

<?php
require('../lesson-07/connection.php');
$music = $dataconnection->query("select artist from artists");
 while ($row = $music->fetch_object()) {
	 ?>

<tr><td>
<?php echo $row->artist
?>
</td>

<?php ;
}

$music = $dataconnection->query("select track from tracks");
 while ($row = $music->fetch_object()) {
	 ?>
 
<td><?php echo $row->track ?></td>
</tr>

<?php ;
}

$dataconnection->close();
?>
</table>

</div>
</body>
</html>