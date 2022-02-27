<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profiles;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profiles::paginate(5);
        return view('profile/index',compact('profiles'))->with('i',(request()->input('page',1) -1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        profiles::create($request->all());
        return redirect()->route('profiles.index')->with('thongbao' , 'Thêm thành công');
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
    public function edit(profiles $profiles)
    {
        return view('profile/edit',compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profiles $profiles)
    {
        $profiles->update($request->all());
        return redirect()->route('profiles.index')->with('thongbao','Cập nhật thành công ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(profiles $profiles)
    {
        $profiles->delete();
        return redirect()->route('profiles.index')->with('thongbao','Xóa thành công ');
    }
}
