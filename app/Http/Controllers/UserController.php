<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of users.
    public function index(Request $request, Customer $customer)
    {
        $users = $customer->activeUsersSorted;

        return view('users.index', compact('customer', 'users'));
    }

    // Show the form for creating a new user.
    public function create(Customer $customer, User $user)
    {
        return view('users.create', compact('customer', 'user'));
    }

    // Store a newly created user in storage.
    public function store(Request $request, Customer $customer)
    {
        $user = new User;
        $user->name_first = $request->name_first;
        $user->name_last = $request->name_last;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->customer_id = $customer->id;
        $user->validate();
        $user->save();

        $request->session()->flash('success', __('The user was successfully created'));
        return redirect()->route('user.index', $customer);
    }

    // Show the form for editing the specified user.
    public function edit(Customer $customer, User $user)
    {
        return view('users.edit', compact('customer', 'user'));
    }

    // Update the specified user in storage.
    public function update(Request $request, Customer $customer, User $user)
    {
        // Make sure the user belongs to the spesified customer
        if ($customer->id == $user->customer_id) {
            $user->name_first = $request->name_first;
            $user->name_last = $request->name_last;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->validate();
            $user->save();

            $request->session()->flash('success', __('The user was successfully updated'));
            return redirect()->route('user.edit', ['customer' => $customer, 'user' => $user]);
        }

        $request->session()->flash('danger', __('You are not allowed to do that'));
        return redirect()->route('index');
    }

    // Soft delete the specified user.
    public function delete(Request $request, Customer $customer, User $user)
    {
        $user->deleted = 1;
        $user->save();

        $request->session()->flash('warning', __('The user was deleted'));
        return redirect()->route('user.index', $customer);
    }
}
