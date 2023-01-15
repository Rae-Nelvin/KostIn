<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AlamatDetail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required' ],
            // 'confirmed', Rules\Password::defaults()
            // 'alamat' => ['required'],
            // 'kecamatan' => ['required'],
            // 'kabupaten' => ['required'],
            // 'provinsi_id' => ['required', 'exists:provinces'],
            // 'kode_pos' => ['required', 'numeric'],
            // 'phone' => ['required'],
        ]);

        // $kabupaten_id = Kabupaten::find($request->kabupaten_id);

        // $alamat = AlamatDetail::create([
            // 'alamat' => $request->alamat,
            // 'kecamatan' => $request->kecamatan,
            // 'kabupaten_id' => $kabupaten_id->id,
            // 'provinsi' => $request->provinsi,
            // 'kode_pos' => $request->kode_pos
        // ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'alamat_id' => $alamat->id,
            'phone' => $request->phone,
            'role_id' => 3
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::USERHOME);
    }
}
