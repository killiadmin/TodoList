document.addEventListener("DOMContentLoaded", validateTextFieldInput);

/**
 * Validates text field input and sets background color accordingly.
 *
 * @function validateTextFieldInput
 * @returns {void}
 */
function validateTextFieldInput() {
    let textField = document.getElementById("task_form_title");
    let maxLength = 100;

    textField.addEventListener("input", (event) => {
        if (textField.value.length > maxLength) {
            textField.style.backgroundColor = "lightcoral";
        } else {
            textField.style.backgroundColor = "";
        }
    });
}
