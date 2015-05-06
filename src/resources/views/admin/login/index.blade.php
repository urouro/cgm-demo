@extends('layouts.admin.login')

@section('content')

<div class="clearfix sm-col-12 md-col-6 lg-col-3 mx-auto mt4 p1">
    <p class="h1 center">CGM Demo Admin</p>
    <form name="login-form" action="" method="post">
        <input type="text" class="block field-light full-width mb1" placeholder="Email">
        <input type="password" class="block field-light full-width mb1" placeholder="Password">
        <button class="button full-width">ログイン</button>
    </form>
</div>

@stop