@extends('layout.main')

@section('title', 'Registration')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form role="form" method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <fieldset>
                    <h2>Register</h2>
                    <br>

                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Username"
                               value="{{ old('name') }}">

                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="form-control input-lg" placeholder="Confirm Password">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Register">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection