@extends('Layout3.app')

@section('content3')

<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Email</th>
                        <th class="th-sm">Mobile</th>
                        <th class="th-sm">Address</th>
                        <th class="th-sm">Details</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Appointment</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="th-sm"><img class="table-img" src="image/imam.png"></th>
                        <th class="th-sm">Aminul Haque Amin</th>
                        <th class="th-sm">amin.aminul38@gmail.com</th>
                        <th class="th-sm">017xxxxxxxx</th>
                        <th class="th-sm">Kashimpur,Gazipur</th>
                        <th class="th-sm"><button class="btn btn-sm btn-success">Details</button></th>
                        <th class="th-sm"><button class="btn btn-sm btn-primary">Free</button></th>
                        <th class="th-sm"><button class="btn btn-primary btn-sm">Select</button>

                    </tr>

                    <tr>
                        <th class="th-sm"><img class="table-img" src="image/imam.png"></th>
                        <th class="th-sm">Aminul Haque Amin</th>
                        <th class="th-sm">amin.aminul38@gmail.com</th>
                        <th class="th-sm">017xxxxxxxx</th>
                        <th class="th-sm">Kashimpur,Gazipur</th>
                        <th class="th-sm"><button class="btn btn-sm btn-success">Details</button></th>
                        <th class="th-sm"><button class="btn btn-sm btn-warning">Taken</button></th>
                        <th class="th-sm"><button class="btn btn-danger btn-sm">Not Now</button>

                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection

