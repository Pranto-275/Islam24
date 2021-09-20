@extends('Layout4.app')

@section('content4')

<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Questions
                </div>
                <div class="card-body">
                    <table id="serviceDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th class="th-sm">UserName</th>
                            <th class="th-sm">Catagory</th>
                            <th class="th-sm">Question</th>
                            <th class="th-sm">Answer</th>
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

            <div class="modal fade"  id="deleteModal"  tabindex="-1"  aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body deleteModal p-3 text-center">
                        <h5 class="mt-4">Do You Wanna Delete??</h5>
                        <h5 id="serviceDeleteID" class="mt-4"></h5>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">
                        No
                      </button>
                      <button  id="serviceDeleteConfirmBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- edit modal -->

              <div class="modal fade"  id="editModal"  tabindex="-1"  aria-labelledby="exampleModalLabel"  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body deleteModal p-3 text-center">
                          <h5 id="serviceEditID" class="mt-4"></h5>

                          <div id="serviceEditForm" class="" class="w-100">


                       <input id="answerEditID" type="text" class="form-control mb-4" placeholder="Service Image Link">

                          </div>
                       <img id="serviceEditLoader" class="loading-icon m-5 " src="{{ asset('images/loader.svg') }}" alt="">

                       <h5 id="serviceEditWrong" class="d-none">Something Went Wrong!!!!</h5>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">
                          Cancel
                        </button>
                        <button  id="serviceEditConfirmBtn" type="button" class="btn btn-sm btn-danger">Save</button>
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
    axios.get('/getqnData')
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
                        "<td><a  class='serviceEditBtn' data-id=" + jsonData[i].id + "><i class='fas fa-edit'></i></a></td>" +
                        "<td><a data-toggle='modal' data-target='#deleteModal'  class='serviceDeleteBtn'  data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#service_table');
                });
                //services table delete iconclick
                $('.serviceDeleteBtn').click(function() {
                    var id = $(this).data('id')
                    $('#serviceDeleteID').html(id);
                });
                //service table edit iconclick
                $('.serviceEditBtn').click(function() {
                    var id = $(this).data('id')
                    $('#serviceEditID').html(id);

                    $('#editModal').modal('show')
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



//service modal yes button
$('#serviceDeleteConfirmBtn').click(function() {
    var id = $('#serviceDeleteID').html();
    ServiceDelete(id)
});
//service delete
function ServiceDelete(deleteID) {
    $('#serviceDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>")
    axios.post('/qnDelete', {
            id: deleteID
        })
        .then(function(response) {
            $('#serviceDeleteConfirmBtn').html("Yes")
            if (response.status == 200) {
                if (response.data == 1) {
                    $('#deleteModal').modal('hide')
                    toastr.success('Delete Success');
                    getServiceData();
                } else {
                    $('#deleteModal').modal('hide')
                    toastr.error('Delete failed');
                    getServiceData();
                }
            } else {
                $('#deleteModal').modal('hide');
                toastr.error('Something Went Wrong !');
            }
        })
        .catch(function(error) {
            $('#deleteModal').modal('hide');
            toastr.error('Something Went Wrong !');
        })
}


//service update modal save button
$('#serviceEditConfirmBtn').click(function() {
    var id = $('#serviceEditID').html();
    var answer = $('#answerEditID').val();

    SeviceUpdate(id,answer)
});
//service update
function SeviceUpdate(qnid,qanswer) {
    $('#serviceEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>")
    if (qanswer.length == 0) {
       alert("ans is empty")
    }else {
        axios.post('/qnUpdate', {
                id: qnid,
                answer: qanswer,

            })
            .then(function(response) {
                $('#serviceEditConfirmBtn').html("Save")
                if (response.status == 200) {
                    if (response.data == 1) {
                        $('#editModal').modal('hide')
                        alert("success")
                        getServiceData();
                    } else {
                        $('#editModal').modal('hide')
                        alert("failed")
                        getServiceData();
                    }
                } else {
                    $('#editModal').modal('hide')
                    alert("failed")
                }
            })
            .catch(function(error) {
                $('#editModal').modal('hide')
                alert("failed")
            })
    }
}





</script>
@endsection
