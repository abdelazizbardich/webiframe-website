@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col"><h1 class="display-5 fw-bold">Demos</h1></div>
        <div class="col-auto"><a href="{{ route('dashboard.demo.create') }}" class="btn btn-primary me-0 ms-auto">{{ __('back.New Demo') }}</a></div>
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
                  @foreach ($demos as $demo)
                  <tr>
                    <th scope="row">{{ $demo->id }}</th>
                    <td scope="col"><img src="{{ asset('storage/'.$demo->thumbnail) }}" width="40" height="40"></td>
                    <td scope="col">{{ $demo->title }}</td>
                    <td scope="col">{{ $demo->slug }}</td>
                    <td scope="col">{{ $demo->short_description }}</td>
                    <td scope="col"><a class="small" href="{{ $demo->url }}">{{ $demo->url }}</a></td>
                    <td><a href="{{ route('dashboard.demo.delete') }}" class="btn btn-sm btn-danger m-1">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
    </div>
@endsection
