@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
   <ul class="nav nav-gradient w-100">
        <li class="nav-item d-flex">
            <a class="nav-link {{ Route::is('testimonial.index','testimonial.create') ? "active" : "" }}" href="{{ route('testimonial.index') }}">
                <i class="fa-building fa me-2"></i>
                Testimonial
            </a>
        </li>
   </ul>
   <div class="my-4">
      @yield('admin_master_content')
   </div>
@endsection
