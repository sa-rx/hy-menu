@extends('layouts.app')

@section('content')

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تعديل صنف</div>
                    <div class="card-body">
                        <form action="{{route('food.update', $food)}}" method="post">
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
                            <textarea name="content" class="form-control"  @isset($food) value="{{$food->content}}" @endisset></textarea>
                            </div>




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
