@extends('layouts.app')
@section('title', 'اضافة فئه ')

@section('content')

<h2></h2>


<div class="container page-section cta ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
            <h5 class="section-heading mb-3">
                                اضافة فئه
                            </h5>
                    <div class="">
                        <form class="cta-inner bg-faded" action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success"> <i class="fas fa-plus-square"></i> اضافة </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
