@extends('Layout3.app')


@section('username')
    <div id="userinfo1"></div>
@endsection
@section('content3')

<div class="container py-5">
    <div class="row ">
        <div class="col-sm-12 col-md-4 text-center">

            <div class="card  py-4">
                <div> <img class="py-3" src="image/imam.png" alt="" style="width: 100px;height: auto;"></div>
                <div class="card-body">
                    <h5 class="card-title">

                    </h5>
                    <p class="card-text">
                        <div id="userinfo2"></div>
                    </p>
                </div>

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
                            <div id="imaminfo3"></div>

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


@section('script')


    <script>

        //title
       axios.get('/getuserinfo')
       .then(function (response) {
           response.data.forEach(x=>{
            document.getElementById('userinfo1').innerHTML += '<h6>' + x.name + '</h6>';
           });
       })
       .catch(function (error) {
           console.log(error)
       })



       axios.get('/getuserinfo')
       .then(function (response) {
           response.data.forEach(x=>{
            document.getElementById('userinfo2').innerHTML +=
                        'Name:<h4>' + x.name +'</h4>'+
                            'UserId:<h4>'+x.userId+'</h4>';
           });
       })
       .catch(function (error) {
           console.log(error)
       })


       axios.get('/getuserinfo')
       .then(function (response) {
           response.data.forEach(x=>{
            document.getElementById('imaminfo3').innerHTML +=
                'Mobile:<span><h6>'+x.mobile+'</h6></span>'+
                    'Email:<span><h6>'+x.email+'</h6></span>'+
                        'Details:<span><h6>'+x.des+'</h6></span>';
           });
       })
       .catch(function (error) {
           console.log(error)
       })
    </script>

@endsection

