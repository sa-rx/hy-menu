@extends('layouts.app')

@section('content')

<h2></h2>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">اضافة تصنيف</div>
                    <div class="card-body">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">اسم الصنف</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-success"> <i class="fas fa-plus-square">اضافة</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
