@extends('layouts.default')
@section('content')

<div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="float:left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right" style="float:right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	
    <form method="post" id="productForm" enctype="multipart/form-data" action="{{ route('products.store') }}" data-parsley-validate class="form-horizontal form-label-left">
{{csrf_field()}}
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Product Name:</strong>
                {!! Form::text('product_name', null, 
                array('placeholder' => 'Product Name',
                'class' => 'form-control',
                'required'
                )) !!}
                @if ($errors->has('name'))
                                <span class="help-block">{{ $errors->first('product_name') }}</span>
                                @endif
            </div>
        </div>
		</div>
		<div class= "row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Category:</strong>
            
                
  <select class="form-control" name="category_id" required>
  <option value="">- Please select -</option>
  @if(count($category))
                            @foreach ($category as $row)
            
      <option value="{{$row->id}}">{{$row->category_name}}</option>
    @endforeach
    @endif
    
  </select> 
     
                        
    </div>
</div>
</div>
		<div class= "row">
    <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
        
        <input id="image" type="file" class="form-control" name="image" required>
    </div>
</div>
</div>

		<div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Status:</strong>
				{!! Form::select('status', ['1' => 'Active', '0' => 'Inactive'],null, 
                array('placeholder' => 'Status','class' => 'form-control',
                'required'))!!}
				
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   </form>
  
@endsection
