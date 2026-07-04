@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-shopping-cart" aria-hidden="true"></i>{{ __('back.Orders') }}</h1>
        </div>

        <div class="back-surface back-surface-table">
            <div class="table-responsive">
            <table class="table table-hover align-middle back-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Demo</th>
                    <th scope="col">{{ __('back.name') }}</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Due Date</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($orders) && count($orders))
                    @foreach ($orders as $order)
                    <tr>
                      <th scope="row">{{ $order->id }}</th>
                      <td>{{ $order->demo->title ?? '-' }}</td>
                      <td>{{ $order->first_last_name ?? '-' }}</td>
                      <td>{{ $order->email ?? '-' }}</td>
                      <td>{{ $order->phone ?? '-' }}</td>
                      <td>{{ $order->approximate_budget ?? '-' }}</td>
                      <td>{{ $order->due_date ?? '-' }}</td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="7" class="back-empty">{{ __('No records found') }}</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
