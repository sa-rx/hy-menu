@extends('layouts.app')

@section('content')



<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                          
                                
                            
                        @forelse($opinions as $opinion)
                        <div class="card">
                                <div class="card-body">
                                        <h2 class="section-heading mb-4">
                                        <span class="section-heading-upper">{{$opinion->name}}</span>
                                        <span class="section-heading-lower">{{$opinion->name}}</span>
                                    </h2>
                                    <p class="mb-0">{{$opinion->content}}</p>
                                </div> 

                                <div class="card-footer">

                                @can('العروض')
                                <form method="post" action="{{route('opinions.destroy',$opinion)}}"href="">
                                     @method('delete')
                                        @csrf
                                    <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" >حذف <i class="fas fa-trash-alt"></i></button>
                                  </form>
                                  @endcan


                                </div>
                                </div>
                        @empty
                             <p>لا توجد حجوزات</p>
                        @endforelse
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
