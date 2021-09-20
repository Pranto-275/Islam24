@extends('Layout3.app')


@section('username')
    <div id="userinfo1"></div>
@endsection

@section('content3')

<div class="container">
    <div class="row py-4">
        <div class="col-12 col-md-6 p-4">
            <div class="card">
                <div class="card-header">
                    Category: Salah
                </div>
                <div class="card-body">
                    <h5 class="card-title">Can i pray 1 rakah Beter Salah?</h5>
                </div>
                <div class="card-footer">
                    Answer by Mufti Aminul Haquee Yes, you can pray 1 rakh. It is mentioned in Sahih bukhari **** number hadith.Narrated by *** Sahabah
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 p-4">
            <div class="card">
                <div class="card-header">
                    Category: Salah
                </div>
                <div class="card-body">
                    <h5 class="card-title">Can i pray 1 rakah Beter Salah?</h5>
                </div>
                <div class="card-footer">
                    Answer by Mufti Aminul Haquee Yes, you can pray 1 rakh. It is mentioned in Sahih bukhari **** number hadith.Narrated by *** Sahabah
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 p-4">
            <div class="card">
                <div class="card-header">
                    Category: Salah
                </div>
                <div class="card-body">
                    <h5 class="card-title">Can i pray 1 rakah Beter Salah?</h5>
                </div>
                <div class="card-footer">
                    Answer by Mufti Aminul Haquee Yes, you can pray 1 rakh. It is mentioned in Sahih bukhari **** number hadith.Narrated by *** Sahabah
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 p-4">
            <div class="card">
                <div class="card-header">
                    Category: Salah
                </div>
                <div class="card-body">
                    <h5 class="card-title">Can i pray 1 rakah Beter Salah?</h5>
                </div>
                <div class="card-footer">
                    Answer by Mufti Aminul Haquee Yes, you can pray 1 rakh. It is mentioned in Sahih bukhari **** number hadith.Narrated by *** Sahabah
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
