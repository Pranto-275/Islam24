@extends('Layout2.app')

@section('content2')
<div id="mainDiv" class="container  d-none">
    <div class="row">
    <div class="col-md-12 p-5">

        <table id="userDataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Img</th>
                <th class="th-sm">Name</th>
                <th class="th-sm">Email</th>
                <th class="th-sm">Mobile</th>
                <th class="th-sm">Details</th>
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

            <div id="serviceEditForm" class="d-none" class="w-100">

         <input id="ImamNameID" type="text" class="form-control mb-4" placeholder="Name">
         <input id="ImamEmailID" type="text" class="form-control mb-4" placeholder="Email">
         <input id="ImamImgID" type="text" class="form-control mb-4" placeholder="Image Link">
         <input id="ImamMobID" type="text" class="form-control mb-4" placeholder="Mobile">
         <input id="ImamDetID" type="text" class="form-control mb-4" placeholder="Details">

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
<script type="text/javascript">
getadminuserData();
//for services table
function getadminuserData() {
    axios.get('/getimamData')
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
                $('#serviceDataTable').DataTable().destroy();
                $('#service_table').empty();
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td><img class='table-img' src=" + jsonData[i].img + "></td>" +
                        "<td>" + jsonData[i].name + "</td>" +
                        "<td>" + jsonData[i].email + "</td>" +
                        "<td>" + jsonData[i].mobile + "</td>" +
                        "<td>" + jsonData[i].Details + "</td>" +
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
                    SeviceUpdateDetails(id)
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
// //service modal yes button
$('#serviceDeleteConfirmBtn').click(function() {
    var id = $('#serviceDeleteID').html();
    imamDelete(id)
});
//service delete
function imamDelete(deleteID) {
    $('#serviceDeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>")
    axios.post('/imamDelete', {
            id: deleteID
        })
        .then(function(response) {
            $('#serviceDeleteConfirmBtn').html("Yes")
            if (response.status == 200) {
                if (response.data == 1) {
                    $('#deleteModal').modal('hide')
                    toastr.success('Delete Success');
                    getadminuserData();
                } else {
                    $('#deleteModal').modal('hide')
                    toastr.error('Delete failed');
                    getadminuserData();
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
//each service update details
// function SeviceUpdateDetails(detailsID) {
//     axios.post('/imamDetails', {
//             id: detailsID
//         })
//         .then(function(response) {
//             if (response.status == 200) {
//                 $('#serviceEditForm').removeClass('d-none')
//                 $('#serviceEditLoader').addClass('d-none')
//                 var jsonData = response.data;
//                 $('#ImamNameID').val(jsonData[0].name)
//                 $('#ImamEmailID').val(jsonData[0].email)
//                 $('#ImamMobID').val(jsonData[0].mobile)
//                 $('#ImamDetID').val(jsonData[0].Details)
//                 $('#ImamImgID').val(jsonData[0].img)


//             } else {
//                 $('#serviceEditLoader').addClass('d-none')
//                 $('#serviceEditWrong').removeClass('d-none')
//             }
//         })
//         .catch(function(error) {
//             $('#serviceEditLoader').addClass('d-none')
//             $('#serviceEditWrong').removeClass('d-none')
//         })
// }
// //service update modal save button
// $('#serviceEditConfirmBtn').click(function() {
//     var id = $('#serviceEditID').html();
//     var name = $('#userNameID').val();
//     var email = $('#userEmailID').val();
//     var mob = $('#userMobID').val();
//     var des = $('#userDetID').val();
//     var img = $('#userImgID').val();
//     userUpdate(id, name,email,mob, des, img)
// });
// //service update
// function userUpdate(userID, name,email, mob, des,img) {
//     $('#serviceEditConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>")
//     if (name.length == 0) {
//         toastr.error('Service Name is Empty!');
//     } else if (des.length == 0) {
//         toastr.error('Service Description is Empty!');
//     }else if (email.length == 0) {
//         toastr.error('Service Description is Empty!');
//     }else if (mob.length == 0) {
//         toastr.error('Service Image is Empty!');
//     }else if (img.length == 0) {
//         toastr.error('Service Image is Empty!');
//     } else {
//         axios.post('/userUpdate', {
//                 id: userID,
//                 name: name,
//                 mobile:mob,
//                 email:email,
//                 des: des,
//                 img: img
//             })
//             .then(function(response) {
//                 $('#serviceEditConfirmBtn').html("Save")
//                 if (response.status == 200) {
//                     if (response.data == 1) {
//                         $('#editModal').modal('hide')
//                         toastr.success('Update Success');
//                         getServiceData();
//                     } else {
//                         $('#editModal').modal('hide')
//                         toastr.success('Update failed');
//                         getServiceData();
//                     }
//                 } else {
//                     $('#editModal').modal('hide')
//                     toastr.error('Something went Wrong!!');
//                 }
//             })
//             .catch(function(error) {
//                 $('#editModal').modal('hide')
//                 toastr.error('Something went Wrong!!');
//             })
//     }
// }

</script>

@endsection
