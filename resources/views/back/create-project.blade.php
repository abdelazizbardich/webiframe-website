@extends('layouts.app')

@section('content')
    @php
        $projectItem = $project ?? null;
        $formAction = $projectItem ? route('dashboard.project.update', $projectItem->id) : route('dashboard.project.store');
        $titleTranslations = $projectItem ? $projectItem->getTranslationsArray('title') : ['en' => null, 'fr' => null, 'ar' => null];
        $shortDescriptionTranslations = $projectItem ? $projectItem->getTranslationsArray('short_description') : ['en' => null, 'fr' => null, 'ar' => null];
        $fullDescriptionTranslations = $projectItem ? $projectItem->getTranslationsArray('full_description') : ['en' => null, 'fr' => null, 'ar' => null];
    @endphp
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-briefcase" aria-hidden="true"></i>{{ $projectItem ? 'Edit project' : __('back.New project') }}</h1>
        </div>

        <div class="back-surface">
            @if (count($categories) > 0)
            <form action="{{ $formAction }}" enctype="multipart/form-data" method="POST" class="back-form">
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
                     <label class="mb-2">{{ __('back.title') }}:</label>
                     <div class="row g-3">
                        <div class="col-12 col-lg-4">
                            <label for="title-en" class="form-label">English (EN)</label>
                            <input type="text" name="title[en]" id="title-en" value="{{ old('title.en', $titleTranslations['en']) }}" placeholder="{{ __('back.title') }}" class="form-control form-control-lg">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="title-fr" class="form-label">Francais (FR)</label>
                            <input type="text" name="title[fr]" id="title-fr" value="{{ old('title.fr', $titleTranslations['fr']) }}" placeholder="{{ __('back.title') }}" class="form-control form-control-lg">
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="title-ar" class="form-label">Arabic (AR)</label>
                            <input type="text" name="title[ar]" id="title-ar" value="{{ old('title.ar', $titleTranslations['ar']) }}" placeholder="{{ __('back.title') }}" class="form-control form-control-lg" dir="rtl">
                        </div>
                     </div>
                 </div>
                 <div class="form-group">
                     <input type="text" name="slug" id="slug" value="{{ $projectItem->slug ?? '' }}" readonly disabled placeholder="{{ __('back.slug') }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <label class="mb-2">{{ __('back.short description') }}:</label>
                     <div class="row g-3">
                        <div class="col-12 col-lg-4">
                            <label for="short-description-en" class="form-label">English (EN)</label>
                            <textarea cols="30" rows="5" name="short_description[en]" id="short-description-en" placeholder="{{ __('back.short description') }}" class="form-control form-control-lg">{{ old('short_description.en', $shortDescriptionTranslations['en']) }}</textarea>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="short-description-fr" class="form-label">Francais (FR)</label>
                            <textarea cols="30" rows="5" name="short_description[fr]" id="short-description-fr" placeholder="{{ __('back.short description') }}" class="form-control form-control-lg">{{ old('short_description.fr', $shortDescriptionTranslations['fr']) }}</textarea>
                        </div>
                        <div class="col-12 col-lg-4">
                            <label for="short-description-ar" class="form-label">Arabic (AR)</label>
                            <textarea cols="30" rows="5" name="short_description[ar]" id="short-description-ar" placeholder="{{ __('back.short description') }}" class="form-control form-control-lg" dir="rtl">{{ old('short_description.ar', $shortDescriptionTranslations['ar']) }}</textarea>
                        </div>
                     </div>
                 </div>
                 <div class="row g-2">
                    <div class="form-group col-md-6">
                        <label for="thumbnail">{{ __('back.thumbnail') }}:</label>
                        <input type="file" name="thumbnail" id="thumbnail" placeholder="{{ __('back.thumbnail') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="full-thumbnail">{{ __('back.full thumbnail') }}:</label>
                        <input type="file" name="full_thumbnail" id="full-thumbnail" placeholder="{{ __('back.full thumbnail') }}" class="form-control form-control-lg">
                    </div>
                 </div>
                 <div class="row g-2">
                    <div class="form-group col-md-6">
                        <label for="url">{{ __('back.url') }}:</label>
                        <input type="url" name="url" id="url" placeholder="{{ __('back.url') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">{{ __('back.category') }}:</label>
                        <select required name="category_id" id="category" class="form-select form-select-lg">
                            <option value="">{{ __('back.category') }}...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected((string) old('category_id', $projectItem->category_id ?? '') === (string) $category->id)>{{ $category->name }}</option>
                            @endforeach
                       </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="mb-2">{{ __('back.full description') }}:</label>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="full-description-en" class="form-label">English (EN)</label>
                            <textarea cols="30" rows="8" name="full_description[en]" id="full-description-en" placeholder="{{ __('back.full description') }}" class="form-control form-control-lg">{{ old('full_description.en', $fullDescriptionTranslations['en']) }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="full-description-fr" class="form-label">Francais (FR)</label>
                            <textarea cols="30" rows="8" name="full_description[fr]" id="full-description-fr" placeholder="{{ __('back.full description') }}" class="form-control form-control-lg">{{ old('full_description.fr', $fullDescriptionTranslations['fr']) }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="full-description-ar" class="form-label">Arabic (AR)</label>
                            <textarea cols="30" rows="8" name="full_description[ar]" id="full-description-ar" placeholder="{{ __('back.full description') }}" class="form-control form-control-lg" dir="rtl">{{ old('full_description.ar', $fullDescriptionTranslations['ar']) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 px-4">{{ $projectItem ? 'Update' : 'Publish' }}</button>
                </div>
            </form>
            @else
            <div class="div alert alert-danger mb-0">
                {{ __('back.Please Create a project category first') }}
                <a href="{{ route('dashboard.categories.create') }}" class="btn btn-danger ms-3">{{ __('back.Create new category') }}</a>
            </div>
            @endif
        </div>
    </div>
@endsection
