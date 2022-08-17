<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'description',
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
        $phone      = new phone;
        $phone->phone       = $data->phone;
        $phone->description = $data->description;
        $phone->user_id     = $id;
        $phone->save();
    }
}
