@extends('layouts.app')

@section('content')

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                            
                                <span class="section-heading-upper"><a href="{{route('categories.create')}}">انشاء تصنيف</a></span>
                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>


                            <table class="table table-striped table-hover table-dark ">
                                    <thead  class="table-dark">
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
                                                <td> <a class="btn btn-primary" href="{{route('categories.edit',$category)}}">تعديل  </a> </td>
                                                <td>
                                                
                                                <form method="post" action="{{route('categories.destroy',$category)}}"href="">
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
