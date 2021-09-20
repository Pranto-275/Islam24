@extends('Layout3.app')

@section('username')
    <div id="userinfo1"></div>
@endsection


@section('content3')

<div class="container py-5">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card">
                <div class="card-header">
                   Ask Question
                </div>
                <div class="card-body">
                    <form action="" >
                        {{ csrf_field() }}
                        <label for="name">User Name</label>
                        <input id="usernameid" type="text" class="form-control">
                        <label for="name">Salah,Siyam,Zakah,Haz,Masalah</label>
                        <input id="catagoryid" type="text" class="form-control">
                        <label for="name">Question</label>
                        <input id="questionid" type="text" class="form-control">
                        <button id="questionSendBtnId" type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Others Question
                </div>
                <div class="card-body">
                    <div id="mainDiv" class="container d-none">
                        <div class="row">
                        <div class="col-md-12 p-5">

                            <table id="serviceDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                    <th class="th-sm">UserName</th>
                                    <th class="th-sm">Catagory</th>
                                    <th class="th-sm">Description</th>
                                    <th class="th-sm">Question</th>
                                    <th class="th-sm">Edit</th>
                                    <th class="th-sm">Delete</th>
                                  </tr>
                                </thead>
                                <tbody id="service_table">

                                </tbody>
                              </table>

                        </div>
                        </div>
                        </div>

                        <div id="loaderDiv" class="container">
                            <div class="row">
                                <div class="col-md-12 p-5 text-center">
                                    <img class="loading-icon m-5" src="{{ asset('images/loader.svg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div id="WrongDiv" class="container d-none">
                            <div class="row">
                                <div class="col-md-12 p-5 text-center">
                                    <h3>Something Went Wrong!!!!</h3>
                                </div>
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
    getServiceData();
//for services table
function getServiceData() {
    axios.get('/getuserData')
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
                $('#serviceDataTable').DataTable().destroy();
                $('#service_table').empty();
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(

                        "<td>" + jsonData[i].name + "</td>" +
                        "<td>" + jsonData[i].catagory + "</td>" +
                        "<td>" + jsonData[i].question + "</td>" +
                        "<td>" + jsonData[i].answer + "</td>" +
                        "<td><a  class='serviceEditBtn' data-id=" + jsonData[i].name + "><i class='fas fa-edit'></i></a></td>" +
                        "<td><a data-toggle='modal' data-target='#deleteModal'  class='serviceDeleteBtn'  data-id=" + jsonData[i].name + " ><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#service_table');
                });
                //services table delete iconclick
                $('.serviceDeleteBtn').click(function() {
                    var id = $(this).data('id')
                    // $('#serviceDeleteID').html(id);
                });
                //service table edit iconclick
                $('.serviceEditBtn').click(function() {
                    var id = $(this).data('id')
                    // $('#serviceEditID').html(id);


                });
                $('#serviceDataTable').DataTable({"order":false});
                $('.dataTables_length').addClass('bs-select');
            } else {
                $('#loaderDiv').addClass('d-none');
                $('#WrongDiv').removeClass('d-none');
            }
        })
        .catch(function(error) {
            $('#loaderDiv').addClass('d-none');
            $('#WrongDiv').removeClass('d-none');
        })

}



//question
$('#questionSendBtnId').click(function() {

    var name = $('#usernameid').val()
    var category = $('#catagoryid').val()
    var question = $('#questionid').val()
    questionSend(name, category, question)

});


function questionSend(name, category, question) {

if (name.length == 0) {
    $('#questionSendBtnId').html("Enter your name!");

    setTimeout(function() {
        $('#questionSendBtnId').html("Send");
    }, 2000);

} else if (category.length == 0) {
    $('#questionSendBtnId').html("Enter your category!");
    setTimeout(function() {
        $('#questionSendBtnId').html("Send");
    }, 2000);

} else if (question.length == 0) {
    $('#questionSendBtnId').html("Enter your question!");
    setTimeout(function() {
        $('#questionSendBtnId').html("Send");
    }, 2000);

} else {
    $('#questionSendBtnId').html("Sending Info...");
    axios.post('/questionsend', {

        name: name,
        category: category,
        question: question,

        })
        .then(function(response) {
            if (response.status == 200) {
                if (response.data == 1) {
                    $('#questionSendBtnId').html("Successfully Done");
                    setTimeout(function() {
                        $('#questionSendBtnId').html("Send");
                    }, 2000);
                } else {
                    $('#questionSendBtnId').html("Failed, Try again");
                    setTimeout(function() {
                        $('#questionSendBtnId').html("Send");
                    }, 2000);

                }
            } else {
                $('#questionSendBtnId').html("Failed, Try again");
                setTimeout(function() {
                    $('#questionSendBtnId').html("Send");
                }, 2000);


            }
        })
        .catch(function(error) {
            $('#contactSendBtnId').html("Try Again");
            setTimeout(function() {
                $('#contactSendBtnId').html("Send");
            }, 2000);
            alert("Not save")
        })
}





}

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
