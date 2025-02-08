"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const page = document.body.dataset.page;

    switch (page) {
        case "crear-cuenta":
            initSignUp();
            break;
        case "modificar-cuenta":
            initEditAccount();
        default:
            break;
    }
});

function initSignUp() {
    const nameInput = document.getElementById("name");
    const lastNameInput = document.getElementById("last-name");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const passwordConfirmInput = document.getElementById("password-confirm");
    const signInButton = document.getElementById("signin");

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

    function validateSignUpForm() {
        if (validName && validLastName && validEmail && validPassword && validPasswordConfirm) {
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

function initEditAccount() {
    const nameInput = document.getElementById("name");
    const lastNameInput = document.getElementById("last-name");
    const emailInput = document.getElementById("email");
    const newPasswordInput = document.getElementById("new-password");
    const newPasswordConfirmInput = document.getElementById("new-password-confirm");
    const passwordInput = document.getElementById("password");
    const signInButton = document.getElementById("signin");

    const nameCheck = document.getElementById("name-check");
    const lastNameCheck = document.getElementById("last-name-check");
    const emailCheck = document.getElementById("email-check");
    const newPasswordCheck = document.getElementById("new-password-check");
    const newPasswordConfirmCheck = document.getElementById("new-password-confirm-check");
    const passwordCheck = document.getElementById("password-check");

    let validName = true;
    let validLastName = true;
    let validEmail = true;
    let validNewPassword = true;
    let validNewPasswordConfirm = true;
    let validPassword = false;

    nameInput.addEventListener("input", () => {
        if (isValidName(nameInput.value)) {
            validName = true;
            nameCheck.classList.remove("d-none");
        } else {
            validName = false;
            nameCheck.classList.add("d-none");
        }
        validateModifyForm();
    });

    lastNameInput.addEventListener("input", () => {
        if (isValidLastName(lastNameInput.value)) {
            validLastName = true;
            lastNameCheck.classList.remove("d-none");
        } else {
            validLastName = false;
            lastNameCheck.classList.add("d-none");
        }
        validateModifyForm();
    });

    emailInput.addEventListener("input", () => {
        if (isValidEmail(emailInput.value)) {
            validEmail = true;
            emailCheck.classList.remove("d-none");
        } else {
            validEmail = false;
            emailCheck.classList.add("d-none");
        }
        validateModifyForm();
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
        validateModifyForm();
    });

    newPasswordConfirmInput.addEventListener("input", () => {
        validateNewPasswordConfirm();
        validateModifyForm();
    });

    passwordInput.addEventListener("input", () => {
        if (isValidPassword(passwordInput.value)) {
            validPassword = true;
            passwordCheck.classList.remove("d-none");
        } else {
            validPassword = false;
            passwordCheck.classList.add("d-none");
        }
        validateModifyForm();
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

    function validateModifyForm() {
        if (validName && validLastName && validEmail && validNewPassword && validNewPasswordConfirm && validPassword) {
            signInButton.disabled = false;
        } else {
            signInButton.disabled = true;
        }
    }
}

function isValidName(name) {
    return name.length > 1;
}

function isValidLastName(lastName) {
    return lastName.length > 1;
}

function isValidEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function isValidPassword(password) {
    return password.length >= 8;
}