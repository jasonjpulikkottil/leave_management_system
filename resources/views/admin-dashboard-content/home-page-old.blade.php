@extends('admin-dashboard-layout.dashboard-template')

@section('dashboard-admin-content')


@if($errors->any())
  @foreach ($errors->all() as $error)
      <div id="errorBox" style="text-align:center;margin-top:20px;" class="alert alert-danger col-md-12 alert-dismissible fade show" role="alert">
          <strong style="color:white;">{!!$error!!}</strong>
          <button type="button" style="color:white;" class="close" data-dismiss=zzz"alert" aria-label="Close">
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
      <h3 class="panel-title" style="text-align:center;">Pending Requests</h3>
      <br>



      @foreach ($pending_data as $key => $data)

          <div class="card text-white bg-dark mb-3">
            <div class="card-header bg-dark ">
              <strong>{{$data->date_of_leave}} ({{$data->firstname}} {{$data->lastname}})</strong>
              <i class="float-right" style="font-size:85%;">Request sent on :- {{$data->date_of_request}}</i>
            </div>
            <div class="card-body">
              <!--h5 class="card-title">{{$data->type_of_leave}}<h5-->

              
             @if($data->type_of_leave=="1")
             Sick Leave
             @elseif($data->type_of_leave=="2")
             Casual Leave
             @endif
              <p class="card-text">{{$data->description}}</p>

              <a style="margin-left:10px;" class="btn btn-danger  float-right " href="/decline-request/{{$data->auto_id}}">Decline</a>
              <a class="btn btn-primary float-right" href="/accept-request/{{$data->auto_id}}">Accept</a>

            </div>
          </div>

      @endforeach



    </div>
</div>



@endsection

<script>

    window.onload=function(){

      $(".nav-item:eq(0)").addClass("active");

    }

</script>
