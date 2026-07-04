@extends('layouts.app')

@section('content')
    <div>
        <h1 class="display-5 fw-bold">{{ __('posts') }}</h1>
        <div class="table-responsive p-2 shadow rounded">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('First') }}</th>
                    <th scope="col">{{ __('Last') }}</th>
                    <th scope="col">{{ __('Handle') }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection
