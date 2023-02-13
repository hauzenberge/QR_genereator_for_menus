<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MenuITem;

use Illuminate\Database\Eloquent\Casts\Attribute;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MenuType extends Model
{
    use HasFactory;

    protected $table = 'menu_types';

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];

    protected function getQRUrlAttribute()
    {
        QrCode::encoding('UTF-8')->size(300)->generate($this->name, public_path() . '/qrcodes/' . $this->name . '.svg');
   
         return asset('qrcodes/'. $this->name .'.svg');
    }

    public function items()
    {
        return $this->hasMany(MenuITem::class);
    }
}
