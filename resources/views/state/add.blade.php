@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">State Registration</div>
                <div class="card-body">

                    <form action={{route('state.submit')}} method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">State Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="name">Country</label>
                            <select name="country_select_state_form" id="country-select-state-form" class="form-control select-simple">
                                <option value="0">All</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach                    
                            </select>
                        </div>
                        
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection