<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    Address,
    Phone,
    User,
    Product
};

class AccountController extends Controller
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

    public function index()
    {
        $users = User::all();
        $products = Product::all();
        return view('auth.dashboard', compact('users', 'products'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('users.login')->with('danger', 'Sessao encerrada com sucesso.');
    }

    public function editdashboard()
    {
        return view('auth.userdashboard');
    }

    public function updatedashboard(request $request, $id)
    {
        if(!$user = $this->user->find($id)){

            return redirect()->route("account.index");

        }

        $data = $request->only('name', 'email', 'birthday', 'cpf');

        if($request->password){

            $data['password'] = password_hash($request->password, PASSWORD_ARGON2I);

        }

        $user->update($data);

        return redirect()->route("account.index")->with('edit', "Dados pessoais atualizado com sucesso!");
    }

    public function regaddress()
    {
        return view('auth.address');
    }

    public function regphone()
    {
        return view('auth.phone');
    }

    public function editaddress($id)
    {
        if(!$address = $this->address->find($id)){
            return view('auth.dashboard');
        }

        return view('auth.editaddress', compact("address"));
    }

    public function editphone($id)
    {
        if(!$phone = $this->phone->find($id)){
            return view('auth.dashboard');
        }

        return view('auth.editphone', compact("phone"));
    }

    public function storeaddress(request $request, $id)
    {
        $data = $request->all();
        $data['user_id']    = $id;

        $this->address->create($data);

        return redirect()->route("account.index")->with('create', "Novo endereço cadastrado com sucesso!");

    }

    public function storephone(request $request, $id)
    {
        $data = $request->all();
        $data['user_id']    = $id;

        $this->phone->create($data);

        return redirect()->route("account.index")->with('create', "Novo telefone cadastrado com sucesso!");
    }

    public function updatephone(request $request, $id)
    {
        if(!$phone = $this->phone->find($id)){

            return redirect()->route("account.index");

        }
        $data = $request->all();
        $phone->update($data);

        return redirect()->route("account.index")->with('edit', "Telefone atualizado com sucesso!");

    }

    public function updateaddress(request $request, $id)
    {
        if(!$address = $this->address->find($id)){

            return redirect()->route("account.index");

        }
        $data = $request->all();

        $address->update($data);

        return redirect()->route("account.index")->with('edit', "Endereço atualizado com sucesso!");

    }

    public function addressdestroy($id)
    {
        if($address = $this->address->find($id)){

            $address->delete();
            return redirect()->route("account.index")->with('destroy', "Endereço deletado com sucesso!");

        }else{

            return redirect()->route("account.index");

        }
    }

    public function phonedestroy($id)
    {
        if($phone = $this->phone->find($id)){

            $phone->delete();
            return redirect()->route("account.index")->with('destroy', "Telefone deletado com sucesso!");

        }else{

            return redirect()->route("account.index");

        }

    }

}