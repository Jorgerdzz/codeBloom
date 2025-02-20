import {
  isValidName,
  isValidLastName,
  isValidEmail,
  isValidMessage,
} from "./validations.js";

export default function initContact() {
  const nameInput = document.getElementById("name");
  const lastNameInput = document.getElementById("last-name");
  const emailInput = document.getElementById("email");
  const messageInput = document.getElementById("message");
  const privacyCheckbox = document.getElementById("privacy");
  const sendButton = document.getElementById("send");

  let validName = false;
  let validLastName = false;
  let validEmail = false;
  let validMessage = false;
  let acceptedPrivacy = false;

  nameInput.addEventListener("input", () => {
    validName = isValidName(nameInput.value);
    validateContactForm();
  });

  lastNameInput.addEventListener("input", () => {
    validLastName = isValidLastName(lastNameInput.value);
    validateContactForm();
  });

  emailInput.addEventListener("input", () => {
    validEmail = isValidEmail(emailInput.value);
    validateContactForm();
  });

  messageInput.addEventListener("input", () => {
    validMessage = isValidMessage(messageInput.textContent);
    validateContactForm();
  });

  privacyCheckbox.addEventListener("change", () => {
    acceptedPrivacy = privacyCheckbox.checked;
    validateContactForm();
  });

  function validateContactForm() {
    if (
      validName &&
      validLastName &&
      validEmail &&
      validMessage &&
      acceptedPrivacy
    ) {
      sendButton.disabled = false;
    } else {
      sendButton.disabled = true;
    }
  }
}
