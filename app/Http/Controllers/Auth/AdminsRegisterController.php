<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class AdminsRegisterController extends Controller
{
    protected $table = 'admins';
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

     use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin.dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegisterForm(){
        return view('auth.admin-register');
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [

    //         'phoneNo' => ['required', 'string', 'max:255'],
    //         'nic' => ['required', 'string', 'max:255'],
    //         //'email' => ['required', 'string', 'email', 'max:255'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // protected function create(array $data)
    // {
    //     $customer = new Customer();
    //     $customerId = Customer::pluck('customerId')->last();
    //     // return Customers_phoneNo::create([
    //     //     'phoneNo' => $data['phoneNo'],
    //     //     'nic' => $data['nic'],
    //     //     'email' => $data['email'],
    //     //     'password' => Hash::make($data['password']),
    //     // ]);

    //     return Customer::create([
    //         'customerId' => $data['$customerId'],
    //         'fname' => $data['fname'],
    //         'lname' => $data['lname'],
    //         'no' => $data['no'],
    //         'street' => $data['street'],
    //         'city' => $data['city'],
    //     ]);
    

    // }

    public function register(Request $request){
        
        $admin = new Admin();
        $user = new Users();

        
        $adminId = Admin::pluck('adminId')->last();
        $userId = Users::pluck('userId')->last();

        $admin->adminId = $adminId + 1;
        $admin->fname = $request['fname'];
        $admin->lname = $request['lname'];
        $admin->no = $request['no'];
        $admin->nic = $request['nic'];
        $admin->street = $request['street'];
        $admin->city = $request['city'];
        $admin->email = $request['email'];
        $admin->phoneNo = $request['phoneNo'];
        $admin->password = bcrypt('password');
        $admin->remember_token=str_random(20);
        $admin->userId = $userId + 1;
        
        $user->userId = $userId + 1;
        $user->username = 'admin';
        $user->password = bcrypt('password');
       
        $user->save();
        $admin->save();
        
        return view('admin.layout.admin');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            'email' => 'required|email|unique:customers|max:225' ,'unique:admins',
            'mobile' => 'required|max:10',
            'no' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'phoneNO' => 'required|max:225',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}