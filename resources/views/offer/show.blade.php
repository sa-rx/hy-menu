@extends('layouts.app')

@section('content')

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">

                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>

                            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$offer->title}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$offer->price}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$offer->content}}
                                                       
                                                    </li>

                                                    @if($offer->available == 1)
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    متوف
                                                    </li>
                                                    @else
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                        غير متوفر
                                                        </li>
                                                        @endif

                         
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
