@include('partials.head')

<body class="d-flex flex-column h-100">
    @include('partials.nav')
    <main class="flex-shrink-0">
        <div id="main-wrapper">
            @include('partials.flash-messages')
            @yield('content')
        </div>
    </main>
    @include('partials.footer')
</body>

</html>
