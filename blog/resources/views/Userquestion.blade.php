@extends('Layout3.app')

@section('content3')

<div class="container py-5">
    <div class="row">
        <div class="col-12 py-5">
            <div class="card">
                <div class="card-header">
                   Ask Question
                </div>
                <div class="card-body">
                    <form>
                        <label for="name">Take Category:</label>

                        <label for="name">Salah,Siyam,Zakah,Haz,Masalah</label>
                        <input type="text" class="form-control">
                        <label for="name">Question</label>
                        <input type="email" class="form-control">
                        <a href="question.html" class="btn btn-primary btn-sm">Submit</a>
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
                    <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="th-sm">UserName</th>
                                <th class="th-sm">Catagory</th>
                                <th class="th-sm">Question?</th>
                                <th class="th-sm">Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="th-sm">Atiqur</th>
                                <th class="th-sm">Zakah</th>
                                <th class="th-sm">Amount Of Zakah</th>
                                <th class="th-sm"><button class="btn btn-success btn-sm">Details</button></th>
                            </tr>
                            <tr>
                                <th class="th-sm">Atiqur</th>
                                <th class="th-sm">Zakah</th>
                                <th class="th-sm">Amount Of Zakah</th>
                                <th class="th-sm"><button class="btn btn-success btn-sm">Details</button></th>
                            </tr>
                            <tr>
                                <th class="th-sm">Atiqur</th>
                                <th class="th-sm">Zakah</th>
                                <th class="th-sm">Amount Of Zakah</th>
                                <th class="th-sm"><button class="btn btn-success btn-sm">Details</button></th>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- change password -->



    </div>
</div>


@endsection

