@extends('front.layout')
@section('title',__('front.demos'))
@section('content')
    <main>
        <section id="our-demos" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="m-2">{{ __('front.Our demo sites') }}</h2>
                        <p class="m-0">{{ __('front.We create a good and cool looking demos you can chose from to quickly build your project') }}.</p>
                    </div>
                    @foreach ($demos as $demo)
                        <div class="col-xs-12 col-sm-12 col-md-4 mb-4">
                            <div class="bg-light w-100 h-100 rounded shadow-sm overflow-hidden">
                                <div class="thumbnail">
                                    <a href="{{ route('demo',$demo->slug) }}">
                                        <img class="img-responsive w-100 h-50" src="{{ asset('storage/'.$demo->thumbnail) }}" alt="{{ $demo->title }}">
                                    </a>
                                </div>
                                <div class="details p-3">
                                    <h1 class="h5">{{ $demo->title }}</h1>
                                    <p class="small">{{ $demo->short_description }}</p>
                                </div>
                                <a href="{{ route('demo',$demo->slug) }}" class="btn-lg w-100 btn btn-primary rounded-0">{{ __('front.know more') }}</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 text-center my-5">
                        {{ $demos->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
