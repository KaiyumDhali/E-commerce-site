<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;
    public function registration()
    {
        return view('website.usere.auth.registration');
    }
    public function registrationCustom(Request $request)
    {
       Customer::registerUser($request);
      return view('website.home.home');

    }

    public function loginCustom()
    {
        return view('website.usere.auth.login');
    }


    public function loginCheck(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id',$this->customer->id);
                Session::put('customer_name',$this->customer->name);


                return view('website.home.home');


            }
            else
            {
                return redirect('/login-custom')->with('message','password is wrong');

            }
        }
        else
        {
            return redirect('/login-custom')->with('message','email is wrong');

        }
    }


    public function customLogout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect('/login-custom');
    }
}
