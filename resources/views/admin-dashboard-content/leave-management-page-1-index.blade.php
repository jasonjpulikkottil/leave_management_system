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

        <h3 class="panel-title" style="text-align:center;">Search Filter</h3>
        <br>

        <form action="/filter-search-leave-history-controller" method="POST">
          {{ csrf_field() }}
          <div class="form-row">

            <div class="col-md-4 mb-3">
              <label for="staff_id">Select Staff</label>

              <select class="form-control" name = "staff_id" id="staff_id" aria-label="Default select example" required>

                <option value="Select a staff" selected disabled>Select a staff</option>
                @foreach ($staff_basic_data as $key => $data)
                  <option value="{{$data->staff_id}}">{{$data->staff_id}} ({{$data->firstname}} {{$data->lastname}})</option>
                @endforeach

              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label for="type_of_leave">Type of Leave</label>

              <select class="form-control" name = "type_of_leave" id="type_of_leave" aria-label="Default select example" required>

              @foreach($leave_type as $key => $data)
            <option>{{$data->leave_type_name}}</option>    
            @endforeach
               
              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label for="year">Year</label>

              <select class="form-control" name = "year" id="year" aria-label="Default select example" required>

                <option value="All" selected>All</option>
                <option value='2021'>2021</option>
                <option value='2022'>2022</option>
                <option value='2023'>2023</option>
                <option value='2024'>2024</option>
                <option value='2025'>2025</option>
                <option value='2026'>2026</option>
                <option value='2027'>2027</option>
                <option value='2028'>2028</option>
                <option value='2029'>2029</option>
                <option value='2030'>2030</option>
                <option value='2031'>2031</option>
                <option value='2032'>2032</option>
                <option value='2033'>2033</option>
                <option value='2034'>2034</option>
                <option value='2035'>2035</option>
                <option value='2036'>2036</option>
                <option value='2037'>2037</option>
                <option value='2038'>2038</option>
                <option value='2039'>2039</option>
                <option value='2040'>2040</option>
                <option value='2041'>2041</option>
                <option value='2042'>2042</option>
                <option value='2043'>2043</option>
                <option value='2044'>2044</option>
                <option value='2045'>2045</option>
                <option value='2046'>2046</option>
                <option value='2047'>2047</option>
                <option value='2048'>2048</option>
                <option value='2049'>2049</option>
                <option value='2050'>2050</option>
                <option value='2051'>2051</option>
                <option value='2052'>2052</option>
                <option value='2053'>2053</option>
                <option value='2054'>2054</option>
                <option value='2055'>2055</option>
                <option value='2056'>2056</option>
                <option value='2057'>2057</option>
                <option value='2058'>2058</option>
                <option value='2059'>2059</option>
                <option value='2060'>2060</option>
                <option value='2061'>2061</option>
                <option value='2062'>2062</option>
                <option value='2063'>2063</option>
                <option value='2064'>2064</option>
                <option value='2065'>2065</option>
                <option value='2066'>2066</option>
                <option value='2067'>2067</option>
                <option value='2068'>2068</option>
                <option value='2069'>2069</option>
                <option value='2070'>2070</option>
                <option value='2071'>2071</option>
                <option value='2072'>2072</option>
                <option value='2073'>2073</option>
                <option value='2074'>2074</option>
                <option value='2075'>2075</option>
                <option value='2076'>2076</option>
                <option value='2077'>2077</option>
                <option value='2078'>2078</option>
                <option value='2079'>2079</option>
                <option value='2080'>2080</option>
                <option value='2081'>2081</option>
                <option value='2082'>2082</option>
                <option value='2083'>2083</option>
                <option value='2084'>2084</option>
                <option value='2085'>2085</option>
                <option value='2086'>2086</option>
                <option value='2087'>2087</option>
                <option value='2088'>2088</option>
                <option value='2089'>2089</option>
                <option value='2090'>2090</option>
                <option value='2091'>2091</option>
                <option value='2092'>2092</option>
                <option value='2093'>2093</option>
                <option value='2094'>2094</option>
                <option value='2095'>2095</option>
                <option value='2096'>2096</option>
                <option value='2097'>2097</option>
                <option value='2098'>2098</option>
                <option value='2099'>2099</option>
                <option value='2100'>2100</option>
                <option value='2101'>2101</option>
                <option value='2102'>2102</option>
                <option value='2103'>2103</option>
                <option value='2104'>2104</option>
                <option value='2105'>2105</option>
                <option value='2106'>2106</option>
                <option value='2107'>2107</option>
                <option value='2108'>2108</option>
                <option value='2109'>2109</option>
                <option value='2110'>2110</option>
                <option value='2111'>2111</option>
                <option value='2112'>2112</option>
                <option value='2113'>2113</option>
                <option value='2114'>2114</option>
                <option value='2115'>2115</option>
                <option value='2116'>2116</option>
                <option value='2117'>2117</option>
                <option value='2118'>2118</option>
                <option value='2119'>2119</option>
                <option value='2120'>2120</option>
                <option value='2121'>2121</option>

              </select>
            </div>

            <div class="col-md-4 mb-3">
              <label for="month">Month</label>

              <select class="form-control" name = "month" id="month" aria-label="Default select example" required>
                <option value="All" selected>All</option>
                <option value='01'>January</option>
                <option value='02'>February</option>
                <option value='03'>March</option>
                <option value='04'>April</option>
                <option value='05'>May</option>
                <option value='06'>June</option>
                <option value='07'>July</option>
                <option value='08'>August</option>
                <option value='09'>September</option>
                <option value='10'>October</option>
                <option value='11'>November</option>
                <option value='12'>December</option>
              </select>

            </div>

            <div class="col-md-4 mb-3">
              <label for="status">Status</label>

              <select class="form-control" name = "status" id="status" aria-label="Default select example" required>
                <option value="All" selected>All</option>
                <option value="[ACCEPTED]">Accepted</option>
                <option value="[DECLINED]">Declined</option>
              </select>

            </div>

          </div>
          <input class="btn btn-primary float-right" value="Search" type="submit">
        </form>

      </div>
