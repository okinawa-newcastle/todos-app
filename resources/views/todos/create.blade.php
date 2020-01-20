@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create Todos</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                <form action='/todos/store' method='POST'>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name='name'>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection