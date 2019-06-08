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

    <form method="POST" action="{{ route('front.auth.register') }}">
        @csrf
        <div class="col-2 input_register">
            <label>
                Họ và tên
                <input placeholder="Your name" id="name" name="name" value="{{ old("name") }}" tabindex="1">
                @if ($errors->has('name'))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </label>

        </div>
        <div class="col-2 input_register">
            <label>
                Địa chỉ
                <input placeholder="Your address" id="address" value="{{ old("address") }}" name="address" tabindex="2">
                @if ($errors->has('address'))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
            </label>
        </div>

        <div class="col-2 input_register">
            <label>
                Số điện thoại
                <input placeholder="Your phone" id="phone" value="{{ old("phone") }}" name="phone" tabindex="3">
                @if ($errors->has('phone'))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
                @endif
            </label>

        </div>
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

        <div class="col-2 input_register">
            <label class="control-label">
                {{ trans('backpack::base.confirm_password') }}
                <input type="password" class="form-control"  value="{{ old("password_confirmation") }}"  name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block" style="color: red">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
            </label>
        </div>

        <div class="col-submit">
            <button class="submitbtn" type="submit" >Register</button>
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