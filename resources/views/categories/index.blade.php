
@extends('layouts.crud')

@section('page-title')
  CATEGORIES
@stop()

@section('page-description')
  A detailed list of project categories
@stop()

@section('content')

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory">
    Add Record
  </button>
  <br><br>

  <table class="table table-striped">
  <thead>
    <tr>
    <th>Category</th>
    <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->name}}</td>
      <td>

        <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-primary float-left" >Edit</a>

        <span class="float-left">  &nbsp</span>

        <form action="{{ route('category.destroy', ['id'=>$category->id]) }}" method="POST" >
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">Del</button>
        </form>

      </td>
        </tr>
    @endforeach
  </tbody>
  </table>



{{-- Modal Add Form--}}
<div class="modal" id="addCategory">
  <div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
    <h4 class="modal-title">Add Category</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
    <form action="{{route('category.store')}}" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label for="email">Category Name</label>
        <input type="text" class="form-control" id="category" name="category">
      </div>
      <button type="submit" class="btn btn-primary float-right">Save</button>
    </form>
    </div>
  </div>
  </div>
</div>





@stop()
