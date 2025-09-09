<?php include 'projects.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Page Title</title>
</head>

<body>

<ul>
  <li><a href="pagina.php">Projects</li>
</ul>

<header style="background-image:url(photos/renderer/superbanner.png);">
  <h1>YUNA'S PROJECT CORNER</h1>
</header>


<h1>Know who I am!</h1>

<p>Hey! My name is Yuna. Here is a compilation of several projects I have completed so far:
</p>

<?php for ($x = 0; $x < count($projects); $x++) : ?>
  <div class="project-info">
    <img src="photos/<?= $projects[$x]['dir'] ?>/cover.png" alt="<?= $projects[$x]['title'] ?> cover preview">
    <div class="project-text">
      <h2><a href="individualProject.php?id=<?php echo $x;?>"> <?= $projects[$x]['title']?> </a></h2>
      <p><?= $projects[$x]['desc'] ?></p>
    </div>
  </div>
<?php endfor; ?>

<footer>Yuna Yunita :)</footer>

</body>
</html>