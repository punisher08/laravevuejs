@extends('layouts.app')

@section('content')
<section class="sidebar-section py-4 col-lg-2 col-md-2">
        <Sidebar></Sidebar> 
</section>

<div class="container">
    <div class="py-4">
        <router-view></router-view>
    </div>
</div>
@endsection
