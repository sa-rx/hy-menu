@extends('layouts.app')
@section('title', ' العروض ')

@section('content')


<section class="page-section cta">
            <div class="container">
                <div class="row">
                <a  class="btn btn-outline-dark col-xl-4 mx-auto mb-2" href="{{route('offers.create')}}"> <i class="fas fa-plus-square"></i>  اضافة عرض</a>
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            



                            <table class="table table-striped table-responsive-xl table-hover  ">
                                    <thead  class="">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col">السعر</th>
                                       
                                        <th scope="col"> متوفر</th>
                                       
                                        <th scope="col">عرض</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                            @forelse($offers as $offer)
                                            <tr>
                                                <td><a href="{{route('offers.show',$offer)}}"> {{$offer->title}}</a></td>
                                                <td>{{$offer->price}}</td>
                                             


                                                @if($offer->available == 1)
                                                    <td class="ms-auto">متوفر</td> 
                                                @else
                                                    <td class="ms-auto">غير متوفر</td> 
                                                @endif

                                               


                                                <td> <a class="btn btn-primary" href="{{route('offers.edit',$offer)}}"><i class="fas fa-pen-square"></i>  </a> </td>
                                                <td>
                                                
                                                <form method="post" action="{{route('offers.destroy',$offer)}}"href="">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" > <i class="fas fa-trash-alt"></i></button>
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
