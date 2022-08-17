<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequestData;
use App\Models\Address;
use App\Models\Phone;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisteredUserController extends Controller
{
    private $user;
    private $phone;
    private $address;

    public function __construct(User $user, Phone $phone, Address $address)
    {
        $this->user = $user;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function create()
    {
        return view('users.register');
    }

    public function store(ValidateRequestData $request)
    {
        $user = $this->user->store($request);
        $this->phone->store($request, $user);
        $this->address->store($request, $user);

        return redirect(RouteServiceProvider::HOME);
    }
}
