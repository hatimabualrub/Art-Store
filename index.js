const showPassword = () => {
  const password = document.getElementById("password");
  const showPassword = document.getElementById("show");

  if (showPassword.checked == true) {
    password.style.display = "inline";
  } else {
    password.style.display = "none";
  }
};
