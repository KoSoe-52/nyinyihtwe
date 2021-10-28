@extends('layouts.master')
@section("title","F4c")
@section('style')
 <style type="text/css">
    .f4c{
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
                <th>КодПЗ-1_1</th>
                <th>КодПЗ-1_2</th>
                <th>КодПЗ-1_3</th>
                <th>ОценкасвязиПЗ</th>
                <th>ТипсвязиПЗ-1</th>
                <th>КодсвязиПЗ-1</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($f4c) > 0)
                @foreach($f4c as $key=>$f4)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f4->Кодструктуры}}</td>
                        <td>{{@$f4->КодПЗ-1_1}}</td>
                        <td>{{@$f4->КодПЗ-1_2}}</td>
                        <td>{{@$f4->КодПЗ-1_3}}</td>
                        <td>{{@$f4->ОценкасвязиПЗ}}</td>
                        <td>{{@$f4->ТипсвязиПЗ-1}}</td>
                        <td>{{@$f4->КодсвязиПЗ-1}}</td>
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