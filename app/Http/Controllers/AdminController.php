<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;
use App\Join;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Auth::check()) {
            // 已登入        
            //$members = Join::paginate(15);
             $members = Join::all();
            return view('admin/admin',compact('members'));
        }
        return view('admin/login');
        
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
        //
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

    public function login(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'name' => 'required',
        'password' => 'required',
        ]);

        if ($validator->fails()) {
        return redirect('admin')
            ->withInput()
            ->withErrors($validator);
        }

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password,'isAdmin' => '1'])) {

            // validation successful!
            // redirect them to the secure section or whatever
            // return Redirect::to('secure');
            // for now we'll just echo success (even though echoing in a controller is bad)
            return redirect('admin');

        } else {        

            // validation not successful, send back to form 
            return redirect('admin')->withErrors('name or password wrong!');;

        }

    }

    public function logout(){
        Auth::logout();
        return redirect('admin');
    }
}
