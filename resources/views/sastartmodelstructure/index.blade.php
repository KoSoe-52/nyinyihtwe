@extends('layouts.master')
@section("title","sastartmodelstructure")
@section('style')
 <style type="text/css">
    .sastartmodelstructure{
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
                <th>КодКМ</th>
                <th>Кодстатструктуры</th>
                <th>Коддинструктуры</th>
                <th>Кодструктурыувязки</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($sastartmodelstructure) > 0)
                @foreach($sastartmodelstructure as $key=>$sastartmodelstructur)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$sastartmodelstructur->КодКМ}}</td>
                        <td>{{@$sastartmodelstructur->Кодстатструктуры}}</td>
                        <td>{{@$sastartmodelstructur->Коддинструктуры}}</td>
                        <td>{{@$sastartmodelstructur->Кодструктурыувязки}}</td>
                        <td>
                            <a href="#" class="btn btn-primary pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                            <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                        </td>
                    </tr>
                @endforeach
              @else
                  <tr>
                      <td colspan="6" style="text-align:center">There is no record...</td>
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