<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if(\Auth::check()){
            $job=new Job;
            $user=\Auth::user();
            $jobs=$user->jobs;
            $data=[
                'job'=>$job,
                'user'=>$user,
                'jobs'=>$jobs,
                ];
        }
        return view('welcome',$data);
        //$jobs=Job::all();
        //return view('jobs.index',[
        //'jobs'=>$jobs,]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job=new Job;
        return view('jobs.create',[
            'job'=>$job,]);
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
        $this->validate($request,[
            'status'=>'required|max:10',]);
        //
        $job=new Job;
        $job->content=$request->content;
        $job->status=$request->status;
        $job->user_id= \Auth::user()->id;
        $job->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=Job::find($id);
        if(\Auth::id()===$job->user_id){
        return view('jobs.show',[
            'job'=>$job,]);
        }
        else
        return redirect('/');
        
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
        $job=Job::find($id);
        if(\Auth::id()===$job->user_id){
        return view('jobs.edit',[
            'job'=>$job,
            ]);
        }
        else
        return redirect('/');
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
        $this->validate($request,[
            'status'=>'required|max:191',]);
        $job=Job::find($id);
    if(\Auth::id()===$job->user_id){
            $job->content=$request->content;
            $job->status=$request->status;
            $job->save();
      
    }
        return redirect('/');
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
        $job=Job::find($id);
        if(\Auth::id()===$job->user_id){
             $job->delete();
        }
        else
        return redirect('/');
    }
}
