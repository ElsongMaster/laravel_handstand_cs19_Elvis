@extends('front.template.main')



@section('content')
        @include('front.partials.home-page.classSection')
        @include('front.partials.home-page.scheduleSection')
        @include('front.partials.home-page.pricingSection')
        @include('front.partials.home-page.clientSection')
        @include('front.partials.home-page.trainerSection')


@endsection