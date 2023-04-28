<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Requests\HeroRequest;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function storeHero(HeroRequest $request, Hero $hero)
    { 
        $hero = new Hero;
        $hero->title = $request['title'];
        $hero->subtitle = $request['subtitle'];

        if ($request->hasFile('image')) {
            $hero->image = 'storage/' . $request->file('image')->store('sliderImages', 'public');
        }
        $hero->save();
        return redirect()->route('hero.index')->with('success', 'Hero created successfully!');
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
    }
    public function deleteHero(Hero $hero)
    {
        Storage::disk('public')->delete([
            str_replace('storage/', '', $hero ->logo),
        ]);
        $hero ->delete();
        return redirect()->back()->with('status', 'Deleted');
    }
}
