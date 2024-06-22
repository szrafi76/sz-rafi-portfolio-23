@extends('web.app.app')
@section('main-body')
<!-- slider start here -->
@include('web.component.hero')
<!-- slider end here -->

<!-- about start here -->
@include('web.component.about')
<!-- about end here -->

<!-- My Expertise Area here -->
@include('web.component.expertise-area')
<!-- My Expertise Area end here -->

<!-- product start here -->
@include('web.component.project')
<!-- product end here -->

<!-- skills start here -->
@include('web.component.skills')
<!-- skills end here -->

<!-- services start here -->
@include('web.component.services')
<!-- services end here -->

<!-- testimonials start here -->
@include('web.component.testimonials')
<!-- testimonials end here -->

<!-- blog start here -->
@include('web.component.brands')
<!-- blog end here -->

<!-- blog start here -->
@include('web.component.blog')
<!-- blog end here -->

<!-- contact start here -->
@include('web.component.contact')
<!-- contact end here -->


<!-- blog start here -->
{{-- @include('web.component.blog') --}}
<!-- blog end here -->


@endsection
