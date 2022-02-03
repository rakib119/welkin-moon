<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index()
    {
        $teams = Team::all();
        $ceo = Team::where('post', 'Chief Director')->first();
        $faqs = faq::all();
        return view('fontend.index', compact('teams', 'ceo','faqs'));
    }
    public function about()
    {
        $about = Slider::where('id', '1')->first();
        return view('fontend.about', compact('about'));
    }
    public function team()
    {
        $teams = Team::all();
        return view('fontend.team', compact('teams'));
    }
    public function ourProjects()
    {
        return view('fontend.projects');
    }
    public function contactUs()
    {
        return view('fontend.contact');
    }
}
