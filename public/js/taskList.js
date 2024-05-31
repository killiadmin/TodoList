document.addEventListener('DOMContentLoaded', trimContentLength);

/**
 * Trims the content length of title content elements.
 *
 * @return {void} The function does not return anything.
 */
function trimContentLength() {
    let textFields = document.getElementsByClassName("titleContent");
    let maxLength = 24;

    for(let i = 0; i < textFields.length; i++) {
        let trimmedContent = textFields[i].textContent.trim();

        if (trimmedContent.length > maxLength) {
            textFields[i].textContent = trimmedContent.substring(0, maxLength) + ' ...';
        }
    }
}