</div>

<br>

<div class="card">
    <div class="card-body">
      <h3 class="panel-title" style="text-align:center;">Add Leave Type</h3>
<br>


      <form action="/add-leave-type" method="POST">
          {{ csrf_field() }}
          <div class="form-row">

            <div class="col-md-4 mb-3">
              
              <label for="ltype">Input Leave Type Name:</label>
              <input class="form-control" type="text" id="ltype" name="ltype">

      </div>

      <div class="col-md-4 mb-3">
              
              <label for="lcount">Leave Count:</label>
              <input  class="form-control" type="number" id="lcount" name="lcount">

      </div>

      <div class="col-md-4 mb-3">
              
              <label for="ltype">From Date:</label>
              <input  class="form-control" type="date" id="lfrom" name="lfrom">

      </div>
      <div class="col-md-4 mb-3">
              
              <label for="ltype">To Date:</label>
              <input  class="form-control" type="date" id="lto" name="lto">

      </div>

      </div>

      <input class="btn btn-primary float-right" value="Add" type="submit">


      </div>
      </div>

<div class="card">
    <div class="card-body">
      <h3 class="panel-title" style="text-align:center;">My Leave History</h3>

      <!--h4>Number of Leaves: <span style="text-weight:bold; color:blue;">{{count($leave_data)}}</span> </h4-->
      <br>
      

      <hr>

      <br>

      @foreach ($leave_data as $key => $data)

          <div class="card  mb-3">
            @if($data->approval_status =="[ACCEPTED]")
              <div class="card-header ">
                <strong>{{$data->date_of_leave}} {{$data->staff_id}} 
                  

            @foreach($staff_basic_data as $keyy=>$object)
             @if($keyy == $data->staff_id-1) 
             {{ $object->firstname }}
             @endif
              @endforeach

                
                
                (Accepted)</strong>
                <i class="float-right" style="font-size:85%;">Request sent on :- {{$data->date_of_request}}</i>
              </div>
            @elseif($data->approval_status =="[DECLINED]")
              <div class="card-header ">
                <strong>{{$data->date_of_leave}}
                  
                
                

            @foreach($staff_basic_data as $keyy=>$object)
             @if($keyy == $data->staff_id-1) 
             {{ $object->firstname }}
             @endif
              @endforeach

                
                (Declined)</strong>
                <i class="float-right" style="font-size:85%;">Request sent on :- {{$data->date_of_request}}</i>
              </div>
            @endif

            <div class="card-body">
            <!--h5 class="card-title">{{$data->type_of_leave}}<h5-->
         

            @foreach($leave_type as $keyy=>$object)
             @if($keyy == $data->type_of_leave-1) 
             {{ $object->leave_type_name }}
             @endif
              @endforeach


            </div>
          </div>

      @endforeach



    </div>
</div>

@endsection

<script>

    window.onload=function(){

      $(".nav-item:eq(2)").addClass("active");

      $('.confirmation').on('click', function () {
          return confirm('Are you sure to delete?');
      });


      $('#staff_id').val("{{$filter_options['staff_id']}}");
      $('#type_of_leave').val("{{$filter_options['type_of_leave']}}");
      $('#year').val("{{$filter_options['year']}}");
      $('#month').val("{{$filter_options['month']}}");
      $('#status').val("{{$filter_options['status']}}");


    }

</script>
