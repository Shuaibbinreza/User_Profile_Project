<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Addresses;
use App\Models\ProfileImg;
use App\Models\UserAddress;
use App\Models\UserExperience;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Config;
$abc='';
class AuthController extends Controller
{
    
    public function index($name = null){
        global $abc;
        $data = compact('name');
        $abc = $data;
        return view("pages.auth.login")->with($data);
    }

    public function login(Request $request, $name = null){
        global $abc;
        // dd($request->all());
        $this->validate($request,[
            "email"=> "required",
            "password"=> "required",
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        
        return redirect('login-failed')->withError('Login details are not valid');
        // return redirect('/'.$abc)->withError('Login details are not valid');
    }

    public function register_view($name = null){
        $data = compact('name');
        return view("pages.auth.register")->with($data);
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'profile_photo_path'=> 'nullable|mimes:png,jpg,jpeg,gif',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        if($request->has('image')){
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();  

            $filename = time().'.'.$extention;

            $path = 'uploads/user/';
            $image->move($path, $filename);
        }

        User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=> $request->address,
            'image'=>$path.$filename,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        return redirect('register')->withError('Error');
    }

    public function home(){
        return view('pages.auth.login1');
    }

    public function editprofile(){
        // $profile = User::find($id);
        // dd($profile);
        return view('edit');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }

    public function profileEdit(){
        return view('pages.dashboards.profileEdit');
    }

    public function profileDetails(){
        return view('pages.dashboards.profileDetails');
    }

    public function registerP2(){
        return view('pages.auth.register_phase2');
    }
    
    public function formSubmit(Request $request){
        
        // $this->validate($request,[
        //     'district'=>'required',
        //     'thana'=> 'required',
        //     'post_office'=> 'required',
        //     'alt_mobile'=> 'required',
        //     'houseno'=> 'required',
        // ]);
        
        // $address = new Addresses();
        // $address->thana = $request->thana;
        // $address->alt_mobile = $request->alt_mobile;
        // $address->district = $request->district;
        // $address->post_office = $request->post_office;
        // $address->houseno = $request->houseno;
        // $address->user_id = \Auth::user()->id;
        
        // $image = '';
        // if($request->has('profile_image')){
        //     $image = $request->file('profile_image');
        //     $extention = $image->getClientOriginalExtension();  

        //     $filename = time().'.'.$extention;

        //     $path = 'uploads/user/';
        //     $image->move($path, $filename);
        // }
        
        // $pimage = new ProfileImg();
        // $pimage->profile_image = $path.$filename;
        // $pimage->user_id = \Auth::user()->id;
        
        // $pimage->save();
        // $address->save();

        // $point = User::where('id', \Auth::user()->id)->first();
        // $point->profile_completed = true;

        // $point->save();

        // $this->validate($request,[
        //     'company_name'=> 'required',
        //     'designation'=> 'required',
        //     'job_start'=> 'required',
        // ]);

        // $experience = new UserExperience();
        // $experience->user_id = \Auth::user()->id;
        // $experience->company_name = $request->company_name;
        // $experience->designation = $request->designation;
        // $experience->job_start = $request->job_start;
        // $experience->job_end = $request->job_end;
        
        // if( $request->educationCK == 'on' ){
        //     // $experience->continue = "Continue";
        //     // return view("home")->with("data",$request);
        // }
        // if( $request->experienceCK == "on"){
        //     $experience->continue = "Continue";
        //     // return view("home")->with("data",$request);
        // }
        // // else{
        // //     dd($request->all());
        // // }
        // $experience->save();

        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');

        // Construct a date string in the format "Y-m-d"
        $dateString = sprintf('%04d-%02d-%02d', $year, $month, $day);

        // Convert the string into a DateTime object
        $date = date_create_from_format('Y-m-d', $dateString);

        return view('home')->with('date', $date);
    }

    public function formSubmit1(Request $request){

        dd($request->all());
    }
}
