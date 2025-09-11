<?php include 'projects.php'; ?>
<?php $id= $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="styles.css?v=1.0">
<title><?=$projects[$id]['title']?></title>
</head>

<body>

<?php include("navi.php")?>

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
    <img src="<?= "photos/" . $projects[$id]['dir'] . "/" . $img ?>" 
         alt="Thumbnail"
         onclick="openModal(this.src, 'image')">
  </div>
<?php endforeach; ?>

<?php foreach ($projects[$id]["videogallery"] as $video): ?>
  <div class="column">
    <video autoplay loop onclick="openModal('<?= "photos/" . $projects[$id]['dir'] . "/" . $video ?>', 'video')">
      <source src="<?= "photos/" . $projects[$id]['dir'] . "/" . $video ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
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

<div id="galleryModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImage">
  <video autoplay loop id="modalVideo" style="display:none;"></video>
</div>

<?php include("footer.php")?>


<script>
function openModal(src, type) {
  const modal = document.getElementById("galleryModal");
  const modalImage = document.getElementById("modalImage");
  const modalVideo = document.getElementById("modalVideo");

  modal.style.display = "block";

  if (type === "image") {
    modalImage.src = src;
    modalImage.style.display = "block";
    modalVideo.style.display = "none";
  } else {
    modalVideo.src = src;
    modalVideo.style.display = "block";
    modalImage.style.display = "none";
  }
}

function closeModal() {
  const modal = document.getElementById("galleryModal");
  modal.style.display = "none";

  // stop video when closing
  document.getElementById("modalVideo").pause();
  document.getElementById("modalVideo").src = "";
}
</script>

</body>
</html>