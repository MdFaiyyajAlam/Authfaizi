@extends('masterpage.adminbase')

@section('content')
<div class="container m-10">
    <div class="row">
        <div class="col-lg-8 ms-auto">
                    <h4 class="text-center mt-4 text-danger">Welcome To Admin Pannel</h4>
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Add Seller</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('addseller')}}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="">Password</label>
                                            <input type="text" name="password" id="password" placeholder="Password" class="form-control" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="submit" class="btn btn-dark">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
    </div>
</div>
@endsection
