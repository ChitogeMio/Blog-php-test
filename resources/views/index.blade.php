@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quan ly users</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('infousers.create')}}" class="btn btn-primary float-end">Them moi</a>
                    </div>
                </div>
                <div class="card-body">

                    @if(Session::has('thongbao'))
                        <div class="alert alert-success">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    <table class= "table table-bordered">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Full Name</th>
                                <th>User Name</th>
                                <th>PassWork</th>
                                <th>Email</th>
                                <th>Thao Tac</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($infousers as $inf)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$inf->fullName}}</td>
                                    <td>{{$inf->userName}}</td>
                                    <td>{{$inf->passWork}}</td>
                                    <td>{{$inf->Email}}</td>
                                    <td>
                                        <form action="{{route('infousers.destroy',$inf->id)}}" method="POST">
                                            <a href="{{route('infousers.edit',$inf->id)}}" class="btn btn-info">Sua</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn ntn-danger">Xoa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection