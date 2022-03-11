function darkmode() {
  var elemento = document.body;
  elemento.classList.toggle("dark-mode");
}

function showPassword() {
  var pass = document.getElementById("password");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}
