<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MenuITem;

class QrCodeController extends Controller
{
  public function index()
  {
    //  dd(MenuITem::where('menu_type_id', 1)->get());
    //  dd(MenuITem::getMenuString(1));
    return view('qrcode', [
      'drink_menu' => MenuITem::getMenuString(1)
    ]);
  }
}
