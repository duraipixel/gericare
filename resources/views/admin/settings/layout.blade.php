@extends('layouts.admin')

@section('admin_title') Home @endsection

@section('admin_content')
   <ul class="nav nav-gradient w-100">
      @if (permission_check('ROLE_INDEX'))
      <li class="nav-item">
         <a class="nav-link {{ Route::is(['role.index','role.create', 'role.edit']) ? "active" : "" }}" href="{{ route('role.index') }}">
            <i class="fa-users fa me-2"></i>
            Roles
         </a>
      </li>
      @endif
      @if (permission_check('USER_INDEX'))
      <li class="nav-item d-flex">
         <a class="nav-link {{ Route::is(['user.index','user.create', 'user.edit']) ? "active" : "" }}" href="{{ route('user.index') }}">
            <i class="fa-user fa me-2"></i>
            Users 
         </a> 
      </li>
      @endif
   </ul>
   <div class="my-4">
      @yield('admin_settings_content')
   </div>
@endsection