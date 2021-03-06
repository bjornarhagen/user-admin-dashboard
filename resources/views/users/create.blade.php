@extends('partials.master')
@section('content')
<section class="container py-4">
    <form class="card" method="POST" action="{{ route('user.store', $customer) }}">
        @csrf
        <div class=" card-header">
            <strong>{{ __('Create a new user for :customer', ['customer' => $customer->name]) }}</strong>
        </div>
        <div class="card-body">
            @include('users.form-fields')

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </div>
    </form>
</section>
@endsection
