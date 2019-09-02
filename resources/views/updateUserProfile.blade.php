@extends('layouts.app')

@section('content')
@foreach($customers as $customer)
<div class="container">
<form method="PUT" action="{{ route('update.profile') }}">
    @csrf
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="content-panel">
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Personal Info</h3>
                            <div class="form-group avatar">
                                <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                    <img class="img-rounded img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                    {{ Auth::user()->fname }}
                                </figure>
                                <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                    <input type="file" class="file-uploader pull-left">
                                    <button type="submit" class="btn btn-sm btn-default-alt pull-left">Update Image</button>
                                </div>
                            </div>
                            
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">First Name</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->fname }}" name="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">Last Name</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->lname }}" name="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label">NIC</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->nic }}" name="nic">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title">Contact Info</h3>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="email" class="form-control" value="{{ $customer->email }}" name="email">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Phone Number</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->phoneNo }}" name="phoneNo" >
    
                                </div>
                            </div>
                            <div class="form-group">
                            <h3 class="fieldset-title">Address</h3>
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Home No</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->no }}" name="no">

                                </div>
                            </div>

                            <div class="form-group">
                           
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">Street</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->street }}" name="street">

                                </div>
                            </div>

                            <div class="form-group">
                            
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label">City</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" value="{{ $customer->city }}" name="city">

                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" type="submit" value="Update Profile">
                                <a href="{{ route('update.profile','1')}}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section> 
    </div>
    {{Form::hidden('_method','PUT')}}
    </form>
</div>
@endforeach

@endsection

