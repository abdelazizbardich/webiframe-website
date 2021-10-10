@extends('front.layout')
@section('title',__('front.Demo'))
@section('content')
<main>
    <div class="header-spacer"></div>
    <section id="project-view">
      <div class="container">
        <div class="row">
            @if (\Session::has('orderSuccess'))
                <div class="col-12 mb-2 col-md-8">
                    <div class="alert alert-success">
                        {!! \Session::get('orderSuccess') !!}
                    </div>
                </div>
            @endif
            @if (\Session::has('orderError'))
                <div class="col-12 mb-2 col-md-8">
                    <div class="alert alert-danger">
                        {!! \Session::get('orderError') !!}
                    </div>
                </div>
            @endif
          <div class="col-12 mb-2 col-md-8">
            <div class="page-view shadow-lg">
              <div class="page-holder">
                <a target="_blank" href="{{ $demo->url }}">
                  <img
                    class="img-fluid"
                    src="{{ $demo->full_thumbnail }}"
                    alt="{{ $demo->title }}"
                  />
                </a>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-6">
                <a target="_blank" href="{{ $demo->url }}" class="d-block btn-lg shadow-lg btn btn-primary"
                  >{{ __('front.Live demo') }}</a
                >
              </div>
              <div class="col-6">
                <a href="javascript:void(0)" data-screenshots="{{ $demo->screenshots }}" class="d-block btn-lg shadow-lg btn btn-success"
                  >{{ __("front.Screenshots") }}</a
                >
              </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <span class="h2">{{ __('front.Full description') }}:</span>
                    <hr>
                </div>
                <div class="col-12">
                    {!! $demo->full_description !!}
                </div>
            </div>
          </div>
          <div style="position: sticky;top: 100px;" class="col-12 mb-2 col-md-4">
            <div class="site-details">
              <h1 class="h4">{{ $demo->title }}</h1>
              <hr />
              <u>{{ __('front.Brief description of the site') }}:</u><br />
              <p class="small">
                {{ $demo->short_description }}
              </p>
              <hr />
              <div class="px-2 py-1 border rounded bg-light shadow border-warning form-holder">
                <form action="{{ route('post-order') }}" method="post">
                    @csrf
                    <input type="hidden" name="demo_id" value="{{ $demo->id }}">
                    <u>{{ __('front.Domain name') }}:</u> <br />
                    <div>
                    <p class="small">
                        {{ __('front.Enter the domain name that will be associated with your website, then press the Validate button') }}.
                    </p>
                    </div>
                    <div>
                        <div class="d-flex mb-3">
                            <input class="form-check" type="checkbox" name="have_mine" id="i-have-mine">
                            <label class="mx-2" for="i-have-mine">{{ __('front.I have my own domain') }}</label>
                        </div>
                    <div id="check-for-domain-from">
                        <div class="row mb-3 mx-0 p-1 border rounded bg-light">
                        <div class="col form-group p-0">
                            <input
                            type="text"
                            name="domain"
                            class="form-control rounded-0 border-0"
                            placeholder="{{ __('front.Your chosen domain name') }}..."
                            />
                        </div>
                        <div class="col-auto form-group p-0">
                            <select dir="ltr" name="extention" class="form-control rounded-0 border-0">
                            <option value=".com">.com</option>
                            <option value=".fr">.fr</option>
                            <option value=".ca">.ca</option>
                            <option value=".net">.net</option>
                            <option value=".org">.org</option>
                            <option value=".gov">.gov</option>
                            <option value=".info">.info</option>
                            <option value=".me">.me</option>
                            </select>
                        </div>
                        <div class="col-auto form-group p-0">
                            <button id="check-for-domain" type="submit" class="btn btn-warning d-block  rounded-0 border-0">
                            {{ __('front.validate') }}
                            </button>
                        </div>
                        </div>
                            <div style="display: none" class="domain-alert alert alert-success small">
                                <i class="fa fa-check"></i> <span>{{ __('front.Domain is available') }}</span>
                            </div>
                            <div style="display: none" class="domain-alert alert alert-danger small">
                                <i class="fa fa-times"></i> <span>{{ __('front.Domain unavailable') }}</span>
                            </div>
                            <div style="display: none" class="domain-alert alert alert-danger alert-invalide small">
                                <i class="fas fa-ban"></i> <span>{{ __('front.Domain unavailable') }}</span>
                            </div>
                    </div>
                    <input required type="text" name="full_domain" id="your-domain" placeholder="{{ __('front.Your domain name') }}..." style="display: none" class="form-control mb-2 form-control-lg border-dark">
                    </div>
                    <u>{{ __('front.Additional options') }}:</u> <br />
                    <div class="p-2 border bg-light mb-3">
                        <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="seo">{{ __('front.SEO web') }}:</label>
                            <select name="seo" class="form-control" id="seo">
                            <option value="Standard">{{ __('front.Standard') }}: {{ __('front.No additional cost') }}</option>
                            <option value="Premium">{{ __('front.Premium') }}: 2000dh</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="lang">{{ __('front.Website language') }}:</label>
                            <select name="lang" class="form-control" id="lang">
                            <option value="French">{{ __('front.French') }}: {{ __('front.No additional cost') }}</option>
                            <option value="English">{{ __('front.English') }}: {{ __('front.No additional cost') }}</option>
                            <option value="Arab">{{ __('front.Arab') }}: {{ __('front.No additional cost') }}</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="s-lang">{{ __('front.Second language') }}:</label>
                            <select name="s_lang" class="form-control" id="s-lang">
                            <option value="None">{{ __('front.None') }}: {{ __('front.No additional cost') }}</option>
                            <option value="French">{{ __('front.French') }}: 2000dh</option>
                            <option value="English">{{ __('front.English') }}: 2000dh</option>
                            <option value="Arab">{{ __('front.Arab') }}: 2000dh</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="newsletter">{{ __('front.Newsletter subscription') }}:</label>
                            <select
                            name="newsletter"
                            class="form-control"
                            id="newsletter"
                            >
                            <option value="s">
                                {{ __('front.Without Newsletter') }}: {{ __('front.No additional cost') }}
                            </option>
                            <option value="a">{{ __('front.With Newsletter') }}: 2000dh</option>
                            </select>
                        </div>
                        <div class="col-12 form-group mt-3">
                            <button class="btn btn-primary btn-lg form-control">
                            {{ __('front.Create my website') }}
                            </button>
                        </div>
                        </div>
                    {{-- </form> --}}
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="related">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <span class="h3">{{ __('front.Other demos') }}:</span>
                    {{-- <hr> --}}
                </div>
                @foreach ($relatedDemos as $demo)
                    <div class="col-xs-12 col-sm-12 col-md-4 mb-4">
                        <div class="bg-light w-100 h-100 rounded shadow-sm overflow-hidden">
                            <div class="thumbnail">
                                <a href="{{ route('demo',$demo->slug) }}">
                                    <img class="img-responsive w-100 h-50" src="{{ $demo->thumbnail }}" alt="{{ $demo->title }}">
                                </a>
                            </div>
                            <div class="details p-3">
                                <h1 class="h5">{{ $demo->title }}</h1>
                                <p class="small">{{ $demo->short_description }}</p>
                            </div>
                            <a href="{{ route('demo',$demo->slug) }}" class="btn-lg w-100 btn btn-primary rounded-0">{{ __('front.know more') }}</a>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center mt-3">
                    <a href="{{ route('demos') }}" class="btn btn-success px-5 btn-lg">{{ __('front.Show All') }}</a>
                </div>
            </div>
        </div>
      </section>
    <section id="call-to-action" class="text-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-center mb-3">
              <h2 class="m-2">{{ __('front.Create a website to your imagination') }}</h2>
              <p class="m-0">
                {{ __('front.By ordering from us, you benefit from the SATISFIED OR guarantee on the design of your site') }}.<br />{{ __('front.Easy to learn, modern and secure') }}.
              </p>
            </div>
            <div class="text-center col-8 mb-5">
              <form action="{{ route('quotation') }}" method="get">
                <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-warning">
                    {{ __('front.online quotation') }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
  </main>
@endsection
