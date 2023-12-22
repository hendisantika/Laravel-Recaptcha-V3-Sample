<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 - Google Recaptcha V3 Code with Validation - bangagung.id</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {!! RecaptchaV3::initJs() !!}
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 pt-5">
            <div class="card card-primary">
                <div class="text-center pt-5"><b>Laravel Recaptcha V3 Example</b></div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nama</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pesan') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Pesan</label>
                            <div class="col-md-12">
                                <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="10"></textarea>
                                @if ($errors->has('pesan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pesan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                {!! RecaptchaV3::field('register') !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <br/>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
