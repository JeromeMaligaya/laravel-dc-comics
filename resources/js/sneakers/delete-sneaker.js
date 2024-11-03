const formElements = document.querySelectorAll("form.sneaker-form-delete");

formElements.forEach(formElement => {
    formElement.addEventListener("submit", function (event) {
        event.preventDefault();

        const userChoice = window.confirm(`Are you sure you want to delete this Sneaker: ${this.getAttribute("data-custom-name")} `)

        if (userChoice === true) {
            this.submit();
        }
    })
})
