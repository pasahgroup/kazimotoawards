@extends('spa.layout')
@section('content')


<style>
/*Using CSS for table*/
.demotbl {
    border: 0px solid #69899F;
  }
.demotbl th{
    padding:12px;
    color:#fff;
     font-size:14px;
    text-shadow:1px 1px 1px #568F23;
    border-bottom:3px solid #9ED929;
    background-color:#9DD929;
    background:-webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.02, rgb(123,192,67)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(158,217,41))
        );
    background: -moz-linear-gradient(
        center bottom,
        rgb(123,192,67) 3%,
        rgb(139,198,66) 52%,
        rgb(158,217,41) 88%
        );
    -webkit-border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-radius:5px 5px 0px 0px;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
  }
.demotbl td{
    width:100px;
    padding:10px;
    text-align:center;
    vertical-align: top;
    background-color:#DEF3CA;
    border: 1px solid #BED3AB;
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:2px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
  }
</style>


  <!-- ==================== Blog List (Start) ==================== -->
  <section class="blog list" style="padding-top:120px;">

<table class="demotbl">
  <tr>
     <th>SN</th>
      <th>Bank Name</th>
      <th>Swift Code</th>
      <th>Bank Account No</th>
      <th>Bank Holder Name</th>
       <th>Currency</th>
        <th>Country</th>
         
  </tr>
  @foreach($banks as $bank)
  <tr>
      <td>1</td>
      <td>{{$bank->bank_name}}</td>
      <td>{{$bank->swift_code}}</td>
      <td>{{$bank->bank_account_no}}</td>
      <td>{{$bank->bank_holder_name}}</td>
      <td>{{$bank->currency}}</td>
      <td>{{$bank->country}} </td>
  </tr>
  @endforeach
         
</table>
 </section>

@endsection
