<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\User;
use App\Customers_phoneNo;
//form field validation
use Validator;

//user details authentication
use Auth;

class CustomAuthController2 extends Controller
{   
    protected $customer,$user;

    public function __construct(){
        
    }
    
    public function register2(Request $request){
        $customer = new Customer();
        $user = new User();
        $customerEx = new Customers_phoneNo();

        $customerId = Customer::pluck('customerId')->last();
        $customer->customerId =$customerId + 1;
        $customer->fname = $request['fname'];
        $customer->lname = $request['lname'];
        $customer->no = $request['no'];
        $customer->street = $request['street'];
        $customer->city = $request['city'];

        $userId = User::pluck('userId')->last();
        $user->userId = $userId + 1;
        $user->username = "admin";
        $user -> password = bcrypt(request('password'));
        

        $customerId = Customers_phoneNo::pluck('customerId')->last();
        $customerEx->customerId = $customerId + 1;
        $customerEx->email = "email";
        $customerEx->nic = "nic";
        $customerEx->phoneNo = "phoneNo";
        $customerEx->userId = $userId + 1;
        $customerEx -> password = bcrypt(request('password'));

        $customer->save();
        $user->save();
        $customerEx->save();
        return redirect('userDashboard');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:customers|max:225',
            'phoneNo' => 'required|max:10',
            'nic' => 'required|max:10',
            'no' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}