@extends('front.layout')
@section('title','Project')
@section('content')
    <main>
      <div class="header-spacer"></div>
      <section id="project-view">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-2">
              <div class="jumbotron bg-white text-center border-none"><h1 class="h2">Site e-commerce paiement à la livraison</h1></div>
              <div class="row p-3 text-center">
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quisquam perspiciatis laudantium rem a fugiat tempora totam. Obcaecati, excepturi. Inventore molestiae eligendi officia excepturi dignissimos voluptatem ut, adipisci numquam itaque.
                </p>
              </div>
              <div class="page-view shadow-lg">
                <div class="page-holder">
                  <a href="#">
                    <img
                      class="img-fluid"
                      src="https://webiframe.com/wp-content/uploads/2020/07/screencapture-storluxy-2020-07-25-01_12_31.png"
                      alt="site title"
                    />
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <a href="#" class="d-block btn-lg shadow-lg btn btn-primary"
                    >{{ __('front.See website') }}</a
                  >
                </div>
                <div class="col-6">
                  <a href="#" class="d-block btn-lg shadow-lg btn btn-success"
                    >{{ __('front.Create my website') }}</a
                  >
                </div>
              </div>
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
              <form action="/devis.php" method="post">
                <div class="form-group">
                  <button type="submit" class="btn btn-warning">
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
