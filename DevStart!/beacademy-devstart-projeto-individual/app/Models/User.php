<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'password_created_at',
        'birthday',
        'cpf',
        'userType',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password_created_at' => 'datetime',
    ];

    public function Phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function Addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function store($data)
    {
        $user = new User;
        $user->name     = $data->name;
        $user->email    = $data->email;
        $user->password = Hash::make($data->password);
        $user->birthday = $data->birthday;
        $user->cpf      = $data->cpf;
        $user->save();

        return $user->id;
    }

    public function imageUser($request)
    {
        $user = User::findOrFail($request->id);

        if($user->image){
            $fileName = (explode("/", $user->image));

            if(Storage::disk('s3')->exists("/images/user/profile/$user->id/$fileName[7]")){
                Storage::disk('s3')->delete("/images/user/profile/$user->id/$fileName[7]");
            }
        }

        $path = Storage::disk('s3')->put("images/user/profile/$user->id", $request->image);
        $path = Storage::disk('s3')->url($path);

        $user->image = $path;
        $user->save();
    }
}
