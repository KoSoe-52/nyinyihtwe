@extends('layouts.master')
@section("title","Delivery man")
@section('style')
 <style type="text/css">
    .delivery-man{
        background-color:#CCC;
        color:#00b6c1 !important;
        border-left:3px solid #00b6c1;
    }
 </style>
@endsection
@section('header')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <form class="row">
                @csrf
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="name" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Name</label>
                    <input type="text" name="name" id="name" value="{{request()->name}}" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="username" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Username</label>
                    <input type="text" name="username" id="username" value="{{request()->username}}" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="phone" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Phone</label>
                    <input type="text" name="phone" id="phone" value="{{request()->phone}}" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="search" class="control-label" style="margin:0px;padding:0;">&nbsp;</label>
                    <button type="submit" name="searchUser" id="search"   class="btn btn-primary  waves-effect waves-primary mt-4">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <div class="col-12">
          <span class="card-title">အချက်အလက်များ</span>
          <a href="{{route('createDeliveryman')}}" class="btn btn-primary float-right text-warning"><i data-feather="plus-circle" class="text-warning"></i> Create user</a>
        </div>
      </div>
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <table class="table mb-0">
            <thead class="thead-dark" style="background-color:#00b6c1;color:#FFF;">
              <tr>
                <th>#</th>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users)>0)
                @foreach($users as $key=>$user)
                  <tr>
                      <td>{{$key + 1}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->address}}</td>
                      <td>
                          <a href="{{url('/delivery-man/'.$user->id)}}" class="btn btn-success pt-1 pb-1 pl-3 pr-3"><i data-feather="edit"></i> Edit</a>
                          <button class="btn btn-danger pt-1 pb-1 pl-3 pr-3"><b class="">x</b> Delete</button>
                      </td>
                  </tr>
                @endforeach
              @else
                <tr>
                    <td colspan="6" style="text-align:center">There is no user...</td>
                </tr>
              @endif
            </tbody>
          </table>
          {{$users->links()}}
        </div><!-- TABLE-RESPONSIVE -->
      </div><!---  card-content--->
    </div><!--- card --->
</div>
@endsection
@section("script")

@endsection