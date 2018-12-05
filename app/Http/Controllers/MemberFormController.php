<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberformRequest;
use App\Nyscmember;
class MemberFormController extends Controller
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
    public function store( MemberformRequest $request)
    {
        //

        $member = new Nyscmember(array(
            'user_id' => $request->get('user_id'),
        'firstName' => $request->get('firstName'),
        'lastName' => $request->get('lastName'),
        'stateCode' => $request->get('stateCode'),
        'phone' => $request->get('phone'),
        'email' => $request->get('email'),
        'address' => $request->get('address'),
        'education' => $request->get('education'),
        'training' => $request->get('training'),
        'Schedule' => $request->get('schedule'),
        'start' => $request->get('start'),
        'end' => $request->get('end'),
        ));
        $member->save();
        return redirect('/dashboard')->with('status', 'Form Successflly saved! ID: ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('user.profile', ['user' => User::findOrFail($id)]);
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
