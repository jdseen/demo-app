@extends('layouts.app')

@section('content')
    <h1>Create Page</h1>
    <form>
        <div class="form-group">
            <label">Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control">
        </div>  
        <button type="submit" class="btn btn-block btn-primary mt-2">Submit</button>
    </form>
@endsection()