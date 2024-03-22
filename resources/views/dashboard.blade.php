@extends('layouts.main')

@section('container')
    
<h1>Halaman Content</h1>

<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tr>
        <td>
        <h3>H</h3>
        </td>
        <td>
            <h3>L</h3>
        </td>
        <td>
            <h3>T</h3>
        </td>
        <td>
        <a href="/dashboard/posts" class="badge bg-info"><i class="bi bi-eye"> View</i></a>
        <a href="/dashboard/posts/edit" class="badge bg-warning"><i class="bi bi-pencil-square"> Edit</i></a>
        <form action="/dashboard/posts" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"> Delete</i></button>
        </form>
        </td>
    </tr>
</table>


@endsection