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
                                        <h1> 
                                        {{$category->title}}
                                        </h1> 
                                    </li>
                            </ul>

                                <a href="{{route('categories.edit',$category)}}" class="btn btn-primary">تعديل  <i class="fas fa-edit"></i></a>
                                <form method="post" action="{{route('categories.destroy',$category)}}" style="display:inline-block">
                                    @method('DELETE')
                                    @csrf
                                <button class="btn btn-danger">حذف <i class="fas fa-trash-alt"></i></button>
                                </form>



                                
                                <table class="table table-striped table-hover table-dark ">
                                    <thead  class="table-dark">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col">السعر</th>
                                        <th scope="col">العرض</th>
                                        <th scope="col"> السعرات الحراريه</th>
                                       
                                       
                                        <th scope="col"> متوفر</th>
                                       
                                       
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                        @forelse($category->foods as $food)
                                            <tr>
                                                <td>{{$food->name}}</td>
                                                <td>{{$food->price}}</td>
                                                <td>{{$food->offer_price}}</td>
                                                <td>{{$food->calories}}</td>
                                               
                                             


                                                @if($food->available == 1)
                                                    <td class="ms-auto">متوفر</td> 
                                                @else
                                                    <td class="ms-auto">غير متوفر</td> 
                                                @endif

                                            


                                              
                                            </tr>

                                            @empty
                                        {{__('no comments yet')}}
                                        @endforelse
                                    </tbody>
                            </table>
                              
                            
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
