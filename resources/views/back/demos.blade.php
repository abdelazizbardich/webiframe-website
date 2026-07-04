@extends('layouts.app')

@section('content')
  <div class="back-page">
    <div class="back-page-header">
      <h1 class="back-page-title"><i class="fas fa-vial" aria-hidden="true"></i>{{ __('back.Demos') }}</h1>
      <a href="{{ route('dashboard.demo.create') }}" class="btn btn-primary">{{ __('back.New Demo') }}</a>
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
                  @if(isset($demos) && count($demos))
                    @foreach ($demos as $demo)
                  <tr>
                    <th scope="row">{{ $demo->id }}</th>
                    <td scope="col"><img class="back-thumb" src="{{ asset('storage/'.$demo->thumbnail) }}" alt="{{ $demo->title }}"></td>
                    <td scope="col">{{ $demo->title }}</td>
                    <td scope="col">{{ $demo->slug }}</td>
                    <td scope="col">{{ \Illuminate\Support\Str::limit($demo->short_description, 56) }}</td>
                    <td scope="col">{{ $demo->category->name ?? '-' }}</td>
                    <td scope="col"><a class="small" href="{{ $demo->url }}">{{ $demo->url }}</a></td>
                    <td><a href="{{ route('dashboard.demo.delete', $demo->id) }}" class="btn btn-sm btn-danger m-1">Delete</a></td>
                  </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="8" class="back-empty">{{ __('No records found') }}</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
