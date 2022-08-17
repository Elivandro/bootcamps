<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id',
        'nickname',
        'name',
        'description',
        'specie',
        'origin',
        'height',
        'substract',
        'Fertilizing',
        'image',
        'created_at',
        'updated_at'
    ];

    public function getProducts(string $search = null)
    {
        $products = $this->where(function ($query) use ($search)
        {
            if($search){
                $query->where('nickname', 'LIKE', "%{$search}%");
                $query->orWhere('name', 'LIKE', "%{$search}%");
                $query->orWhere('specie', 'LIKE', "%{$search}%");
                $query->orWhere('origin', 'LIKE', "%{$search}%");
            }
        })->paginate(6);

        return $products;
    }
}
