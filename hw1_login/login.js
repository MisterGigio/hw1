const form = document.querySelector("#signup form");

form.addEventListener("submit", function (event) {
  const fName = form.fName.value.trim();
  const lName = form.lName.value.trim();
  const username = form.username.value.trim();
  const email = form.email.value.trim();
  const password = form.password.value.trim();

  if (!fName || !lName || !username || !email || !password) {
    event.preventDefault();
    alert("Fill in all the fields.");
    return;
  }
});

document.querySelector("#username").addEventListener("blur", function () {
  fetch("check_username.php?q=" + encodeURIComponent(this.value))
    .then((res) => res.json())
    .then((json) => {
      if (json.exists) {
        alert("Username already in use.");
      }
    });
});

document.querySelector("#email").addEventListener("blur", function () {
  fetch("check_email.php?q=" + encodeURIComponent(this.value))
    .then((res) => res.json())
    .then((json) => {
      if (json.exists) {
        alert("Email already registered");
      }
    });
});
