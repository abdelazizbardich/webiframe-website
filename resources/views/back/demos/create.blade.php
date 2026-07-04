@extends('layouts.app')

@section('content')
    @php
        $demoItem = $demo ?? null;
        $formAction = $demoItem ? route('dashboard.demo.update', $demoItem->id) : route('dashboard.demo.store');
        $titleTranslations = $demoItem ? $demoItem->getTranslationsArray('title') : ['en' => null, 'fr' => null, 'ar' => null];
        $shortDescriptionTranslations = $demoItem ? $demoItem->getTranslationsArray('short_description') : ['en' => null, 'fr' => null, 'ar' => null];
        $fullDescriptionTranslations = $demoItem ? $demoItem->getTranslationsArray('full_description') : ['en' => null, 'fr' => null, 'ar' => null];
    @endphp
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-vial" aria-hidden="true"></i>{{ $demoItem ? 'Edit demo' : __('back.New Demo') }}</h1>
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
                     <input type="text" name="slug" id="slug" value="{{ $demoItem->slug ?? '' }}" readonly disabled placeholder="{{ __('back.slug') }}" class="form-control">
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
                    <div class="form-group col-md-4">
                        <label for="thumbnail">{{ __('back.thumbnail') }}:</label>
                        <input type="file" name="thumbnail" id="thumbnail" placeholder="{{ __('back.thumbnail') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="full-thumbnail">{{ __('back.full thumbnail') }}:</label>
                        <input type="file" name="full_thumbnail" id="full-thumbnail" placeholder="{{ __('back.full thumbnail') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="screenshots">{{ __('back.screenshots') }}:</label>
                        <input type="file" name="screenshots[]" multiple id="screenshots" placeholder="{{ __('back.screenshots') }}" class="form-control form-control-lg">
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
                                <option value="{{ $category->id }}" @selected((string) old('category_id', $demoItem->category_id ?? '') === (string) $category->id)>{{ $category->name }}</option>
                            @endforeach
                       </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="mb-2">{{ __('back.full description') }}:</label>
                    <div class="row g-3">
                        <div class="col-12" dir="ltr">
                            <label for="full-description-en" class="form-label">English (EN)</label>
                            <div style="min-height:300px;" data-textareaSelector="#full-description-en" placeholder="{{ __('back.full description') }}" class="text-editor" dir="ltr">{!! old('full_description.en', $fullDescriptionTranslations['en']) !!}</div>
                            <textarea hidden name="full_description[en]" id="full-description-en" >{{ old('full_description.en', $fullDescriptionTranslations['en']) }}</textarea>
                        </div>
                        <div class="col-12" dir="ltr">
                            <label for="full-description-fr" class="form-label">Francais (FR)</label>
                            <div style="min-height:300px;" data-textareaSelector="#full-description-fr" placeholder="{{ __('back.full description') }}" class="text-editor" dir="ltr">{!! old('full_description.fr', $fullDescriptionTranslations['fr']) !!}</div>
                            <textarea hidden name="full_description[fr]" id="full-description-fr" >{{ old('full_description.fr', $fullDescriptionTranslations['fr']) }}</textarea>
                        </div>
                        <div class="col-12" dir="rtl">
                            <label for="full-description-ar" class="form-label">Arabic (AR)</label>
                            <div style="min-height:300px;" data-textareaSelector="#full-description-ar" placeholder="{{ __('back.full description') }}" class="text-editor" dir="rtl">{!! old('full_description.ar', $fullDescriptionTranslations['ar']) !!}</div>
                            <textarea hidden name="full_description[ar]" id="full-description-ar" >{{ old('full_description.ar', $fullDescriptionTranslations['ar']) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 px-4">{{ $demoItem ? 'Update' : 'Publish' }}</button>
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
