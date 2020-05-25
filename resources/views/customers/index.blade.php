@extends('partials.master')
@section('content')
<section class="container py-4">
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Customers') }}</strong>
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($customers as $customer)
            <li class="list-group-item">
                <a href="{{ route('user.index', $customer) }}">{{ $customer->name }}</a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
