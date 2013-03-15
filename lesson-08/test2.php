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

<?php
require('../lesson-07/connection.php');

$db = <<<SQL
SELECT artist, track
FROM artists, tracks
WHERE ((artists.idartists = albums.artists_idartists) and 
(albums.idalbums = tracks.albums_idalbums))
SQL;
?>

<table>
  <tr>
    <th scope="col"><h4>Artist</h4></th>
    <th scope="col"><h4>Track</h4></th>
    </tr>

<?php
 while ($row = $music->fetch_assoc()) {
$vartartist = $row['artist'];
$vartrack = $row['track'];
?>

<tr>
<td><?php echo $varartist; ?></td>
<td><?php echo $vartrack; ?></td>
</tr>

<?php 
 }
$music->free();	
$db->close();
?>
</table>
</div>
</body>
</html>