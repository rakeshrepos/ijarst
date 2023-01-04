<?php

namespace App\Http\Controllers;

use App\Models\Eboard;
use Illuminate\Http\Request;
use Session;
use setAttribute;
use DB;

class ApprovedpaperController extends Controller
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
        $paper = DB::table('approved_papers')->get();
        // dd($paper);OrderBy('id','desc')->
        return view('Admin.ApprovedPapers.index',compact('paper'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $issue = DB::table('issues')->get();
        $volume = DB::table('volumes')->get();
        return view('Admin.ApprovedPapers.create',compact('issue','volume'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $volume  = $request->volume;
        $issue = $request->issue;
    
        if ($request->hasFile('file')) {

            $image = $request->file('file');
            $img_name = rand(11111,99999).time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/paper/');
            $image->move($destinationPath, $img_name);
            // 29_approvedpaper
        }
        else
        {
           $img_name=''; 
        }

        if($request->hasFile('file'))
        {
            if($volume != '' && $issue != '')
            {
                // , 'date'=>
                $data = array('volume'=>$volume, 'issue'=>$issue, 'page_no'=>$request->page_number, 'author'=>$request->author_name, 'name'=>$request->name,'email'=>$request->email, 'mobile'=>$request->mobile, 'title'=>$request->paper_title, 'paper'=>$img_name);
                $insert = DB::table('approved_papers')->insert($data);
                if($insert)
                {
                    return redirect('admin/approved-paper/create')->with('success', 'Added Successfully');
                }
                else
                {
                    return redirect('admin/approved-paper/create')->with('error', 'Sorry Please Try Again');
                }
            }
            else
            {
                return redirect('admin/approved-paper/create')->with('error', 'Sorry Please Enter Volume And Issue');
            }
        }
        else
        {
            return redirect('admin/approved-paper/create')->with('error', 'Sorry Please Select File');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eboard  $eboard
     * @return \Illuminate\Http\Response
     */
    public function show(Eboard $eboard)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eboard  $eboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Eboard $eboard)
    {
        return view('Admin.Eboard.update',compact('eboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eboard  $eboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eboard $eboard)
    {
        $name = $request->name;
        $line1 = $request->line1;
        $line2 = $request->line2;
        $line3 = $request->line3;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $img_name = rand(11111,99999).time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/eboard/');
            $image->move($destinationPath, $img_name);
        }
        else
        {
           $img_name=$eboard->image; 
        }

        if($name != '' && $line1 != '')
        {
            $eboard->name = $name;
            $eboard->line1 = $line1;
            $eboard->line2 = $line2;
            $eboard->line3 = $line3;
            $eboard->image = $img_name;

            if($eboard->save())
            {
                return redirect('admin/eboard/'.$eboard->id.'/edit')->with('success', 'Updated Successfully');
            }
            else
            {
                return redirect('admin/eboard/'.$eboard->id.'/edit')->with('error', 'Sorry Please Try Again');
            }
        }
        else
        {
            return redirect('admin/eboard/'.$eboard->id.'/edit')->with('error', 'Sorry Please Enter Name And Line 1');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eboard  $eboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $paper = DB::table('approved_papers')->Where('id',$id)->count();
        if($paper>0)
        {
            // return $id;
            if ($paper =  DB::table('approved_papers')->Where('id',$id)->delete()) {
                return redirect('admin/approved-paper')->with('success', 'Deleted Successfully');
            }
            else
            {
                return redirect('admin/approved-paper')->with('error', 'Sorry Try Again');
            }
        }
        else
        {
            return redirect('admin/approved-paper')->with('error', 'Invalid Paper Id');
        }

    }
}
