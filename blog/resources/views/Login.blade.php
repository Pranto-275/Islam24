@extends('Layout.app')


@section('content')
<section id="home">
    <div class="home-inner">
        <div class="container">
            <div class="row  align-item-center  justify-content-center">
                <div class="col-12 col-md-7 col-lg-5">
                    <div class="login">
                        <div class="login-form">
                            <h1 class="display-4 text-center"><b>Stay Connect</b></h1>
                            <form action="" class="was-validated">
                                <div class="form-group">
                                    <label for="username" class="pt-2"><b><i class="fas fa-user-cog"></i> Username/Email</b></label>
                                    <input type="text" id="username" placeholder="Username" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="pwd" class="pt-3"><b><i class="fas fa-key"></i> Password</b></label>
                                    <input type="password" id="pwd" placeholder="Password" class="form-control" required>
                                </div>
                                <div class="form-group">

                                    <div class="form-group form-check pt-3">
                                        <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="remember" required> <b>I Agree</b>
                                      <div class="valid-feedback">Confirm</div>
                                      <div class="invalid-feedback">Check for continue.</div>
                                    </label>
                                    </div>

                                    <a href="{{ url('/adminpanel') }}" type="submit" class="btn buttonc btn-block">Submit</a>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="admin.html" class="btn btn-light">Admin</a>
                                <a href="imampanel.html" class="btn btn-light">Imam</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
