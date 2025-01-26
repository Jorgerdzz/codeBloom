"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const page = document.body.dataset.page;

    switch (page) {
        case "crear-cuenta":
            initSignUp();
            break;
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


    let validName = false;
    let validLastName = false;
    let validEmail = false;
    let validPassword = false;
    let validPasswordConfirm = false;

    nameInput.addEventListener("input", () => {
        if (nameInput.value.length > 0) {
            validName = true;
        } else {
            validName = false;
        }
        validateSignUpForm();
    });

    lastNameInput.addEventListener("input", () => {
        if (lastNameInput.value.length > 0) {
            validLastName = true;
        } else {
            validLastName = false;
        }
        validateSignUpForm();
    });

    emailInput.addEventListener("input", () => {
        if (isValidEmail(emailInput.value)) {
            validEmail = true;
        } else {
            validEmail = false;
        }
        validateSignUpForm();
    });

    passwordInput.addEventListener("input", () => {
        if (passwordInput.value.length >= 8) {
            validPassword = true;
        } else {
            validPassword = false;
        }
        validateSignUpForm();
    });

    passwordConfirmInput.addEventListener("input", () => {
        if (passwordInput.value === passwordConfirmInput.value) {
            validPasswordConfirm = true;
        } else {
            validPasswordConfirm = false;
        }
        validateSignUpForm();
    });

    function validateSignUpForm() {
        if (validName && validLastName && validEmail && validPassword && validPasswordConfirm) {
            signInButton.disabled = false;
        } else {
            signInButton.disabled = true;
        }
    }
}

function isValidEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}