@extends('layouts.app')
@section('title', ' الفئات ')

@section('content')

<section class="page-section cta">
            <div class="container">

            
                <div class="row">
                <a  class="btn btn-outline-dark col-xl-4 mx-auto mb-2" href="{{route('categories.create')}}"><i class="fas fa-plus-square"></i>  اضافة فئه </a>

                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                           


                            <table class="table table-striped table-hover ">
                                    <thead  class="">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col">تعديل</th>
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                        @forelse($categories as $category)
                                            <tr>
                                            <td><a href="{{route('categories.show',$category)}}">{{$category->title}}</a></td>
                                                <td> <a class="btn btn-primary" href="{{route('categories.edit',$category)}}"><i class="fas fa-pen-square"></i>  </a> </td>
                                                <td>
                                                
                                                <form method="post" action="{{route('categories.destroy',$category)}}"href="">
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
