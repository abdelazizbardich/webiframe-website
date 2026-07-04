@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-gauge" aria-hidden="true"></i>{{ __('front.dashboard') }}</h1>
        </div>

        <div class="back-stat-grid">
            <div class="back-stat-card">
                <span class="label">{{ __('back.Projects') }}</span>
                <span class="value">{{ \App\Models\Project::count() }}</span>
            </div>
            <div class="back-stat-card">
                <span class="label">{{ __('back.Demos') }}</span>
                <span class="value">{{ \App\Models\Demo::count() }}</span>
            </div>
            <div class="back-stat-card">
                <span class="label">{{ __('back.Orders') }}</span>
                <span class="value">{{ \App\Models\Order::count() }}</span>
            </div>
            <div class="back-stat-card">
                <span class="label">{{ __('back.Contacts') }}</span>
                <span class="value">{{ \App\Models\Contact::count() }}</span>
            </div>
        </div>

        <div class="back-surface">
            <p class="mb-0 back-muted">
                {{ __('back.Dashboard') }}: {{ __('back.Projects') }}, {{ __('back.Demos') }}, {{ __('back.Orders') }}, {{ __('back.Quotations') }}, {{ __('back.Contacts') }}.
            </p>
        </div>
    </div>
@endsection
