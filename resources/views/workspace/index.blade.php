@extends('layouts.master')
@section("title","Workspace")
@section('style')
 <style type="text/css">
    .workspace{
        background-color:#CCC;
        color:#00b6c1 !important;
        border-left:3px solid #00b6c1;
    }
 </style>
@endsection
@section('header')
<div class="col-12">
    <div class="card">
        <div class="card-title  p-2" style="background-color:#F1F1F1">
            Search
        </div>
        <div class="card-body pl-1 pr-1 pt-1 pb-1">
            <form class="row">
                @csrf
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="Кодструктуры" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Кодструктуры <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <select name="code_structure" id="Кодструктуры"  class="mt-0 form-control">
                        <option value=""></option>
                        @if(count($f1c) > 0)
                          @foreach($f1c as $key=>$f1)
                            <option value="{{$f1->Кодструктуры}}">{{$f1->Кодструктуры}}</option>
                          @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="workspace" class="control-label" style="margin:0px;padding:0;">&nbsp;</label>
                    <button type="submit" name="workspace" id="workspace"   class="btn btn-primary  waves-effect waves-primary mt-4 pt-1 pb-1 pl-2 pr-2"><i data-feather="send"></i> Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <h3>F1c</h3>
          <table class="table table-hover mb-0">
            <thead style="background-color:#00b6c1;color:#FFF;">
              <tr>
                <th>No</th>
                <th>Кодструктуры</th>
                <th>КодПК</th>
                <th>НаименованиеПК</th>
                <th>КлассПК</th>
                <th>ТипПК</th>
                <th>СтатусПК</th>
                <th>ОценкаПК</th>
                <th>ПримечаниекПК</th>
                <th style="min-width:240px;">Activities</th>
              </tr>
            </thead>
            <tbody>
              @if(count($f1cTables) > 0)
                @foreach($f1cTables as $key=>$f1)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f1->Кодструктуры}}</td>
                        <td>{{@$f1->КодПК}}</td>
                        <td>{{@$f1->НаименованиеПК}}</td>
                        <td>{{@$f1->КлассПК}}</td>
                        <td>{{@$f1->ТипПК}}</td>
                        <td>{{@$f1->СтатусПК}}</td>
                        <td>{{@$f1->ОценкаПК}}</td>
                        <td>{{@$f1->ПримечаниекПК}}</td>
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
<div class="col-12">
    <div class="card">
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <h3>F2c</h3>
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
              @if(count($f2cTables) > 0)
                @foreach($f2cTables as $key=>$f2)
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
<div class="col-12">
    <div class="card">
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <h3>F3c</h3>
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
              @if(count($f3cTables) > 0)
                @foreach($f3cTables as $key=>$f3)
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
<div class="col-12">
    <div class="card">
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <h3>F4c</h3>
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
              @if(count($f4cTables) > 0)
                @foreach($f4cTables as $key=>$f4)
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
<div class="col-12">
    <div class="card">
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <h3>F6c</h3>
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
              @if(count($f6cTables) > 0)
                @foreach($f6cTables as $key=>$f6)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{@$f6->Кодструктуры}}</td>
                        <td>{{@$f6->КодПЗ-1}}</td>
                        <td>{{@$f6->СтруктурноесвойствоПЗ-1}}</td>
                        <td>{{@$f6->КодПК}}</td>
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

@endsection