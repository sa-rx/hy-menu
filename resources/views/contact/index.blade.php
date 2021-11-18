@extends('layouts.app')
@section('title', ' تواصل معنا ')

@section('content')


<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">

                                <span class="section-heading-upper">Come On In</span>
                                <span class="section-heading-lower">We're Open</span>
                            </h2>



                            <table class="table table-striped table-hover table-dark ">
                                    <thead  class="table-dark">
                                        <tr>
                                        
                                        <th scope="col">الاسم</th>
                                        <th scope="col">الايميل</th>
                                       
                                        <th scope="col"> الرساله</th>
                                       
                                        <th scope="col">حذف</th>
                                        </tr>
                                    </thead>


                                    
                                        <tbody>
                                            @forelse($contacts as $contact)
                                            <tr>
                                                <td><a href="{{route('contacts.show',$contact)}}"> {{$contact->name}}</a></td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->content}}</td>
                                             


                                               

                                               


                                                <td>
                                                
                                                <form method="post" action="{{route('contacts.destroy',$contact)}}"href="">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" >حذف <i class="fas fa-trash-alt"></i></button>
                                                </form>

                                            </td>
                                            </tr>

                                                @empty
                                            <p>لا توجد حجوزات</p>
                                                @endforelse
                                    </tbody>
                            </table>


                         

                        </div>
                    </div>
                </div>
            </div>
        </section>
      


@endsection
