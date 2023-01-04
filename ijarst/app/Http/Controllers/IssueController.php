<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
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
        $issue_all = Issue::OrderBy('id','ASC')->get();
        $issue='';
        return view('Admin.Issue.index',compact('issue_all','issue'));
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
            $issue = Issue::where('name',$name)->count();
            if($issue==0)
            {
                $issue = new Issue();
                $issue->name = $name;
                if($issue->save())
                {
                    return redirect('admin/issue')->with('success', 'Added Successfully');
                }
                else
                {
                    return redirect('admin/issue')->with('error', 'Sorry Please Try Again');
                }
            }
            else
            {
                return redirect('admin/issue')->with('error', 'Sorry Issue exsist');
            }
        }
        else
        {
            return redirect('admin/issue')->with('error', 'Sorry Please Enter Issue');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        $issue_all = Issue::OrderBy('id','ASC')->get();
        return view('Admin.Issue.index',compact('issue_all','issue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Issue $issue)
    {
        $issue->name = $request->name;
        if($issue->save())
        {
            return redirect('admin/issue/'.$issue->id.'/edit')->with('success', 'Updated Successfully');
        }
        else
        {
            return redirect('admin/issue/'.$issue->id.'/edit')->with('error', 'Sorry Please Try Again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Issue  $issue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Issue $issue)
    {
        if ($issue->delete()) {
            return redirect('admin/issue')->with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect('admin/issue')->with('error', 'Sorry Try Again');
        }
    }
}
