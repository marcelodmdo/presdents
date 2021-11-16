
@extends('layouts.material-app')

@section('title', 'Materiais')

@section('sidebar')
    @parent

    <!-- <p>This is appended to the master sidebar.</p> -->
@endsection

@section('content')
<a class="top-ref" name="top"></a>
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
              <div class="content-box green-shader">
                <h4>Materiais</h4>
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


        <div class="materiais-section">
          <div class="mdl-grid">
            <!-- Wide card with share menu button -->
            @foreach($materiais as $material)
            @if(isset($material['image']))
              @php
                $image = url('public/images/materiais/'.$material['image'])
              @endphp
            @else
              @php
                $image = url('public/images/presdents/slider/foto0-cropped.jpg')
              @endphp
            @endif
            <div class="demo-card-wide mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title" style="background: url({{ $image }}) center center; background-size: cover; ">
                <h2 class="mdl-card__title-text" style=""><a href="{{ url('materiais/' . $material['slug']) }}">{{$material['titulo']}}</a></h2>
              </div>
              <div class="mdl-card__supporting-text">
                @if(isset($material['exerpt']))
                {!!$material['exerpt']!!}
                @endif
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('materiais/' . $material['slug']) }}">
                  Leia mais
                </a>
              </div>
              <div class="mdl-card__menu">
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                  <i class="material-icons">share</i>
                </button>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>

        <div class="contato-section">
          <div class="mdl-grid ">
            
            <div class="contato-form-section mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
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
                <div class="contato-section-title mdl-typography--display-2 mdl-typography--font-light">Fale conosco</div>
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
        
        
@endsection




@section('style')
<link rel="stylesheet" href="{{ url('public/css/materiais.css') }}">
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
<!-- <script src="{{ url('public/js/tratamentos.js') }}"></script> -->
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
