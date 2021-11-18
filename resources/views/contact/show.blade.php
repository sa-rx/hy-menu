@extends('layouts.app')
@section('title', ' تواصل معنا ')

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
                                                    {{$contact->name}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$contact->email}}
                                                       
                                                    </li>
                                                    <li class="list-unstyled-item list-hours-item d-flex">
                                                    {{$contact->content}}
                                                       
                                                    </li>

                                                   

                         
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
