@extends('Layout.app')

@section('content')
<section id="home">
    <div class="home-inner">
        <div class="container">
            <div class="row align-item-center  justify-content-center ">
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
                                    <label for="eail" class="pt-2"><b><i class="fas fa-user-cog"></i>Email</b></label>
                                    <input type="email" id="email" placeholder="Email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="pwd" class="pt-2"><b><i class="fas fa-key"></i> Password</b></label>
                                    <input type="password" id="pwd" placeholder="Password" class="form-control" required>
                                </div>
                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="repwd" class="pt-2"><b><i class="fas fa-key"></i>Re-Password</b></label>
                                        <input type="password" id="repwd" placeholder="Password" class="form-control" required>
                                    </div>

                                    <a href="{{ url('/login') }}" type="submit" class="btn buttonc btn-block">Submit</a>
                                    <a href="{{ url('/loginpage') }}" type="submit" class="btn btn-primary btn-block">Login</a>

                            </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

@endsection
