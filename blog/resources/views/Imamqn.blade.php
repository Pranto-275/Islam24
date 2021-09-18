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
                    <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">UserName</th>
                                <th class="th-sm">Catagory</th>
                                <th class="th-sm">Question?</th>
                                <th class="th-sm">Show Answer</th>
                                <th class="th-sm">Edit Anser</th>
                                <th class="th-sm">Push Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="th-sm">Atiqur</th>
                                <th class="th-sm">Zakah</th>
                                <th class="th-sm">Amount Of Zakah</th>
                                <th class="th-sm"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2">Details</button></th>
                                <th class="th-sm"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal3">Edit</button></th>
                                <th class="th-sm">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                       Push Answer
                                      </button>
                                </th>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- change password -->



    </div>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Question: Amount of Zakah?
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="">
                    <textarea name="answer" id="answer" cols="50" rows="10">
                        Answer: It is customarily 2.5% (or 1⁄40) of a Muslim's total savings and wealth above a minimum amount known as nisab, but Islamic scholars differ on how much nisab is and other aspects of zakat.
                    </textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Question: Amount of Zakah?
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">


                <h6>Answer: It is customarily 2.5% (or 1⁄40) of a Muslim's total savings and wealth above a minimum amount known as nisab, but Islamic scholars differ on how much nisab is and other aspects of zakat.
                </h6>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<div class="modal" id="myModal3">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Question: Amount of Zakah?
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="">
                    <textarea name="editusername" id="editusername" cols="50" rows="10">
                       Answer: It is customarily 2.5%  of a Muslim's total savings and wealth above a minimum amount known as nisab, but Islamic scholars differ on how much nisab is and other aspects of zakat.

                    </textarea>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>


            </div>

        </div>
    </div>
</div>


@endsection

