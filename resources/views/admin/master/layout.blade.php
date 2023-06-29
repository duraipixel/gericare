@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
   <ul class="nav nav-gradient w-100">
       
        @if (permission_check('BANNER_INDEX'))
        <li class="nav-item">
            <a class="nav-link {{ Route::is(['banner.index','banner.create','banner.edit']) ? "active" : "" }}" href="{{ route('banner.index') }}">
                <i class="fa fa-picture-o me-2"></i>
                Banner Master
            </a>
        </li>
        @endif
        
        
        @if (permission_check('MEDIA_INDEX'))
        <li class="nav-item">
            <a class="nav-link {{ Route::is(['media.index','media.create','media.edit']) ? "active" : "" }}" href="{{ route('media.index') }}">
                <i class="fa fa-picture-o me-2"></i>
                Media Releases
            </a>
        </li>
        @endif
   </ul>
   <div class="my-4">
      @yield('admin_master_content')
   </div>
@endsection
