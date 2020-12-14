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
                ->groupBy(["mdluu_user.id","mdluu_role_assignments.id","gestion.mdluu_course_completions.id"])
                ->get();

        return $alumnos;
    }

   public function getAlumnosByCategory(){

    $alumnos = DB::table("mdluu_course_categories as cat")
                    ->select("cat.id","cat.name","cou.fullname","cou.id as courseid","coc.userid","us.*")
                    ->where("cat.id","19")
                    ->join("mdluu_course as cou","cou.category","=","cat.id")
                    ->join("mdluu_course_completions as coc","coc.course","=","cou.id")
                    ->join("mdluu_user as us","us.id","=","coc.userid")
                    ->get();

                    return $alumnos;
    //21
   }
}
