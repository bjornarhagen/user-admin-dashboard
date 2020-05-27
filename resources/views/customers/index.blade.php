@extends('partials.master')
@section('content')
<section class="container py-4">
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Customers') }}</strong>
        </div>
        <ul class="list-group list-group-flush">
            @if (count($customers) == 0)
                <li class="list-group-item">{{ __('No customers found') }}</li>
            @endif
            @foreach ($customers as $customer)
            <li class="list-group-item">
                <a href="{{ route('user.index', $customer) }}">{{ $customer->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
