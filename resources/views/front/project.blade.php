@extends('front.layout')
@section('title','Project')
@section('content')
    <main>
      <div class="header-spacer"></div>
      <section id="project-view">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="jumbotron bg-white text-center border-none"><h1 class="h2">{{ $project->title }}</h1></div>
              <div class="row p-3 text-center">
                <p>{{ $project->short_description }}</p>
              </div>
              <div class="page-view shadow-lg">
                <div class="page-holder">
                  <a target="_blank" href="{{ $project->url }}">
                    <img
                      class="img-fluid"
                      src="{{ asset('storage/'.$project->full_thumbnail) }}"
                      alt="{{ $project->title }}"
                    />
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <a target="_blank" href="{{ $project->url }}" class="d-block btn-lg shadow-lg btn btn-primary"
                    >{{ __('front.See website') }}</a
                  >
                </div>
                <div class="col-6">
                  <a href="{{ route('demos') }}" class="d-block btn-lg shadow-lg btn btn-success"
                    >{{ __('front.Create my website') }}</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <span class="h2">{{ __('front.Full description') }}:</span>
                <hr>
            </div>
            <div class="col-12">
                {!! $project->full_description !!}
            </div>
        </div>
        </div>
      </section>
      <section id="call-to-action" class="text-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
              <h2 class="m-2">{{ __('front.Create a website to your imagination') }}</h2>
              <p class="m-0">
                {{ __('front.By ordering from us, you benefit from the SATISFIED OR guarantee on the design of your site') }}.<br />{{ __('front.Easy to learn, modern and secure') }}.
              </p>
            </div>
            <div class="text-center col-8 mb-5">
                <div class="form-group">
                  <a type="submit" class="btn btn-lg btn-warning">
                    {{ __('front.online quotation') }}
                  </a>
                </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    @endsection
