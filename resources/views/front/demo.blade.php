@extends('front.layout')
@section('title','Demo')
@section('content')
<main>
    <div class="header-spacer"></div>
    <section id="project-view">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-2 col-md-8">
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
                  >{{ __('front.Mobile version') }}</a
                >
              </div>
              <div class="col-12 mt-3">
                <a href="#" class="d-block btn-lg shadow-lg btn btn-info"
                  >{{ __('front.Live demo') }}</a
                >
              </div>
            </div>
          </div>
          <div class="col-12 mb-2 col-md-4">
            <div class="site-details">
              <h1 class="h4">Site e-commerce paiement à la livraison</h1>
              <hr />
              <u>{{ __('front.Brief description of the site') }}:</u><br />
              <p class="small">
                Ce modèle est idéale pour tout site web d'hôtel ou de chambre
                d'hôte. Attirez l'attention des voyageurs sur vos suites et
                chambres en insérant vos images sur le slideshow, exposez vos
                tarifs, vos services et permettez aux internautes de demander
                des réservations en ligne grâce au formulaire de contact.
              </p>
              <hr />
              <div class="px-2 py-1 border rounded bg-light shadow border-warning form-holder">
                <form action="./order.php" method="post">
                    <u>{{ __('front.Domain name') }}:</u> <br />
                    <div>
                    <p class="small">
                        {{ __('front.Enter the domain name that will be associated with your website, then press the Validate button') }}.
                    </p>
                    </div>
                    <div>
                        <div class="d-flex mb-3">
                            <input class="form-check" type="checkbox" name="full-domain" id="i-have-mine">
                            <label class="mx-2" for="i-have-mine">{{ __('front.I have my own domain') }}</label>
                        </div>
                    <div id="check-for-domain-from">
                        <div class="row mb-3 mx-0 p-1 border rounded bg-light">
                        <div class="col form-group p-0">
                            <input
                            type="text"
                            name="domain"
                            required
                            class="form-control rounded-0 border-0"
                            placeholder="{{ __('front.Your chosen domain name') }}..."
                            />
                        </div>
                        <div class="col-auto form-group p-0">
                            <select required name="extention" class="form-control rounded-0 border-0">
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
                    <input type="text" id="your-domain" placeholder="{{ __('front.Your domain name') }}..." style="display: none" class="form-control mb-2 form-control-lg border-dark">
                    </div>
                    <u>{{ __('front.Additional options') }}:</u> <br />
                    <div class="p-2 border shadow bg-light mb-3">
                        <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="seo">{{ __('front.SEO web') }}:</label>
                            <select name="seo" class="form-control" id="seo">
                            <option value="s">{{ __('front.Standard') }}: {{ __('front.No additional cost') }}</option>
                            <option value="p">{{ __('front.Premium') }}: 2000dh</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="lang">{{ __('front.Website language') }}:</label>
                            <select name="lang" class="form-control" id="lang">
                            <option value="fr">{{ __('front.French') }}: {{ __('front.No additional cost') }}</option>
                            <option value="en">{{ __('front.English') }}: {{ __('front.No additional cost') }}</option>
                            <option value="ar">{{ __('front.Arab') }}: {{ __('front.No additional cost') }}</option>
                            </select>
                        </div>
                        <div class="col-12 form-group">
                            <label for="s-lang">{{ __('front.Second language') }}:</label>
                            <select name="s-lang" class="form-control" id="s-lang">
                            <option value="s">{{ __('front.None') }}: {{ __('front.No additional cost') }}</option>
                            <option value="fr">{{ __('front.French') }}: 2000dh</option>
                            <option value="an">{{ __('front.English') }}: 2000dh</option>
                            <option value="ar">{{ __('front.Arab') }}: 2000dh</option>
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
    <section id="call-to-action" class="text-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center mb-3">
            <h2 class="m-2">Créez un site web à votre image</h2>
            <p class="m-0">
              En commandant chez nous, vous bénéficiez de la garantie
              SATISFAIT OU sur le design de votre site.<br />Facile à prendre
              en main, moderne et sécurisé.
            </p>
          </div>
          <div class="text-center col-8 mb-5">
            <form action="/devis.php" method="post">
              <div class="form-group">
                <button type="submit" class="btn btn-warning">
                  Devis online
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
