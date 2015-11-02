@extends('app')

@section('content')
<div class="login-form padding20 block-shadow" style=
"width:300px;margin:50px auto;padding:10px;">

    <form method="POST" action="{{ url('auth/register') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1 class="text-light">Sign Up</h1>
        <hr class="thin"></hr>
        <br>
        <div class="input-control text full-size" data-role="input">
    	<label for="user_login">User email :</label>
    	<input id="user_login" type="text" name="email" style="padding-right: 39px;"></input>
    	<button class="button helper-button clear" tabindex="-1" type="button">
	</div>
	<br>
	<br>
	<div class="input-control password full-size" data-role="input">
		<label for="user_password">User password:</label>
		<input id="user_password" type="password" name="password" style="padding-right: 39px;"></input>
	    <button class="button helper-button reveal" tabindex="-1" type="button"></button>
        </div>
        <br>
        <br>
        <div class="form-actions">
            <button class="button primary" type="submit">Sign In</button>
        </div>
    </form>
</div>

@endsection