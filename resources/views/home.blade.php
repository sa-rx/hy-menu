@extends('layouts.app')

@section('content')
<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <h2 class="section-heading mb-2  text-center">العروض</h2>
                    <div class="col-xl-9 mx-auto">
                    @forelse($offers as $offer)
                        
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-2">
                                <span class="section-heading-lower">{{$offer->title}}</span>
                                <span class="section-heading-upper">{{$offer->content}}</span>
                            </h2>
                            <p class="mb-0">{{$offer->price}}
                        </div>
                        
                    @empty
                    <p class="mb-0 text-center">  لا توجد عروض حاليا </p>
                    @endforelse
                    </div>
                </div>
            </div>
        </section>       

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    

                    @forelse($categories as $category)
                    <div class="col-xl-6 mx-auto mb-2">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">{{$category->title}}</span>
                            </h2>
                          
                            <ul class="list-unstyled  mb-5 text-left mx-auto">
                           
                           
                                         <div class="row ">
                                            <div class="  col-xl-3 mx-auto">
                                                الاسم
                                            </div>
                                            <div class="col-xl-3 mx-auto">
                                                السعر
                                            </div>
                                            <div class="col-xl-3 mx-auto">
                                               السعرات الحراريه
                                            </div>
                                        </div>
                                       

                                       @forelse($category->foods as $food)
                                       @if($food->available == 0)

                                       @else
                                            <li class="list-unstyled-item list-hours-item ">
                                                <div class="row">
                                                    <div class="col-xl-3 mx-auto">
                                                        {{$food->name}}
                                                    </div>
                                                    <div class="col-xl-3 mx-auto">
                                                    @if(isset($food->offer_price))
                                                    
                                                        <p class="text-danger"><s> {{$food->price}}</s>  <b class="text-dark">{{$food->offer_price}}</b> </p>
                                                    @else
                                                        <p class="">{{$food->price}} ريال</p>
                                                    @endif    
                                                    </div>
                                                    <div class="col-xl-3 mx-auto">
                                                        {{$food->calories}}
                                                    </div>
                                                </div>
                                       @endif
                                      

                                    
                                       </li>
                                       @empty
                                        {{__('no comments yet')}}
                                        @endforelse
                                  
                            
                            
                            </ul>
                            
                           
                        </div>
                    </div>    
                    @empty
                            
                    @endforelse

                    
                </div>
            </div>
        </section>
@endsection
