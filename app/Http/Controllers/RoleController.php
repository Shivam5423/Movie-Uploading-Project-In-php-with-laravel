<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roles;

class RoleController extends Controller
{
    //
    public function insertform(){
    	return view('admin.role.add');
    }

    public function createRole(Request $request){

         $myerrors=array();
         $msg = array();
         foreach($request->all() as $field => $value){
         	if(is_null($value) or empty($value)){
         		$myerrors[$field]="{$field} is required";
         	}
         }

         if(count($myerrors)>0){
               return view('admin.role.add',compact('myerrors'));
         }else{
         	     $role = new Roles;

                 $role->role = $request->role;
                 $role->save();
                 
                 $msg['success']="Data inserted Succeefully !";
                  return view('admin.role.add',compact('msg'));
         }

    }

    public function show(){
	    
        $roles = Roles::all();  
	    return view('admin.role.show',compact('roles'));
    
}
   
}
