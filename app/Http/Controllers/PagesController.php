<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Route;
use DB;

class PagesController extends Controller
{

    public function __construct()
    {
        $paths = [];

        foreach ( Route::getRoutes() as $route ) {
            
            if ( $route->getMethods()[0] !== 'GET' ) continue;
            if ( $route->getPath() === 'api/user' ) continue;

            $path = $route->getPath();

            $paths[$path] = $path === '/' ? 'Home' : ucfirst($path);
        }

        $paths = array_unique( $paths );

        view()->share('nav_links', $paths);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'About us';
        return view('about', compact('title'));
    }


    public function consulting() {
        $title = 'Consulting';
        return view('consulting', compact('title'));
    }


    public function training() {
        $title = 'Training';
        return view('training', compact('title'));
    }

    public function contact() {
        $title = 'Contact us';
        return view('contact', compact('title'));
    }


    public function other($id, $slug = '') {
        $title = 'Other';
        return view('other', compact('title'));
    }


    public function gallery()
    {
        $images = [
            'img/i1.png', 'img/i2.png', 'img/i3.png'
        ];
        $images = [];

        $title = 'Gallery';
        return view('gallery')
            ->with('title', $title)
            ->with('images', $images);
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
        $validator = Validator::make( $request->all(), [
            'name'=>'required',
            'email'=>'required|email',
        ]);

        if ($validator->fails() ){
            return back()
                ->withErrors( $validator )
                ->withInput();
        }

        DB::table('messages')
            ->insert( $request->except('_token') );

        return redirect()->back()
            ->with('message','Success!');


        // dd( \Request::all() );
//        dd( $request->all() );
        // dd( \Request::input('message') );
        // dd( \Request::exists('email') );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
