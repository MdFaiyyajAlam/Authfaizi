@extends('masterpage.adminbase')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h4 class="text-center mt-4 text-danger">Welcome To Seller Pannel</h4>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Product</div>
                        <div class="card-body">
                            <form action="{{ route('productStore')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                </div>
                                <div class="mb-3">
                                    <label for="">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Add Price">
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" placeholder="image">
                                </div>
                                <div class="bm-3">
                                    <input type="submit" class="btn btn-danger">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<div class="col-lg-8">
        <table class="table table-success table-striped">
            <tr>
            <thead>
                <th>Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
           </tr>
           @foreach ($products as $p)
           <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->title}}</td>
            <td>{{$p->price}}</td>
            <td>
                <form action="{{route('destroyProduct',['products'=>$p->id])}}" method="post" class="d-flex">
                    @method('delete')
                    @csrf
                    <input type="submit" class="btn btn-sm btn-danger me-2" value="Delete">
                  </form>
            </td>
        </tr>
           @endforeach

        </table>
</div>
    </div>
</div>
@endsection
