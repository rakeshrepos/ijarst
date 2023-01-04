<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eboard;
use App\Models\Contact;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paper = DB::table('papers')->count();
        $approved_papers = DB::table('approved_papers')->count();
        $eboard = Eboard::count();
        $contact = Contact::count();
        return view('Admin.Dashboard.index',compact('paper','eboard','approved_papers','contact'));
        // return view('home');
    }
    public function log()
    {
        return redirect('admin/login');
    }

    public function home()
    {
        return redirect('admin/dashboard');
    }
}
