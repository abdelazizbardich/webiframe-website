@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-address-book" aria-hidden="true"></i>{{ __('back.Contacts') }}</h1>
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
                    <th scope="col">{{ __('back.type') }}</th>
                    <th scope="col">{{ __('back.message') }}</th>
                  </tr>
                </thead>
                <tbody>
                  @if(isset($contacts) && count($contacts))
                    @foreach ($contacts as $contact)
                    <tr>
                      <th scope="row">{{ $contact->id }}</th>
                      <td>{{ trim(($contact->first_name ?? '').' '.($contact->last_name ?? '')) ?: '-' }}</td>
                      <td>{{ $contact->email ?? '-' }}</td>
                      <td>{{ $contact->phone ?? '-' }}</td>
                      <td>{{ $contact->subject_type ?? '-' }}</td>
                      <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
                    </tr>
                    @endforeach
                  @else
                    <tr>
                      <td colspan="6" class="back-empty">{{ __('No records found') }}</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
        </div>
    </div>
@endsection
