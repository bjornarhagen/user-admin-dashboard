@extends('partials.master')
@section('content')
<section class="container py-4">
    <div class="card">
        <div class="card-header">
            <strong>{{ $customer->name . '\'s ' . __('users') }}</strong>
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($users as $user)
            <li class="list-group-item d-flex justify-content-between">
                <a href="{{ route('user.edit', ['customer' => $customer, 'user' => $user]) }}">{{ $user->name }}</a>
                <form action="{{ route('user.delete', ['customer' => $customer, 'user' => $user]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn py-0" type="submit">&times;</button>
                </form>
            </li>
            @endforeach
        </ul>
        <div class="card-body">
            <a href="{{ route('user.create', $customer) }}" class="btn btn-primary">New user +</a>
        </div>
    </div>
</section>
@endsection
