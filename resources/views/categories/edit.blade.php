@extends('layouts.crud')

@section('page-title')
    <h1>Edit Category</h1>
@stop

@section('')

@stop
{{dd($category)}}
@section('content')
      <form action="{{route('category.update')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="email">Category Name</label>
        <input type="text" class="form-control" value="{{$category->name}}" id="category" name="category">
      </div>
      <button type="submit" class="btn btn-primary float-right">Save</button>
    </form>
@stop
