@extends('layouts.app')

@section('content')

@error('error')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@enderror

    <div class="row m-0">
        <div class="col"><h1 class="display-5 fw-bold">Projects</h1></div>
        <div class="col-auto"><a href="{{ route('dashboard.project.create') }}" class="btn btn-primary me-0 ms-auto">{{ __('back.New project') }}</a></div>
        <div class="col-12">
        <div class="table-responsive p-2 shadow rounded border">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">{{ __('back.id')}}</th>
                    <th scope="col">{{ __('back.thumbnail')}}</th>
                    <th scope="col">{{ __('back.title')}}</th>
                    <th scope="col">{{ __('back.slug')}}</th>
                    <th scope="col">{{ __('back.short description')}}</th>
                    <th scope="col">{{ __('back.url')}}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project)
                  <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td scope="col"><img src="{{ asset('storage/'.$project->thumbnail) }}" width="40" height="40"></td>
                    <td scope="col">{{ $project->title }}</td>
                    <td scope="col">{{ $project->slug }}</td>
                    <td scope="col">{{ $project->short_description }}</td>
                    <td scope="col"><a class="small" href="{{ $project->url }}">{{ $project->url }}</a></td>
                    <td><a href="{{ route('dashboard.project.delete', $project->id) }}" class="btn btn-sm btn-danger m-1">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
    </div>
@endsection
