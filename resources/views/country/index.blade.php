@extends('layout.layout')


@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        <ul style="list-style: none;padding-top:1px;padding-bottom:17px;">
            <li style="float: left" class="col-md-3">All Countries</li> 
            <li class="col-md-9" id="select-box-li">Select a Country
                <select name="country_select" id="country-select" class="form-control select-simple">
                    <option value="0">All</option>
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach                    
                </select>
            </li>               
            <li style="float: right"><a href="{{ route('viewCountryForm') }}">Add New Country</a></li>                
        </ul>
    </div>
    <div class="panel-body" id="table-div">
        <table class="table table-hover" id="table-order">
            <thead>                
                <th>Name</th>
                <th>Code</th>                             
                <th>Edit</th>                
                <th>Delete</th>            
            </thead>
            <tbody id="row-position">
                @if($countries->count()>0)                    
                    @foreach($countries as $country) 
                                                   
                        <tr id="{{$country->id}}" class="sortable">                                
                            <td>{{ $country->name}}</td>                            
                            <td>{{ $country->code }}</td>       
                            <td><a href="{{ route('country.edit',['id'=>$country->id]) }}" class="btn btn-xs btn-info">Edit</a></td>                           
                            <td><a href="{{ route('country.delete',['id'=>$country->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>                            
                        </tr>                                                        
                                                                                       
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Countries</th>
                    </tr>
                @endif                
            </tbody>
        </table>
    </div>    
</div>

@stop