<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\State;
use App\Domain\Country;
use Response;
use Session;

class StateController extends Controller
{
    public function index(){
        $states=State::all();
        return view('state.index')->with('states',$states);
    }
    
    public function create(){  
        $countries=Country::all();      
        return view('state.add')->with('countries',$countries);
    }

    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'country_select_state_form'=>'required'
        ]); 
        
        $state=new State;

        $state->name=$request->name;
        $state->country_id=$request->country_select_state_form;

        $output=$state->save();

        if($output){
            Session::flash('success','New State Added Successfully.');
            return redirect()->route('state.index');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function edit(Request $request,$id){
        $state=State::find($id);
        $countries=Country::all();  
        return view('state.edit')->with('state',$state)->with('countries',$countries);
    }

    public function update(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'country_select_state_form'=>'required'
        ]);
        
        $id=$request->id;
        $state=State::find($id);

        $state->name=$request->name;
        $state->country_id=$request->country_select_state_form;

        $output=$state->save();

        if($output){
            Session::flash('success','State Updated Successfully.');
            return redirect()->route('state.index');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function delete(Request $request,$id){
        $state=State::find($id);
        $output=$state->delete();

        if($output){
            Session::flash('success','State Deleted Successfully.');
            return redirect()->route('state.index');
        }else{
            Session::flash('error','Error.Please Try Again or Contact Admin');
            return redirect()->back();
        }
    }

    public function loadStates(Request $request){
        $selected_value=$request->id;

        $states=null;

        $state=State::find($selected_value);
        $html="";

        $html.="<tr id=".$state->id." class='sortable'><td>".$state->name."</td><td>".$state->country->code."</td><td><a href=".url('state/edit/'.$state->id).
        " class='btn btn-xs btn-info'>Edit</a></td><td><a href=".url('state/delete/'.$state->id)." class='btn btn-xs btn-danger'>Delete</a></td></tr>";
    
        return Response::json(array('data'=>$html));
    }


}
