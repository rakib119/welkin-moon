<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.slider.index',[
            'sliders'=>slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
            'content'=>'required',
            'button_name'=>'required|max:255'
        ]);
        Slider::insert([
            'title'=>  $request->title,
            'short_description'=>$request->short_description,
            'content'=>$request->content,
            'slug'=> Str::slug($request->title) ,
            'button_name' =>$request->button_name,
            'created_at' =>Carbon::now(),
        ]);
        return redirect('slider')->with('success', 'Slider added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        return view('dashboard.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        $request->validate([
            'title'=>'required|max:255',
            'short_description'=>'required|max:255',
            'content'=>'required',
            'button_name'=>'required|max:255'
        ]);

        $slider->title =  $request->title;
        $slider->short_description =  $request->short_description;
        $slider->slug= Str::slug($request->title) ;
        $slider->button_name =$request->button_name;
        $slider->content=$request->content;
        $slider->save();
        return redirect('slider')->with('success', 'updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        $slider ->delete();
        return redirect('slider')->with('success', 'Deleted successfully');
    }
}
