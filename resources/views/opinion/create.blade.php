@extends('layouts.app')
@section('title', ' اراء العملاء ')

@section('content')


<section class="page-section cta container rounded">
            <div class="">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded  rounded ">
                        @forelse($opinions as $opinion)
                            
                             <div class="alert alert-light" role="alert">
                             <b> {{$opinion->name}}</b>  |  <p class="mb-0">{{$opinion->content}}</p>
                            </div>
                    
                    
                               
                        @empty
                             <p>لا توجد اراء</p>
                        @endforelse

                        <br>
                        <br><br><br>
                        <a class="badge badge-dark" href="{{route('opinions.index')}}">جميع الاراء</a>
                        </div>

                     
                    </div>
                </div>
            </div>
        </section>
      

<h2></h2>


<div class="container page-section cta container rounded">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div  class="cta-inner bg-faded  rounded">
                <div class=""></div>
                    <div class=" row">
                        <div>
                            <h5>اضافة تصنيف</h5>
                        </div>
                        <form action="{{route('opinions.store')}}" method="post">
                            <div class="row">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="name">اسم </label>
                                <input type="text" name="name" class="form-control">
                            </div>

                        
                            <div class="form-group col-md-12 ">
                                <label for="content">المحتوى</label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>

                          


                            <br>
                            <div class="form-group">
                                <button class="btn    btn-outline-dark"> ارسال <i class="fas fa-paper-plane"></i>   </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
