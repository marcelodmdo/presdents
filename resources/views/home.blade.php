
@extends('layouts.material-app')

@section('title', 'Home')

@section('sidebar')
    @parent

    <!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
  <a name="top"></a>
  
<div id="message"></div>
<!-- <div id="target-container">Target</div> -->
  <!-- <div class="android-be-together-section mdl-typography--text-center">
    <div class="logo-font android-slogan">be together. not the same.</div>
    <div class="logo-font android-sub-slogan">welcome to android... be yourself. do your thing. see what's going on.</div>
    <div class="logo-font android-create-character">
      <a href=""><img src="{{ url('public/images/andy.png') }}"> create your android character</a>
    </div>

    <a href="#screens">
      <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
        <i class="material-icons">expand_more</i>
      </button>
    </a>
  </div> -->
  <div class="home-slider-section mdl-typography--text-center">
    <!-- <div class="logo-font android-slogan">be together. not the same.</div>
    <div class="logo-font android-sub-slogan">welcome to android... be yourself. do your thing. see what's going on.</div>
    <div class="logo-font android-create-character">
      <a href=""><img src="{{ url('public/images/andy.png') }}"> create your android character</a>
    </div>

    <a href="#screens">
      <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
        <i class="material-icons">expand_more</i>
      </button>
    </a> -->
    
    <div class="home-main-slider">
      <div class="slider-style1  mdl-typography--text-left" style="background-image: url({{ url('public/images/presdents/slider/foto02-cropped.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box green-shader">
            <h4>Sorria com confiança e satisfação</h4>
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
      <div class="slider-style3  mdl-typography--text-left" style="background-image: url({{ url('public/images/presdents/slider/foto0-cropped.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box green-shader">
            <h4>Saúde bucal para toda sua família</h4>
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
      <div class="slider-style3 " style="background-image: url({{ url('public/images/presdents/slider/jack1.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box blue-shader">
            <h4>Os melhores tratamentos e procedimentos em Odontologia com alto padrão de atendimento e compromisso com a  sua saúde oral</h4>
            <div class=" mdl-typography--text-center">
              <a class="mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{ route('agendar') }}" target="_blank">
                Agende uma avaliação agora
                <i class="material-icons">chevron_right</i>
              </a>
            </div>
            
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
      <div class="slider-style3" style="background-image: url({{ url('public/images/presdents/slider/restauracao-obturacao.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box blue-shader">
            <h4>Restauração / Obturação</h4>
            <!-- <div class=" mdl-typography--text-center">
              <a class="mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                Agende uma consulta agora
                <i class="material-icons">chevron_right</i>
              </a>
            </div> -->
            
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
      <div class="slider-style1 " style="background-image: url({{ url('public/images/presdents/slider/aplicacao-de-botox-cropped.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box red-shader">
            <h4>Aplicação de BOTOX</h4>
            <!-- <div class=" mdl-typography--text-center">
              <a class="mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                Agende uma consulta agora
                <i class="material-icons">chevron_right</i>
              </a>
            </div> -->
            
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
      <div class="slider-style2" style="background-position: center center; background-image: url({{ url('public/images/presdents/slider/dental-cleaning-prophylaxis-cropped.jpg') }})">
        <div class="content-slider-section" style="border:solid 0px;">
          <div class="content-box blue-shader">
            <h4>Limpeza dental / Profilaxia</h4>
            <!-- <div class=" mdl-typography--text-center">
              <a class="mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                Agende uma consulta agora
                <i class="material-icons">chevron_right</i>
              </a>
            </div> -->
            
          </div>
        </div>
        <!-- <img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /> -->
      </div>
    </div>
  </div>
  
  <!-- <div class="android-screen-section mdl-typography--text-center">
    <a name="screens"></a>
    <div class="mdl-typography--display-1-color-contrast">Powering screens of all sizes</div>
    <div class="android-screens">
      <div class="android-wear android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/wear-silver-on.png') }}">
          <img class="android-screen-image" src="{{ url('public/images/wear-black-on.png') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android Wear</a>
      </div>
      <div class="android-phone android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/nexus6-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Phones</a>
      </div>
      <div class="android-tablet android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/nexus9-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Tablets</a>
      </div>
      <div class="android-tv android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/tv-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android TV</a>
      </div>
      <div class="android-auto android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/presdents/jack1.jpeg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Coming Soon: Android Auto</a>
      </div>
    </div>
  </div> -->
  
  <div class="home-basic-contact-section mdl-typography--text-center">
    <a name="basic-contact"></a>
    <!-- <div class="mdl-typography--display-1-color-contrast">Powering screens of all sizes</div> -->
    
    <!-- <div class="android-screens">
      <div class="android-wear android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/wear-silver-on.png') }}">
          <img class="android-screen-image" src="{{ url('public/images/wear-black-on.png') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android Wear</a>
      </div>
      <div class="android-phone android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/nexus6-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Phones</a>
      </div>
      <div class="android-tablet android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/nexus9-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Tablets</a>
      </div>
      <div class="android-tv android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/tv-on.jpg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase" href="">Android TV</a>
      </div>
      <div class="android-auto android-screen">
        <a class="android-image-link" href="">
          <img class="android-screen-image" src="{{ url('public/images/presdents/jack1.jpeg') }}">
        </a>
        <a class="presdents-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left" href="">Coming Soon: Android Auto</a>
      </div>
    </div> -->

    <div class="mdl-grid mdl-typography--font-light">
      <div style="" class="left-side mdl-typography--text-right mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
        <div class="address-street mdl-typography--font-light">
          Rua Milton Dias, 371 - Jardim Vitória
        </div>
        <div class="address-street-city mdl-typography--font-light">
          Belo Horizonte - Minas Gerais
        </div>
      </div>
      <div style="" class="right-side mdl-typography--text-left mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
        <div class="horario">
          Segunda ~ Sábado: <strong>07:00 às 20:00</strong>
        </div>
        <div class="horario">
          Domingo: <strong>08:00 às 13:00</strong>
        </div>
      </div>
      <!-- <div style="background-color: pink" class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2 (4 phone)</div> -->
    </div>
  </div>

  <div class="home-tratamentos-section">
    <div class="home-tratamento-section-title mdl-typography--text-center mdl-typography--display-1-color-contrast">Tratamentos</div>
    <div class="home-tratamentos-section-card-container mdl-grid">
      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/tratamentos/restauracao-obturacao-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Restauração / Obturação</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo </span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
              Mais informações
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/tratamentos/dental-cleaning-prophylaxis-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Clareamento dental / Profilaxia</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo </span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Mais informações
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/tratamentos/dental-appliance-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Aparelho Ortodôntico</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Texto exemplo Texto exemplo Texto exemplo Texto exemplo </span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Mais informações
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/tratamentos/dental-implant-sm.png') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Implante dentário</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo </span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Mais informações
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>
    </div>
    
  </div>

  <div class="home-tratamentos-slider-section">
    <div class="home-tratamentos-slider">
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/endodontia-tratamento-de-canal-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Endodontia / Canal</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/dental-removal-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Remoção dente / Exodontia</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/estomatologia-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Estomatologia / AFTA</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/faceta-dental-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Faceta dental</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/fios-pdo-sm.png') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Fio de PDO</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/preenchimento-facial-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Preenchimento facial</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/aplicacao-de-botox-sm.jpg') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">Aplicação de BOTOX</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <div class="mdl-card ">
        <div class="mdl-card__media">
          <img style="" src="{{ url('public/images/tratamentos/skinbooster-sm.png') }}">
        </div>
        <div class="mdl-card__title">
          <h4 class="mdl-card__title-text">SKINBOOSTER</h4>
        </div>
        <!-- <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div> -->
        <div class="mdl-card__actions">
          <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
            Saiba mais
            <i class="material-icons">chevron_right</i>
          </a>
        </div>
      </div>
      <!-- <div style=""><img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /></div>
      <div><img src="{{ url('public/images/presdents/slider/foto2.jpeg') }}" /></div>
      <div><img src="{{ url('public/images/presdents/slider/foto3.jpeg') }}" /></div> -->
    </div>
  </div>

  <div class=" mdl-typography--text-center">
    <!-- Accent-colored raised button with ripple -->
    <a href="{{ route('tratamentos') }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
      Ver todos os tratamentos <i class="material-icons">add</i>
    </a>
  </div>
  
  
  <div class="home-melhor-clinica-section ">
    <div class="home-melhor-clinica ">
      <div class="home-melhor-clinica-text">
        <div class="mdl-typography--display-2 mdl-typography--font-thin">A melhor Clínica da Família</div>
        <p class="mdl-typography--headline mdl-typography--font-thin">
          Fundada com o objetivo de tornar acessível os tratamentos de saúde voltada para o atendimento em nossa região, mantendo padrão de qualidade em um ambiente moderno, agradável
        </p>
        <p>
          <a href="{{ route('about') }}" class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
            Saiba mais&nbsp;<i class="material-icons">chevron_right</i>
          </a>
        </p>
      </div>
    </div>
  </div>

  <div class="dra-jack-section">
    <div style="position: relative" class="dra-jack-section-text">
      
      <div class="mdl-grid dra-jack">
        <div class="jack-foto mdl-cell mdl-cell--3-col mdl-cell--3-col-tablet mdl-cell--1-col-phone" style="position: relative">
          <img src="{{ url('public/images/jack-transparente.png') }}" style="position: absolute; bottom: 0; right: 0" />
        </div>
        <div class=" mdl-cell mdl-cell--9-col mdl-cell--5-col-tablet mdl-cell--3-col-phone">
          <div class="jack-info mdl-typography--font-thin mdl-typography--display-1" style="color: #3078B2">
            Dra. Jacqueline Maria Bergsten Oliveira
            <p class="mdl-typography--headline" style="padding-top: 0px; color: #45ACFF">
              Dentista Responsável Técnico
            </p>  
            <p class="" style="padding-top: 0px; color: #45ACFF">
              CRO: MG46761
              <br>
              CRO da Clínica: 00000000
            </p>  
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect agendar-btn1-link" href="{{ route('agendar') }}" target="_blank">
              Agendar avaliação&nbsp;<i class="material-icons">chevron_right</i>
            </a>
          </div>
        </div>
        
      </div>
      
      <!-- <img src="{{ url('public/images/jack-transparente.png') }}" style="width: 200px;transform: translateX(-50%); position: absolute; bottom: 0; left: 0" /> -->
      
    </div>
    <div class="dra-jack-section-image"></div>
  </div>

  <div class="home-meta-section">
    <div class="home-meta-section-content mdl-shadow--3dp">
      <div class="home-meta-section-title mdl-typography--display-2 mdl-typography--font-thin">Nossa meta</div>
      <p class="home-meta-section-text mdl-typography--headline mdl-typography--font-light">Trazer para nossa Família atendimento e serviço em saúde, buscando agregar humanização e satifação através de um trabalho de qualidade e também, com compromisso social.</p>
    </div>
    
  </div>


  <div class="home-valores-contato-section">
    <div class="mdl-grid ">
      <div class="home-valores-contato-section-content mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <!-- Simple Textfield -->
        <div class="home-valores-contato-section-title mdl-typography--display-2 mdl-typography--font-thin">Valores</div>
        <p class="home-valores-contato-section-text mdl-typography--headline mdl-typography--font-light">
          Nossa equipe de profissionais competentes de qualificados trabalham com efetividade buscando, acima de tudo, que os sonhos e os objetivos de nossos pacientes sejam conquistados.
        </p>
        <p class="home-valores-contato-section-text mdl-typography--headline mdl-typography--font-light">
          Realizamos nossos atedimentos com clareza, empatia e lealdade, mantendo e perpetuando, assim, respeito e confiança dos nossos pacientes.
        </p>
        <p class="home-valores-contato-section-text2 mdl-typography--text-center mdl-typography--subhead mdl-typography--font-medium ">
          Utilizamos os melhores materiais odontológicos disponíveis no mercado.
        </p>
      </div>
      <div class="home-valores-contato-form-section mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
        <!-- Simple Textfield -->
        <form action="#" class="send-contato">
          <div class="form-response-box">
            <div class="form-response ">
              <img src="{{ url('public/images/check-icon-sm.png') }}" />
              
              <p class="error-mess mdl-typography--headline mdl-typography--font-light">
                Algo aconteceu e sua mensagem não foi enviada.
                <strong>Tente novamente.</strong>
                
              </p>
              <p class="success-mess mdl-typography--headline mdl-typography--font-light">
                Sua mensagem foi enviada com sucesso!<br>
                <strong>Em breve retornaremos seu contato.</strong>
                
              </p>
              <hr class="green-shader"/>
              <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect dismiss-mensagem-btn">
                <span class="btn-text">Okay</span> <i class="material-icons">check</i>
              </a>
            </div>
          </div>
          <div class="home-valores-contato-section-title mdl-typography--display-2 mdl-typography--font-thin">Fale conosco</div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="nome" required  id="nome">
            <label class="mdl-textfield__label" for="nome">Nome</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" name="email" required id="email">
            <label class="mdl-textfield__label" for="email">E-mail</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="telefone" required id="telefone">
            <label class="mdl-textfield__label" for="telefone">Telefone / WhatsApp</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" type="text" rows="4" required name="mensagem" id="Mensagem"></textarea>
            <label class="mdl-textfield__label" for="Mensagem">Mensagem</label>
          </div>
          <div class=" mdl-typography--text-center">
            <!-- Accent-colored raised button with ripple -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect enviar-mensagem-btn">
              Enviar mensagem <i class="material-icons">send</i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="map-section">
    <div class="android-section-title mdl-typography--text-center mdl-typography--display-1-color-contrast">Localização</div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1326.7214191252965!2d-43.881923648336084!3d-19.85962513330685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69b4ed1f28eb1%3A0x6b9cde325f533404!2sR.%20Milton%20Dias%2C%20371%20-%20Jardim%20Vitoria%2C%20Belo%20Horizonte%20-%20MG%2C%2031970-230!5e0!3m2!1sen!2sbr!4v1633400703901!5m2!1sen!2sbr" width="100%" style="height: 60vh;" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <!-- <div class="android-more-section">
    <div class="android-section-title mdl-typography--display-1-color-contrast">More from Android</div>
    <div class="android-card-container mdl-grid">
      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/more-from-1.png') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Get going on Android</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Four tips to make your switch to Android quick and easy</span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
              Saiba mais
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/more-from-4.png') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Create your own Android character</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
              androidify.com
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/more-from-2.png') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
              Download now
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>

      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="{{ url('public/images/more-from-3.png') }}">
        </div>
        <div class="mdl-card__title">
            <h4 class="mdl-card__title-text">Millions to choose from</h4>
        </div>
        <div class="mdl-card__supporting-text">
          <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a temple – Google Play has all the apps and games that let you make your Android device uniquely yours.</span>
        </div>
        <div class="mdl-card__actions">
            <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
              Find apps
              <i class="material-icons">chevron_right</i>
            </a>
        </div>
      </div>
    </div>
  </div> -->
