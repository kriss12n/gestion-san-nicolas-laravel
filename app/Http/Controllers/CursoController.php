<?php

namespace App\Http\Controllers;

use File;

use App\Models\Item;
use App\Models\Curso;
use App\Models\Grade;
use App\Models\Grupo;
use App\Models\CursoMember;
use App\Models\GroupMember;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todosCC = Curso::all();
        return $todosCC;
    }
    public function nivel()
    {
        $todoG = Grupo::all();
        return $todoG;
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
        $student = GroupMember::join('mdluu_user', 'mdluu_user.id', '=', 'mdluu_groups_members.userid')->where('groupid',$id)->get();
        return $student;
    }
    public function editc($id)
    {
        $student = CursoMember::join('mdluu_user', 'mdluu_user.id', '=', 'mdluu_course_completions.userid')->where('course',$id)->get();
        return $student;
    }
    public function editn($id)
    {

        $studen = Item::select("mdluu_grade_grades.finalgrade","mdluu_grade_grades.rawgrade","mdluu_grade_grades.userid","mdluu_grade_grades.itemid")->join('mdluu_grade_grades', 'mdluu_grade_grades.itemid', '=', 'mdluu_grade_items.id')->where('courseid',$id)->get();
        return  $studen;
    }

    public function editnt($id)
    {

        $studen = Grade::select("mdluu_grade_items.itemname","mdluu_grade_grades.userid")->join('mdluu_grade_items', 'mdluu_grade_items.id', '=', 'mdluu_grade_grades.itemid')->get();
        return $studen;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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



    public function downloadFile(){

    $data = json_encode(['Element 1','Element 2','Element 3','Element 4','Element 5']);
      $file = time() .rand(). '_file.json';
      $destinationPath=public_path()."/upload/";
      if (!is_dir($destinationPath)) {  mkdir($destinationPath,0777,true);  }
      File::put($destinationPath.$file,$data);
      return response()->download($destinationPath.$file);

    }
}
