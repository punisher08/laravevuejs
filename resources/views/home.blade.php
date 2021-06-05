@extends('layouts.app')

@section('content')
<section class="sidebar-section py-4 col-lg-2 col-md-2 col-sm-2">
    <sidebar-component></sidebar-component> 
</section>

<div class="container">
    <div class="py-4">
        <news-component></news-component>
    </div>
</div>
@endsection
