<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(20);
        return view('Admin.pages.customer.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    public function postLogin(Request $request){
       
        $email=$request->email;
        $password=$request->password;
        $request->validate([
            'email'=>"required|email",
            'password'=>'required'
        ],[
            'email.required'=>'Vui lòng nhập mật khẩu',
            'email.email'=>'Email không hợp lệ',
            'password.required'=>'Vui lòng nhập mật khẩu'
        ]
    );
  
        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            $user = DB::table('users')
                    ->where('email',$email)
                    ->where('role',2)->first();
            if(!empty($user)){
                $request->session()->put('user','2');
                return redirect()->route('admin.home');
            }
     
            $request->session()->put('user','1');
            $request->session()->regenerate();
            $request->session()->flash('toastr',[
                'type' => 'success',
                'message' => 'Đăng nhập thành công !'
            ]);
            return redirect()->route('home.index');
        } else {
            
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        }
    

    }
    public function getLogin(){
        return view('login');
    }
    public function getRegister(){
        return view('signup');
    }
    
    public function logout(Request $request){
            $request->session()->forget('user');
            Auth::logout();  
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('user.getLogin');
            
        
    }
    public function postRegister(Request $request){
        $user= new User();
        $user->password=bcrypt($request->password);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->role=1;
        $user->phone=$request->phone;    
        $user->save();
        return redirect()->route('user.getLogin');

    }
    public function viewUserByEmail(Request $request){
        $user = DB::table('users')->where('email','like','%'.$request->email.'%')->get();
        return view('Admin.pages.customer.index',compact('user'));
    }

    public function viewAccount(){
        $user=User::find(Auth::id());
        return view('Customer.pages.account',compact('user'));
    }
    public function updateAccount(Request $request ){
       DB::table('users')->where('id',Auth::id())
                        ->update(
                            ['name'=>$request->name]
                        );
                            DB::table('users')->where('id',Auth::id())
                            ->update(
                                ['email'=>$request->email]
                            );
                            DB::table('users')->where('id',Auth::id())
                            ->update(
                                ['address'=>$request->address]
                            );
                            DB::table('users')->where('id',Auth::id())
                            ->update(
                                ['phone'=>$request->phone]
                            );
                      
        return redirect()->route('user.viewAccount');
    }
    public function changePass(){
        return view('Customer.pages.changePass');
    }
        public function postChangePassWord(Request $request ){
           
            $user=DB::table('users')->where('id',Auth::id())->get();
        
            foreach($user as $user):
            $email=$user->email;
                endforeach;
           
            $oldpass=$request->oldPass;
         
            if (Auth::attempt(['email'=>$email,'password'=>$oldpass])) {
                
             DB::table('users')->where('id',Auth::id())
            ->update(
                ['password'=>bcrypt($request->newPass)]
            );
            return redirect()->route('user.getLogin');
        }
    }
}
   



