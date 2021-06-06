@extends('layouts.app')

@section('content')
<section class="sidebar-section py-4 col-lg-2 col-md-2 col-sm-2 col-xm-2">
    <sidebar-component></sidebar-component> 
</section>

<div class="container">
    <div class="py-4">
        {{-- <news-component></news-component> --}}
        {{-- <dashboard-component></dashboard-component> --}}

        <Dashboard></Dashboard>
        <div class="row"> 
            <div class="col-lg-8">
                <news-component></news-component>
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
</div>
@endsection
