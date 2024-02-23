<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpOption\None;

class UserControlller extends Controller
{
    public function sign_up(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'email' =>'required | email | unique:users',
            'password' => 'required | min:4',
            'experience' =>'required',
            'country' =>'required',
            'position' =>'required',
            'bio' =>'required',
        ]);

        $result = User::create($data);
        if ($result)
        {
            return redirect()
            ->route('sign-in')
            ->withSuccess("Registered Successfully!!!");
        } else {
            return redirect()
            ->route('sign-up')
            ->withFailed("Something went wrong!!!");
        }
    }

    public function sign_in(Request $req)
    {
        $credentials = $req->validate([
            'email' =>'required | email',
            'password' => 'required | min:4 | max:10'
        ]);

        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();
            return view('home');
        } else {
            return redirect()
            ->route('sign-in')
            ->withWrong('Sign-in Failure!! Try Again!!! Check whether email & password');
        }
    }

    public function sign_out(Request $req):RedirectResponse
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()
        ->route('sign-in')
        ->withMessage('You sign-out Successfully... sign-in again!!!');
    }

    public function contact(Request $req) {

        $req->validate([
            'name' =>'required',
            'email' =>'required | email | unique:contacts',
          'subject' =>'required',
         'message' =>'required'
        ]);

        $contact = new Contact();

        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->subject = $req->subject;
        $contact->message = $req->message;
        $res = $contact->save();

        if ($res) {
            return back();
        }
    }


    public function payment_gateway(Request $req)
    {
        $req->validate([
            'item_name' =>'required | min: 3',
            'color' =>'required | min : 2',
            'quantity' =>'required | numeric',
          'size' =>'required | min : 3',
           'total' =>'required'
        ]);
        $payment = new Payment();
        $payment->item_name = $req->item_name;
        $payment->color = $req->color;
        $payment->quantity = $req->quantity;
        $payment->size = $req->size;
        $payment->total = $req->input('total');
        $res = $payment->save();

        if ($res) {
            return back()
            ->with('success', 'Payment Successful');
        } else {
            return back()
            ->with('failed', 'Payment Failed');
        }
    }
}