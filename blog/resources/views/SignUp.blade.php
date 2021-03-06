@extends('Layout.app')

@section('content')

<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center d-flex mt-5 mb-5 ">
        <div class="col-md-6 card">
           <form action=""id="userregform">
               {{ csrf_field() }}
                                <div class="form-group" >
                                    <label for="username" class="pt-2"><b><i class="fas fa-user-cog"></i> Name</b></label>
                                    <input type="text" id="usernameid" placeholder="Name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="eail" class="pt-2"><b><i class="fas fa-user-cog"></i>Email</b></label>
                                    <input type="text" id="emailid" placeholder="Email" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="pwd" class="pt-2"><b><i class="fas fa-key"></i> Mobile</b></label>
                                    <input type="text" id="mobileid" placeholder="Mobile" class="form-control" >
                                </div>

                                <div class="form-group">
                                        <label for="userId" class="pt-2"><b><i class="fas fa-key"></i>UserId</b></label>
                                        <input type="text" id="userid" placeholder="Unique UserId" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label for="repwd" class="pt-2"><b><i class="fas fa-key"></i>Password</b></label>
                                        <input type="password" id="passwordid" placeholder="Password" class="form-control" >
                                    </div>

                                    <button id="regSendBtnId"  type="submit" class="btn btn-success btn-block">Submit</button>
                                    <a href="{{ url('/loginpage') }}" type="submit" class="btn btn-primary btn-block">Login</a>
                                    <a href="{{ url('/imamregpage') }}" type="submit" class="btn btn-primary btn-block">Imam Regsistration</a>
                            </form>
        </div>
    </div>
</div>



@endsection
