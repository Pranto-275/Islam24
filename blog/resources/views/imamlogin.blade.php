@extends('Layout.app')


@section('content')
<div class="container" style="margin-top: 200px">
    <div class="row justify-content-center d-flex mt-5 mb-5 ">
        <div class="col-md-6 card">
            <form action="" class="loginform p-3">
                <div class="form-group">
                    <label for="username">Imam Name</label>
                    <input required name="username" value="" type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                   <label for="username">Imam Password</label>
                   <input required name="password" value="" type="Password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                   <a href="{{ url('/userloginpage') }}" type="submit" name="submit" class="btn btn-success btn-block">UserLogin</a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection


@section('script')
<script type="text/javascript">
    $('.loginform').on('submit', function (event) {
        event.preventDefault();
    var formdata = $(this).serializeArray();
    var userName =formdata[0]['value']
    var password = formdata[1]['value']

    var url = '/imamonLogin'
    axios.post(url, {
        user: userName,
        pass: password
    })
    .then(function (response) {
        if (response.status ==200 && response.data==1){
            window.location.href="/imampanel"
        }else{
            alert('User Not found! try again')

        }
    })
    .catch(function (error) {
        alert('User Not found! try again')

    })


})

</script>

@endsection
