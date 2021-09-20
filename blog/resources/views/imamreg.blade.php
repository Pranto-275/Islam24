@extends('Layout.app')

@section('content')

<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center d-flex mt-5 mb-5 ">
        <div class="col-md-6 card">
           <form action=""id="imamregform">
               {{ csrf_field() }}
                                <div class="form-group" >
                                    <label for="imamusername" class="pt-2"><b><i class="fas fa-user-cog"></i> Name</b></label>
                                    <input type="text" id="usernameid" placeholder="Name" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="eail" class="pt-2"><b><i class="fas fa-user-cog"></i>Email</b></label>
                                    <input type="text" id="imamemailid" placeholder="Email" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="pwd" class="pt-2"><b><i class="fas fa-key"></i> Mobile</b></label>
                                    <input type="text" id="imammobileid" placeholder="Mobile" class="form-control" >
                                </div>

                                <div class="form-group">
                                        <label for="userId" class="pt-2"><b><i class="fas fa-key"></i>UserId</b></label>
                                        <input type="text" id="imamid" placeholder="Unique UserId" class="form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label for="repwd" class="pt-2"><b><i class="fas fa-key"></i>Password</b></label>
                                        <input type="password" id="imampasswordid" placeholder="Password" class="form-control" >
                                    </div>

                                    <button id="imamregSendBtnId"  type="submit" class="btn btn-success btn-block">Submit</button>
                                    <a href="{{ url('/loginpage') }}" type="submit" class="btn btn-primary btn-block">Login</a>
                                    <a href="{{ url('/signup') }}" type="submit" class="btn btn-primary btn-block">User Regsistration</a>
                            </form>
        </div>
    </div>
</div>



@endsection
