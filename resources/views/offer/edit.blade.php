@extends('layouts.app')
@section('title', 'تعديل عرض ')

@section('content')

<h2></h2>


<div class="container page-section cta ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="">
                            <h5 class="section-heading mb-3">
                                اضافة عرض
                            </h5>
                    <div class="">


                        <form class="cta-inner bg-faded" action="{{route('offers.update', $offer)}}" method="post">
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
                                <textarea name="content" class="form-control"  >@isset($offer) {{$offer->content}} @endisset</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success"> <i class="fas fa-pen-square"></i> تعديل</button>
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
