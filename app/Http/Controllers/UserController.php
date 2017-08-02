<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

       protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
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
        
        $rules = array(
            'name' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            
        );
        
          $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
    return Redirect::to('/home')->withErrors($validator);
  } else {
            
        $user= User::find($id);
             
           $user->name = $request->get('name');
           $user->firstName = $request->get('firstName');
           $user->genre = $request->get('genre');
           $user->zip = $request->get('zip');
           $user->adress = $request->get('adress');
           $user->city = $request->get('city');
           $user->province = $request->get('province');
           $user->description = $request->get('description');
           $user->email = $request->get('email');
           $user->phone = $request->get('phone');
           //'token' => base64_encode($data['email']),
      
            $user->save();
        
        return redirect('/home')->with('message', 6);
        }
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
