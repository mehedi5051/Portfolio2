<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Exception;
use Illuminate\Http\Request;



class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view ('backend.pages.about.createOrUpdate', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{

        $request->validate([
            'title' => 'required',
            'details' => 'required'

        ]);

        About::updateOrCreate(
            ['id' => $about->id ?? null],
            ['title' => $request->title,
                     'details' => $request->details
            ]
 
        );

              flash()->success('About created successfully!');

        return redirect()->back();
        // flash()->success( 'About created successfully');
    


        }catch(Exception $e){
            flash()->error('Something went wrong');

            return redirect()->back() ->with('error' , $e->getMessage());
            
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
