@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <div class="card">
            <strong class="card-header bg-primary text-white text-center">
                View Category
            </strong>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-info text-white">
                            <th scope="col">Sl No</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Product Model</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $serial = 1;
                        @endphp
                        @foreach($categories as $row)

                        <tr>
                            <th scope="row">{{$serial++}}</th>
                            <td>{{$row->product_name}}</td>
                            <td>{{$row->company_name}}</td>
                            <td>{{$row->product_model}}</td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->unit_price}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->discount}}</td>
                            <td>{{$row->total_price}}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ================= Add category================ -->
    <div class="col-sm-4">
        <div class="card">
            <strong class="card-header bg-primary text-white">
                Add Category
            </strong>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="message">{{ Session::get('success') }}</p>
                @endif




                <form name="category" method="post" enctype="multipart/form-data" action="{{url('saveCategory')}}">
                    @csrf

                    <div class="form-group">
                        <label for="inputProduct">Product Name</label>
                        <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror" id="inputProduct" placeholder="Product name">
                        @error('product_name')
                        <strong class="text-danger">{{$message}}</strong>
                        @enderror
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany">Company Name</label>
                            <input type="text" name="company_name" class="form-control" id="inputCompany" placeholder="Company name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputProductModel">Product Model</label>
                            <input type="text" name="product_model" class="form-control" id="inputProductModel" placeholder="Product Model">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputQuantity">Quantity</label>
                            <input type="text" name="quantity" class="form-control quantity_price" id="quantity" placeholder="Quantity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputUnitPrice">Unit Price</label>
                            <input type="text" name="unit_price" class="form-control quantity_price" id="unit_price" placeholder="Unit price">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputprice">Price</label>
                            <input type="text" name="price" class="form-control discount_price" id="qty_price" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputdiscount">Discount</label>
                            <input type="text" name="discount" class="form-control discount_price " id="discount_price" placeholder="Discount">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTotalprice">Total price</label>
                            <input type="text" name="total_price" class="form-control" id="total_price" placeholder="Total price">
                        </div>
                    </div>

                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div> -->

                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

       //Market price-discount-Sale Price
   $(".quantity_price").on('keyup', function(){

      var quantity = document.getElementById('quantity').value;
      var unit_price = document.getElementById('unit_price').value;//javascript format
      var unit_price = $('#unit_price').val();//jQuery format

      if(!quantity){
         return false;
      }
      if(!unit_price){
        return false;
      }
      var price = quantity * unit_price;
      $("#qty_price").val(price); //jQuery format
   });


   $(".discount_price").on('keyup', function(){

      var price = document.getElementById('qty_price').value;
      var discount = document.getElementById('discount_price').value;//javascript format
    //   var unit_price = $('#unit_price').val();//jQuery format

      if(!price){
         return false;
      }
      if(!discount){
        return false;
      }  
      var totalPrice = price-((price * discount )/100);

    //   console.log(totalPrice);
    //   return false;
      $("#total_price").val(totalPrice); //jQuery format
   });
   

</script>
@endsection