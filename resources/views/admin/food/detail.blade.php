@extends('admin.master')


@section('body')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Product Details</h1>
    <a href="{{ route('manage-food') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Back </a>
</div>

<table class="table table-bordered">
    <div class="row">
     <div class="container"> 
        <tr>
            <th>Food Name</th>
            <td>{{ $food -> tittle_name }}</td>
        </tr>
        <tr>
            <th>Food Category Name</th>
            <td>{{ $food->category -> name }}</td>
        </tr>
        <tr>
            <th> Price</th>
            <td>{{ $food -> price }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $food -> full_description }}</td>
        </tr>
        <tr>
            <th> Image</th>
            <td><img src="{{ asset($food->image) }}" alt=""height="120" width="120"/></td>
        </tr>
        <tr>
            <th> Publication Status</th>
            <td>{{ $food -> status== 1 ? 'Published' : 'Unpublished' }}</td>
        </tr>
        
     </div>
    </div>
</table>

@endsection