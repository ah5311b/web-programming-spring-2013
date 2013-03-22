<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lesson 8: CRUD App I</title>
<link href="../../../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="test.css" rel="stylesheet">
</head>

<body>
<div class="container">
<h3>Lesson 8 Homework: Master Detail Database Structure</h3>

<table>
  <tr>
    <th scope="col"><h4>Track</h4></th>
    <th scope="col"><h4>Artist</h4></th>
    </tr>

<?php 
require('connection.php');

$sql = <<<SQL
SELECT track, artist
FROM tracks, albums, artists
WHERE ((albums.idalbums = tracks.albums_idalbums) and (artists.idartists = albums.artists_idartists))
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){?>

<tr>
<td><?php echo $row['track']; ?></td>
<td><?php echo $row['artist']; ?></td>
</tr>

<?php
}


$result->free();
$db->close();
?>
</table>

</div>
</body>
</html>