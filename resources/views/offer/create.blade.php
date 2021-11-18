@extends('layouts.app')

@section('content')

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اضافة تصنيف</div>
                    <div class="card-body row">
                        <form action="{{route('offers.store')}}" method="post">
                            <div class="row">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="available">متوفر؟</label>
                                <select class="form-control" name="available" id="1">
                                <option value="1">متوفر</option>
                                <option value="0">غير متوفر</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="price">السعر</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                            <div class="form-group col-md-12 ">
                                <label for="content">المحتويات</label>
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
