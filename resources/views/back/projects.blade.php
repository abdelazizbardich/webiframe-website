@extends('layouts.app')

@section('content')

@error('error')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@enderror

  <div class="back-page">
    <div class="back-page-header">
      <h1 class="back-page-title"><i class="fas fa-briefcase" aria-hidden="true"></i>{{ __('back.Projects') }}</h1>
      <a href="{{ route('dashboard.project.create') }}" class="btn btn-primary">{{ __('back.New project') }}</a>
    </div>

    <div class="back-surface back-surface-table">
    <div class="table-responsive">
      <table class="table table-hover align-middle back-table">
                <thead>
                  <tr>
                    <th scope="col">{{ __('back.id')}}</th>
                    <th scope="col">{{ __('back.thumbnail')}}</th>
                    <th scope="col">{{ __('back.title')}}</th>
                    <th scope="col">{{ __('back.slug')}}</th>
                    <th scope="col">{{ __('back.short description')}}</th>
                    <th scope="col">{{ __('back.category') }}</th>
                    <th scope="col">{{ __('back.url')}}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($projects as $project)
                  <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td scope="col"><img class="back-thumb" src="{{ asset('storage/'.$project->thumbnail) }}" alt="{{ $project->title }}"></td>
                    <td scope="col">{{ $project->title }}</td>
                    <td scope="col">{{ $project->slug }}</td>
                    <td scope="col">{{ \Illuminate\Support\Str::limit($project->short_description, 56) }}</td>
                    <td scope="col">{{ $project->category->name ?? '-' }}</td>
                    <td scope="col"><a class="small" href="{{ $project->url }}">{{ $project->url }}</a></td>
                    <td><a href="{{ route('dashboard.project.delete', $project->id) }}" class="btn btn-sm btn-danger m-1">Delete</a></td>
                  </tr>
                  @empty
                    <tr>
                      <td colspan="8" class="back-empty">{{ __('No records found') }}</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
