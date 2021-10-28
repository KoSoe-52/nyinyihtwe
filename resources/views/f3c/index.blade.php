@extends('layouts.master')
@section("title","F3c")
@section('style')
 <style type="text/css">
    .f3c{
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
                <th>Кодструктуры</th>
                <th>КодПЗ-1</th>
                <th>НаименованиеПЗ-1</th>
                <th>Степеньформализации</th>
                <th>СтатусПЗ-1</th>
                <th>СтруктурноесвойствоПЗ-1</th>
                <th>ПримечаниеПЗ-1</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($f3c) > 0)
                @foreach($f3c as $key=>$f3)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f3->Кодструктуры}}</td>
                        <td>{{@$f3->КодПЗ-1}}</td>
                        <td>{{@$f3->НаименованиеПЗ-1}}</td>
                        <td>{{@$f3->Степеньформализации}}</td>
                        <td>{{@$f3->СтатусПЗ-1}}</td>
                        <td>{{@$f3->СтруктурноесвойствоПЗ-1}}</td>
                        <td>{{@$f3->ПримечаниеПЗ-1}}</td>
                        <td>
                            <a href="#" class="btn btn-primary pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                            <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                        </td>
                    </tr>
                @endforeach
              @else
                  <tr>
                      <td colspan="9" style="text-align:center">There is no record...</td>
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