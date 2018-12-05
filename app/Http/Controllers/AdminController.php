<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nyscmember;
use App\Http\Requests\MemberformRequest;
class AdminController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $member =  Nyscmember::all();
return view('AdminPage.index', compact('member'));
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
        $member =  Nyscmember::whereId($id)->firstOrFail();
return view('AdminPage.student', compact('member'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $member =  Nyscmember::whereId($id)->firstOrFail();
return view('AdminPage.edit', compact('member'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberformRequest $request, $id)
    {

        $member = Nyscmember::whereId($id)->firstOrFail();
        $member->firstName = $request->get('firstName');
        $member->lastName = $request->get('lastName');
        $member->stateCode = $request->get('stateCode');
        /*if($request->get('status') != null) {
        $member->status = 0;
        } else {
        $member->status = 1;
        }*/
        $member->save();
        return redirect(action('AdminController@edit', $member->id))->with('status', 'The member '.$member->lastName.' has been updated!');
        
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

        $member = Nyscmember::whereId($id)->firstOrFail();
        $member->delete();
        return redirect('/admin')->with('status', 'The member '.$member->lastName.' has been deleted!');

    }
}