@endsection


@section('style')
<link rel="stylesheet" href="{{ url('public/css/home.css') }}">
<style type="text/css">


/* #target-container {
	margin: 1000px auto;
	width: 300px;
	height: 300px;
	background-color: #336699;
	line-height: 300px;
	color: white;
	font-weight: 700;
	text-align: center;
	text-transform: uppercase;
} */

#message {
	position: fixed;
	background-color: #f1c40f;
	padding: 10px;
	bottom: 0;
  display: none;
	left: 50%;
	transform: translateX(-50%);
	box-sizing: border-box;
	width: 100%;
  height: 100px;
	text-align: center;
	font-size: 14px;
}

</style>
@endsection

@section('script')
<script src="{{ url('public/js/home.js') }}"></script>
<script type="text/javascript">
/*
var observer = new IntersectionObserver(function(entries) { console.log(entries);
	if(entries[0]['isIntersecting'] === true) {
		if(entries[0]['intersectionRatio'] === 1) {
      // document.querySelector("#message").style.backgroundColor = "red";
			document.querySelector("#message").textContent = 'Target is fully visible in screen';
     } else if(entries[0]['intersectionRatio'] > 0.5) {
      // document.querySelector("#message").style.backgroundColor = "blue";
			document.querySelector("#message").textContent = 'More than 50% of target is visible in screen';
     } else {
      // document.querySelector("#message").style.backgroundColor = "yellow";
			document.querySelector("#message").textContent = 'Less than 50% of target is visible in screen';
     }
	} else {
    // document.querySelector("#message").style.backgroundColor = "green";
		document.querySelector("#message").textContent = 'Target is not visible in screen';
	}
}, { threshold: [0, 0.5, 1] });

observer.observe(document.querySelector(".home-slider-section"));
*/
</script>
@endsection
