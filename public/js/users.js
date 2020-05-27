(function() {
    const forms = document.querySelectorAll('form.user-delete');

    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const deletionConfirmed = confirm('The user is going to be deleted');

            if (deletionConfirmed) {
                this.submit();
            }
        })
    })
})();