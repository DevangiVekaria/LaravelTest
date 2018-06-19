@extends('layouts.default')
@section('content')
	<div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="float:left">
                <h2>PDF Test</h2>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

	
    <form method="post" id="productForm" enctype="multipart/form-data" action="{{ route('pdf.store') }}" data-parsley-validate class="form-horizontal form-label-left">
{{csrf_field()}}
<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <button type="submit" class="btn btn-primary">Generate PDF</button>
        </div>
    </div>
   </form>
  
@endsection