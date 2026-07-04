@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-newspaper" aria-hidden="true"></i>{{ __('back.Posts') }}</h1>
        </div>

        <div class="back-surface back-surface-table">
            <div class="table-responsive">
            <table class="table table-hover align-middle back-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('back.title') }}</th>
                    <th scope="col">{{ __('back.slug') }}</th>
                    <th scope="col">{{ __('back.category') }}</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($posts) && count($posts))
                    @foreach ($posts as $post)
                    <tr>
                      <th scope="row">{{ $post->id }}</th>
                      <td>{{ $post->title ?? '-' }}</td>
                      <td>{{ $post->slug ?? '-' }}</td>
                      <td>{{ $post->category->name ?? '-' }}</td>
                      <td>{{ optional($post->created_at)->format('Y-m-d') ?? '-' }}</td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="5" class="back-empty">{{ __('No records found') }}</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
