<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller 

{
  
        /*
    Display the home view with article data
    */
    
    public function home()
    
    {
        $articles = Article::all();
        return view('welcome', ['articles'=>$articles]);
    }
    
       /*
    Store a newly created resource in storage
    */
    
    public function add(Request $request)
    
    {
       $this->validate($request, [
           'title'=> 'required',
           'description'=> 'required'
           ]);
           $articles= new Article;
           $articles->title= $request->input('title');
           $articles->description= $request->input('description');
           $articles->save(); 
           return redirect('/welcome.php')->with('info','Article Saved Successfully!');
    }
    
          /*
  Show the update view with article data
    */
    
    public function update($id)
    
    {
       $articles = Article::find($id);
        return view('update', ['articles'=>$articles]);
    }
    
          /*
   Update the article
    */
    
    public function edit(Request $request, $id)
    
    {
          $this->validate($request, [
           'title'=> 'required',
           'description'=> 'required'
           ]);
           $data=array(
                'title'=>$request->input('title'),
                 'description'=>$request->input('description')
               );
          Article::where('id',$id)
          ->update($data);
           return redirect('/welcome.php')->with('info','Article Updated Successfully!');
    }
    
        /*
    Display a listing of the resource
    */
    
    public function read($id)
    
    {
        $articles = Article::find($id);
        return view('read', ['articles'=>$articles]);
    }
    
          /*
   Delete the article
    */
    
    public function delete($id)
    
    {
        Article::where('id',$id)
        ->delete();
          return redirect('/welcome.php')->with('info','Article Deleted Successfully!');
    }
}


