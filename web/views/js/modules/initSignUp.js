import {
  isValidName,
  isValidLastName,
  isValidEmail,
  isValidPassword,
} from "./validations.js";

export default function initSignUp() {
  const nameInput = document.getElementById("name");
  const lastNameInput = document.getElementById("last-name");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const passwordStrength = document.getElementById("password-strength");
  const passwordConfirmInput = document.getElementById("password-confirm");
  const signInButton = document.getElementById("signin");
  const privacyCheckbox = document.getElementById("privacy");

  const nameCheck = document.getElementById("name-check");
  const lastNameCheck = document.getElementById("last-name-check");
  const emailCheck = document.getElementById("email-check");
  const passwordCheck = document.getElementById("password-check");
  const passwordConfirmCheck = document.getElementById("password-confirm-check");

  let validName = false;
  let validLastName = false;
  let validEmail = false;
  let validPassword = false;
  let validPasswordConfirm = false;
  let acceptedPrivacy = false;

  nameInput.addEventListener("input", () => {
    if (isValidName(nameInput.value)) {
      validName = true;
      nameCheck.classList.remove("d-none");
    } else {
      validName = false;
      nameCheck.classList.add("d-none");
    }
    validateSignUpForm();
  });

  lastNameInput.addEventListener("input", () => {
    if (isValidLastName(lastNameInput.value)) {
      validLastName = true;
      lastNameCheck.classList.remove("d-none");
    } else {
      validLastName = false;
      lastNameCheck.classList.add("d-none");
    }
    validateSignUpForm();
  });

  emailInput.addEventListener("input", () => {
    if (isValidEmail(emailInput.value)) {
      validEmail = true;
      emailCheck.classList.remove("d-none");
    } else {
      validEmail = false;
      emailCheck.classList.add("d-none");
    }
    validateSignUpForm();
  });

  passwordInput.addEventListener("input", () => {
    if (isValidPassword(passwordInput.value)) {
      validPassword = true;
      passwordCheck.classList.remove("d-none");
      validatePasswordConfirm();
    } else {
      validPassword = false;
      passwordCheck.classList.add("d-none");
      validatePasswordConfirm();
    }
    validateSignUpForm();
  });

  passwordInput.addEventListener("input" , () =>{
    let strength = 0;
    if (passwordInput.value.length > 8) strength++;
    if (/[A-Z]/.test(passwordInput.value)) strength++;
    if (/[0-9]/.test(passwordInput.value)) strength++;
    if (/[@$!%*?&]/.test(passwordInput.value)) strength++;

    const colors = ["red", "orange", "yellow", "green"];
    passwordStrength.style.backgroundColor = colors[strength];
    passwordStrength.style.width = `${strength * 25}%`;

    if (strength === 0) passwordStrength.style.width = '10%';    
    if (passwordInput.value.length === 0)  passwordStrength.style.width = '0%'; 
    
  });

  passwordConfirmInput.addEventListener("input", () => {
    validatePasswordConfirm();
    validateSignUpForm();
  });

  privacyCheckbox.addEventListener("change", () => {
    acceptedPrivacy = privacyCheckbox.checked;
    validateSignUpForm();
  });

  function validateSignUpForm() {
    signInButton.disabled = !(validName && validLastName && validEmail && validPassword && validPasswordConfirm && acceptedPrivacy)
  }

  function validatePasswordConfirm() {
    if (validPassword && passwordInput.value === passwordConfirmInput.value) {
      validPasswordConfirm = true;
      passwordConfirmCheck.classList.remove("d-none");
    } else {
      validPasswordConfirm = false;
      passwordConfirmCheck.classList.add("d-none");
    }
  }
}
