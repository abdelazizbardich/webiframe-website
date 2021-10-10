@extends('front.layout')
@section('title',__('front.online quotation'))
@section('content')
<main>
    <section id="contact" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="m-2">{{ __('front.online quotation') }}</h2>
                    <p class="m-0">{!! __("front.With a price there are ideas and the means to achieve them.<br>Let's talk about it") !!}:</p>
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
                    <form class="border rounded shadow p-3 mt-3" action="{{ route('post-quotation') }}" method="post">
                        @csrf
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="flname">{{ __('front.first and last name') }}:</label>
                                <input value="{{ @old('first_last_name') }}"  type="text" id="flname" name="first_last_name" placeholder="{{ __('front.first and last name') }}..." class="@error('first_last_name') is-invalid @enderror form-control form-control-lg">
                                @error('first_last_name')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="who-you-are">{{ __('front.Who are you ?') }}:</label>
                                <select  id="who-you-are" name="who_you_are" placeholder="{{ __('front.Who are you ?') }}..." class="form-select @error('who_you_are') is-invalid @enderror form-select-lg">
                                    <option value="">{{ __('front.Select') }}...</option>
                                    <option @if(old('who_you_are') == __('front.Particular')) selected @endif value="{{ __('front.Particular') }}">{{ __('front.Particular') }}</option>
                                    <option @if(old('who_you_are') == __('front.Association')) selected @endif value="{{ __('front.Association') }}">{{ __('front.Association') }}</option>
                                    <option @if(old('who_you_are') == __('front.Business')) selected @endif value="{{ __('front.Business') }}">{{ __('front.Business') }}</option>
                                    <option @if(old('who_you_are') == __('front.Other')) selected @endif value="{{ __('front.Other') }}">{{ __('front.Other') }}</option>
                                </select>
                                @error('who_you_are')
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
                                <label for="your-need">{{ __('front.Your need') }}:</label>
                                <select  id="your-need" name="your_need" placeholder="{{ __('front.Your need') }}..." class="form-select @error('your_need') is-invalid @enderror form-select-lg">
                                    <option value="">{{ __('front.Select') }}...</option>
                                    <option @if(old('your_need') == __('front.Creation of web applications')) selected @endif value="{{ __('front.Creation of web applications') }}">{{ __('front.Creation of web applications') }}</option>
                                    <option @if(old('your_need') == __('front.Creation of mobile applications')) selected @endif value="{{ __('front.Creation of mobile applications') }}">{{ __('front.Creation of mobile applications') }}</option>
                                    <option @if(old('your_need') == __('front.Website creation')) selected @endif value="{{ __('front.Website creation') }}">{{ __('front.Website creation') }}</option>
                                    <option @if(old('your_need') == __('front.Accommodation')) selected @endif value="{{ __('front.Accommodation') }}">{{ __('front.Accommodation') }}</option>
                                    <option @if(old('your_need') == __('front.Web training')) selected @endif value="{{ __('front.Web training') }}">{{ __('front.Web training') }}</option>
                                    <option @if(old('your_need') == __('front.Other')) selected @endif value="{{ __('front.Other') }}">{{ __('front.Other') }}</option>
                                </select>
                                @error('your_need')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="due-date">{{ __('front.The due date of your project') }}:</label>
                                <input value="{{ @old('due_date') }}"  type="text" id="due-date" name="due_date" placeholder="{{ __('front.The due date of your project') }}..." class="@error('due_date') is-invalid @enderror form-control form-control-lg">
                                @error('due_date')
                                    <div class="small text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="approximate-budget">{{ __('front.Your approximate budget in MAD') }}:</label>
                                <input value="{{ @old('approximate_budget') }}"  type="text" id="approximate-budget" name="approximate_budget" placeholder="{{ __('front.Your approximate budget in MAD') }}..." class="@error('approximate_budget') is-invalid @enderror form-control form-control-lg">
                                @error('approximate_budget')
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
