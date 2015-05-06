@extends('layouts.admin.login')

@section('content')

<div class="clearfix sm-col-12 md-col-6 lg-col-3 mx-auto mt4 p1">
    <p class="h1 center">CGM Demo Admin</p>

    @if (count($errors) > 0)
    <div class="red">
        <ul class="list-reset">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form name="login-form" method="post" action="{{ url('/admin/auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input type="text" class="block field-light full-width mb1" placeholder="Email" name="email" value="{{ old('email') }}">
        <input type="password" class="block field-light full-width mb1" placeholder="Password" name="password">
        <button class="button full-width">ログイン</button>
    </form>
</div>

@stop