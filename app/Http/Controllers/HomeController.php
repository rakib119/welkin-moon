<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\Project;
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
        $sliders = Slider::all();
        return view('fontend.index', compact('teams', 'ceo','faqs','sliders'));
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
        return view('fontend.projects',[
            'projects'=> Project::all()
        ]);
    }
    public function contactUs()
    {
        return view('fontend.contact');
    }
     public function sliderDetails($slug)
    {
        $slider = Slider::where('slug',$slug)->first();
        return view('fontend.slider',compact('slider' ));
    }
     public function test()
    {
        return view('fontend.test');
    }
}
