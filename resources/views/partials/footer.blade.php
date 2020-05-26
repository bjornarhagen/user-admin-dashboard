<footer id="footer-main" class="footer mt-auto bg-light">
    <div id="footer-main-wrapper" class="container py-5">
        <h4>{{ config('app.name') }} — en tjeneste levert av <a href="{{ config('app.company.url') }}" target="_blank" rel="noopener" class="datahjelpen">{{ config('app.company.name') }}</a></h4>
        <p>
            <a href="{{ config('app.privacy_policy_url') }}" target="_blank" rel="noopener">Personvern</a>
        </p>
        <p class="copyright">&copy; {{ __('Copyright') }} {{ date('Y') }} — {{ config('app.company.name') }}</p>
    </div>
</footer>
<script>
    (function() {
        const alertButtons = document.querySelectorAll('.alert-dismissible.fade.show button.close');

        if (alertButtons) {
            alertButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const alert = this.parentNode;
                    alert.classList.remove('show');

                    setTimeout(() => {
                        alert.classList.add('d-none');
                    }, 200);
                });
            });
        }
    })();
</script>
