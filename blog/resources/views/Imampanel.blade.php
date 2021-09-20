@extends('Layout4.app')

@section('imamname')
    <div id="imaminfo"></div>
@endsection
@section('content4')


<div class="container py-3">
    <div class="row">
        <div class="col-3 py-2">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">Question Get</h5>
                    <p class="card-text-size">13</p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">Provide Answers</h5>
                    <p class="card-text-size">13</p>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">Appointment</h5>
                    <p class="card-text-size">13</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card text-center">

                <div class="card-body">
                    <h5 class="card-title">Took Class</h5>
                    <p class="card-text-size">13</p>
                </div>
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
