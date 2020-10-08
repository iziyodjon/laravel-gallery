<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index() {
        $images = DB::table('images')->select('*')->get();
        $myImages = $images->all();
        return view('welcome',['imagesInView' => $myImages]);
    }

    public function about() {
        return view('about');
    }

    public function store(Request $request){
        $path = $request->file('image')->store('uploads');

        DB::table('images')->insert([
            ['images' => $path]
        ]);

        return redirect('/');
    }

    public function create(){
        return view('create');
    }

    public function show($id){
        $images = DB::table('images')->select('*')->where('id',$id)->first();
        $myImage = $images->images;
        return view('show',['imagesInView'=> $myImage]);
    }

    public function edit($id){
        $images = DB::table('images')->select('*')->where('id',$id)->first();
        $myImage = $images;
        return view('edit',['imageInView' => $myImage]);
    }

    public function update(Request $request,$id){
        $images = DB::table('images')->select('*')->where('id',$id)->first();

        Storage::delete($images->images);

        $path = $request->file('image')->store('uploads');

        $update = DB::table('images')
            ->where('id', $id)
            ->update(['images' => $path]);
        if($update){
            return redirect('/');
        }
    }

    public function delete($id){
        $images = DB::table('images')->select('*')->where('id',$id)->first();

        Storage::delete($images->images);

        DB::table('images')->where('id', $id)->delete();

        return redirect('/');
    }
}
