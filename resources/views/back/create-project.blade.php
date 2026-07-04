@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-briefcase" aria-hidden="true"></i>{{ __('back.New project') }}</h1>
        </div>

        <div class="back-surface">
            @if (count($categories) > 0)
            <form action="{{ route('dashboard.project.store') }}" enctype="multipart/form-data" method="POST" class="back-form">
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
                     <label for="title">{{ __('back.title') }}:</label>
                     <input type="text" name="title" id="title" placeholder="{{ __('back.title') }}" class="form-control form-control-lg">
                 </div>
                 <div class="form-group">
                     <input type="text" name="slug" id="slug" readonly disabled placeholder="{{ __('back.slug') }}" class="form-control">
                 </div>
                 <div class="form-group">
                     <label for="short-description">{{ __('back.short description') }}:</label>
                     <textarea cols="30" rows="5" name="short_description" id="short-description" placeholder="{{ __('back.short description') }}" class="form-control form-control-lg"></textarea>
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
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                       </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="full-description">{{ __('back.full description') }}:</label>
                    <textarea cols="30" rows="10" name="full_description" id="full-description" placeholder="{{ __('back.full description') }}" class="form-control form-control-lg"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 px-4">Publish</button>
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
