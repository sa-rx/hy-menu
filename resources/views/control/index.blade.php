@extends('layouts.app')
@section('title', ' لوحة التحكم ')

@section('content')

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                            
                        <div class="cta-inner bg-faded text-center rounded">
                            <div class="row ">

                        


                                <div class="col-md-3">
                                    <a href="{{route('food.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >food </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('categories.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >categories </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('abouts.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >abouts </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('contacts.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >contacts </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('opinions.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >opinions </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('users.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >Manage Users </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('roles.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >Manage Role </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <a href="{{route('offers.index')}}" >
                                        <h1  class="text-center  text-secondary"><button  style=" color: #4d2b1b;  border-color: #4d2b1b; "  class="btn  btn-outline-light btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
                                    </a>

                                    <div id="demo" >
                                        <p class="text-center" >offers </p>
                                    </div>
                                </div>





                                </div>  




                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
