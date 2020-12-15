<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $alumnos = DB::table('mdluu_role_assignments')
                ->where("roleid","=",5)
                ->join("mdluu_user","mdluu_user.id","=","mdluu_role_assignments.userid")
                ->distinct()
                ->get();

        return $alumnos;
    }

   public function getAlumnosByCategory(Request $request){

    $alumnos = DB::table("mdluu_course_categories as cat")
                    ->select("cat.id","cat.path","cat.name","cou.fullname","cou.id as courseid","coc.userid","us.*")
                    ->where("cat.id",$request->id)
                    ->join("mdluu_course as cou","cou.category","=","cat.id")
                    ->join("mdluu_course_completions as coc","coc.course","=","cou.id")
                    ->join("mdluu_user as us","us.id","=","coc.userid")
                    ->distinct()
                    ->get();
                    return $alumnos;
    //21
   }

   public function getNotasByAlumno(){
       $notas = DB::table('mdluu_grade_grades as grade')
                ->select("grade.id","user.firstname","user.lastname","item.itemname","grade.rawgrade","grade.finalgrade","course.fullname")
                ->groupBy("course.id","course.fullname")
                ->where("grade.userid","2")
                ->join("mdluu_user as user","user.id","=","grade.userid")
                ->join("mdluu_grade_items as item","item.id","=","grade.itemid")
                ->join("mdluu_course as course","course.id","=","item.courseid")
                ->get();

                return $notas;
   }
}
