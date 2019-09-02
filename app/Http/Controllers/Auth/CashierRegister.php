<?php

namespace App\Http\Controllers\Auth;

use App\Cashier;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class CashierRegisterController extends Controller
{
    protected $table = 'cashiers';
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

    //  use RegistersUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        return view('adminRegister');
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
        $user = new User();

        $adminId = Admin::pluck('adminId')->last();
        $admin->adminId = $adminId + 1;
        $admin->fname = $request['fname'];
        $admin->lname = $request['lname'];
        $admin->no = $request['no'];
        $admin->street = $request['street'];
        $admin->city = $request['city'];
        $admin->email = $request['email'];
        $admin->phoneNo = $request['phoneNo'];
        $admin->password = $request['password'];

        $userId = User::pluck('userId')->last();
        $user->userId = $userId + 1;
        $user->username = "customer";
        $user -> password = bcrypt(request('password'));


        $admin->save();
        $user->save();
        return redirect('adminDashboard');  
    }

    public function validation($request){
        
        
        return $this->validate($request,[
            'fname' => 'required|max:225',
            'lname' => 'required|max:225',
            //'email' => 'required|email|unique:customers|max:225',
            'mobile' => 'required|max:10',
            'no' => 'required|max:225',
            'street' => 'required|max:225',
            'city' => 'required|max:225',
            'phoneNO' => 'required|max:225',
            'password' => 'required|confirmed|max:225',
        ]);

    }
}