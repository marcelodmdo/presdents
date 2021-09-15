<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <title>@yield('title') :: Clínica Presidents</title>
  <link href="{{ url('public/fa/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
  <!-- Page styles -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="{{ url('public/mdl/material.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  
  <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
  </style>
  @yield('style')
</head>








<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!-- @section('sidebar') -->
    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
      <div class="mdl-layout__header-row">
        <span class="android-title mdl-layout-title">
          <img class="android-logo-image" src="{{ url('public/images/presdents/logo-v2.png') }}">
        </span>
        <!-- Add spacer, to align navigation to the right in desktop -->
        <div class="android-header-spacer mdl-layout-spacer"></div>
        <!-- <div
          class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search-field">
          </div>
        </div> -->
        <!-- Navigation -->
        <div class="android-navigation-container">
          <nav class="android-navigation mdl-navigation">
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('home') }}">Home</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('tratamentos') }}">Tratamentos</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('about') }}">Quem somos</a>
            <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('institutional') }}">Institucional</a> -->
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('materiais') }}">Materiais</a>
            <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('agendamentos') }}">Agendamentos</a> -->
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="{{ route('contato') }}">Contato</a>
            <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Auto</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">One</a>
            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Play</a> -->
          </nav>
        </div>
        <span class="android-mobile-title mdl-layout-title">
          <img class="android-logo-image" src="{{ url('public/images/presdents/logo-v2.png') }}">
        </span>
        <!-- <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
          id="more-button">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
          <li class="mdl-menu__item">5.0 Lollipop</li>
          <li class="mdl-menu__item">4.4 KitKat</li>
          <li disabled class="mdl-menu__item">4.3 Jelly Bean</li>
          <li class="mdl-menu__item">Android History</li>
        </ul> -->
      </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
      <span class="mdl-layout-title">
        <img class="android-logo-image" src="{{ url('public/images/presdents/logo-v2-white.png') }}">
      </span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="{{ route('home') }}">Home</a>
        <a class="mdl-navigation__link" href="{{ route('tratamentos') }}">Tratamentos</a>
        <a class="mdl-navigation__link" href="{{ route('about') }}">Quem somos</a>
        <!-- <a class="mdl-navigation__link" href="{{ route('institutional') }}">Institucional</a> -->
        <a class="mdl-navigation__link" href="{{ route('materiais') }}">Materiais</a>
        <!-- <a class="mdl-navigation__link" href="{{ route('agendamentos') }}">Agendamentos</a> -->
        <a class="mdl-navigation__link" href="{{ route('contato') }}">Contato</a>
        <!-- <a class="mdl-navigation__link" href="">Auto</a>
        <a class="mdl-navigation__link" href="">One</a>
        <a class="mdl-navigation__link" href="">Play</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Versions</span>
        <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
        <a class="mdl-navigation__link" href="">KitKat 4.4</a>
        <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
        <a class="mdl-navigation__link" href="">Android history</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">Resources</span>
        <a class="mdl-navigation__link" href="">Official blog</a>
        <a class="mdl-navigation__link" href="">Android on Google+</a>
        <a class="mdl-navigation__link" href="">Android on Twitter</a>
        <div class="android-drawer-separator"></div>
        <span class="mdl-navigation__link" href="">For developers</span>
        <a class="mdl-navigation__link" href="">App developer resources</a>
        <a class="mdl-navigation__link" href="">Android Open Source Project</a>
        <a class="mdl-navigation__link" href="">Android SDK</a> -->
      </nav>
    </div>

    <div class="android-content mdl-layout__content">

      @yield('content')
      <footer class="presdents-footer--container mdl-grid">
        <div class="presdents-footer--top-section mdl-grid">
          <div class="presdents-footer--left-section mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
            <!-- <button class="presdents-footer--social-btn"></button>
            &nbsp;
            <button class="presdents-footer--social-btn"></button>
            &nbsp;
            <button class="presdents-footer--social-btn"></button> -->
            <p class="mdl-typography--headline mdl-typography--font-light">A Presdents é o lugar ideal para você!</p>
          </div>
          <div class="presdents-footer--back-to-top">
            <a class="mdl-typography--font-light" href="#top">
              Voltar ao topo
              <i class="material-icons">expand_less</i>
            </a>
          </div>
        </div>

        <div class="presdents-footer--middle-section">
          <div class="mdl-grid" style="width: 90%; margin: 0 auto;">
            <ul class="tel-addr mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              <li>
                31 9 9616-3022
              </li>
              <li>
                Rua Milton Dias, 371 - Jardim Vitória <br />
                Belo Horizonte - Minas Gerais
              </li>
              <li>
                Segunda ~ Sábado: 07:00 às 20:00<br>
                Domingo: 08:00 às 13:00
              </li>
            </ul>
            <div class=" mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              <div style="display: flex; flex-direction: row-reverse">
                <ul class="bottom-menu">
                  <li>
                    <a href="{{ url('home')}}">Home</a>
                  </li>
                  <li>
                  <a href="{{ url('tratamentos')}}">Tratamentos</a>
                    <ul>
                      <li>Odontológicos
                        <!-- <ul>
                          <li>Restauração / Obturação</li>
                          <li>Clareamento dental / Profilaxia</li>
                        </ul> -->
                      </li>
                      <li>Estéticos Específico Facial
                        <!-- <ul>
                          <li>Fios de PDO</li>
                          <li>Preenchimento facial</li>
                        </ul> -->
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{ route('about')}}">A Presdents</a>
                  </li>
                  <li>
                    <a href="{{ url('materiais')}}">Materiais</a>
                  </li>
                  <!-- <li>
                    <a href="{{ url('agendamentos')}}">Agendamentos</a>
                  </li> -->
                  <li>
                  <a href="{{ url('contato')}}">Contato</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
          
          <!-- <p class="mdl-typography--font-light">A Presdents é o lugar ideal para você!</p> -->
        </div>
        <div style="width: 100%; text-align: center;">
          <hr class="blue-shader" style="width: 60vw">
          <img class="android-logo-image" src="{{ url('public/images/presdents/logo-v2-white.png') }}">
          
          <p style="margin-top: 20px; ">
            Dentista Responsável Técnico:
            <strong>Dra. Jacqueline Maria Bergsten Oliveira</strong>
          </p>  
          <p class="" style="margin-top: 10px;">
            CRO: MG46761 | 
            <br>
            CRO da Clínica: 00000000
          </p>  
        </div>
        <!-- <div class="mdl-mega-footer--bottom-section">
          <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
            Versions
            <i class="material-icons">arrow_drop_up</i>
          </a>
          <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
            <li class="mdl-menu__item">5.0 Lollipop</li>
            <li class="mdl-menu__item">4.4 KitKat</li>
            <li class="mdl-menu__item">4.3 Jelly Bean</li>
            <li class="mdl-menu__item">Android History</li>
          </ul>
          <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
            For Developers
            <i class="material-icons">arrow_drop_up</i>
          </a>
          <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
            <li class="mdl-menu__item">App developer resources</li>
            <li class="mdl-menu__item">Android Open Source Project</li>
            <li class="mdl-menu__item">Android SDK</li>
            <li class="mdl-menu__item">Android for Work</li>
          </ul>
          <a class="android-link mdl-typography--font-light" href="">Blog</a>
          <a class="android-link mdl-typography--font-light" href="">Privacy Policy</a>
        </div> -->

      </footer>
    </div>
  </div>
  
  <script src="{{ url('public/mdl/material.min.js') }}"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="{{ url('public/js/jquery.mask.min.js') }}"></script>
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript">
      // var windowObjectReference;
      // var windowFeatures = "resizable=yes,scrollbars=yes,status=yes,width=800,height=100";

      // function openAgendar() {
      //   windowObjectReference = window.open("https://agendar.dentaloffice.com.br/4bwx4ax", "_blank", windowFeatures);
      // }

    $(document).ready(function() {
      var sendContato = function() {
        var dados = $(".send-contato").serializeArray();
        console.warn(dados);
        $.ajax({
          type: "POST",
          url: base_url + '/enviar-contato',
          data: dados,
          dataType: 'json',
          error: function(r) {
            console.log(r)
          },          
          success: function(r) {
            console.log(r);
            console.log('success');
            $('.send-contato .form-response p.error-mess').slideUp(200);
            $('.send-contato .form-response p.success-mess').slideDown(200);
            $('.form-response-box').addClass('active');
            $('.send-contato')[0].reset();
          },
        }).done( function() {
          console.log('done');
          $('.enviar-mensagem-btn').attr('disabled', false);
          $('.enviar-mensagem-btn .btn-text').text("Enviar mensagem");
        }).fail( function() {
          console.log('error');

          $('.form-response-box').addClass('error');
          $('.send-contato .form-response p.error-mess').slideDown(200);
          $('.send-contato .form-response p.success-mess').slideUp(200);
          $('.form-response img').attr('src', base_url + '/public/images/error-icon-sm.png');
          $('.enviar-mensagem-btn').attr('disabled', false);
          $('.enviar-mensagem-btn .btn-text').text("Enviar mensagem");
        });
      }

      $('.dismiss-mensagem-btn').on('click', function() {
        $('.form-response-box').removeClass('active');
        $('.form-response-box').removeClass('error');
      });


      $(".send-contato").on('submit', function(e) {
        console.log('submit');
        e.preventDefault();
        $('.enviar-mensagem-btn .btn-text').html('Aguarde...');
        $('.enviar-mensagem-btn').attr('disabled', true);
        sendContato();
        
      });


      var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
      };

      $('#telefone').mask(SPMaskBehavior, spOptions);
    });
    var base_url = "{{ url('/') }}";
  </script>
  <!-- @if(! Route::is('home') ) -->
  
<!-- @endif -->

  
@yield('script')
</body>

</html>