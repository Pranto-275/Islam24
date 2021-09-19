@extends('Layout2.app')

@section('content2')


<div class="container">
    <div class="row">

        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $totalservice }}</h5>
                    <p class="card-text">Service</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $totalimam }}</h5>
                    <p class="card-text">Imam</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $totaluser }}</h5>
                    <p class="card-text">User</p>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection

