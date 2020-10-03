@extends('front.layouts.master')

@section('title')
        <title>Login</title>

@endsection
@section('content')
    

    <div class="row">

        <div class="col-md-12" id="register">

            <div class="card col-md-8">
                <div class="card-body">

                    <h2 class="card-title">Login</h2>
                    <hr>
                             @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                         </div>
                    @endif
                                                @include('admin.layouts.meassage')

                    <form action="{{route('login')}}" method="POST">
                    @csrf

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="text" name="password" placeholder="Password" id="passowrd"
                                   class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-outline-info col-md-2" type="submit"> Login</button>
                        </div>

                    </form>

                </div>
            </div>


        </div>

    </div>


@endsection