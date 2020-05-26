@extends('partials.master')
@section('content')
<section class="container py-4">
    <form class="card" method="POST" action="{{ route('user.update', ['customer' => $customer, 'user' => $user]) }}">
        @csrf
        @method('PATCH')
        <div class="card-header">
            <strong>{{ __('Edit :user', ['user' => $user->name]) . '\'s ' . __('user') }}</strong>
        </div>
        <div class="card-body">
            @include('users.form-fields')

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </div>
    </form>
</section>
@endsection
