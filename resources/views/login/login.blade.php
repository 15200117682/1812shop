@extends('layouts/index_layout')
@section('content')
<!-- login -->
<div class="pages section">
    <div class="container">
        <div class="pages-head">
            <h3>LOGIN</h3>
        </div>
        <div class="login">
            <div class="row">
                <form class="col s12" action="{{url('login_do')}}" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" class="validate" placeholder="USERNAME/EMAIL" required name="userOrEmail">
                    </div>
                    <div class="input-field">
                        <input type="password" class="validate" placeholder="PASSWORD" required name="u_pwd">
                    </div>
                    <a href=""><h6>Forgot Password ?</h6></a>
                    <div>
                    <input type="submit" value="LOGIN" class="btn button-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end login -->
@endsection