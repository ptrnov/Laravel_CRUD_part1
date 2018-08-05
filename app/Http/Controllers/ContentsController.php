<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentsController extends Controller
{
    public function __construct(){
      
        $this->content = new Content;

    }

    function index()
    {
        //$data = Content::get();
       $data = Content::paginate();
        // return $data;
       return view('contents.index', compact('data'));
       //return view('contents.create');
    }
    public function create(){
        return view('contents.create');
    }

    public function createDb(Request $request)
    {    
        //print_r($request);
        $this->content->title = $request->get('title');
        $this->content->save();
        return redirect('contents')->with('success', 'Information has been added');
    }

    public function store(Request $request)
    {
        // if($request->hasfile('filename'))
        //  {
        //     $file = $request->file('filename');
        //     $name=time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/', $name);
        //  }
        $passport= new \App\Content;
        $passport->title=$request->get('title');
        // $passport->email=$request->get('email');
        // $passport->number=$request->get('number');
        // $date=date_create($request->get('date'));
        // $format = date_format($date,"Y-m-d");
        // $passport->date = strtotime($format);
        // $passport->office=$request->get('office');
        // $passport->filename=$name;
        $passport->save();
        
        return redirect('contents')->with('success', 'Information has been added');
    }
}
