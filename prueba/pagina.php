<?php include 'projects.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="styles.css?v=1.0">
<title>Page Title</title>
</head>

<body>

<?php include("navi.php")?>

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

<?php include("footer.php")?>

</body>
</html>