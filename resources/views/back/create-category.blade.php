@extends('layouts.app')

@section('content')
    <div class="back-page">
        <div class="back-page-header">
            <h1 class="back-page-title"><i class="fas fa-folder-plus" aria-hidden="true"></i>{{ __('back.New caregory') }}</h1>
        </div>

        <div class="back-surface">
            <form action="{{ route('dashboard.categories.store') }}" method="POST" class="back-form">
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
                     <label for="name">{{ __('back.name') }}:</label>
                     <input required type="text" name="name" id="name" placeholder="{{ __('back.name') }}" class="form-control form-control-lg">
                 </div>
                 <div class="row g-2">
                    <div class="form-group col-12 col-md-6">
                        <label for="type">{{ __('back.type') }}:</label>
                        <select required name="type" id="type" class="form-select form-select-lg">
                            <option value="">{{ __('back.type') }}...</option>
                            <option value="project">{{ __('back.project') }}</option>
                            <option value="demo">{{ __('back.demo') }}</option>
                       </select>
                    </div>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 px-4">Publish</button>
                </div>
            </form>
        </div>
    </div>
@endsection
