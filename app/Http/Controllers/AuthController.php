<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Http\Controllers\User;
use App\Models\User as ModelsUser;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registration()
    {
        return view ('Auth/registration');
    }

    public function login()
    {
        return view ('Auth/login');
    }

    public function navbar()
    {
        return view ('Auth/navbar');
    }

    public function home()
    {
        return view ('Auth/home');
    }

    public function about()
    {
        return view ('Auth/about');
    }



    function registrationPost (Request $request)
    {
        // Validate incoming request data
         $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',
    ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = ModelsUser::create($data);
        if($user)
        {
            return redirect(route('logged'))->with('error', 'Registration failed. please try again');
        }
        return redirect(route('register'))->with('success', 'Registration was sucessful');

    }

    function logout()
    {
        Session::flush();
        Auth::logout();  
        return redirect(route('logged'));
    }

    function LoginPost (Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
        {
            return redirect()->intended(route('home'));
        }
        return redirect(route('logged'))->with('error', 'Login failed');


    }

    public function showProducts()
{
    $products = [
        'img/apples.jpg',
        'img/pick.jpg',
        'img/screen.jpg',
        'img/grapes.jpg',
        'img/fdelivery.jpg',
        'img/babe.jpg',
        'img/apples.jpg',
        'img/pineapple.jpg'
    ];

    return view('products', compact('products'));
}


   //function to add fruit items to CART
    public function addToCart(Request $request)
    {
        $fruit = $request->input('fruit');
        $cart = session()->get('cart', []);
        $cart[] = $fruit;
        session()->put('cart', $cart);

        return response()->json(['success' => 'Fruit added to cart']);
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);

        return view('cart', ['cart' => $cart]);
    }
}


