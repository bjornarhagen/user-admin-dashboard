<nav id="nav-main" class="navbar navbar-expand navbar-dark bg-dark flex-shrink-0">
    <div id="nav-main-wrapper" class="container">
        <a class="navbar-brand" href="{{ route('customer.index') }}">{{ config('app.name') }}</a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer.index') }}">{{__('Customers')}}</a>
            </li>
        </ul>
    </div>
</nav>
