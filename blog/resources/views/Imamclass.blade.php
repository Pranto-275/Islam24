@extends('Layout4.app')

@section('imamname')
    <div id="imaminfo"></div>
@endsection
@section('content4')


<div class="container py-5">
    <div class="row align-item-center  justify-content-center">
        <div class="col-12 col-md-5">

            <div class="card">
                <img class="card-img-top" src="image/quran.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Video Chat</h5>
                    <form action="">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="Name">
                        <button class="btn btn-sm btn-light">Send</button>
                        <button class="btn btn-sm btn-primary">Start</button>
                    </form>
                </div>
                <img class="card-img-bottom" src="" alt="">
            </div>


        </div>
    </div>



</div>


@endsection


@section('script')
<script>
      //title
      axios.get('get')
       .then(function (response) {
           response.data.forEach(x=>{
            document.getElementById('imaminfo').innerHTML += '<h6>' + x.name + '</h6>';
           });
       })
       .catch(function (error) {
           console.log(error)
       })

</script>
@endsection
