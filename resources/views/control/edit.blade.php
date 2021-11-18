@extends('layouts.app')

@section('content')

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تعديل صنف</div>
                    <div class="card-body">
                        <form action="{{route('categories.update', $category)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control"  @isset($category) value="{{$category->title}}" @endisset>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success">اضافة</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
