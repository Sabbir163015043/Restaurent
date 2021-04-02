@extends('admin.master')

@section('body')
<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Manage Post Table</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> View Post Table</a>
</div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body rounded-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL No</th>
                            <th> Category Name</th>
                            <th> Tittle Name </th>
                            <th> Main Image </th>
                            
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($foods as $key => $food)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $food->category->name }}</td>
                            <td>{{ $food->tittle_name }}</td>
                            <td><img src="{{ asset($food->image) }}" alt="" height="60" width="90"></td>
                           
                            <td>{{ $food->status == 1 ? 'Published' : 'Unpublished' }}</td>
                            
                            <td>
                                <a href="{{ route('view-food-detail',['id' => $food->id]) }}" class="btn btn-success btn-sm">view</a>
                                <a href="{{ route('edit-food-detail',['id' => $food->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ route('delete-food',['id' => $food->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection