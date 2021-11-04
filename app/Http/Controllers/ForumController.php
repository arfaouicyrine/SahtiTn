<?php

namespace App\Http\Controllers;


use App\Forum;

use Carbon\Carbon;
use App\Department ;
use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest ;


class ForumController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index' , 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Carbon::setLocale('fr');
        $forum = Forum::latest()->paginate(5);
        $department = Department::all();
        return view('frontend.forum.index' , compact('forum'))

        ->with('department' , $department);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $department = Department::all();
        return view('frontend.forum.create')->with('department', $department);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumRequest $request)
    {
          Forum::create([
              'title' => $request->title ,
              'content' => $request->content ,
              'slug' => str_slug($request->slug) ,
              'department_id' => $request->department_id ,
              'user_id' => auth()->user()->id ,

          ]);
          return redirect('/forum')->with(['success'=>'Question ajouté']) ;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum , $id)
    {

         $department = Department::has('forums')->get();

          $forum = Forum::find($id);

         return view ('frontend.forum.show')->with([
             'department' => $department ,
             'forum' => $forum ]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
