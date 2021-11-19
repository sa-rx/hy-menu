@extends('layouts.app')
@section('title', ' تواصل معنا ')

@section('content')


<section class="page-section cta">
            <div class="container">

            
                <div class="row">

                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                           


                            <table class="table table-striped table-hover  ">
                                    <thead  class="">
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
                                                <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-outline-danger" > <i class="fas fa-trash-alt"></i></button>
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
