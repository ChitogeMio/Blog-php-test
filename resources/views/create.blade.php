@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="car-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Them user</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('infousers.index')}}"class="btn btn-primary float-end">Danh sach user</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('infousers.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="from-groud">
                                <strong>Full Name</strong>
                                <input type="text" name="fullName" class="from-control" placeholder="Add Full Name">
                            </div>
                            <div class="from-groud">
                                <strong>User Name</strong>
                                <input type="text" name="userName" class="from-control" placeholder="Add User Name">
                            </div>
                            <div class="from-groud">
                                <strong>Pass</strong>
                                <input type="text" name="passWork" class="from-control" placeholder="Add Password">
                            </div>
                            <div class="from-groud">
                                <strong>Email</strong>
                                <input type="text" name="Email" class="from-control" placeholder="Add Email">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Luu</button>
                </form>
            </div>
        </div>
    </div>
@endsection