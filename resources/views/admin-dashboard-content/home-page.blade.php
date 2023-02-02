@extends('admin-dashboard-layout.dashboard-template')

@section('dashboard-admin-content')


<div class="card">
    <div class="card-body">
      <h3 class="panel-title" style="text-align:center;">Pending Requests</h3>
      <br>



      @foreach ($pending_data as $key => $data)

          <div class="card   mb-3">
            <div class="card-header  ">
              <strong>{{$data->date_of_leave}} ({{$data->firstname}} {{$data->lastname}})</strong>
              <i class="float-right" style="font-size:85%;">Request sent on :- {{$data->date_of_request}}</i>
            </div>
            <div class="card-body">
            

             @foreach($leave_type as $keyy=>$object)
            
             @if($object->id== $data->type_of_leave) 
             {{ $object->leave_type_name }}
             @endif
              @endforeach

             
              <a style="margin-left:10px;" class="btn btn-danger  float-right " href="/decline-request/{{$data->auto_id}}">Decline</a>
              <a class="btn btn-primary float-right" href="/accept-request/{{$data->auto_id}}">Accept</a>

            </div>
          </div>

      @endforeach



    </div>
</div>



@endsection