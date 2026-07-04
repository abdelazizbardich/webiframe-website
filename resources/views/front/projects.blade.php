@extends('front.layout')
@section('title',__('front.Projects'))
@section('content')
    <main>
        <section id="projects" class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-3">
                        <h2 class="m-2">{{ __('front.Our completed projects') }}</h2>
                        <p class="m-0">{{ __('front.We love what we do and our work is very creative') }}.</p>
                        <p>{{ __('front.We design awesome stuff') }}</p>
                    </div>
                    <div class="projects col-12 mb-5">
                        @foreach ($projects as $project)
                            <div class="mb-4">
                                <div class="bg-light w-100 h-100 rounded shadow-sm overflow-hidden">
                                    <div class="thumbnail">
                                        <a href="{{ route('project',$project->slug) }}">
                                            <img class="img-responsive w-100 h-50" src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}">
                                        </a>
                                    </div>
                                    <div class="details p-3 h-50">
                                        <h1 class="h5">{{ $project->title }}</h1>
                                        <p class="small">{{ $project->short_description }}</p>
                                    </div>
                                    <a href="{{ route('project',$project->slug) }}" class="btn-lg w-100 btn btn-primary rounded-0">{{ __('front.know more') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 text-center my-5">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
