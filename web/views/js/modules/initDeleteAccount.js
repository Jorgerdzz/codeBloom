export default function initDeleteAccount() {
    const passwordInput = document.getElementById("password");
    const deleteConfirmInput = document.getElementById("delete-confirm");
    const deleteButton = document.getElementById("delete");

    const deleteConfirmCheck = document.getElementById("delete-confirm-check");

    let validDeleteConfirm = false;

    passwordInput.addEventListener("input", () => {
        validateDeleteForm();
    });

    deleteConfirmInput.addEventListener("input", () => {
        if (deleteConfirmInput.value.toLowerCase() === "eliminar") {
            validDeleteConfirm = true;
            deleteConfirmCheck.classList.remove("d-none");
        } else {
            validDeleteConfirm = false;
            deleteConfirmCheck.classList.add("d-none");
        }
        validateDeleteForm();
    })

    function validateDeleteForm() {
        if (passwordInput.value.length > 0 && validDeleteConfirm) {
            deleteButton.disabled = false;
        } else {
            deleteButton.disabled = true;
        }
    }
}