@extends('layouts.app')

@section('content')
  <div class="back-page">
    <div class="back-page-header">
      <h1 class="back-page-title"><i class="fas fa-sitemap" aria-hidden="true"></i>{{ __('back.categories') }}</h1>
      <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary">{{ __('back.New caregory') }}</a>
    </div>

    <div class="back-surface back-surface-table">
    <div class="table-responsive">
      <table class="table table-hover align-middle back-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('back.name') }}</th>
                    <th scope="col">{{ __('back.type') }}</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @isset($categories)
                    @foreach ($categories as $category)
                    <tr>
                      <th scope="row">{{ $category->id }}</th>
                      <td>{{ $category->name}}</td>
                      <td><span class="badge bg-light text-dark border">{{ $category->type}}</span></td>
                      <td><a href="{{ route('dashboard.categories.edit', $category->id) }}" class="btn btn-sm btn-outline-primary">Edit</a></td>
                    </tr>
                    @endforeach
                    @if($categories->isEmpty())
                      <tr>
                        <td colspan="4" class="back-empty">{{ __('No records found') }}</td>
                      </tr>
                    @endif
                  @endisset
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
