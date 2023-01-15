@extends('admin-dashboard-layout.dashboard-template')

@section('dashboard-admin-content')

@if($errors->any())
  @foreach ($errors->all() as $error)
      <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
          <strong style="color:white;">{!!$error!!}</strong>
          <button type="button" style="color:white;" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true" style="color:white;" >&times;</span>
          </button>
      </div>

      <script>

        window.onload=function(){

          $("#errorBox").delay(3000).fadeOut("slow");

        }

      </script>

  @endforeach
@endif


@if(session()->has('message'))

    <div id="successBox" style="text-align:center;margin-top:20px;" class="alert alert-success col-md-12 alert-dismissible fade show" role="alert">
                <strong> {{ session()->get('message') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
    </div>

    <script>

            setTimeout(
            function()
            {
                $("#successBox").delay(3000).fadeOut("slow");

            }, 1000);

    </script>

@endif

<div class="card">
      <div class="card-body">

        <h3 class="panel-title" style="text-align:center;">Edit Staffs</h3>
        <br>

        <form action="/update-staff-data" method="POST">

          {{ csrf_field() }}

          <div class="form-row">

            <div class="col-md-4 mb-3">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value="{{$staff_data[0]->firstname}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value="{{$staff_data[0]->lastname}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="date_of_birth">Date of Birth</label>
              <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{$staff_data[0]->dob}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="{{$staff_data[0]->email}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="phone_number">Phone Number</label>
              <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number" value="{{$staff_data[0]->phone_number}}" required>
            </div>

            <div class="col-md-4 mb-3">
              <label for="position">Position</label>
              <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position/Role" value="{{$staff_data[0]->position}}" required>
            </div>

          </div>

          <input type="hidden" name="auto_id" value="{{$staff_data[0]->auto_id}}" />

          <input class="btn btn-lg btn-primary float-right" value="Update" type="submit">

        </form>

      </div>
</div>

@endsection

<script>

    window.onload=function(){
      $(".nav-item:eq(0)").addClass("active");
    }
</script>
