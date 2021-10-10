@extends('front.layout')
@section('title',__('front.finish order'))
@section('content')
<main>
    <section id="contact" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-11 col-md-8 bg-light rounded border py-3 m-auto text-center mb-5">
                    <h2 class="m-2 text-success">{{ __('front.order confirmed') }}</h2>
                    <i class="fa fa-check p-5 border-success border rounded-circle border-5 display-1 text-success my-5"></i>
                    <p class="m-0 mb-5">{!! __('front.We received your order and you contact information.<br>we will contact you to confirm your order as soon as possible') !!}</p>
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">{{ __('front.Go to home page') }}</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
