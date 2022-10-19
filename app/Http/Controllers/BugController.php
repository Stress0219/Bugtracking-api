<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bug;
use App\Models\Project;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;


class BugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bugs = Bug::all();
        return response($bug, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'Project_Id'=>'required',
        'User'=>'required',
        'Description'=>'required',
        'Creation_Date'=>'required'
      ]);
      
        $bug = new Bug();
        $bug->Project_Id = $request->Project_Id;
        $bug->User = $request->User;
        $bug->Description = $request->Description;
        $bug->Creation_Date = $request->Creation_Date;
        
            $bug->save();
            return response($bug, Response::HTTP_CREATED);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $bug = Bug::findOrFail($id);
       return response($bug, Response::HTTP_OK);
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
      $request->validate([
        'Project_Id'=>'required',
        'User'=>'required',
        'Description'=>'required',
        'Creation_Date'=>'required'
      ]);

        $bug = Bug::findOrfail($request->id);
        $bug->Project_Id = $request->Project_Id;
        $bug->User = $request->User;
        $bug->Description = $request->Description;
        $bug->Creation_Date = $request->Creation_Date;
        
       $bug->save();

       return response($bug, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bug = Bug::destroy($id);
      return response()->json([
        'message'=>'Successfully deleted'
      ]);
    }
}
