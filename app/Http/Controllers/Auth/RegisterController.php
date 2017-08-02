<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mailers\AppMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
class RegisterController extends Controller
{
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
          //return User::create($request->all());
        
        $user= User::create([
            'name' => $data['name'],
            'firstName'=>$data['firstName'],
            'genre'=>$data['genre'],
           // 'zip'=>$data['zip'],
            //'adress'=>$data['adress'],
           // 'city'=>$data['city'],
            //'province'=>$data['province'],
           // 'description'=>$data['description'],
            'type'=>$data['type'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'token' => base64_encode($data['email']),
        ]);
        
       
        return $user;
        //return redirect()->back;
    }
    
   /* public function confirmEmail($token)
    {
        $user = User::whereToken($token)->firstOrFail()->confirmEmail();
        
        flash( 'Votre corriel est confirmé veillez vous connecter.');
        return redirect('login');
}
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        dispatch(new SendVerificationEmail($user));
        return view(‘verification’);
    }
    
    public function verify($token)
    {
        $user = User::where('token',$token)->first();
        $user->emailStaut = 1;
        if($user->save()){
            return view('emailconfirm',['user'=>$user]);
        }
    }*/
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->Validator($request, array(
            'name' => 'required|string|max:255',
            'firstName' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'zip' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ));
        
        $user = User::find($id);
        
        $user->name = $request->input('name');
        $user->firstName = $request->input('firstName');
        $user->genre = $request->input('genre');
        $user->adress = $request->input('adress');
        $user->zip = $request->input('zip');
        $user->province = $request->input('province');
        $user->email = $request->input('email');
        
        $user->save();
        
        return redirect()->route('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
