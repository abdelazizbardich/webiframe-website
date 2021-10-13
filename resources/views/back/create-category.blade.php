@extends('layouts.app')

@section('content')
    <div class="row m-0">
        <div class="col-12"><h1 class="display-5 fw-bold">Create category:</h1></div>
        <div class="col-12">
            <form action="{{ route('dashboard.categories.store') }}" method="POST" class="p-2 rounded shadow bg-light border">
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
                 <div class="row">
                    <div class="form-group">
                        <label for="type">{{ __('back.type') }}:</label>
                        <select required name="type" id="type" class="form-select form-select-lg">
                            <option value="">{{ __('back.type') }}...</option>
                            <option value="project">{{ __('back.project') }}</option>
                            <option value="demo">{{ __('back.demo') }}</option>
                       </select>
                    </div>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2 w-100 btn-lg">Publish</button>
                </div>








            </form>
        </div>
    </div>
@endsection
