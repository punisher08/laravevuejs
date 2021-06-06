@extends('layouts.app')

@section('content')
<section class="sidebar-section py-4 col-lg-2 col-md-2">
    <sidebar-component></sidebar-component> 
</section>

<div class="container">
    <div class="py-4">
        {{-- <Dashboard></Dashboard> --}}
        <router-view></router-view>

        <div class="row"> 
            <div class="col-lg-8">
     
            </div>
            <div class="col-lg-4">
            
            </div>
        </div>
    </div>
</div>
@endsection
