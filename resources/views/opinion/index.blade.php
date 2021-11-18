@extends('layouts.app')
@section('title', ' اراء العملاء ')

@section('content')



<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded  rounded">
                          
                                
                            
                        @forelse($opinions as $opinion)
                        
                        <div class="alert alert-light" role="alert">
                             <b> {{$opinion->name}}</b>  |  <p class="mb-0">{{$opinion->content}}</p>
                            </div>

                                @can('العروض')
                                <form class="mb-2" method="post" action="{{route('opinions.destroy',$opinion)}}"href="">
                                     @method('delete')
                                        @csrf
                                    <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" > <i class="fas fa-trash-alt"></i></button>
                                  </form>
                                  @endcan


                                
                        @empty
                             <p>لا توجد حجوزات</p>
                        @endforelse
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
