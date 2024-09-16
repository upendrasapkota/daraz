<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use function Pest\Laravel\get;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $userQuery = User::query();

        if ($search) {
            $userQuery->where('name', 'LIKE', '%' . $search . '%');
        }
//        $user = User::all();
        $user = $userQuery->with('order')->paginate(5);
        return view('users.index', compact('user', 'search'));
    }


    public function create()
    {
        return view('users.create');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }


    public function store(Request $request)
    {
        // Validate the request data
        $messages = [
            'name.required' => 'Please enter your name.',
            'email.required' => 'An email address is required.',
            'email.unique' => 'This email address is already registered.',
            'password.required' => 'Please enter a password.',
            'password.min' => 'The password must be at least 6 characters.',
            'password.confirmed' => 'The password field and password confirmation field does not match.',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6'
        ], $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)->withInput();
        }
        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash the password

        // Save the user
        $user->save();
        toastr()->success('Your account has been created successfully.');
        // Redirect to a different page or show a success message
        return redirect()->route('user.index');
    }

    public function update(Request $request, $id)
    {
        // Validate the request data

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)->withInput();
        }
        // Create a new user
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        // Save the user
        $user->save();
        toastr()->success('Your account has been updated successfully.');
        // Redirect to a different page or show a success message
        return redirect()->route('user.index');
    }

}
