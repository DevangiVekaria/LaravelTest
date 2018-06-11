@extends('layouts.default')
@section('content')
	<div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="float:left">
                <h2>Product List</h2>
            </div>
            <div class="pull-right" style="float:right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Add Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

 <form method="post" action="" data-parsley-validate class="form-horizontal form-label-left">
    	<div class= "row">
    <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Filter By Category:</strong>
            
                
  <select class="form-control" name="category_id" id="category_id">
  <option value="">- Please select -</option>
  @if(count($category))
                            @foreach ($category as $row)
            
      <option value="{{$row->id}}">{{$row->category_name}}</option>
    @endforeach
    @endif
    
  </select> 
     
                        
    </div>
    
</div>
<div class="col-md-1"><a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
</div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Filter by Product Name:</strong>
                <input type="text" class="form-control" id="productName" placeholder = "Product Name">
            </div>
        </div>
		</div>

</form>
    <div id="results">
    </div>
 <script>
 $(document).ready(function(){
     searchData();
     $("#category_id").change(function(){
         searchData();
     })
     $("#productName").blur(function(){
         searchData();
     })
     
 });
 function searchData(){
    
        var categoryId = 0;
        var productName =null;
        if($("#category_id").val() != "" && $("#category_id").val() != null)
         {categoryId = $("#category_id").val();}
         if($("#productName").val() != "" && $("#productName").val() != null)
         {productName = $("#productName").val();}
    
    $.get("{{ URL::to('/')}}/products/search/category/"+categoryId+"/product/"+productName, function( data ) {
    $( "#results" ).html( data );
});
 }
 </script>
@endsection