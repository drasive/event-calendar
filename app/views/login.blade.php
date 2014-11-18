@extends('site.master-layout')

@section('title', 'Login')
@section('description', 'Log in to the Cultural Institution as an administrator.')

@section('master-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="login/authenticate" method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input name="email" class="form-control" type="text" placeholder="Email Address" autofocus>
                                </div>
                                <div class="form-group">
                                    <input name="password" class="form-control"  type="password" placeholder="Password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">
										<span title="If this is checked, you will be automatically logged in on this device in the future.">This is a private computer</span>
                                    </label>
                                </div>
                                
                                <button type="submit" id="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
