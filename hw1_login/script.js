const signUpButton = document.getElementById("signUpButton");
const signInButton = document.getElementById("signInButton");
const signInForm = document.getElementById("signIn");
const signUpForm = document.getElementById("signup");

signUpButton.addEventListener("click", function () {
  signInForm.style.display = "none";
  signUpForm.style.display = "block";
});
signInButton.addEventListener("click", function () {
  signInForm.style.display = "block";
  signUpForm.style.display = "none";
});

document
  .getElementById("registerForm")
  .addEventListener("submit", async function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    const messageDiv = document.getElementById("registerMessage");
    messageDiv.textContent = "";
    messageDiv.classList.remove("error", "success");

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
      });

      const data = await response.json();

      if (data.error) {
        messageDiv.classList.add("error");
        messageDiv.textContent = data.error;
      } else if (data.success) {
        messageDiv.classList.add("success");
        messageDiv.textContent = data.message;
        form.reset();
      }
    } catch (error) {
      messageDiv.classList.add("error");
      messageDiv.textContent = "Errore nella richiesta. Riprova più tardi.";
      console.error(error);
    }
  });

document
  .getElementById("loginForm")
  .addEventListener("submit", async function (e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);

    const messageDiv = document.getElementById("loginMessage");
    messageDiv.textContent = "";
    messageDiv.classList.remove("error", "success");

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: formData,
      });

      const data = await response.json();

      if (data.error) {
        messageDiv.classList.add("error");
        messageDiv.textContent = data.error;
      } else if (data.success) {
        messageDiv.classList.add("success");
        messageDiv.textContent = data.message;
        form.reset();
      }
    } catch (error) {
      messageDiv.classList.add("error");
      messageDiv.textContent = "Errore nella richiesta. Riprova più tardi.";
      console.error(error);
    }
  });
