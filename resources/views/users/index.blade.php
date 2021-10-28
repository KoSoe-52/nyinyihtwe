@extends('layouts.master')
@section("title","Account setting")
@section('style')
 <style type="text/css">
    .admin-account{
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
                    <input type="text" name="name" id="name" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="username" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="phone" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Phone</label>
                    <input type="text" name="phone" id="phone" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="branch" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Branch</label>
                    <select name="branch" id="branch"  class="mt-0 form-control">
                        <option value=""></option>
                        @if(count($branches) > 0)
                            @foreach($branches as $key=>$branch)
                                <option value="{{$branch->id}}">{{$branch->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-2 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="role" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Role</label>
                    <select name="role" id="role"  class="mt-0 form-control">
                        <option value=""></option>
                        @if(count($roles) > 0)
                            @foreach($roles as $key=>$role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-0 mb-1 pb-0">
                    <label for="search" class="control-label" style="margin:0px;padding:0;">&nbsp;</label>
                    <button type="submit" name="search" id="search"   class="btn btn-primary  waves-effect waves-primary mt-4">Search</button>
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
          <span class="card-title">အသုံးပြုသူများ</span>
          <a href="{{route('createBranchUser')}}" class="btn btn-primary float-right text-warning"><i data-feather="plus-circle" class="text-warning"></i> Create user</a>
        </div>
      </div>
      <div class="card-content">
        <!-- table head dark -->
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead class="thead-dark" style="background-color:#00b6c1;color:#FFF;">
              <tr>
                <th>#</th>
                <th>NAME</th>
                <th>USERNAME</th>
                <th>PHONE</th>
                <th>ADDRESS</th>
                <th>BRANCH</th>
                <th>ROLE</th>
                <th style="min-width:200px;">ACTION</th>
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
                      <td>{{$user->branches->name}}</td>
                      <td>{{$user->roles->name}}</td>
                      <td>
                          <a href="{{url('/users/'.$user->id)}}" class="btn btn-success pt-1 pb-1 pl-2 pr-2"><i data-feather="edit"></i> Edit</a>
                          <button class="btn btn-danger pt-1 pb-1 pl-2 pr-2"><b class="">x</b> Delete</button>
                      </td>
                  </tr>
                @endforeach
              @else
                <tr>
                    <td colspan="8" style="text-align:center">There is no user...</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div><!-- TABLE-RESPONSIVE -->
      </div><!---  card-content--->
    </div><!--- card --->
</div>
@endsection
@section("script")

@endsection