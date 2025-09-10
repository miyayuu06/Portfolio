<ul>
  <li><a href="pagina.php">Projects</a></li>
  <li style="float:right;">
    <button id="theme-toggle" class="nav-btn" onclick="toggleTheme()">
      <i id="theme-icon" class="fas fa-moon"></i>
    </button>
  </li>
</ul>

<script>
window.addEventListener("DOMContentLoaded", () => {
  const savedTheme = localStorage.getItem("theme");
  if (savedTheme === "dark") {
    document.body.classList.add("dark-mode");
    document.getElementById("theme-icon").classList.replace("fa-moon", "fa-sun");
  }
});

function toggleTheme() {
  const body = document.body;
  const themeIcon = document.getElementById("theme-icon");

  body.classList.toggle("dark-mode");

  if (body.classList.contains("dark-mode")) {
    themeIcon.classList.replace("fa-moon", "fa-sun");
    localStorage.setItem("theme", "dark");
  } else {
    themeIcon.classList.replace("fa-sun", "fa-moon");
    localStorage.setItem("theme", "light");
  }
}
</script>