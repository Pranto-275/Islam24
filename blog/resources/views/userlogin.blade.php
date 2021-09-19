@extends('Layout.app')


@section('content')
<div class="container" style="margin-top: 200px">
    <div class="row justify-content-center d-flex mt-5 mb-5 ">
        <div class="col-md-6 card">
            <form action="" class="loginform p-3">
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input required name="username" value="" type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                   <label for="username">User Password</label>
                   <input required name="password" value="" type="Password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                   <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
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

    var url = '/useronLogin'
    axios.post(url, {
        user: userName,
        pass: password
    })
    .then(function (response) {
        if (response.status ==200 && response.data==1){
            window.location.href="/userpanel"
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
