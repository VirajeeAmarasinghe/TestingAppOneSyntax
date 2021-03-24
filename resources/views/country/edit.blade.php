@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Country Update</div>
                <div class="card-body">

                    <form action="{{ route('country.update') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{$country->id}}">

                        <div class="form-group">
                            <label for="name">Country Code</label>
                            <input type="text" class="form-control" name="code" value="{{$country->code}}">
                        </div>

                        <div class="form-group">
                            <label for="name">Country Name</label>
                            <input type="text" class="form-control" name="name" value="{{$country->name}}">
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