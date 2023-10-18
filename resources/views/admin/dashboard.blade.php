@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        {{-- <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div> --}}
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div><br>
      <div class="row mt-3 d-flex justify-center">
        <div class="col-md-3">
            <div class="card card-body bg-primary text-white mb-3">
                <label for="commande">Total Reservation</label>
                <h1>{{$allReservations}}</h1>
                <a href="{{ route('admin.reservations') }}" class="text-white">Voir</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-success text-white mb-3">
                <label for="oderders">All Rooms</label>
                <h1>{{$allRooms}}</h1>
                <a href="{{ route('rooms.index') }}" class="text-white">Voir </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body bg-warning text-white mb-3">
                <label for="oderders">All users</label>
                <h1>{{$allUsers}}</h1>
                <a href="{{ route('users.index') }}" class="text-white">Voir </a>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection
