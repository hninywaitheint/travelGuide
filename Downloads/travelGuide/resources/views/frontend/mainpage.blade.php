@extends('frontend.main')
@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h1>Travel Guide for Myanmar</h1>
        </div>
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>&nbsp;&nbsp;
                        <li class="navbar-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('action')}}">Yangon</a>
                                <a class="dropdown-item" href="{{url('action')}}">Mandalay</a>
                                <a class="dropdown-item" href="{{url('action')}}">Bago</a>
                                <a class="dropdown-item" href="{{url('action')}}">Sagaing</a>
                                <a class="dropdown-item" href="{{url('action')}}">Magway</a>
                                <a class="dropdown-item" href="{{url('action')}}">Tanintharyi</a>
                                <a class="dropdown-item" href="{{url('action')}}">Ayeyarwady</a>
                                <a class="dropdown-item" href="{{url('action')}}">Kachin</a>
                                <a class="dropdown-item" href="{{url('action')}}">Kayar</a>
                                <a class="dropdown-item" href="{{url('action')}}">Kayin</a>
                                <a class="dropdown-item" href="{{url('action')}}">Chin</a>
                                <a class="dropdown-item" href="{{url('action')}}">Mon</a>
                                <a class="dropdown-item" href="{{url('action')}}">Rakhine</a>
                                <a class="dropdown-item" href="{{url('action')}}">Shan</a>
                            </div>
                        </li>&nbsp;&nbsp;
                        <li class="navbar-item active">
                            <a class="nav-link" href="{{url('about')}}">About me</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid" style="background-position:relative">
        <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="bbb">
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/maharmyatmuni.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/deedoke.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/colonial.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/pyinoolwin.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/sutaungpyae.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/ubeinbridge.jpg')">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('/images/mandalayhill.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid" style="background-position:relative">
        @foreach ($randomimg as $content)
            <div id="carouselExamplControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" id="bbb">
                    <div class="carousel-item active">
                        <div class="d-flex align-items-center justify-content-center min-vh-100"  id='bbb'style="background-image: url('{{$content->img}}')">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

    <div class="col-sm-10 offset-sm-1"><br><br>
        <div class="row">
            <h2>Introduction</h2>
        </div>
        <p>
            Myanmar, the official name for the Southeast Asian nation more commonly known as Burma, is a must-see for travelers who like Buddha and beaches, though not necessarily in that order. The country contains thousands of Buddhist temples. It also has pristine white beaches along the Bay of Bengal and Andaman Sea. The country is slowly opening to foreign tourism, so travelers who want to experience a more traditional Burma may want to visit now.
        </p>
    </div>
    <div class="container-fluid"> ￼	￼
        <div class="row">
            @foreach ($randomimg as $content)
                <div class="col-md-4">
                    <a href="{{url('frontend/visit',$content->id)}}">
                        <div class="card-group" >
                            <div id='action' style="background-image: url('{{$content->img}}')">
                            </div>
                            <div class="card-body">
                                {{$content->placeName}}<br>
                                {{$content->Category}}<br>
                                {{$content->division_Name}}
                            </div>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>

</div>
@endsection
