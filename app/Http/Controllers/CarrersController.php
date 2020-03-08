<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use \App\career;
use \App\detail_career;

class CarrersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('carrers.carerr', ['active' => 'career']);
        // $data =  career::with('detail_career', 'address_career')->get();
        // foreach ($data as $d) {
        //     echo $d->address_career->career_id;
        // }
        // return $data->detail_career;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrers.register', ['active' => 'career']);
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
        $this->validate($request, [
            'username' => 'required|unique:careers',
            'email' => 'required|unique:careers',
            'password' => 'required|between:8,255|confirmed',
            'name' => 'required',
            'applied_position' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'religion' => 'required',

        ]);
        $request['password'] = Hash::make($request->password);
        $career = career::create($request->all());
        $career->detail_career()->create($request->all());
        $career->address_career()->create($request->all());
        return redirect('/recruitment/register');
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
}
