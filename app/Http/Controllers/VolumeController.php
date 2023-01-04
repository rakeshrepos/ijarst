<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use Illuminate\Http\Request;

class VolumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volume_all = Volume::OrderBy('id','ASC')->get();
        $volume='';
        return view('Admin.Volume.index',compact('volume_all','volume'));
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
        $name = $request->name;
        if($name != '')
        {
            $volume = Volume::where('name',$name)->count();
            if($volume==0)
            {
                $volume = new Volume();
                $volume->name = $name;
                if($volume->save())
                {
                    return redirect('admin/volume')->with('success', 'Added Successfully');
                }
                else
                {
                    return redirect('admin/volume')->with('error', 'Sorry Please Try Again');
                }
            }
            else
            {
                return redirect('admin/volume')->with('error', 'Sorry Volume exsist');
            }
        }
        else
        {
            return redirect('admin/volume')->with('error', 'Sorry Please Enter Volume');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function show(Volume $volume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function edit(Volume $volume)
    {
        $volume_all = Volume::OrderBy('id','ASC')->get();
        return view('Admin.Volume.index',compact('volume_all','volume'));
        // return view()
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volume $volume)
    {
        $volume->name = $request->name;
        if($volume->save())
        {
            return redirect('admin/volume/'.$volume->id.'/edit')->with('success', 'Updated Successfully');
        }
        else
        {
            return redirect('admin/volume/'.$volume->id.'/edit')->with('error', 'Sorry Please Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volume  $volume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volume $volume)
    {
        if ($volume->delete()) {
            return redirect('admin/volume')->with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect('admin/volume')->with('error', 'Sorry Try Again');
        }
    }
}
