<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        header('Cache-Control: public, max-age=604800');

        return view('welcome');
    }

    public function dashboard(){
        $menus = Menu::select('id', 'title', 'description', 'price', 'image')->get();
        $menu_categories = MenuCategory::select('id', 'title')->get();
        return view('admin.dashboard.index', compact('menu_categories', 'menus'));
    }

    public function menuCategory(){
        $menu_categories = MenuCategory::all();
        return view('admin.menuCategory.index', compact('menu_categories'));
    }
}
