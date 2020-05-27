<footer id="footer-main" class="footer mt-auto bg-light border-top">
    <div id="footer-main-wrapper" class="container py-5">
        <h4>{{ config('app.name') }} — en tjeneste levert av <a href="{{ config('app.company.url') }}" target="_blank" rel="noopener" class="datahjelpen">{{ config('app.company.name') }}</a></h4>
        <p>
            <a href="{{ config('app.privacy_policy_url') }}" target="_blank" rel="noopener">Personvern</a>
        </p>
        <p class="copyright">&copy; {{ __('Copyright') }} {{ date('Y') }} — {{ config('app.company.name') }}</p>
    </div>
</footer>
<script src="/js/dismissable-alerts.js"></script>
