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
        $users = $customer->users->paginate(100);
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new user.
    public function create(Customer $customer, User $user)
    {
        return view('user.create', compact('user'));
    }

    // Store a newly created user in storage.
    public function store(Request $request, Customer $customer)
    {
        $user = new User;
        $user->save();

        return redirect()->route('user.show', ['customer' => $customer, 'user' => $user]);
    }

    // Display the specified user.
    public function show(Customer $customer, User $user)
    {
        return view('user.show', compact('customer', 'user'));
    }

    // Show the form for editing the specified user.
    public function edit(Customer $customer, User $user)
    {
        return view('user.edit', compact('customer', 'user'));
    }

    // Update the specified user in storage.
    public function update(Request $request, Customer $customer, User $user)
    {
        $user->name_first = $request->name_first;
        $user->save();

        return redirect()->route('user.show', ['customer' => $customer, 'user' => $user]);
    }

    // Remove the specified user from storage.
    public function destroy(Customer $customer, User $user)
    {
        $user->delete();
        return redirect()->route('user.index', ['customer' => $customer, 'user' => $customer]);
    }
}
