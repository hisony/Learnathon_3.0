<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    
    public function addCourse(Request $req)
    {
        try {
            // Insert into database
            $course = DB::table('courses')->insert([
                'name' => $req->course_name,
                'slot' => $req->time_slot,
                'capacity' => $req->capacity, 
                'faculty' => $req->faculty_name
            ]);

            if ($course) {
                echo "<h1>Successfully Created</h1>";
                // return redirect('/courses');
            }
        } catch (QueryException $e) {
            if ($e->getCode() == 23000) {
                echo "<h1>Failed to Create the course: Course  Already Exists!</h1>";
            } else {
                echo "<h1>Failed to create : Something went wrong.</h1>";
            }
        }

    }

    public function courses()
    {
        $courses = DB::select('select * from courses');
        return view('courses',['courses'=>$courses]);
    }

    public function OfferedCourses()
    {
        $courses = DB::select('select * from courses');
        return view('OfferedCourses',['courses'=>$courses]);
    }
}