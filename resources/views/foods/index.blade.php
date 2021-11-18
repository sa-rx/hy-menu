@extends('layouts.app')

@section('content')


<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                            <span class="section-heading-upper"><a href="{{route('food.create')}}"> اضافة اكل</a></span>

                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>



                            <table class="table table-striped table-hover table-dark ">
                                    <thead  class="table-dark">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col">السعر</th>
                                        <th scope="col">العرض</th>
                                        <th scope="col"> السعرات الحراريه</th>
                                        <th scope="col"> الصنف</th>
                                        <th scope="col"> بواسطه</th>
                                        <th scope="col"> متوفر</th>
                                        <th scope="col"> عرض في الصفحه الرايسيه</th>
                                        <th scope="col">عرض</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                            @forelse($foods as $food)
                                            <tr>
                                                <td>{{$food->name}}</td>
                                                <td>{{$food->price}}</td>
                                                <td>{{$food->offer_price}}</td>
                                                <td>{{$food->calories}}</td>
                                                <td>{{$food->category->title}}</td>
                                                <td>{{$food->user_id}}</td>


                                                @if($food->available == 1)
                                                    <td class="ms-auto">متوفر</td> 
                                                @else
                                                    <td class="ms-auto">غير متوفر</td> 
                                                @endif

                                                @if($food->status == 1)
                                                    <td class="ms-auto">اعرض</td> 
                                                @else
                                                    <td class="ms-auto">لا تعرض </td> 
                                                @endif


                                                <td> <a class="btn btn-primary" href="{{route('food.edit',$food)}}">تعديل  </a> </td>
                                                <td>
                                                
                                                <form method="post" action="{{route('food.destroy',$food)}}"href="">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" >حذف <i class="fas fa-trash-alt"></i></button>
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
