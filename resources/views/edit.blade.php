@extends('master')
@section('title') Upload Book @endsection

@section('content')

    <div class="container-fluid bgColor h-auto p-5" >
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card mt-3 cardBgColor border-0">
                        <div class="card-header border-0 twoColor d-flex justify-content-between align-items-center">
                            <h1 class="m-0">Upload File</h1>
                            <div>
                                <a href="{{route('home')}}" class="btn bubg tn-lg m-0 mainColor" >To Home</a>
                                <a href="{{route('index')}}" class="btn bubg tn-lg m-0 mainColor" >To Read</a>
                            </div>
                        </div>
                        <div class="card-body border-0 bgmColor">\
                            <form action="{{route('update',$book->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="" class="h5 mb-3 twoColor">Book Name</label>
                                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{$book->name}}" name="name">
                                            @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group my-5">
                                            <label for="" class=" h5 mb-3 twoColor">Type Of Book</label>
                                            <input type="text" class="form-control form-control-lg @error('type') is-invalid @enderror" value="{{$book->type}}" name="type">
                                            @error('type')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="" class=" h5 mb-5  twoColor">Book Cover</label>
                                                    <input type="file" name="photo" class="form-control form-control-lg file twoColor @error('photo') is-invalid @enderror" value="{{$book->photo}}">
                                                    @error('photo')
                                                    <small class="text-danger">{{$message}}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="coverContainer">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-6">

                                        <<div class="form-group mb-5">
                                            <label for="" class="h5 mb-3 mt-0 d-block twoColor">Language Of Book</label>
                                            <select name="language" id="" class="form-control-lg w-50 mainFont">
                                                <option value="Myanmar">MYANMAR</option>
                                                <option value="English">ENGLISH</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class=" h5 mb-3 mt-0 twoColor">Summarize Book</label>
                                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-lg @error('summary') is-invalid @enderror ">{{$book->summary}}</textarea>
                                            @error('summary')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="" class=" h5 mb-3 mt-0 twoColor">About Book</label>
                                    <textarea name="about" id="" cols="30" rows="10" class="form-control form-control-lg @error('about') is-invalid @enderror ">{{$book->about}}</textarea>
                                    @error('about')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button class="btn bubg btn-lg w-50 mainFont">Upload Book</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
