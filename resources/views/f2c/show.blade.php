@extends('layouts.master')
@section("title","F2c")
@section('style')
 <style type="text/css">
    .f2c{
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
                <th>КласссвязиПК</th>
                <th>КодПК_1</th>
                <th>КодПК_2</th>
                <th>КодПК_3</th>
                <th>НаименованиесвязиПК</th>
                <th>ТипсвязиПК</th>
                <th>ОценкасвязиПК</th>
                <th>КодсвязиПК</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($f2c) > 0)
                @foreach($f2c as $key=>$f2)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f2->Кодструктуры}}</td>
                        <td>{{@$f2->КласссвязиПК}}</td>
                        <td>{{@$f2->КодПК_1}}</td>
                        <td>{{@$f2->КодПК_2}}</td>
                        <td>{{@$f2->КодПК_3}}</td>
                        <td>{{@$f2->НаименованиесвязиПК}}</td>
                        <td>{{@$f2->ТипсвязиПК}}</td>
                        <td>{{@$f2->ОценкасвязиПК}}</td>
                        <td>{{@$f2->КодсвязиПК}}</td>
                        <td>
                            <a href="#" class="btn btn-primary pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                            <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                        </td>
                    </tr>
                @endforeach
              @else
                  <tr>
                      <td colspan="11" style="text-align:center">There is no record...</td>
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