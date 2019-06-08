<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Content-Type" content="text/html">
    <title>Register form</title>
    <meta name="author" content="Jake Rocheleau">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/register/styles.css') }}">
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/css/register/switchery.min.css') }}">
    <script type="text/javascript" src="{{ asset('assets/css/register/switchery.min.js') }}"></script>
</head>

<body>
<div id="wrapper">

    <h1>Register User</h1>

    <form method="POST" action="{{ route('front.auth.login') }}">
        @csrf
        <div class="col-2 input_register">
            <label>
                Email
                <input placeholder="Your email" id="email"  value="{{ old("email") }}" name="email" tabindex="4">
                @if ($errors->has(backpack_authentication_column()))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first(backpack_authentication_column()) }}</strong>
                </span>
                @endif
            </label>

        </div>

        <div class="col-2 input_register">
            <label>
                {{ trans('backpack::base.password') }}
                <input type="password" class="form-control" value="{{ old("password") }}" name="password">
                @if ($errors->has('password'))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </label>

        </div>
        <div class="col-submit">
            <button class="submitbtn" type="submit" >Login</button>
        </div>

    </form>
</div>
<script type="text/javascript">
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function (html) {
        var switchery = new Switchery(html);
    });
</script>

</body>
</html>