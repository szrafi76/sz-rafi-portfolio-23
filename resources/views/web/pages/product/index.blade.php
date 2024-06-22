@extends('web.app.app')
@section('main-body')
@include('web.inc.page-cover', [
    'backgroundImage' => 'assets/web/images/about/inner-banner.jpg',
    'pageTitle' => 'Products',
    'breadcrumb' => 'Products',
])
@include('web.component.product-page')
@endsection