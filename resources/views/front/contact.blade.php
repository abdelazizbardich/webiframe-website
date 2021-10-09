@extends('front.layout')
@section('title',__('front.contact'))
@section('content')
<main>
    <section id="contact" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="m-2">{{ __('front.Contact us') }}</h2>
                    <p class="m-0">{!! __('front.We aim to respond to all inquiries within 2-4 business days.<br>You can also reach us by whatsapp') !!}: <a href="" target="_blank" rel="noopener noreferrer"><strong>+2126 03 678 705</strong></a></p>
                </div>
                @isset($success)
                    <div class="col-12">
                        <div class="aler alert-success py-3 px-5 rounded shadow-sm">
                            {{ $success }}
                        </div>
                    </div>
                @endisset
                @isset($error)
                    <div class="col-12">
                        <div class="aler alert-danger py-3 px-5 rounded shadow-sm">
                            {{ $error }}
                        </div>
                    </div>
                @endisset
                <div class="col-12">
                    <form class="border rounded shadow p-3 mt-3" action="{{ route('post-contact') }}" method="post">
                        @csrf
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="fname">{{ __('front.first name') }}:</label>
                                <input value="{{ @old('first_name') }}"  type="text" id="fname" name="first_name" placeholder="{{ __('front.first name') }}..." class="@error('first_name') is-invalid @enderror form-control form-control-lg">
                                @error('first_name')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="lname">{{ __('front.last name') }}:</label>
                                <input value="{{ old('last_name') }}"  type="text" id="lname" name="last_name" placeholder="{{ __('front.last name') }}..." class="@error('last_name') is-invalid @enderror form-control form-control-lg">
                                @error('last_name')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="email">{{ __('front.email') }}:</label>
                                <input value="{{ old('email') }}"  type="text" id="email" name="email" placeholder="{{ __('front.email') }}..." class="@error('email') is-invalid @enderror form-control form-control-lg">
                                @error('email')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="phone">{{ __('front.phone') }}:</label>
                                <input value="{{ old('phone') }}"  type="text" id="phone" name="phone" placeholder="{{ __('front.phone') }}..." class="@error('phone') is-invalid @enderror form-control form-control-lg">
                                @error('phone')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="subject-type">{{ __('front.subject type') }}:</label>
                                <select  id="subject-type" name="subject_type" placeholder="{{ __('front.subject type') }}..." class="form-select @error('subject_type') is-invalid @enderror form-select-lg">
                                    <option @if(old('subject_type') == __('front.Contact')) selected @endif value="{{ __('front.Contact') }}">{{ __('front.Contact') }}</option>
                                    <option @if(old('subject_type') == __('front.Submit a bug')) selected @endif value="{{ __('front.Submit a bug') }}">{{ __('front.Submit a bug') }}</option>
                                    <option @if(old('subject_type') == __('front.Sales question')) selected @endif value="{{ __('front.Sales question') }}">{{ __('front.Sales question') }}</option>
                                    <option @if(old('subject_type') == __('front.Technical Support')) selected @endif value="{{ __('front.Technical Support') }}">{{ __('front.Technical Support') }}</option>
                                </select>
                                @error('subject_type')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="subject">{{ __('front.subject') }}:</label>
                                <input value="{{ old('subject') }}"  type="text" id="subject" name="subject" placeholder="{{ __('front.subject') }}..." class="@error('subject') is-invalid @enderror form-control form-control-lg">
                                @error('subject')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-12">
                                <label for="message">{{ __('front.message') }}:</label>
                                <textarea id="message" name="message" placeholder="{{ __('front.message') }}..." class="@error('message') is-invalid @enderror form-control form-control-lg" rows="8">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-12">
                                <button type="submit" class="btn btn-primary btn-lg w-100">{{ __('front.Send') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
