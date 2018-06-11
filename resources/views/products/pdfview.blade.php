    <table id="datatable-buttons" class="table table-striped table-bordered">
        <tr>
        <th>Product Name</th>
            <th>Category Name</th>
            
            <th>Image</th>
            <th>Status</th>
            <th>Created Date</th>
        </tr>
        @if(count($product) > 0 )
    @foreach ($product as $product)
    <tr>
    <td>{{ $product->product_name}}</td>
    <td>{{$product->category->category_name}}</td>
        <td><img src="{{ URL::to('/') }}/public/images/products/{{ $product->image}}" height="50px" width="50px"></td>
     
        
         <td> @if ($product->status == '1') Active @else Inactive @endif</td>
         <td>{{ date('F d, Y', strtotime($product->created_date)) }}</td>
    </tr>
    @endforeach
    @else
    <tr><td colspan="5" class="text-center">No Record Found!! </td> </tr>
    @endif
    
    
    </table>