@extends('partials.master')
@section('content')
<section class="container py-4">
    <div class="card">
        <div class="card-header">
            <strong>{{ $customer->name . '\'s ' . __('users') }}</strong>
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($users as $user)
            <li class="list-group-item">
                <a href="{{ route('user.index', ['customer' => $customer, 'user' => $user]) }}">{{ $user->name }}</a>
            </li>
            @endforeach
        </ul>
        <div class="card-body">
            <a href="{{ route('user.create', $customer) }}" class="btn btn-primary">New user +</a>
        </div>
    </div>
</section>
@endsection
