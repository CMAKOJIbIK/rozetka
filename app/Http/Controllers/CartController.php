<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::get();
        $user_profile = UserProfile::get();
        return view('cart')
            ->with('cart', $cart)
            ->with('user_profile', $user_profile);
    }

    //
}
