(function() {
    const alertButtons = document.querySelectorAll(
        ".alert-dismissible.fade.show button.close"
    );

    if (alertButtons) {
        alertButtons.forEach(button => {
            button.addEventListener("click", function() {
                const alert = this.parentNode;
                alert.classList.remove("show");

                setTimeout(() => {
                    alert.classList.add("d-none");
                }, 200);
            });
        });
    }
})();
