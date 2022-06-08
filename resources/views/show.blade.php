@extends('master')
@section('title') Detail Page @endsection

@section('content')

    <div class="container-fluid bgColor h-auto p-5">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card cardBgColor mt-5 m-0">
                        <div class="card-header bgmColor twoColor d-flex justify-content-between align-items-center ">
                            <h3 class="m-0">{{$book->name}}</h3>
                            <div>
                                <a href="{{route('home')}}" class="btn btn bubg tn-lg m-0 mainColor">To Home</a>
                                <a href="{{route('index')}}" class="btn btn bubg tn-lg m-0 mainColor">To Book Lists</a>
                            </div>
                        </div>
                        <div class="card-body  px-5">
                    {{--Header Of Detail--}}
                            <div class="showHeader">
                                <div class="row">

                                    <div class="col-6 d-flex justify-content-center align-items-center mt-5">
                                        <div class="imgContainer">
                                            <img  src="data:image/jpeg;base64,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" alt="" class="w-100 rounded">
                                        </div>
                                    </div>

                                    <div class="col-6 d-flex align-items-center">
                                            <div class="mainColor h4">

                                                <ul>
                                                    <li>can know benjamin franklin biography</li>
                                                    <li>how to he try in his life</li>
                                                    <li>how to stay with motivation</li>
                                                    <li>how to manage yourself</li>
                                                    <li>how to relative with people</li>
                                                </ul>

                                                <div class="d-block">
                                                    <a href="" class="btn subscribe">SUBSCRIBE</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            {{--Body Of Detail--}}

                            <div class="aboutContainer mt-5">
                                <p class="text-white readText">
                                    {{ $book->about }}
                                </p>
                            </div>

                            <div class="w-100 my-5">
                                <div class="card p-0 m-0 w-75 mt-3 cardBgColor border-0">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="h5 m-0 twoColor">
                                            Feedback This Book
                                        </h5>

                                        <a href="" class="btn bubg tn-lg m-0 mainColor">Send Message</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea name="feedback" id="" cols="30" rows="10" class="form-control bgmColor border-0 form-control-lg text-white"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
