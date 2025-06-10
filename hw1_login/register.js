const formStatus = {
  username: false,
  firstName: false,
  lastName: false,
  email: false,
  password: false,
};

function fetchResponse(response) {
  if (!response.ok) return null;
  return response.json();
}

function setError(containerClass, message) {
  const container = document.querySelector(`.${containerClass}`);
  container.classList.add("errorj");
  container.querySelector("span").textContent = message;
  formStatus[containerClass] = false;
}

function clearError(containerClass) {
  const container = document.querySelector(`.${containerClass}`);
  container.classList.remove("errorj");
  container.querySelector("span").textContent = "";
  formStatus[containerClass] = true;
}

function jsonCheckUsername(json) {
  if (json && !json.exists) {
    clearError("username");
  } else {
    setError("username", "First Name already in use.");
  }
}

function checkUsername() {
  const input = document.querySelector(".username input");
  const val = input.value.trim();

  if (!/^[a-zA-Z0-9_]{3,20}$/.test(val)) {
    setError(
      "username",
      "Username not validate. Letters, numbers and underscore. Characters: 3-20"
    );
    return;
  }

  fetch("check_username.php?q=" + encodeURIComponent(val))
    .then(fetchResponse)
    .then(jsonCheckUsername)
    .catch(() => {
      setError("username", "Error checking username");
    });
}

function checkFirstName() {
  const input = document.querySelector(".firstName input");
  if (input.value.trim().length > 0) {
    clearError("firstName");
  } else {
    setError("firstName", "First Name cannot be empty");
  }
}

function checkLastName() {
  const input = document.querySelector(".lastName input");
  if (input.value.trim().length > 0) {
    clearError("lastName");
  } else {
    setError("lastName", "Last Name cannot be empty");
  }
}

function jsonCheckEmail(json) {
  if (json && !json.exists) {
    clearError("email");
  } else {
    setError("email", "Email already in use");
  }
}

function checkEmail() {
  const input = document.querySelector(".email input");
  const val = input.value.trim().toLowerCase();

  const regex =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (!regex.test(val)) {
    setError("email", "Invalid email");
    return;
  }

  fetch("check_email.php?q=" + encodeURIComponent(val))
    .then(fetchResponse)
    .then(jsonCheckEmail)
    .catch(() => {
      setError("email", "Error checking email");
    });
}

function checkPassword() {
  const input = document.querySelector(".password input");
  const val = input.value;

  const regex =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[.+\-\[\]\*\~_#:?]).{8,20}$/;

  if (val.length < 8 || val.length > 20) {
    setError("password", "Password length: 8-20 characters");
  } else if (!regex.test(val)) {
    setError(
      "password",
      "Password must contain an uppercase letter, a lowercase letter, a number, and a special character (. + - [ ] * ~ _ # : ?)"
    );
  } else {
    clearError("password");
  }
}

function checkSubmit(event) {
  checkUsername();
  checkFirstName();
  checkLastName();
  checkEmail();
  checkPassword();
  if (Object.values(formStatus).includes(false)) {
    event.preventDefault();
  }
}

document
  .querySelector(".username input")
  .addEventListener("blur", checkUsername);
document
  .querySelector(".firstName input")
  .addEventListener("blur", checkFirstName);
document
  .querySelector(".lastName input")
  .addEventListener("blur", checkLastName);
document.querySelector(".email input").addEventListener("blur", checkEmail);
document
  .querySelector(".password input")
  .addEventListener("blur", checkPassword);
document.querySelector("form").addEventListener("submit", checkSubmit);
