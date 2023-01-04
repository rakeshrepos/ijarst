<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = News::OrderBy('id','desc')->get();
        return view('Admin.News.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.News.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $desc = $request->desc;

        if($title != '' && $desc != '')
        {
            $news = new News();
            $news->title = $title;
            $news->desc = $desc;

            if($news->save())
            {
                return redirect('admin/news')->with('success', 'Added Successfully');
            }
            else
            {
                return redirect('admin/news/create')->with('error', 'Sorry Please Try Again');
            }
        }
        else
        {
            return redirect('admin/news/create')->with('error', 'Sorry Please Enter Title And Description');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('Admin.News.update',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $title = $request->title;
        $desc = $request->desc;

        if($title != '' && $desc != '')
        {
            $news->title = $title;
            $news->desc = $desc;

            if($news->save())
            {
                return redirect('admin/news/'.$news->id.'/edit')->with('success', 'Updated Successfully');
            }
            else
            {
                return redirect('admin/news/'.$news->id.'/edit')->with('error', 'Sorry Please Try Again');
            }
        }
        else
        {
            return redirect('admin/news/'.$news->id.'/edit')->with('error', 'Sorry Please Enter Title And Description');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if ($news->delete()) {
            return redirect('admin/news')->with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect('admin/news')->with('error', 'Sorry Try Again');
        }
    }
}
