@extends('staff-dashboard-layout.dashboard-template')

@section('dashboard-staff-content')


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
      <h3 class="panel-title" style="text-align:center;">Change Username</h3>
      <br>

      <form action="/change-username-of-staff-account" method="POST">
        {{ csrf_field() }}

        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" value="{{$staff_data[0]->username}}" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>

          <div class="checkbox col-md-2" style="margin-top:0.6%;">
              <label>
                <input type="checkbox" style="width: 0.9rem; height: 0.9rem;" class="form-check-input" id="check1" runat="server"> Show Password
              </label>
          </div>
        </div>

        <div class="form-group row">
          <label style="visibility:hidden;" for="button" class="col-sm-2 col-form-label">button</label>
          <div class="col-sm-8">
            <input class="btn btn-primary col-md-2 col-sm-12" value="Change" id="button" type="submit">
          </div>
        </div>

      </form>

    </div>
</div>

<br>

<div class="card">
    <div class="card-body">
      <h3 class="panel-title" style="text-align:center;">Change Password</h3>
      <br>

      <form action="/change-password-of-staff-account" method="POST">

        {{ csrf_field() }}

        <div class="form-group row">
          <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Current Password" required>
          </div>

          <div class="checkbox col-md-2" style="margin-top:0.6%;">
              <label>
                <input type="checkbox" style="width: 0.9rem; height: 0.9rem;" class="form-check-input" id="check2" runat="server"> Show Password
              </label>
          </div>

        </div>

        <div class="form-group row">
          <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required>
          </div>

          <div class="checkbox col-md-2" style="margin-top:0.6%;">
              <label>
                <input type="checkbox" style="width: 0.9rem; height: 0.9rem;" class="form-check-input" id="check3" runat="server"> Show Password
              </label>
          </div>

        </div>

        <div class="form-group row">
          <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
          </div>

          <div class="checkbox col-md-2" style="margin-top:0.6%;">
              <label>
                <input type="checkbox" style="width: 0.9rem; height: 0.9rem;" class="form-check-input" id="check4" runat="server"> Show Password
              </label>
          </div>

        </div>

        <div class="form-group row">
          <label style="visibility:hidden;" for="button" class="col-sm-2 col-form-label">button</label>
          <div class="col-sm-8">
            <input class="btn btn-primary col-md-2 col-sm-12" value="Change" id="button" type="submit">
          </div>
        </div>
      </form>

    </div>
</div>

<br>




@endsection

<script>

    window.onload=function(){
      $(".nav-item:eq(2)").addClass("active");

      document.getElementById("check1").onclick = function(){

        if(document.getElementById("check1").checked == true){

          document.getElementById("password").type="text";

        }else{

          document.getElementById("password").type="password";
        }

      }


      document.getElementById("check2").onclick = function(){

        if(document.getElementById("check2").checked == true){

          document.getElementById("current_password").type="text";

        }else{

          document.getElementById("current_password").type="password";
        }

      }

      document.getElementById("check3").onclick = function(){

        if(document.getElementById("check3").checked == true){

          document.getElementById("new_password").type="text";

        }else{

          document.getElementById("new_password").type="password";
        }

      }

      document.getElementById("check4").onclick = function(){

        if(document.getElementById("check4").checked == true){

          document.getElementById("confirm_password").type="text";

        }else{

          document.getElementById("confirm_password").type="password";
        }

      }

    }


</script>
