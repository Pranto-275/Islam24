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


@endsection

@section('script')
<script>

getServiceData();
//for services table
function getServiceData() {
    axios.get('/getServiceData')
        .then(function(response) {
            if (response.status == 200) {
                $('#mainDiv').removeClass('d-none');
                $('#loaderDiv').addClass('d-none');
                $('#serviceDataTable').DataTable().destroy();
                $('#service_table').empty();
                var jsonData = response.data;
                $.each(jsonData, function(i, item) {
                    $('<tr>').html(
                        "<td><img class='table-img' src=" + jsonData[i].service_img + "></td>" +
                        "<td>" + jsonData[i].service_name + "</td>" +
                        "<td>" + jsonData[i].service_des + "</td>" +
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

</script>
@endsection
