<ul>
  <li><a href="pagina.php">Projects</a></li>
  <li style="float:right;">
    <button id="theme-toggle" class="nav-btn" onclick="toggleTheme()">
      <i id="theme-icon" class="fas fa-moon"></i>
    </button>
  </li>
</ul>

<script>
function toggleTheme() {
  const body = document.body;
  const themeIcon = document.getElementById("theme-icon");

  body.classList.toggle("dark-mode");

  if (body.classList.contains("dark-mode")) {
    themeIcon.classList.remove("fa-moon");
    themeIcon.classList.add("fa-sun");
  } else {
    themeIcon.classList.remove("fa-sun");
    themeIcon.classList.add("fa-moon");
  }
}
</script>