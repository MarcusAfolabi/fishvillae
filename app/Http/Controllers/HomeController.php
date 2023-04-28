<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Support\Str;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function storeHero(HeroRequest $request)
    {
        $hero = new Hero;
        $hero->title = $request['title'];
        $hero->subtitle = $request['subtitle'];

        if ($request->hasFile('image')) {
            $hero->image = 'storage/' . $request->file('image')->store('sliderImages', 'public');
        }
        $hero->save();
        return redirect()->back()->with('status', 'Created');
    }

    public function updateHero(HeroRequest $request, Hero $hero)
    {
        $hero = Hero::findOrFail($hero->id);
        $hero->title = $request['title'];
        $hero->subtitle = $request['subtitle'];

        if ($request->hasFile('image')) {
            Storage::delete($hero->image);
            $hero->image = 'storage/' . $request->file('image')->store('sliderImages', 'public');
        }

        $hero->save();
        return redirect()->route('hero.index')->with('status', 'Hero updated successfully!');
    }

    public function deleteHero(Hero $hero)
    {
        Storage::disk('public')->delete([
            str_replace('storage/', '', $hero->logo),
        ]);
        $hero->delete();
        return redirect()->back()->with('status', 'Deleted');
    }

    public function storeMenuCategory(HeroRequest $request)
    {
        $menuCategory = new MenuCategory();
        $menuCategory->title = $request['title'];
        $menuCategory->slug = Str::slug($request['title'], '-');
        $menuCategory->save();
        return redirect()->route('category.index')->with('status', 'Menu Category created successfully!');
    }

    public function updateMenuCategory(HeroRequest $request, MenuCategory $menuCategory)
    {
        $menuCategory = MenuCategory::findOrFail($menuCategory->id);
        $menuCategory->title = $request['title'];
        $menuCategory->slug = Str::slug($request['title'], '-');
        $menuCategory->save();
        return redirect()->route('category.index')->with('status', 'Menu Category udpated successfully!');
    }

    public function deleteMenuCategory(MenuCategory $menuCategory)
    {
        $menuCategory->delete();
        return redirect()->back()->with('status', 'Deleted');
    }

    public function storeMenu(MenuRequest $request)
    {
        $menu = new Menu();
        $menu->title = $request['title'];
        $menu->slug = Str::slug($request['title'], '-');
        $menu->description = $request['description'];
        $menu->price = $request['price'];
        $menu->menu_category = $request['menu_category'];

        if ($request->hasFile('image')) {
            $menu->image = 'storage/' . $request->file('image')->store('menuImages', 'public');
        }
        $menu->save();
        return redirect()->back()->with('status', 'Created');
    }
    public function updateMenu(MenuRequest $request, Menu $menu)
    {
        $menu = MenuCategory::findOrFail($menu->id);
        $menu->title = $request['title'];
        $menu->slug = Str::slug($request['title'], '-');
        $menu->description = $request['description'];
        $menu->price = $request['price'];
        $menu->menu_category = $request['menu_category'];

        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $menu->image = 'storage/' . $request->file('image')->store('menuImages', 'public');
        }
        $menu->save();
        return redirect()->route('menu.index')->with('status', 'Menu udpated successfully!');
    }
    public function deleteMenu(Menu $menu)
    {
        $menu->delete();
        return redirect()->back()->with('status', 'Deleted');
    }
}
