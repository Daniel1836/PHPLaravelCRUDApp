<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller {
    
    public function home() {
        $articles = Article::all();
        return view('welcome', ['articles'=>$articles]);
    }
    
    public function add(Request $request){
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
    
    public function update($id){
       $articles = Article::find($id);
        return view('update', ['articles'=>$articles]);
    }
    
    public function edit(Request $request, $id){
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
    
    public function read($id) {
        $articles = Article::find($id);
        return view('read', ['articles'=>$articles]);
    }
    
    public function delete($id){
        Article::where('id',$id)
        ->delete();
          return redirect('/welcome.php')->with('info','Article Deleted Successfully!');
    }
}


?>