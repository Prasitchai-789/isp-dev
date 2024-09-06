@extends('layouts.master')

@section('content')

<div class="container">


    <div class="page-header">
        <div class="page-block card mb-0">
            <div class="card-body">
                <h1 class="font_Prompt text-center">สวัสดี <span class="text-danger">"</span> <span
                        class="text-primary"> {{ Auth::user()->name }}</span> <span class="text-danger">"</span></h1>
                <h2 class="font_Prompt text-center"> <span class="text-danger">"</span> <span
                        class="text-primary">ทำงานอย่างมีความสุข</span> <i class="text-success">สนุกกับการทำงาน </i>
                    <span class="text-danger">"</span></h2>
                {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>





</div>

@endsection
