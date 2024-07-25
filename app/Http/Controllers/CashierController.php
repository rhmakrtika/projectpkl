<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Role;
use App\Models\Cashier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class CashierController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cashier = Cashier::all();
        return view('cashier.index', compact('cashier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cashier.create');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cashiers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $cashier = new cashier();
        $cashier->name = $request->name;
        $cashier->residence = $request->residence;
        $cashier->gender = $request->gender;
        $cashier->email = $request->email;
        $cashier->password = Hash::make($request->password);

        $cashier->save();

        return redirect()->route('cashier.index')
       ->with('success', 'Data Added Successfully!') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Cashier $cashier)
    {
        return view('cashier.show', compact('cashier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashier $cashier)
    {
        return view('cashier.edit', compact('cashier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cashier $cashier)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'residence' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email', 'max:255',
                // use Illuminate\Validation\Rule;
                Rule::unique('cashiers')->ignore($cashier->id),
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $cashier->name = $request->name;
        $cashier->residence = $request->residence;
        $cashier->gender = $request->gender;
        $cashier->email = $request->email;
        $cashier->password = Hash::make($request->password);

        $cashier->save();

        return redirect()->route('cashier.index')
       ->with('success', 'Data Changed Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cashier $cashier)
    {
        if (Auth::cashier()->id != $cashier->id) {
            $cashier->delete();
            return redirect()->route('cashier.index');
        }
        return redirect()->route('cashier.index');
    }
}
