@extends('layouts.app')

@section('content')
    @php
        $categoryItem = $category ?? null;
        $formAction = $categoryItem ? route('dashboard.categories.update', $categoryItem->id) : route('dashboard.categories.store');
        $nameTranslations = $categoryItem ? $categoryItem->getTranslationsArray('name') : ['en' => null, 'fr' => null, 'ar' => null];
    @endphp
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-folder-plus" aria-hidden="true"></i>{{ $categoryItem ? 'Edit category' : __('back.New caregory') }}</h1>
        </div>

        <div class="back-surface">
            <form action="{{ $formAction }}" method="POST" class="back-form">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                 <div class="form-group">
                     <label class="mb-2">{{ __('back.name') }}:</label>
                     <div class="row g-3">
                        <div class="col-12 col-lg-4">
                            <label for="name-en" class="form-label">English (EN)</label>
                            <input required type="text" name="name[en]" id="name-en" value="{{ old('name.en', $nameTranslations['en']) }}" placeholder="{{ __('back.name') }}" class="form-control form-control-lg">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="name-fr" class="form-label">Francais (FR)</label>
                            <input type="text" name="name[fr]" id="name-fr" value="{{ old('name.fr', $nameTranslations['fr']) }}" placeholder="{{ __('back.name') }}" class="form-control form-control-lg">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="name-ar" class="form-label">Arabic (AR)</label>
                            <input type="text" name="name[ar]" id="name-ar" value="{{ old('name.ar', $nameTranslations['ar']) }}" placeholder="{{ __('back.name') }}" class="form-control form-control-lg" dir="rtl">
                        </div>
                     </div>
                 </div>
                 <div class="row g-2">
                    <div class="form-group col-12 col-md-6">
                        <label for="type">{{ __('back.type') }}:</label>
                        <select required name="type" id="type" class="form-select form-select-lg">
                            <option value="">{{ __('back.type') }}...</option>
                            <option value="project" @if(old('type', $categoryItem->type ?? null) === 'project') selected @endif>{{ __('back.project') }}</option>
                            <option value="demo" @if(old('type', $categoryItem->type ?? null) === 'demo') selected @endif>{{ __('back.demo') }}</option>
                       </select>
                    </div>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 px-4">{{ $categoryItem ? 'Update' : 'Publish' }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
