<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HeroProperty;
use Illuminate\Http\Request;

class HeroPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {

      $heroProperty = HeroProperty::first() ?? new HeroProperty();
        return view('backend.pages.heroProperty.updateOrCreate', compact('heroProperty'));
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
        try {

         $request->validate([
            'key_line' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'short_tittle' => 'required|string|max:255',
           
         ]);

         $data = HeroProperty::first();
         $filePath= $data->img ?? null ;

         if($request->hasFile('img') ){
            $request->validate([
                'img' => 'required|mimes:jpg.svg.png.jpeg.gif.svg.webp|max:2048 '
            ]);

            if( $data && $data->img && file_exists(public_path($data->img)) ) {
                unlink(public_path($data->img));
            }

            $img = $request->file('img');
            $imgName= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images/heropropertis'. $imgName));
            $filePath= 'images/heroproperties'. $imgName;

            HeroProperty::updateOrCreate(
                ['id'=> $data->id ?? null ],
                ['key_line' => $request->key_line,
                  'title' => $request->title,
                  'short_title' => $request->short_title,
                  'img' => $filePath
                ]
            );

            


         }

         
        
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
 

    }

    /**
     * Display the specified resource.
     */
    public function show(HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HeroProperty $heroProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroProperty $heroProperty)
    {
        //
    }
}
