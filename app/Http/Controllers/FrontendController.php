<?php

namespace App\Http\Controllers;

use App\Models\Eboard;
use App\Models\Contact;
use App\Models\News;
use App\Models\Volume;
use Illuminate\Http\Request;
use Session;
use setAttribute;
use DB;
use Illuminate\Support\Str;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eboard = Eboard::count();
        $paper = DB::table('approved_papers')->count();
        // return $eboard;
        return view('Frontnew.index',compact('eboard','paper'));
    }

    public function review()
    {
        return view('Frontnew.review');
    }

    public function joineboard()
    {
        return view('Frontnew.joineboard');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $volume = Volume::Orderby('id','asc')->get();

        // dd($index);
        return view('Front.archive',compact('volume'));
    }



    public function eboard()
    {
        $volume = Volume::Orderby('id','asc')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $eboard = Eboard::all();
        return view('Frontnew.eboard',compact('volume','eboard'));
    }

    public function contact()
    {
        $volume = Volume::Orderby('id','asc')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        // $eboard = Eboard::all();
        return view('Frontnew.contact',compact('volume'));
    }

    public function contactNow(Request $request)
    {
        // dd($request->all());
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->topic = $request->topic;
        $contact->message = $request->comments;

        if($contact->save())
        {
            return redirect('/contact')->with('success', 'Your Message Submited Successfully');
        }
        else
        {
            return redirect('/contact')->with('error', 'Sorry Please Try Again');
        }
    }

    public function indexing()
    {
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $volume = Volume::Orderby('id','asc')->get();
        // $eboard = Eboard::all();
        return view('Front.indexing',compact('volume','news'));
    }
    
    public function callForPaper()
    {
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $volume = Volume::Orderby('id','asc')->get();
        // $eboard = Eboard::all();
        return view('Frontnew.callforpaper',compact('volume','news'));
    }

    public function paperSubmit(Request $request)
    {
        // dd($request->all());

        if ($request->hasFile('paper')) {

            $image = $request->file('paper');
            $ext = $image->getClientOriginalExtension();

            if($ext == 'pdf' || $ext == 'doc' || $ext == 'docx')
            {
                $img_name = rand(11111,99999).time()."_paper".'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/paper/');
                $image->move($destinationPath, $img_name);

                $data = array('name'=>$request->name, 'email'=>$request->email, 'mobile'=>$request->mobile, 'city'=>$request->city, 'state'=>$request->state, 'zip'=>$request->zip, 'country'=>$request->country, 'title'=>$request->title, 'paper'=>$img_name);
                $insert = DB::table('papers')->insert($data);

                if($insert)
                {
                    return redirect('/paper-submission')->with('success', 'We received your details. Contact you shortly!...');
                }
                else
                {
                    return redirect('/paper-submission')->with('error', 'Sorry Please Try Again');
                }
            }
            else
            {
                return redirect('/paper-submission')->with('error', 'Sorry... Please Select Document File Only (PDF,DOCX)');
            }
        }
        else
        {
            return redirect('/paper-submission')->with('error', 'Sorry... Please Select Document File');
        }
    }

    public function getPapers(){
        $papers = DB::table('approved_papers')->get();
        foreach($papers as $paper){
            $slug = $this->generateSlug($paper->title);
            DB::table('approved_papers')->where('id',$paper->id)->update(['slug'=>$slug]);
        }
    }

    public function generateSlug($title){
        $slug=Str::slug($title);

        if (DB::table('approved_papers')->where('slug',Str::slug($title))->exists()) {

            $max = DB::table('approved_papers')->where('title','LIKE',$title)->value('title');
            if(is_numeric($max[-1])) {
                
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                    
                }, $max);

            }
            return "{$slug}-2";

        }
        return $slug;
    }

    public function fee()
    {
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $volume = Volume::Orderby('id','asc')->get();
        // $eboard = Eboard::all();
        return view('Front.fee',compact('volume','news'));
    }

    public function downloads($vol)
    {
        // return $volume;
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $papers = DB::table('approved_papers')->where('volume',$vol)->get();
        $issue = DB::table('approved_papers')->distinct()->select('issue')->where('volume',$vol)->get();
        $eboard = Eboard::all();
        $volume = Volume::Orderby('id','asc')->get();
        // dd($issue);
        return view('Frontnew.download',compact('volume','news','papers','issue','vol'));
    }
    

    public function downloads_both($vol,$iss)
    {
        // return $volume;
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        $papers = DB::table('approved_papers')->where('volume',$vol)->where('issue',$iss)->get();
        $issue = DB::table('approved_papers')->distinct()->select('issue')->where('volume',$vol)->get();
        // $eboard = Eboard::all();
        $volume = Volume::Orderby('id','asc')->get();
        // dd($issue);
        return view('Frontnew.download',compact('volume','news','papers','issue','vol'));
    }
    
    public function search(Request $request)
    {
        // return $volume;
        // dd($request->all());
        $search_type = $request->search_type;
        $search_text = $request->search_text;
        return redirect('/search/'.$search_type.'/'.$search_text);
    }


    public function search_item($search_type,$search_text)
    {
        // return $volume;
        // dd($request->all());
        $news = News::OrderBy('id','DESC')->get();
        // $volume = DB::table('approved_papers')->distinct()->select('volume')->groupBy('volume','id')->get();
        if($search_type=='all')
        {
            $papers = DB::table('approved_papers')->where('author', 'like', '%'.$search_text.'%')->orwhere('title', 'like', '%'.$search_text.'%')->get();
        }
        else if($search_type=='author')
        {
          $papers = DB::table('approved_papers')->where('author', 'like', '%'.$search_text.'%')->get(); 
        }
        else if($search_type=='title')
        {
          $papers = DB::table('approved_papers')->where('title', 'like', '%'.$search_text.'%')->get();   
        }
        else
        {
            $papers = DB::table('approved_papers')->where('author', 'like', '%'.$search_text.'%')->orwhere('title', 'like', '%'.$search_text.'%')->get();
        }
        $volume = Volume::Orderby('id','asc')->get();
        // else if($search_type=='ssrn')
        // {
        // $papers = DB::table('approved_papers')->where('volume',$vol)->orWhere('name', 'like', '%' . Input::get('name') . '%')->get();
            
        // }
        // dd($papers);

        // $issue = DB::table('approved_papers')->distinct()->select('issue')->where('volume',$vol)->get();
        $vol = '';
        return view('Front.download',compact('volume','news','papers','vol'));
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
           $img_name=''; 
        }

        if($name != '' && $line1 != '')
        {
            $eboard = new Eboard();
            $eboard->name = $name;
            $eboard->line1 = $line1;
            $eboard->line2 = $line2;
            $eboard->line3 = $line3;
            $eboard->image = $img_name;

            if($eboard->save())
            {
                return redirect('admin/eboard')->with('success', 'Added Successfully');
            }
            else
            {
                return redirect('admin/eboard/create')->with('error', 'Sorry Please Try Again');
            }
        }
        else
        {
            return redirect('admin/eboard/create')->with('error', 'Sorry Please Enter Name And Line 1');
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
        //
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
    public function destroy(Eboard $eboard)
    {
        if ($eboard->delete()) {
            return redirect('admin/eboard')->with('success', 'Deleted Successfully');
        }
        else
        {
            return redirect('admin/eboard')->with('error', 'Sorry Try Again');
        }
    }

    public function showPaper($vol,$slug){
        $issue = DB::table('approved_papers')->distinct()->select('issue')->where('volume',$vol)->get();
        $paper = DB::table('approved_papers')->where('slug',$slug)->first();
        return view('Frontnew.downloadpaper',compact('issue','paper','vol'));
    }
}
