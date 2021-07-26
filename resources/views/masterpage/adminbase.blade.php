<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Authentication Management</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashbord.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar sticky-top navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">


                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home.index') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-warning" href="#">Welcome {{ Auth::user()->name }}!</a>
                    <li class="nav-item">
                        <a class="nav-link btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            style="color:white;background: #a06ab8;width: 130px;"><i
                                class="fa fa-power-off text-danger"></i> Logout</a>
                        <form action="{{ route('logout') }}" id="logout-form" method="post">@csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-lg-4">
            <div class="col-lg-6 col-1 navBg pl-0 pr-0">
                <nav class="nav  navbar-toggleable-sm">
                    <div class="navbar  flex-column mt-md-0  pt-md-0  p-0 w-100" id="navbarWEX">
                        <img src="{{ asset('assets/admin.jpg') }}" class="rounded-circle mt-2"
                            alt="" style="width:100px; height:100px;" />
                        <h4 class="fa fa-admin text-white">{{ Auth::user()->name }}</h4>
                        @if(Auth::user()->role=='1')

                            <a href="{{ route('dashboard') }}" class="nav-link"><i
                                    class="fa fa-dashboard"> </i><span>Dashboard </span></a>

                        @elseif(Auth::user()->role=='2')

                            <a href="{{ route('seller') }}" class="nav-link"><i
                                    class="fa fa-dashboard"> </i><span>Dashboard </span></a>

                        @endif

                        @if (Auth::user()->role=='1')
                        <a href="{{ route('sellertable')}}" class="nav-link"><i class="fa fa-profile" aria-hidden="true"></i><span>Seller
                            Table</span></a>
                            <a href="{{ route('usertable') }}" class="nav-link"><i
                                class="fa fa-file-text-o" aria-hidden="true"></i><span>User Table</span></a>
{{--
                         @elseif (Auth::user()->role=='2')
                         <a href="{{ route('usertable') }}" class="nav-link"><i
                            class="fa fa-file-text-o" aria-hidden="true"></i><span>User Table</span></a> --}}
                        @endif


                        <a href="" class="nav-link"><i class="fa fa-commenting-o"
                                aria-hidden="true"></i><span>Comments</span></a>
                    </div>
                </nav>

            </div>
        </div>
        <div class="col-lg-8">
            @yield('content')

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>
