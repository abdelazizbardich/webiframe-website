@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col-12"><h1 class="display-5 fw-bold">Projects</h1></div>
        <div class="col-12">
            <form action="{{ route('dashboard.project.store') }}" method="POST" class="p-2 rounded shadow bg-light border">
                 <div class="form-group">
                     <label for="title">{{ __('back.title') }}:</label>
                     <input type="text" name="title" id="title" placeholder="{{ __('back.title') }}" class="form-control form-control-lg">
                 </div>
                 <div class="form-group">
                     <input type="text" name="slug" id="slug" readonly disabled placeholder="{{ __('back.slug') }}" class="small p-1 my-1 w-100">
                 </div>
                 <div class="form-group">
                     <label for="short-description">{{ __('back.short description') }}:</label>
                     <textarea cols="30" rows="5" name="short_description" id="short-description" placeholder="{{ __('back.short description') }}" class="form-control form-control-lg"></textarea>
                 </div>
                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="thumbnail">{{ __('back.thumbnail') }}:</label>
                        <input type="file" name="thumbnail" id="thumbnail" placeholder="{{ __('back.thumbnail') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="full-thumbnail">{{ __('back.full thumbnail') }}:</label>
                        <input type="file" name="full_thumbnail" id="full-thumbnail" placeholder="{{ __('back.full thumbnail') }}" class="form-control form-control-lg">
                    </div>
                 </div>
                 <div class="row">
                    <div class="form-group col-md-6">
                        <label for="url">{{ __('back.url') }}:</label>
                        <input type="url" name="url" id="url" placeholder="{{ __('back.url') }}" class="form-control form-control-lg">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="category">{{ __('back.category') }}:</label>
                        <select name="category_id" id="category" class="form-select form-select-lg">
                            <option value="">{{ __('back.category') }}...</option>
                       </select>
                    </div>
                 </div>
                 <div class="form-group">
                    <label for="full-description">{{ __('back.full description') }}:</label>
                    <textarea cols="30" rows="10" name="full_description" id="full-description" placeholder="{{ __('back.full description') }}" class="form-control form-control-lg"></textarea>
                </div>








            </form>
        </div>
    </div>
@endsection
