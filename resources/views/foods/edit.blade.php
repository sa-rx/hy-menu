@extends('layouts.app')
@section('title', 'تعديل صنف ')

@section('content')

<h2></h2>

<div class="container page-section cta ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="">
                            <h5 class="section-heading mb-3">
                                تعديل صنف
                            </h5>
                    <div class="">
                        <form class="cta-inner bg-faded" action="{{route('food.update', $food)}}" method="post">
                            @csrf
                            @method('PATCH')

                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control"  @isset($food) value="{{$food->name}}" @endisset>
                            </div>
                            

                                        
                            <div class="form-group col-md-6">
                                <label for="price">السعر</label>
                                <input type="text" name="price" class="form-control"  @isset($food) value="{{$food->price}}" @endisset>
                            </div>

                            

                                    <div class="form-group col-md-6">
                                        <label for="price-lg">السعر وسط</label>
                                        <input type="text" name="price-lg" class="form-control"  @isset($food) value="{{$food->price-lg}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price-xl">السعر كبير</label>
                                        <input type="text" name="price-xl" class="form-control"  @isset($food) value="{{$food->price-xl}}" @endisset>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="price-xxl">السعر براد</label>
                                        <input type="text" name="price-xxl" class="form-control"  @isset($food) value="{{$food->price-xxl}}" @endisset>
                                    </div>

                            <div class="form-group col-md-6">
                                <label for="offer_price">العرض</label>
                                <input type="text" name="offer_price" class="form-control"   @isset($food) value="{{$food->offer_price}}" @endisset>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="calories">السعرات الحراريه</label>
                                <input type="text" name="calories" class="form-control"  @isset($food) value="{{$food->calories}}" @endisset>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="available">متوفر؟</label>
                                <select class="form-control" name="available" id="1"  @isset($food) value="{{$food->available}}" @endisset>
                                <option value="1" {{old('available',$food->available)=="1"? 'selected':''}}  value="$food->available">متوفر</option>
                                
                                <option value="0" {{old('available',$food->available)=="0"? 'selected':''}}  value="$food->available">متوفرغير</option>

                                </select>
                            </div>

                            <div class="form-group col-md-6">

                           


                                <label for="status">عرض في الصفحه الرايسيه</label>
                                <select class="form-control" name="status" id="1"   old( $food->status) >
                                <option value="1" {{old('status',$food->status)=="1"? 'selected':''}}  value="$food->status">عرض</option>
                                
                                <option value="0" {{old('status',$food->status)=="0"? 'selected':''}}  value="$food->status">لا</option>

                                </select>
                            </div>

                            
                            <div class="form-group col-md-6">
                                <label  for="category_id" > الصنف</label>
                                <select class="form-control"  name="category_id"  >
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" >{{$category->title}}</option>
                              <!-- <option {{old('id',$category->id)=="$category->id"? 'selected':''}}  value="$category->id">{{$category->title}}</option>   -->

                                @endforeach
                                </select>
                            </div>



                            <div class="form-group ">
                            <label for="content">المحتويات</label>
                            <textarea name="content" class="form-control"  >@isset($food) {{$food->content}} @endisset</textarea>
                            </div>




                            <div class="form-group">
                                <button class="btn btn-outline-primary">   <i class="fas fa-pen-square"></i> تعديل</button>
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
