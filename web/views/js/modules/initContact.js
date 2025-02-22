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

  let validName = nameInput.value.length > 1;
  let validLastName = lastNameInput.value.length > 1;
  let validEmail = emailInput.value.length > 1;
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
    validMessage = isValidMessage(messageInput.value);
    validateContactForm();
  });

  privacyCheckbox.addEventListener("change", () => {
    acceptedPrivacy = privacyCheckbox.checked;
    validateContactForm();
  });

  function validateContactForm() {
    sendButton.disabled = !(validName && validLastName && validEmail && validMessage && acceptedPrivacy);
  }

  sendButton.addEventListener('click', (event) => {
    event.preventDefault();
  })
}
