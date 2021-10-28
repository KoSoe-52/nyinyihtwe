@extends('layouts.master')
@section("title","Add item")
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
    <form class="row" method="POST">
        @csrf
        <div class="card offset-lg-2 col-md-12 col-sm-12 col-lg-8 p-0">
            <div class="card-header text-muted" style="background-color:#F5F5F5;">Create Account </div>
            <div class="card-body row p-3">
                <div class="form-group col-sm-6 col-md-6 col-lg-4  mt-0 mb-1 pb-0">
                    <label for="name" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Name <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <input type="text" name="name" id="name" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-6 col-lg-4 mt-0 mb-1 pb-0">
                    <label for="username" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Username <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <input type="text" name="username" id="username" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-6 col-lg-4  mt-0 mb-1 pb-0">
                    <label for="password" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Password <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <input type="password" name="password" id="password" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-sm-6 col-md-6 col-lg-4  mt-0 mb-1 pb-0">
                    <label for="phone" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Phone <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <input type="text" name="phone" id="phone" autocomplete="off" class="mt-0 form-control">
                </div>
                
                <div class="form-group col-sm-6 col-md-6 col-lg-8  mt-0 mb-1 pb-0">
                    <label for="address" class="control-label" style="margin:0px;padding:0;color:#00b6c1;font-weight:bold;">Address <sub class="text-danger" style="font-size:24px;">*</sub></label>
                    <input type="text" name="address" id="address" autocomplete="off" class="mt-0 form-control">
                </div>
                <div class="form-group col-12 pb-0">
                    <label for="create_deliveryman" class="control-label" style="margin:0px;padding:0;">&nbsp;</label>
                    <button type="submit" name="create_deliveryman" id="create_deliveryman"   class="btn btn-primary  waves-effect waves-primary mt-4 pt-1 pb-1 pl-3 pr-3"><i data-feather="send"></i> Create</button>
                </div>
                <div class="form-group col-12 mb-0">
                    <!---- error place --->
                    @if(count($errors->all()) > 0)
                        <div class="alert alert-danger">{{implode(",",$errors->all())}}</div>
                    @endif
                    @if(session("status"))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session("status")}}
                        </div>
                    @endif
                    @if(session("error"))
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close text-danger" data-dismiss="alert" aria-label="close">&times;</a>
                            {{session("error")}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('content')

@endsection
@section("script")

@endsection