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
    <th scope="col"><h4>Genre</h4></th>
    <th scope="col"><h4>Artist</h4></th>
    <th scope="col"><h4>Track</h4></th>
    </tr>

<?php 
require('connection.php');

$sql = <<<SQL
SELECT artist, track, genre
FROM  genres, artists, albums, tracks
WHERE ((genres.idgenres = artists.genres_idgenres) and 
(artists.idartists = albums.artists_idartists) and 
(albums.idalbums = tracks.albums_idalbums)) and 
genres.idgenres in (1,2,3,4)  
SQL;

if(!$result = $db->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){?>

<tr><td class="span2"><?php echo $row['genre']; ?></td>
<td><?php echo $row['artist']; ?></td>    
<td><?php echo $row['track']; ?></td></tr>

<?php
}


$result->free();
$db->close();
?>
</table>

</div>
</body>
</html>