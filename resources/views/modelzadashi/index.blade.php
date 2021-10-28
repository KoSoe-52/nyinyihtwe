@extends('layouts.master')
@section("title","modelzadashar")
@section('style')
 <style type="text/css">
    .modelzadashi{
        background-color:#CCC;
        color:#00b6c1 !important;
        border-left:3px solid #00b6c1;
    }
 </style>
@endsection
@section('header')
@endsection
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="col-12">
          
        </div>
      </div>
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead style="background-color:#00b6c1;color:#FFF;">
              <tr>
                <th>No</th>
                <th>КодПрЗ</th>
                <th>КодКМ</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($modelzadashi) > 0)
                @foreach($modelzadashi as $key=>$modelzadash)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$modelzadash->КодПрЗ}}</td>
                        <td>{{@$modelzadash->КодКМ}}</td>
                        <td>
                            <a href="#" class="btn btn-primary pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                            <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                        </td>
                    </tr>
                @endforeach
              @else
                  <tr>
                      <td colspan="4" style="text-align:center">There is no record...</td>
                  </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
@section("script")
<script>
  var baseUrl = "{{url('')}}";
  
</script>
@endsection