@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col"><h1 class="display-5 fw-bold">Projects</h1></div>
        <div class="col-auto"><a href="{{ route('dashboard.project.create') }}" class="btn btn-primary me-0 ms-auto">{{ __('back.New project') }}</a></div>
        <div class="col-12">
        <div class="table-responsive p-2 shadow rounded border">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
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
    </div>
@endsection
