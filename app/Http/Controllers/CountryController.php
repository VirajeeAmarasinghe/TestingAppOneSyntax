<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Country;
use Response;
use Session;

class CountryController extends Controller
{
    public function index(){
        $countries=Country::all();
        return view('country.index')->with('countries',$countries);
    }
    
    public function create(){        
        return view('country.add');
    }

    public function submit(Request $request){
        $this->validate($request,[
            'code'=>'required',
            'name'=>'required'
        ]); 
        
        $country=new Country;

        $country->code=$request->code;
        $country->name=$request->name;

        $output=$country->save();

        if($output){
            Session::flash('success','New Country Added Successfully.');
            return redirect()->route('countries');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function edit(Request $request,$id){
        $country=Country::find($id);        
        return view('country.edit')->with('country',$country);
    }

    public function update(Request $request){

        $this->validate($request,[
            'code'=>'required',
            'name'=>'required'
        ]); 
        
        $id=$request->id;
        $country=Country::find($id);
        $country->code=$request->code;
        $country->name=$request->name;

        $output=$country->save();

        if($output){
            Session::flash('success','Country Updated Successfully.');
            return redirect()->route('countries');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function delete(Request $request,$id){
        $country=Country::find($id);
        $output=$country->delete();

        if($output){
            Session::flash('success','Country Deleted Successfully.');
            return redirect()->route('countries');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function loadCountries(Request $request){
        $selected_value=$request->id;

        $countries=null;

        $country=Country::find($selected_value);
        $html="";

        $html.="<tr id=".$country->id." class='sortable'><td>".$country->name."</td><td>".$country->code."</td><td><a href=".url('country/edit/'.$country->id).
        " class='btn btn-xs btn-info'>Edit</a></td><td><a href=".url('country/delete/'.$country->id)." class='btn btn-xs btn-danger'>Delete</a></td></tr>";
    
        return Response::json(array('data'=>$html));
    }
}

