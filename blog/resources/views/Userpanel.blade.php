@extends('Layout3.app')
@section('username')
    <div id="userinfo1"></div>
@endsection
@section('content3')


<div class="container">
    <div class="row">

        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">

                    <p class="card-text">Service</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">

                    <p class="card-text">Imam</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">

                    <p class="card-text">User</p>
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

</script>
@endsection
