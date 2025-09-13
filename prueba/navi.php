<style>
.nav-btn {
  background: none;
  border: none;
  color: white;
  font-size: 18px;
  text-align: center;
  padding: 18px 18px;
  display: flex;
  cursor: pointer;
}

.nav-btn i {
  font-size: auto;
  vertical-align: middle;
  transition: color 0.2s ease;
}

.nav-btn:hover {
  size: 17px;
  background-color: white;
  color: #4D4138;
}

.dark-mode li a:hover {
  color: #38444d !important;
  background-color: #e0e0e0;
}

.nav-btn:hover i {
  width: 17px;
  color: #4D4138;
}

</style>

<ul>
  <li><a href="pagina.php">Projects</a></li>
  <li style="align:right;">
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