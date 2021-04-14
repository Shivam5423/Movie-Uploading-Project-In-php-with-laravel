<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partners;

class PartnersController extends Controller
{
    public function create(){
        return view('admin.partner.add');
    }

    public function save(Request $request){

        //Array Style
        // $partner_name = $request->get('partner_name');
        // $partner_description = $request->get('partner_description');
        // $partner_since = $request->get('partner_since');
       
        $partner_name = $request->name;
        $partner_description = $request->description;
        $partner_since = $request->since;

        prx($partner_name,false);
        prx($partner_description,false);
        prx($partner_since,false);


        //Check weather form request has file
        if($request->hasFile('partner_pic')){
           //file Object
        //    prx("File Object : {$request->partner_pic}",false);

        $file_obj = $request->file('partner_pic');
        //    prx($file_obj);

        //Extension
        prx($request->partner_pic->extension(),false);
        //Path
        prx($request->partner_pic->path(),false);

        if($request->file('partner_pic')->isValid()){
            
            $path = $request->partner_pic->store('partner_pic');
            
            $partner = new Partners();
            $partner->name = $partner_name;
            $partner->description = $partner_description;
            $partner->since = $partner_since;
            $partner->partner_pic = $path;
            $partner->save();
            echo 'Partners Added Successfully';
        }

        }


    }

    public function show(){
           
         $partners = Partners::all();
        return view('admin.partner.show',compact('partners'));
    }
}
