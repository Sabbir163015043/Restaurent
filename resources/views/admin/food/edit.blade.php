@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Category</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Add category</a>
</div>

<form action="{{ route('update-food') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
            @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$message}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            <div class="form-group row">
                    <label class="control-label col-md-2"> Category Name </label>
                        <div class="col-md-10">
                            <select class="form-control" name="category_id">
                                <option> ---Select Food Category--- </option>
                                @foreach($categories as $key => $category)
                                    <option value="{{ $category->id }}"{{ $food->category_id == $category->id ? 'selected' : ''}}>{{$category->name }}</option>
                                    @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                         <label class="control-label col-md-2"> Food Name </label>
                        <div class="col-md-10">
                            <input type="text" name="tittle_name" value="{{ $food->tittle_name }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $food->id }}"/>
                            </div>
                            </div>
                        
                    <div class="form-group row">      
                     <label class="control-label col-md-2"> Price </label>
                        <div class="col-md-10">
                            <input type="text" name="price" value="{{ $food->price }}" class="form-control"/>
                           
                            </div>
                            </div>
            <div class="form-group row">
                    <label class="control-label col-md-2"> Description </label>
                        <div class="col-md-10">
                        <textarea name="full_description"  class="form-control">{{ $food->full_description }}</textarea>
                            </div>
                            </div>  
                <div class="form-group row">
                    <label class="control-label col-md-2"> Image </label>
                        <div class="col-md-10">
                        <input type="file" name="image" class="form-control-file" accepte="image/*" />
                            <img src="{{ asset($food->image) }}" height="60" width="90" alt="">
                            </div>
                            </div>  
            <div class="form-group row">
                    <label class="control-label col-md-2"> Publication Status </label>
                    <div class="col-md-10">
                        <Label><input type="radio" name="status"{{ $food->status == 1 ? 'checked' : ''}} value="1"/> Published </Label>
                        <Label><input type="radio" name="status" {{ $food->status == 0 ? 'checked' : ''}} value="0"/> UnPublished </Label>
                </div> 
                </div>
            <div class="form-group row">
                    <label class="control-label col-md-2"> </label>
                        <div class="col-md-10">
                            <input type="submit" name="btn" class="btn btn-success" value="Update New Food"/>
            </div>
            </div>
    
            
            </div>
            </div>

        </div>

</form>

@endsection