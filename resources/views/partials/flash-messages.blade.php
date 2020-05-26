@if ($errors->any() || session('danger') || session('warning') || session('success') || session('info'))
<section class="container pt-4 mb-0">
    @foreach (['danger', 'warning', 'success', 'info'] as $alert_type)
        @if (session($alert_type))
            <div class="alert alert-{{ $alert_type }} mb-4 alert-dismissible fade show" role="alert">
                <span>{{ session($alert_type) }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    @endforeach
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger mb-2 alert-dismissible fade show" role="alert">
                <span>{{ $error }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
</section>
@endif
