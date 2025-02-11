import { isValidName, isValidLastName, isValidEmail, isValidPassword } from "./validations.js";

export default function initEditAccount() {
    const nameInput = document.getElementById("name");
    const lastNameInput = document.getElementById("last-name");
    const emailInput = document.getElementById("email");
    const newPasswordInput = document.getElementById("new-password");
    const newPasswordConfirmInput = document.getElementById("new-password-confirm");
    const passwordInput = document.getElementById("password");
    const updateButton = document.getElementById("update");

    const nameCheck = document.getElementById("name-check");
    const lastNameCheck = document.getElementById("last-name-check");
    const emailCheck = document.getElementById("email-check");
    const newPasswordCheck = document.getElementById("new-password-check");
    const newPasswordConfirmCheck = document.getElementById("new-password-confirm-check");

    let validName = true;
    let validLastName = true;
    let validEmail = true;
    let validNewPassword = true;
    let validNewPasswordConfirm = true;

    nameInput.addEventListener("input", () => {
        if (isValidName(nameInput.value)) {
            validName = true;
            nameCheck.classList.remove("d-none");
        } else {
            validName = false;
            nameCheck.classList.add("d-none");
        }
        validateEditForm();
    });

    lastNameInput.addEventListener("input", () => {
        if (isValidLastName(lastNameInput.value)) {
            validLastName = true;
            lastNameCheck.classList.remove("d-none");
        } else {
            validLastName = false;
            lastNameCheck.classList.add("d-none");
        }
        validateEditForm();
    });

    emailInput.addEventListener("input", () => {
        if (isValidEmail(emailInput.value)) {
            validEmail = true;
            emailCheck.classList.remove("d-none");
        } else {
            validEmail = false;
            emailCheck.classList.add("d-none");
        }
        validateEditForm();
    });

    newPasswordInput.addEventListener("input", () => {
        if (newPasswordInput.value.length === 0) {
            validNewPassword = true;
            newPasswordCheck.classList.add("d-none");
            validateNewPasswordConfirm();
        } else if (isValidPassword(newPasswordInput.value)) {
            validNewPassword = true;
            newPasswordCheck.classList.remove("d-none");
            validateNewPasswordConfirm();
        } else {
            validNewPassword = false;
            newPasswordCheck.classList.add("d-none");
            validateNewPasswordConfirm();
        }
        validateEditForm();
    });

    newPasswordConfirmInput.addEventListener("input", () => {
        validateNewPasswordConfirm();
        validateEditForm();
    });

    passwordInput.addEventListener("input", () => {
        validateEditForm();
    });

    function validateNewPasswordConfirm() {
        if (validNewPassword && newPasswordInput.value.length === 0) {
            validNewPasswordConfirm = true;
            newPasswordConfirmCheck.classList.add("d-none");
        } else if (validNewPassword && newPasswordInput.value === newPasswordConfirmInput.value) {
            validNewPasswordConfirm = true;
            newPasswordConfirmCheck.classList.remove("d-none");
        } else {
            validNewPasswordConfirm = false;
            newPasswordConfirmCheck.classList.add("d-none");
        }
    }

    function validateEditForm() {
        if (validName && validLastName && validEmail && validNewPassword && validNewPasswordConfirm && passwordInput.value.length > 0) {
            updateButton.disabled = false;
        } else {
            updateButton.disabled = true;
        }
    }
}