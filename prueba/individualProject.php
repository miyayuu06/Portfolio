<?php include 'projects.php'; ?>
<?php $id= $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title><?=$projects[$id]['title']?></title>
</head>

<body>

<ul>
  <li><a href="pagina.php">Projects</a></li>
</ul>

<header style="background-image:url('photos/<?=$projects[$id]['dir']?>/cover.png');">
  <h1><?=$projects[$id]['title']?></h1>
</header>

<div class="date"><?=$projects[$id]['date']?></div>

<pre><?=$projects[$id]['dev']?>
</pre>

<h1>Project Gallery</h1>

<div class="row">

<?php foreach ($projects[$id]['gallery'] as $img): ?>
  <div class="column">
    <img src='<?= "photos/" . $projects[$id]['dir'] . "/" . $img ?>'>
  </div>
<?php endforeach; ?>

<?php foreach ($projects[$id]["videogallery"] as $video): ?>
  <div class="column">
    <video src='<?= "photos/" . $projects[$id]['dir'] . "/" . $video ?>'></video>
  </div>
<?php endforeach; ?>

</div>

<?php
$prevpage = ($id - 1 + count($projects)) % count($projects); // wrap backwards
$nextpage = ($id + 1) % count($projects);                   // wrap forwards
?>
<div class="project-nav">
  <a class="prev" href="individualProject.php?id=<?= $prevpage ?>">
    ← <?= $projects[$prevpage]['title'] ?>
  </a>
  <a class="next" href="individualProject.php?id=<?= $nextpage ?>">
    <?= $projects[$nextpage]['title'] ?> →
  </a>
</div>

<footer>Yuna Yunita :)</footer>

</body>
</html>