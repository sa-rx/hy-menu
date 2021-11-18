@extends('layouts.app')

@section('content')

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">تعديل صنف</div>
                    <div class="card-body">
                        <form action="{{route('offers.update', $offer)}}" method="post">
                            <div class="row">
                            @csrf
                            @method('PATCH')
                            <div class="form-group col-md-12">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control"  @isset($offer) value="{{$offer->title}}" @endisset>
                            </div>
                           

                            <div class="form-group col-md-6">
                                <label for="available">متوفر؟</label>
                                <select class="form-control" name="available" id="1"  @isset($offer) value="{{$offer->available}}" @endisset>
                                <option value="1" {{old('available',$offer->available)=="1"? 'selected':''}}  value="$offer->available">متوفر</option>
                                
                                <option value="0" {{old('available',$offer->available)=="0"? 'selected':''}}  value="$offer->available">متوفرغير</option>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="price">السعر</label>
                                <input type="text" name="price" class="form-control"  @isset($offer) value="{{$offer->price}}" @endisset>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="content">المحتويات</label>
                                <textarea name="content" class="form-control"  @isset($offer) value="{{$offer->content}}" @endisset></textarea>
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
