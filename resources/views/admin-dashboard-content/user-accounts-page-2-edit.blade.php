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
      <h3 class="panel-title" style="text-align:center;">Change Username</h3>
      <br>

      <form action="/edit-user-account" method="POST">
        {{ csrf_field() }}

        <div class="form-group row">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="username" value="{{$user_data[0]->username}}" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="password" value="{{$user_data[0]->password}}" name="password" placeholder="Password" required>
          </div>

        </div>

        <input type="hidden" name="auto_id" value="{{$user_data[0]->auto_id}}">

        <div class="form-group row">
          <label style="visibility:hidden;" for="button" class="col-sm-2 col-form-label">button</label>
          <div class="col-sm-8">
            <input class="btn btn-primary col-md-2 col-sm-12 float-right" value="Update" id="button" type="submit">
          </div>
        </div>

      </form>

    </div>
</div>

@endsection

<script>

    window.onload=function(){
      $(".nav-item:eq(3)").addClass("active");
    }
</script>
