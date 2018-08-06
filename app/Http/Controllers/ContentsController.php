<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Content;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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

    public function show($id){
        //print_r('asd');
       // return view('contents.edit');
        $showById = Content::find($id);
        //return view('contents.edit', compact('showById'));
        return view::make('contents.edit')
            ->with('showById', $showById);
    }
    public function update($id){
        //print_r('asd');
       // return view('contents.edit');
        // $showById = Content::find($id);
        // //return view('contents.edit', compact('showById'));
        // return view::make('contents.edit')
        //     ->with('showById', $showById);

            $rules = array(
                'title'       => 'required'
            );
            $validator = Validator::make(Input::all(), $rules);
    
            // process the login
            if ($validator->fails()) {
                return Redirect::to('contents/show/' . $id  )
                    ->withErrors($validator)
                    ->withInput(Input::except('title'));
            } else {
                // store
                $nerd = Content::find($id);
                $nerd->title       = Input::get('title');
                // $nerd->email      = Input::get('email');
                // $nerd->nerd_level = Input::get('nerd_level');
                $nerd->save();
    
                // redirect
                Session::flash('message', 'Successfully updated contents!');
                return Redirect::to('contents');
            }


    }
}
