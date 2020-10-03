@extends('front.layouts.master')
@section('content')
    

    <div class="row">

        <div class="col-md-12" id="register">

            <h3><i class="fa fa-shopping-basket"></i> Cart</h3>
            <hr>

            <ul class="list-group">
                <li class="list-group-item ">
                    Cras justo odio
                    <span class="badge badge-success">12</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Remove One</a>
                            <a class="dropdown-item" href="#">Remove All</a>
                        </div>
                    </div>
                    <span class="badge badge-primary badge-pill pull-right">14</span>
                </li>

                <li class="list-group-item ">
                    Cras justo odio
                    <span class="badge badge-success">12</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Remove One</a>
                            <a class="dropdown-item" href="#">Remove All</a>
                        </div>
                    </div>
                    <span class="badge badge-primary badge-pill pull-right">14</span>
                </li>

                <li class="list-group-item ">
                    Cras justo odio
                    <span class="badge badge-success">12</span>
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Remove One</a>
                            <a class="dropdown-item" href="#">Remove All</a>
                        </div>
                    </div>
                    <span class="badge badge-primary badge-pill pull-right">14</span>
                </li>

            </ul>
        </div>
    </div>
    <strong>Total: 132$</strong>
    <hr>
    <button class="btn btn-primary" type="submit">Checkout</button>


@endsection