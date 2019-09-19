@extends('layouts/index_layout')
@section('content')
<!-- register -->
<div class="pages section">
    <div class="container">
        <div class="pages-head">
            <h3>REGISTER</h3>
        </div>
        <div class="register">
            <div class="row">
                <form class="col s12" action="{{url('index/register_do')}}" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" class="validate" placeholder="用户名" required name="u_name">
                    </div>
                    <div class="input-field">
                        <input type="email" placeholder="邮箱" class="validate" required name="u_email">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="密码" class="validate" required name="u_pwd">
                    </div>
                    <div>
                    <input type="submit" value="REGISTER" class="btn button-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end register -->
@endsection