
@extends('layouts.material-app')

@section('title', 'Agende uma avaliação')

@section('sidebar')
    @parent

    <!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
<a name="top"></a>
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
        <div class="custom-header-section mdl-typography--text-center">
          
          <div class="custom-header-style1" style="background-position: left center; background-image: url({{ url('public/images/presdents/tratamentos2-cropped.jpg') }})">
            <div class="content-custom-header-section" style="border:solid 0px;">
              <div class="content-box red-shader">
                <h4>Agendamentos</h4>
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
        
        
        <div class="agendamentos-section ">
          <div class="agendamentos ">
            <div class="agendamentos-text">
              <!-- <div class="mdl-typography--display-2 mdl-typography--font-thin">A melhor Clínica da Família</div> -->
              <p class="mdl-typography--headline mdl-typography--font-light">
                A Presdents conta com uma equipe de atendimento especializado, organizado e transparente, o que nos permite focar na excelência e satisfação aos nossos pacientes.
              </p>
              <!-- <p class="mdl-typography--headline mdl-typography--font-thin">
                
              </p> -->
              <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect agendar-btn1-link" href="">
                  Agendar avaliação&nbsp;<i class="material-icons">chevron_right</i>
              </a>
              
            </div>
          </div>
        </div>
        <div class="agendamentos-agende-contato-section">
          <div class="mdl-grid ">
            <div class="agendamentos-agende-contato-section-content mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              <!-- Simple Textfield -->
              <img class="whatsapp-icon" src="{{ url('public/images/whatsapp-icon.png') }}" />
              <!-- <div class="agendamentos-agende-contato-section-title mdl-typography--display-2 mdl-typography--font-light">Agende sua avaliação</div> -->
              <p class="mdl-typography--headline mdl-typography--text-center mdl-typography--font-light">WhatsApp</p>
              <!-- <p class="agende-contato-section-text mdl-typography--headline mdl-typography--font-light">
                Realizamos nossos atedimentos com clareza, empatia e lealdade, mantendo e perpetuando, assim, respeito e confiança dos nossos pacientes.
              </p> -->
              <hr class="red-shader" />
              <!-- <div class="mdl-grid">
                <div class="mdl-cell  mdl-typography--text-center mdl-cell--2-col mdl-cell--3-col-tablet mdl-cell--4-col-phone">
                  <img class="location-icon" src="{{ url('public/images/presdents/location-icon.png') }}" />
                </div>
                <div class="mdl-cell mdl-cell--10-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                  <p class="mdl-typography--headline mdl-typography--font-light">Rua Milton Dias, 371 - Jardim Vitória<br />
                  Belo Horizonte - Minas Gerais</p>
                </div>
                
                
              </div> -->
              
              <!-- <p class="agende-contato-section-text2 mdl-typography--text-center mdl-typography--subhead mdl-typography--font-medium ">
                Utilizamos os melhores materiais odontológicos disponíveis no mercado.
              </p> -->
            </div>
            <div class="agendamentos-agende-contato-form-section mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
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
                <div class="agendamentos-agende-contato-section-title mdl-typography--display-2 mdl-typography--font-light">Fale conosco</div>
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
        
        <!-- <div class="android-wear-section">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">The best of Google built in</div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
                Android works perfectly with your favourite apps like Google Maps,
                Calendar and YouTube.
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="">
                  See what's new in the Play Store&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div> -->
        <!-- <div class="android-customized-section">
          <div class="android-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customised by you, for you</div>
            <p class="mdl-typography--font-light">
              Put the stuff that you care about right on your home screen: the latest news, the weather or a stream of your recent photos.
              <br>
              <a href="" class="presdents-link mdl-typography--font-light">Customise your phone</a>
            </p>
          </div>
          <div class="android-customized-section-image"></div>
        </div> -->
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
<link rel="stylesheet" href="{{ url('public/css/agendamentos.css') }}">
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
<!-- <script src="{{ url('public/js/agendamentos.js') }}"></script> -->
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
