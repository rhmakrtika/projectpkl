<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', Role::class]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $user = User::orderBy('id', 'desc')->get();
        return view('user.index', compact('user', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'residence' => ['required', 'string', 'max:255'],
            'gander' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cover' => ['required'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->residence = $request->residence;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cover = $request->cover;

        //upload image
        if ($request->hashFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/user', $name);
            $user->cover = $name;
        }
        $user->save();

        return redirect()->route('user.index')
       ->with('success', 'Data Added Successfully!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'residence' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                // use Illuminate\Validation\Rule;
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cover' => ['required'],
        ]);

        $user->name = $request->name;
        $user->residence = $request->residence;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->cover = $request->cover;

        //upload image
        if ($request->hasFile('cover')) {
            $user->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/user', $name);
            $user->cover = $name;
        }

        $user->save();

        return redirect()->route('user.index')
       ->with('success', 'Data Changed Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id != $user->id) {
            $user->delete();
            return redirect()->route('user.index');
        }
        return redirect()->route('user.index');
    }
}
