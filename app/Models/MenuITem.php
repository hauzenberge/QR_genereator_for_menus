<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuITem extends Model
{
    use HasFactory;

    protected $table = 'menu_items';

    protected $fillable = [
        'id',

        'menu_type_id',
        'name',
        'price',

        'created_at',
        'updated_at'
    ];

    public static function getMenuString($menu_type_id)
    {
        $menu = MenuITem::where('menu_type_id', $menu_type_id)
                        ->get()
                        ->map(function($item){
                            return  "-" . $item->name . ":  " . $item->price;
                        });
        return $menu->implode("\n");
    }
}
