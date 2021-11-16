
@extends('layouts.material-app')

@section('title', 'Quem somos')

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
                <h4>Quem somos</h4>
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

        <div class="melhor-clinica-section ">
          <div class="melhor-clinica ">
            <div class="melhor-clinica-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">A melhor Clínica da Família</div>
              <p class="mdl-typography--headline">
                Fundada com o objetivo de tornar acessível os tratamentos de saúde voltada para o atendimento em nossa região, mantendo padrão de qualidade em um ambiente moderno, agradável
              </p>
              
            </div>
          </div>
        </div>
        
        <div class="meta-section">
          <div class="meta-section-content">
            <div class="meta-section-title mdl-typography--display-2 mdl-typography--font-thin">Nossa meta</div>
            <p class="meta-section-text mdl-typography--headline mdl-typography--font-light">Trazer para nossa Família atendimento e serviço em saúde, buscando agregar humanização e satifação através de um trabalho de qualidade e também, com compromisso social.</p>
          </div>
          
        </div>

        <div class="valores-section">
          <div class="mdl-grid ">
            <div class="valores-section-content mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              <!-- Simple Textfield -->
              <div class="valores-section-title mdl-typography--display-2 mdl-typography--font-thin">Valores</div>
              <p class="valores-section-text mdl-typography--headline mdl-typography--font-light">
                Nossa equipe de profissionais competentes de qualificados trabalham com efetividade buscando, acima de tudo, que os sonhos e os objetivos de nossos pacientes sejam conquistados.
              </p>
              <p class="valores-section-text mdl-typography--headline mdl-typography--font-light">
                Realizamos nossos atedimentos com clareza, empatia e lealdade, mantendo e perpetuando, assim, respeito e confiança dos nossos pacientes.
              </p>
              <p class="valores-section-text2 mdl-typography--subhead mdl-typography--font-medium ">
                Utilizamos os melhores materiais odontológicos disponíveis no mercado.
              </p>
            </div>
            
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
<link rel="stylesheet" href="{{ url('public/css/about.css') }}">
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
