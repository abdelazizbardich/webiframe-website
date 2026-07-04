@extends('layouts.app')

@section('content')
    <div>
        <h1 class="display-5 fw-bold">{{ __('back.contacts') }}</h1>
        <div class="table-responsive p-2 shadow rounded">
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
@endsection
