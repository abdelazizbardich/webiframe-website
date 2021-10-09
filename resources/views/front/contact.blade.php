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
                <div class="col-12">
                    <form class="border rounded shadow p-3 mt-3" action="{{ route('post-contact') }}" method="post">
                        @csrf
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="fname">{{ __('front.first name') }}:</label>
                                <input required type="text" id="fname" placeholder="{{ __('front.first name') }}..." class="form-control form-control-lg">
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="lname">{{ __('front.last name') }}:</label>
                                <input required type="text" id="lname" placeholder="{{ __('front.last name') }}..." class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="email">{{ __('front.email') }}:</label>
                                <input required type="text" id="email" placeholder="{{ __('front.email') }}..." class="form-control form-control-lg">
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="phone">{{ __('front.phone') }}:</label>
                                <input required type="text" id="phone" placeholder="{{ __('front.phone') }}..." class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-md-6">
                                <label for="subject-type">{{ __('front.subject type') }}:</label>
                                <select required id="subject-type" placeholder="{{ __('front.subject type') }}..." class="form-select form-select-lg">
                                    <option value="{{ __('front.Submit a bug') }}">{{ __('front.Submit a bug') }}</option>
                                    <option value="{{ __('front.Sales question') }}">{{ __('front.Sales question') }}</option>
                                    <option value="{{ __('front.Technical Support') }}">{{ __('front.Technical Support') }}</option>
                                    <option value="{{ __('front.Contact') }}">{{ __('front.Contact') }}</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <label for="subject">{{ __('front.subject') }}:</label>
                                <input required type="text" id="subject" placeholder="{{ __('front.subject') }}..." class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="form-group mb-3 col-12">
                                <label for="message">{{ __('front.message') }}:</label>
                                <textarea id="message" placeholder="{{ __('front.message') }}..." class="form-control form-control-lg" rows="8"></textarea>
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
