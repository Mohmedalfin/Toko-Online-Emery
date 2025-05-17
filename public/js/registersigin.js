document.addEventListener("DOMContentLoaded", function () {
  const showRegister = document.getElementById("showRegister");
  const showSignIn = document.getElementById("showSignIn");
  const signInForm = document.getElementById("signInForm");
  const registerForm = document.getElementById("registerForm");

  if (!showRegister || !showSignIn || !signInForm || !registerForm) {
    console.error("Elemen form tidak ditemukan!");
    return;
  }

  showRegister.addEventListener("click", function (e) {
    e.preventDefault();
    console.log("Switch to register form");
    signInForm.classList.add("hidden");
    registerForm.classList.remove("hidden");
  });

  showSignIn.addEventListener("click", function (e) {
    e.preventDefault();
    console.log("Switch to sign-in form");
    registerForm.classList.add("hidden");
    signInForm.classList.remove("hidden");
  });
});
