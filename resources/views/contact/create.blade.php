@extends('layouts.app')
@section('title', ' تواصل معنا ')

@section('content')


<section class="page-section cta container rounded">
            <div class="">
                <div class="row">
                    <div class="col-xl-9 mx-auto cta-inner bg-faded text-center rounded">

                   

                    <div class="row ">

                              <h2 class="section-heading mb-4 ">
                                <span class="section-heading-lower">{{ config('app.name', 'Laravel') }}</span>
                                 <p class="mb-0">{{$about->title}}</p>
                            </h2>
                           

                        <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                        </a>

                        <div id="demo" class="collapse">
                            <p class="text-center" >{{$about->number}}  </p>
                           
                        </div>
                        </div>



                        <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                            <h1 class="text-center  text-secondary">  <button style=" color: #4d2b1b;  border-color: #4d2b1b" class="btn  btn-outline-light btn-lg">  <i class="fab fa-instagram fa-2x"></i>   </button> </h1>
                        </a>

                        <div id="demo" class="collapse">
                            <p class="text-center"><a  class="text-center nav-link" href="https://www.instagram.com/{{$about->inst}}">  {{$about->inst}}   </a> </p>
                        </div>
                        </div>


                        <div class="col-md-3">
                        <a href="#demo" data-toggle="collapse">
                        <h1 class="text-center  text-secondary">  <button style=" color: #4d2b1b;  border-color: #4d2b1b" class="btn  btn-outline-light btn-lg">  <i class="fab fa-snapchat fa-2x"></i>  </button>   </h1>
                        </a>

                        <div id="demo" class="collapse">
                            <p class="text-center"><a class="text-center  nav-link"  href="http://story.snapchat.com/u/{{$about->snap}}"> {{$about->snap}}</a></p>
                        </div>
                        </div>


                        <div class="col-sm-3">
                            <a href="#demo" data-toggle="collapse">
                            <h1 class="text-center  text-secondary">  <button style=" color: #4d2b1b;  border-color: #4d2b1b" class="btn  btn-outline-light btn-lg">   <i class="fas fa-map-marker-alt fa-2x"></i>   </button>   </h1>
                            </a>

                            <div id="demo" class="collapse">
                            <p class="text-center">{{$about->address}}</p>
                            <p class="text-center"><a  class="text-center  nav-link" href="{{$about->location}}">موقع المقهى</a></p>
                            </div>
                        </div>


                    </div>


                        <div class="cta-inner bg-faded text-center rounded">


                          
                            <div class="row">

                            
                                     <b class="mb-0">  اوقات العمل</b>
                                 
                                
                                <div class="alert  col-md-12" role="alert">
                                     <h6 class="mb-0">  {!! nl2br( $about->worktime )!!}</h6>
                                 </div>

                            </div>
                        </div>
                    </div>
                </div>

<br><br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="">  </div>
                    <div class="cta-inner bg-faded rounded">
                           <div><h5>    تواصل معنا</h5></div>
                        <form action="{{route('contacts.store')}}" method="post">
                            <div class="row">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="name">اسم </label>
                                <input type="text" name="name" class="form-control">
                            </div>

                        

                            <div class="form-group ">
                                <label for="email">الايميل</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group col-md-12 ">
                                <label for="content">المحتوى</label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>




                            <br>

                            
                            <div class="form-group">
                                <button class="btn btn-outline-dark"> ارسال <i class="fas fa-paper-plane"></i>   </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
        </section>



@endsection
