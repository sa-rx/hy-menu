@extends('layouts.app')
@section('title', ' الرئيسيه ')

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
                                    <br>
                                    <h6 class="section-heading-upper">{!! nl2br($offer->content)!!}</h6>
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
            <div class="container  bg-faded text-center rounded">


                
 
                    @forelse($categories as $category)

                     @if($category->id == 1)

                        <div class=" ">
                            <table class="table  table-hover table-borderless text-center  mb-5">
                        
                            <br>
                            <h3 class="section-heading-lower">{{$category->title}}</h3>
                            <br>

                                <thead class=" bg-faded ">
                                    <tr>
                                        <th scope="col">   الاسم</th>

                                        <th scope="col">صغير </th>
                                        <th scope="col">وسط</th>
                                        <th scope="col">كبير</th>
                                        <th scope="col">براد</th>

                                        

                                        <th scope="col">السعرات </th>
                                    </tr>
                                </thead>


                                <tbody class="  bg-faded">
                                @forelse($category->foods as $food)
                                    @if($food->available == 0)
                                    
                                    @else

                                        <tr>
                                            <th scope="row">  {{$food->name}}</th>

                                                        @if(isset($food->offer_price))
                                                        <td><s class="text-danger">{{$food->price}}</s> <b class="text-dark"></b>{{$food->offer_price}}</td>
                                                        @else
                                                        <td>{{$food->price}}</td>
                                                        @endif

                                                        @if(isset($food->price_lg))
                                                                @if(isset($food->offer_lg))
                                                                    <td><s class="text-danger">{{$food->price_lg}}</s> <b class="text-dark"></b>{{$food->offer_lg}}</td>
                                                                @else
                                                                    <td >{{$food->price_lg}}</td>
                                                                @endif
                                                        @else
                                                            <td>-</td>
                                                        @endif

                                                        @if(isset($food->price_xl))
                                                            @if(isset($food->offer_xl))
                                                                <td><s class="text-danger">{{$food->price_xl}}</s> <b class="text-dark"></b>{{$food->offer_xl}}</td>
                                                            @else
                                                                    <td >{{$food->price_xl}}</td>
                                                            @endif
                                                        @else
                                                            <td>-</td>
                                                        @endif
                                                        
                                                        @if(isset($food->price_xxl))
                                                            @if(isset($food->offer_xxl))
                                                                <td><s class="text-danger">{{$food->price_xxl}}</s> <b class="text-dark"></b>{{$food->offer_xxl}}</td>
                                                            @else
                                                                    <td >{{$food->price_xxl}}</td>
                                                            @endif
                                                        @else
                                                            <td>-</td>
                                                        @endif
                                                        
                                                    
                                            
                                            @if(isset($food->calories))
                                            <td>  {{$food->calories}}</td>
                                            @else
                                            <td>-</td>
                                            @endif
                                        </tr>

                                    @endif
                                @empty
                                {{__('لايوجد شيئ')}}
                                @endforelse

                            
                                </tbody>
                                
                            
                            </table>
                            <hr>
                            </div>







                        @else













                        <div class=" ">
                                    <table class="table  table-hover table-borderless text-center  mb-5">
                                
                                                <br>
                                                <h3 class="section-heading-lower">{{$category->title}}</h3>
                                                <br>

                                            <thead class=" bg-faded ">
                                                    <tr>
                                                        <th scope="col">الاسم</th>
                                                        <th scope="col">السعر </th>                                                        
                                                        <th scope="col">السعرات </th>
                                                    </tr>
                                            </thead>


                                                <tbody class="  bg-faded">
                                                        @forelse($category->foods as $food)
                                                            @if($food->available == 0)
                                                            
                                                            @else

                                                                <tr>
                                                                    <th scope="row">  {{$food->name}}</th>

                                                                                @if(isset($food->offer_price))
                                                                                <td><s class="text-danger">{{$food->price}}</s> <b class="text-dark"></b>{{$food->offer_price}}</td>
                                                                                @else
                                                                                <td>{{$food->price}}</td>
                                                                                @endif

                                                                                
                                                                            
                                                                    
                                                                    @if(isset($food->calories))
                                                                    <td>  {{$food->calories}}</td>
                                                                    @else
                                                                    <td>-</td>
                                                                    @endif
                                                                </tr>

                                                            @endif
                                                        @empty
                                                        {{__('لايوجد شيئ')}}
                                                        @endforelse

                                            </tbody>
                                                
                                    
                                    </table>
                                    <hr>
                            </div>





                        @endif

                            





                        @empty
                        {{__('لايوجد شيئ')}}
                        @endforelse



                     
                    <br>
            </div>
        </section>
@endsection
