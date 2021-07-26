@extends('masterpage.adminbase')

@section('content')

    <div class="row">
        <div class="col-lg-10">
            <h4 class="text-center mt-4 text-danger">Welcome To User Table</h4>
            <table class="table table-success table-striped">
                <tr>
                <thead>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Created</th>
                     <th>Action</th>
                </thead>
                <tr>

                    @foreach ($users as $u)
                    {{-- @if($u->role == 0) --}}

                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td>
                            <form action="{{route('destroyUser',['users'=>$u->id])}}" method="post" class="d-flex">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger me-2" value="Delete">
                              </form>
                        </td>
                    </tr>
                    {{-- @elseif ($u->role == 1)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td>
                            <form action="{{route('destroyUser',['users'=>$u->id])}}" method="post" class="d-flex">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger me-2" value="Delete">
                              </form>
                        </td>
                    </tr>
                    @elseif ($u->role == 2)
                    <tr>
                        <td>{{ $u->id }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td>
                            <form action="{{route('destroyUser',['users'=>$u->id])}}" method="post" class="d-flex">
                                @method('delete')
                                @csrf
                                <input type="submit" class="btn btn-sm btn-danger me-2" value="Delete">
                              </form>
                        </td>
                    </tr>

                    @endif --}}
                    @endforeach
            </table>
        </div>
    </div>


@endsection
