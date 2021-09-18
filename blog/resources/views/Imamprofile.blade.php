@extends('Layout4.app')

@section('content4')


<div class="container py-5">
    <div class="row ">
        <div class="col-sm-12 col-md-4 text-center">

            <div class="card  py-4">
                <div> <img class="py-3" src="image/imam.png" alt="" style="width: 100px;height: auto;"></div>
                <div class="card-body">
                    <h5 class="card-title">Aiqur Rahman</h5>
                    <p class="card-text">user</p>
                </div>
                <span> <i class="far fa-envelope"></i></span>
                <span> <i class="far fa-envelope"></i></span>
                <span> <i class="far fa-envelope"></i></span>
            </div>

        </div>
        <!-- change password -->
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="container">
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#my">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#my2">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Edit Profile</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="my" class="container tab-pane "><br>
                            <h5>Software Engineer</h5>
                            <h5>Greenland IT sector</h5>
                            <h5>HSC Batch 2017</h5>

                        </div>
                        <div id="my2" class="container tab-pane fade"><br>
                            <ol type="1">
                                <li>What is 5 pillars in islam?</li>
                                <li>Amount of Zakah</li>
                                <li>should is pray extra 2 rakah nofol every time i enter mosque</li>

                            </ol>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <form>
                                <label for="name" class="py-1">User Id: <span style="color: green;">01</span></label> <br>
                                <label for="name" class="py-1">Registration Date: <span style="color: green;">2021-09-10 22:49:24</span></label> <br>
                                <label for="name" class="py-1">Profile Status: <span style="color: green;">Active</span></label> <br>
                                <label for="name" class="py-1">Name:</label>
                                <input type="text" class="form-control pb-1" placeholder="Atiqur Rahman Pranto">
                                <label for="name" class="py-1">Email:</label>
                                <input type="email" class="form-control pb-1" placeholder="atiqur35-275@gmail.com">
                                <label for="name" class="py-1">Phone:</label>
                                <input type="email" class="form-control pb-1" placeholder="01830445326">
                                <label for="name" class="py-1">Address:</label>
                                <input type="email" class="form-control pb-1" placeholder="Kashimpur,Gazipur">

                                <button class="btn btn-primary btn-sm">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>


        </div>


    </div>
</div>



@endsection

