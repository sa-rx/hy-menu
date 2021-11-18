@extends('layouts.app')

@section('content')

<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Our Promise</span>
                                <span class="section-heading-lower">To You</span>
                            </h2>
                            <p class="mb-0"><a href="{{route('food.index')}}">food</a></p>
                            <p class="mb-0"><a href="{{route('categories.index')}}">categories</a></p>
                            <p class="mb-0"><a href="{{route('offers.index')}}">offers</a></p>
                            <p class="mb-0"><a href="{{route('abouts.index')}}">abouts</a></p>
                            <p class="mb-0"><a href="{{route('contacts.index')}}">contacts</a></p>
                            <p class="mb-0"><a href="{{route('opinions.index')}}">opinions</a></p>

                            <ul>
                                <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                                <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            </ul>



                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
