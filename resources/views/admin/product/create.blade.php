@extends('admin.layout.admin')

@section('content')

  <h3>Add Product</h3>

  <div class="row">

    {!! Form::open(['route'=>'product.store', 'method'=>'post', 'files'=>true]) !!}

      <div class="form-group">
        {{Form::lable('name', 'Name')}}
        {{Form::text('name', null, array('class'=>'form-control')) }}
      </div>

      <div class="form-group">
        {{Form::lable('description', 'Description')}}
        {{Form::text('description', null, array('class'=>'form-control')) }}
      </div>

      <div class="form-group">
        {{Form::lable('size', 'Size')}}
        {{Form::select('size', ['small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'], null, ['class'=>'form-control']) }}
      </div>

      <div class="form-group">
        {{Form::lable('image', 'Image')}}
        {{Form::file('image', array('class'=>'form-control')) }}
      </div>

    {!! Form::close() !!}
  </div>
  @endsection
