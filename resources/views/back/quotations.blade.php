@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-file-signature" aria-hidden="true"></i>{{ __('back.Quotations') }}</h1>
        </div>

        <div class="back-surface back-surface-table">
            <div class="table-responsive">
            <table class="table table-hover align-middle back-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('back.name') }}</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Need</th>
                    <th scope="col">Budget</th>
                    <th scope="col">Due Date</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($quotations) && count($quotations))
                    @foreach ($quotations as $quotation)
                    <tr>
                      <th scope="row">{{ $quotation->id }}</th>
                      <td>{{ $quotation->first_last_name ?? '-' }}</td>
                      <td>{{ $quotation->email ?? '-' }}</td>
                      <td>{{ $quotation->phone ?? '-' }}</td>
                      <td>{{ $quotation->your_need ?? '-' }}</td>
                      <td>{{ $quotation->approximate_budget ?? '-' }}</td>
                      <td>{{ $quotation->due_date ?? '-' }}</td>
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
