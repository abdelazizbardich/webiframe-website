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
                            <div class="project shadow">
                                <a href="{{ route('project',$project->slug) }}"><img class="img-fluid" src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}"></a>
                                <div class="project-detail p-2">
                                    <a href="{{ route('project',$project->slug) }}"><p class="m-0 border-bottom p-2">{{ $project->title }}</p></a>
                                    <p class="p-2 small">{{ $project->short_description }}</p>
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
