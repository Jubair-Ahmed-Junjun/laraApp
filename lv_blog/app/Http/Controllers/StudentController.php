<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use Session;
use Illuminate\Http\Request;
session_start();


class StudentController extends Controller
{
   public function addSubject()
   {
   	return view('pages.add_subject');
   }

   public function saveSubject(Request $request)
   {
      $data = array();

      $data['subject_name'] = $request->subject_name;
      $data['code'] = $request->code;
      $data['credit'] = $request->credit;
      $data['semester_id'] = $request->semester_id;

      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";

         DB::table('tbl_subject')
           ->insert($data);

          Session::put('message','Data Added Successfully');

           return Redirect::to('/add-subject');
   }
   public function viewSubject()
   {

   	 $all_info = DB::table('tbl_subject')->get();

                 $manage = view('pages.view_subject')
                    ->with('all_info', $all_info);

                    return view('layout')
                       ->with('pages.view_subject', $manage);

   	 //return view('pages.view_subject');
   }
   public function deleteSubject($subject_id)
   {
         DB::table('tbl_subject')
           ->where('subject_id',$subject_id)
           ->delete();

           Session::put('message','Data Delete Successfully');
           return Redirect::to('view-subject');
   }
   public function editSubject($subject_id)
   {
          
         $data_info = DB::table('tbl_subject')
           ->where('subject_id',$subject_id)
           ->first();

          $manage = view('pages.edit_subject')
           ->with('data_info',$data_info);

           return view('layout')
                  ->with('pages.edit_subject',$manage);


   	     //return view('pages.edit_subject');
   }
   public function updateSubject(Request $request,$subject_id)
   {

   	    $data =array();
   	    $data['subject_name'] = $request->subject_name;
   	    $data['code'] = $request->code;
   	    $data['credit'] = $request->credit;
   	    $data['semester_id'] = $request->semester_id;


         DB::table('tbl_subject')
          ->where('subject_id',$subject_id)
          ->update($data);

          Session::put('message','Data Update Successfully');

          return Redirect::to('view-subject');

   }
}