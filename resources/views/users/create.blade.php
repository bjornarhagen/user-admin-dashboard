@extends('partials.master')
@section('content')
<section class="container py-4">
    <form class="card" method="POST">
        @csrf
        <div class="card-header">
            <strong>{{ __('Create a new user for :customer', ['customer' => $customer->name]) }}</strong>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input-first-name">First name</label>
                    <input type="text" class="form-control" id="input-first-name" name="name_first" required autofocus autocapitalize="on">
                </div>
                <div class="form-group col-md-6">
                    <label for="input-last-name">Last name</label>
                    <input type="text" class="form-control" id="input-last-name" name="name_last" required autocapitalize="on">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="input-email">Email</label>
                    <input type="email" class="form-control" id="input-email" name="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="input-phone">Phone</label>
                    <input type="text" inputmode="numeric" class="form-control" id="input-phone" name="phone_number" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create user</button>
        </div>
    </form>
</section>
@endsection
