<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'postal_code',
        'address',
        'number',
        'district',
        'city',
        'country',
        'state',
        'user_id',
        'created_at',
        'updated_at'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function store($data, $id)
    {
        $address    = new Address;
        $address->address   = $data->address;
        $address->number = $data->number;
        $address->district  = $data->district;
        $address->postal_code  = $data->postal_code;
        $address->city      = $data->city;
        $address->state     = $data->state;
        $address->country   = $data->country;
        $address->user_id   = $id;
        $address->save();
    }
}
