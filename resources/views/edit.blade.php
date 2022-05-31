@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="car-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sua user</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('infousers.index')}}" class = "btn btn-primary float-end">Danh sach user</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('infousers.update',$infousers->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="from-groud">
                                <strong>Full Name</strong>
                                <input type="text" name="fullName" value="{{$infousers->fullName}}" class="from-control" placeholder="Add Full Name">
                            </div>
                            <div class="from-groud">
                                <strong>User Name</strong>
                                <input type="text" name="userName" value="{{$infousers->userName}}" class="from-control" placeholder="Add User Name">
                            </div>
                            <div class="from-groud">
                                <strong>Pass</strong>
                                <input type="text" name="passWork" value="{{$infousers->passWork}}" class="from-control" placeholder="Add Password">
                            </div>
                            <div class="from-groud">
                                <strong>Email</strong>
                                <input type="text" name="Email" value="{{$infousers->Email}}" class="from-control" placeholder="Add Email">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Sua</button>
                </form>
            </div>
        </div>
    </div>
@endsection