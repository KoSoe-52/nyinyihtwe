@extends('layouts.master')
@section("title","F6c")
@section('style')
 <style type="text/css">
    .f6c{
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
                <th>СтруктурноесвойствоПЗ-1</th>
                <th>КодПК</th>
                <th>РольПК</th>
                <th>СтруктурноесвойствоПК</th>
                <th>ОбъемноесвойствоПК</th>
                <th>ОсобаярольПК</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($f6c) > 0)
                @foreach($f6c as $key=>$f6)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f6->Кодструктуры}}</td>
                        <td>{{@$f6->КодПЗ_1}}</td>
                        <td>{{@$f6->СтруктурноесвойствоПЗ_1}}</td>
                        <td><a href="{{url('/f6c/'.$f6->КодПК.'/'.$f6->КодПЗ_1)}}">{{@$f6->КодПК}}</a></td>
                        <td>{{@$f6->РольПК}}</td>
                        <td>{{@$f6->СтруктурноесвойствоПК}}</td>
                        <td>{{@$f6->ОбъемноесвойствоПК}}</td>
                        <td>{{@$f6->ОсобаярольПК}}</td>
                        <td>
                            <a href="#" class="btn btn-primary pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                            <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                        </td>
                    </tr>
                @endforeach
              @else
                  <tr>
                      <td colspan="10" style="text-align:center">There is no record...</td>
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