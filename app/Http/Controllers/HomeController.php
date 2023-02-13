<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MenuType;
use App\Models\MenuITem;

use Illuminate\Support\Facades\File; 

class HomeController extends Controller
{
    public function index()
    {
        $menu_types = MenuType::with('items')->get();
        return view('home',[
            'menus' => $menu_types
        ]);
    }

    public function menuAdd(Request $request)
    {
        MenuType::create(['name' => $request->input("name")]);
        return redirect('/');
    }

    public function menuDelete($id)
    {
        $menu = MenuType::find(intval($id));

        MenuITem::where('menu_type_id', intval($id))->delete();
        $menu->delete();
        return redirect('/');
    }

    public function menuItemAdd($id)
    {
        MenuITem::create(['menu_type_id' => $id]);
        return redirect('/');
    }
    public function menuItemDelete($id)
    {
        $menuItem = MenuITem::find(intval($id));
        $menuItem->delete();
        return redirect('/');
    }

    public function menuItemUpdate($id, Request $request)
    {
        $menuItem = MenuITem::find(intval($id));
        $menuItem->name = $request->input('name');
        $menuItem->price = $request->input('price');
        $menuItem->save();
        return redirect('/');
    }
}
