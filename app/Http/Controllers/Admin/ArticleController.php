<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;





class ArticleController extends Controller
{
    public function index(){
           $article  = Article::all();
        return view('admin.article.index')->with('article',$article);
    }

    public function create(){

         $department = Department::all();
         return view('admin.article.create')->with('department' , $department);

    }

     public function store (Request $request)
    {
         $article = new Article();

         $article->user_id = auth()->user()->id ;
         $article->title =$request -> input ('title');
         $article->description = $request ->input('description');
         $article->department_id = $request->input('department_id');


        if($request->hasfile('image'))
          {
          $image_file = $request -> file('image');
          $img_extension =$image_file->getClientOriginalExtension(); //getting image extension
          $img_filename = time() . '.' . $img_extension ;
          $image_file->move('uploads/articles/' , $img_filename );
          $article->image =$img_filename ;
          }

         $article->save();
      return redirect('article')->with('status' ,'Article creé avec succés');


    }
    public function edit($id){
        $article = Article::find($id);
        $department = Department::all();
        return view('admin.article.edit')->with('article',$article)
            ->with('department', $department);
    }

    public function update( Request $request ,$id) {
        $article = Article::find($id);

        $article->user_id = $request->input('user_id');
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->department_id = $request->input('department_id');


        if ($request->hasfile('image')) {
            $image_file = $request->file('image');
            $img_extension = $image_file->getClientOriginalExtension(); //getting image extension
            $img_filename = time() . '.' . $img_extension;
            $image_file->move('uploads/articles/', $img_filename);
            $article->image = $img_filename;
        }

        $article->update();
        return redirect('article')->with('status', 'Article modifié avec succés');

    }

    public function delete($id)

    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('status', 'Article supprimé avec succés');
    }
}
