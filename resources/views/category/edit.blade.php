@extends('layouts.app')
@section('title', 'تعديل فئه ')

@section('content')

<h2></h2>


<div class="container page-section cta ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
            <h5 class="section-heading mb-3">
                                تعديل فئه
                            </h5>
                    <div class="">
                        <form class="cta-inner bg-faded" action="{{route('categories.update', $category)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control"  @isset($category) value="{{$category->title}}" @endisset>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success">تعديل <i class="fas fa-pen-square"></i> </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
