@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col"><h1 class="display-5 fw-bold">{{ __('back.categories') }}</h1></div>
        <div class="col-auto"><a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary me-0 ms-auto">{{ __('back.New caregory') }}</a></div>
        <div class="col-12">
        <div class="table-responsive p-2 shadow rounded border">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('back.name') }}</th>
                    <th scope="col">{{ __('back.type') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @isset($categories)
                    @foreach ($categories as $category)
                    <tr>
                      <th scope="row">1</th>
                      <td>{{ $category->name}}</td>
                      <td>{{ $category->type}}</td>
                    </tr>
                    @endforeach
                  @endisset
                </tbody>
              </table>
        </div>
        </div>
    </div>
@endsection
