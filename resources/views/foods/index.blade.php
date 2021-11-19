@extends('layouts.app')
@section('title', ' الاصناف ')

@section('content')


<section class="page-section cta">
            <div class="container">

                <div class="row">
                <a  class="btn btn-outline-dark col-xl-4 mx-auto mb-2" href="{{route('food.create')}}"><i class="fas fa-plus-square"></i>  اضافة صنف </a>

                    <div class="col-xl-12 mx-auto">
                        <div class="container bg-faded text-center rounded">
                          
                           



                            <table class="table table-responsive-xl table-hover  ">
                                    <thead  class="">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col " colspan="4">السعر</th>
                                        <th scope="col">العرض</th>
                                        <th scope="col"> سعره حراريه</th>
                                        <th scope="col"> الصنف</th>
                                        <th scope="col"> بواسطه</th>
                                        <th scope="col"> متوفر</th>
                                        <th scope="col">عرض</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                            @forelse($foods as $food)
                                            <tr>
                                                <td >{{$food->name}}</td>

                                                @if(isset($food->price))
                                                <td>{{$food->price}}  </td>
                                                @else
                                                <td>-</td>
                                                @endif

                                                @if(isset($food->price_lg))
                                                <td >{{$food->price_lg}}</td>
                                                @else
                                                <td>-</td>
                                                @endif
                                                
                                                @if(isset($food->price_xl))
                                                <td >{{$food->price_xl}}</td>
                                                @else
                                                <td>-</td>
                                                @endif
                                                
                                                @if(isset($food->price_xxl))
                                                <td >{{$food->price_xxl}}</td>
                                                @else
                                                <td>-</td>
                                                @endif


                                                @if(isset($food->offer_price))
                                                <td>{{$food->offer_price}}</td>
                                                @else
                                                <td>-</td>
                                                @endif

                                                <td>{{$food->calories}}</td>
                                                <td>{{$food->category->title}}</td>
                                                <td>{{$food->user->name}}</td>


                                                @if($food->available == 1)
                                                    <td class="ms-auto">متوفر</td> 
                                                @else
                                                    <td class="ms-auto">غير متوفر</td> 
                                                @endif

                                              


                                                <td> <a class="btn btn-outline-primary" href="{{route('food.edit',$food)}}">  <i class="fas fa-pen-square"></i></a> </td>
                                                <td>
                                                
                                                <form method="post" action="{{route('food.destroy',$food)}}"href="">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
                                                </form>

                                            </td>
                                            </tr>

                                                @empty
                                            <p>لا توجد حجوزات</p>
                                                @endforelse
                                    </tbody>
                            </table>


                         

                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
