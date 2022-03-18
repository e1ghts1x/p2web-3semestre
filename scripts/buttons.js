const currentTheme = localStorage.getItem("theme");

if (currentTheme == "dark") {
  document.body.classList.add("dark-mode");
} else if (currentTheme == "light") {
  document.body.classList.add("light-mode");
}

function toggleDarkMode() {
  if(currentTheme == "dark"){
    document.body.classList.toggle("light-mode");
    document.body.classList.toggle("dark-mode");
    var theme = "light";
  }

  else{
    document.body.classList.toggle("dark-mode");
    document.body.classList.toggle("light-mode");
    var theme = "dark";
  }
  localStorage.setItem("theme", theme);
  location.reload();
}

function showPassword() {
  var pass = document.getElementById("password");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}
