@extends('layout.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Country Registration</div>
                <div class="card-body">

                    <form action={{route('submitCountryForm')}} method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Country Code</label>
                            <input type="text" class="form-control" name="code">
                        </div>

                        <div class="form-group">
                            <label for="name">Country Name</label>
                            <input type="text" class="form-control" name="name">
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