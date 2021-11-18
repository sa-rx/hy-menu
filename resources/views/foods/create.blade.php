@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اضافة صنف</div>
                    <div class="card-body">


                        <form  action="{{route('food.store')}}" method="post">
                                <div class="row">

                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="name">الاسم</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                            

                                

                                    <div class="form-group col-md-6">
                                        <label for="price">السعر</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="offer_price">العرض</label>
                                        <input type="text" name="offer_price" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="calories">السعرات الحراريه</label>
                                        <input type="text" name="calories" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="available">متوفر؟</label>
                                        <select class="form-control" name="available" id="1">
                                        <option value="1">متوفر</option>
                                        <option value="0">غير متوفر</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="status">عرض في الصفحه الرايسيه</label>
                                        <select class="form-control" name="status" id="1">
                                        <option value="1">عرض</option>
                                        <option value="0">لا تعرض</option>
                                        </select>
                                    </div>





                                    <div class="form-group col-md-6">
                                        <label  for="category_id" > الصنف</label>
                                        <select class="form-control"  name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                        </select>
                                    </div>



                                    <div class="form-group ">
                                    <label for="content">المحتويات</label>
                                    <textarea name="content" class="form-control"></textarea>
                                    </div>





                                    <div class="form-group">
                                    <button class="btn btn-primary">حجز</button>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
