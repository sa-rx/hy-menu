@extends('layouts.app')
@section('title', 'اضافة صنف ')

@section('content')

<div class="container page-section cta ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="">
                            <h5 class="section-heading mb-3">
                                اضافة صنف
                            </h5>
                    <div class="">


                        <form class="cta-inner bg-faded" action="{{route('food.store')}}" method="post">
                                <div class="row">

                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="name">الاسم</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                            

                                
                                    <hr>



                                    <div class="form-group col-md-6">
                                        <label for="price"> السعر صغير</label>
                                        <input type="text" name="price" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price_lg">السعر وسط</label>
                                        <input type="text" name="price_lg" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price_xl">السعر كبير</label>
                                        <input type="text" name="price_xl" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price_xxl">السعر براد</label>
                                        <input type="text" name="price_xxl" class="form-control">
                                    </div>

                                    

                                     <hr>


                                    <div class="form-group col-md-6">
                                        <label for="offer_price">العرض الصغير</label>
                                        <input type="text" name="offer_price" class="form-control">
                                    </div>



                                    

                                    <div class="form-group col-md-6">
                                        <label for="offer_lg">عرض الوسط</label>
                                        <input type="text" name="offer_lg" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="offer_xl">عرض الكبير</label>
                                        <input type="text" name="offer_xl" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="offer_xxl">عرض البراد</label>
                                        <input type="text" name="offer_xxl" class="form-control">
                                    </div>




                                    <hr>

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
                                    <button class="btn btn-outline-dark">  <i class="fas fa-plus-square"></i> اضافة</button>
                            </div>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
