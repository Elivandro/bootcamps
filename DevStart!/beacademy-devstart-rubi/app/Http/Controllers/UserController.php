<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Address,
    Phone
};
use \App\Http\Requests\ValidateFormsRequest;

class UserController extends Controller
{
    protected $user;
    protected $address;
    protected $phone;

    public function __construct(User $user, Address $address, Phone $phone)
    {
        $this->user = $user;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('account.index');
        }else{
            return view("users.login");
        }
    }

    public function create()
    {
        return view("users.register");
    }

    public function recovery()
    {
        return view("users.recovery");
    }

    public function store(ValidateFormsRequest $request)
    {
        $user = $this->user->store($request);
        $this->address->store($request, $user);
        $this->phone->store($request, $user);

        return redirect()->route('users.create')->with('success', 'Cadastro realizado com sucesso!!!');

    }

    public function auth(Request $request)
    {

            $this->validate($request, [
                'email' =>  'required',
                'password' => 'required'
            ]);

                if(auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                    return redirect()->route('account.index');
                }

                return redirect()->back()->with('danger', 'Email ou senha invalido!');
    }
}