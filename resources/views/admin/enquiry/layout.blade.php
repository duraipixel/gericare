@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
   <ul class="nav nav-gradient w-100">
{{--      
     @if (permission_check('FAQ_INDEX'))
     <li class="nav-item">
        <a class="nav-link {{ Route::is(['faq.index', 'faq.show']) ? "active" : "" }}" href="{{ route('faq.index') }}">
           <i class="fa-users fa me-2"></i>
           Frequently Asked Questions
        </a>
     </li>
      @endif --}}
   </ul>
   <div class="my-4">
      @yield('admin_enquiry_content')
   </div>
@endsection