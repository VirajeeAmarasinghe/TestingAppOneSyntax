@extends('layout.layout')


@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <ul style="list-style: none;padding-top:1px;padding-bottom:17px;">
            <li style="float: left" class="col-md-3">All States</li> 
            <li class="col-md-9" id="select-box-li">Select a State
                <select name="state_select" id="state-select" class="form-control select-simple">
                    <option value="0">All</option>
                    @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach                    
                </select>
            </li>               
            <li style="float: right"><a href="{{ route('state.create') }}">Add New State</a></li>                
        </ul>
    </div>
    <div class="panel-body" id="table-div">
        <table class="table table-hover" id="table-order">
            <thead>                
                <th>Name</th>
                <th>Country</th>                             
                <th>Edit</th>                
                <th>Delete</th>            
            </thead>
            <tbody id="row-position">
                @if($states->count()>0)                    
                    @foreach($states as $state) 
                                                   
                        <tr id="{{$state->id}}" class="sortable">                                
                            <td>{{ $state->name}}</td>                            
                            <td>{{ $state->country->name }}</td>       
                            <td><a href="{{ route('state.edit',['id'=>$state->id]) }}" class="btn btn-xs btn-info">Edit</a></td>                           
                            <td><a href="{{ route('state.delete',['id'=>$state->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>                            
                        </tr>                                                        
                                                                                       
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No States</th>
                    </tr>
                @endif                
            </tbody>
        </table>
    </div>    
</div>

@stop