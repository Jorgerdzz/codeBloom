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
  const passwordConfirmInput = document.getElementById("password-confirm");
  const signInButton = document.getElementById("signin");
  const privacyCheckbox = document.getElementById("privacy");

  const nameCheck = document.getElementById("name-check");
  const lastNameCheck = document.getElementById("last-name-check");
  const emailCheck = document.getElementById("email-check");
  const passwordCheck = document.getElementById("password-check");
  const passwordConfirmCheck = document.getElementById(
    "password-confirm-check"
  );

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

  passwordConfirmInput.addEventListener("input", () => {
    validatePasswordConfirm();
    validateSignUpForm();
  });

  privacyCheckbox.addEventListener("change", () => {
    acceptedPrivacy = privacyCheckbox.checked;
    validateSignUpForm();
  });

  function validateSignUpForm() {
    if (
      validName &&
      validLastName &&
      validEmail &&
      validPassword &&
      validPasswordConfirm &&
      acceptedPrivacy
    ) {
      signInButton.disabled = false;
    } else {
      signInButton.disabled = true;
    }
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
