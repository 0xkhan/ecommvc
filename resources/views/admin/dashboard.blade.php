@extends('admin.layout.base')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard">
        <div class="container">
            <h2>Dashboard</h2>
            <div class="row">
                {{ $admin }}
                <div class="col-md-6">
                    <form action="/admin" method="post" enctype="multipart/form-data">
                        <input type="text" name="product" value="testing">
                        <input type="file" name="image">
                        <input type="submit" value="Goo!" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
