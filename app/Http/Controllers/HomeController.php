<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Menu;
use App\Mail\VerifyEmail;
use App\Models\Subscriber;
use App\Models\Reservation;
use Illuminate\Support\Str;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Requests\HeroRequest;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SubscriberRequest;
use App\Http\Requests\ReservationRequest;

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

    public function storeReservation(ReservationRequest $request)
    {
        $reservation = new Reservation();
        $reservation->name = $request['name'];
        $reservation->phone = $request['phone'];
        $reservation->email = $request['email'];
        $reservation->adult = $request['adult'];
        $reservation->children = $request['children'];
        $reservation->kids = $request['kids'];
        $reservation->date = $request['date'];
        $reservation->time = $request['time'];
        $reservation->status = $request['status'];
        $reservation->save();
        return redirect()->back()->with('status', 'Received, One of our team is validating the availability of your date and time.');
    }
    public function updateReservation(ReservationRequest $request, Reservation $reservation)
    {
        $reservation = Reservation::findOrFail($reservation->id);
        $reservation->email = $request['email'];
        $reservation->date = $request['date'];
        $reservation->time = $request['time'];
        $reservation->status = $request['status'];
        $reservation->payment_link = $request['payment_link'];
        $reservation->payment_approved = $request['payment_approved'];
        $reservation->save();
        return redirect()->route('reservations.index')->with('status', 'Updated. Notification sent to customer email!');
    }
    public function deleteReservation(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->back()->with('status', 'Delete');
    }

    public function storeSubscriber(SubscriberRequest $request)
    {
        $verificationToken = Str::random(32); // Generate a random verification token
        $subscriber = new Subscriber();
        $subscriber->email = $request['email'];
        $subscriber->verification_token = $verificationToken;
        $subscriber->save();
    
        Mail::to($subscriber->email)->send(new VerifyEmail($verificationToken));
    
        return redirect()->back()->with('status', 'Thank you! Please check your email to verify your subscription.');
    }
    
    public function verifySubscriber($verificationToken)
    {
        $subscriber = Subscriber::where('verification_token', $verificationToken)->firstOrFail();
    
        $expires = request('expires');
        if ($expires && now()->timestamp > $expires) {
            // Verification link has expired
            return view('verification.expired');
        }
    
        // Mark the subscriber as verified
        $subscriber->verified = true;
        $subscriber->verification_token = null;
        $subscriber->save();
    
        return view('verification.success');
    }
    

    public function deleteSubscriber(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->back()->with('status', 'Delete');
    }
}
