@extends('master')
@section('title') Books Home @endsection

@section('content')

    <div class="container-fluid bgColor">
        <div class="container">
            <div class="row">
                <div class="col-12">

                   <div class="text-center my-5">
                       <h1 class="twoColor fonts">Books <i class="fa fa-book"></i></h1>
                       <h2 class="oneColor">Upload, Read, & Review</h2>
                   </div>

                    <div class="my-5 text-center" >
                            <h1 class="text-white-50 fontT mb-4">Go To . . . .</h1>

                            <div class="d-flex justify-content-around align-items-center">
                                <div>
                                    <i class="fa-solid fa-cloud-arrow-up d-block iconS"></i>
                                    <a href="{{route('create')}}" class="linkFont">UPLOAD</a>
                                </div>

                                <div>
                                    <i class="fa-brands fa-readme d-block iconS"></i>
                                    <a href="{{route('index')}}" class="linkFont">READ</a>
                                </div>

                                <div>
                                    <i class="fa-solid fa-comments d-block iconS"></i>
                                    <a href="" class="linkFont">REVIEWS</a>
                                </div>

                            </div>

                        <div>
                            <h1 class="fourColor mtop fw-bold text-uppercase">Get A Book And Learn Something New</h1>
                        </div>
                    </div>

                    <div class="textFooter">
                        <h6 class="threeColor ">@ we are getting allow in writer all of these book ...</h6>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
