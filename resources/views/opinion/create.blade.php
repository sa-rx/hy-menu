@extends('layouts.app')

@section('content')



<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                        @forelse($opinions as $opinion)
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">{{$opinion->name}}</span>
                                <span class="section-heading-lower">{{$opinion->name}}</span>
                            </h2>
                            <p class="mb-0">{{$opinion->content}}</p>
                        @empty
                             <p>لا توجد حجوزات</p>
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اضافة تصنيف</div>
                    <div class="card-body row">
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
                                <button class="btn btn-success">اضافة</button>
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
