
@extends('layouts.material-app')

@section('title', 'Tratamentos')

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
                <h4>Tratamentos</h4>
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
        
        
        <div class="tratamentos-header-section">
          

          <div class="mdl-grid">
            <div style="" class="left-side mdl-typography--text-left mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--8-col-phone">
              <div class="tratamentos-subtitle">
                <h3 class=" mdl-typography--font-thin">Odontológicos</h3>
              </div>
              <div class="tratamentos-section">
                <!-- <div class="tratamento-section-title mdl-typography--text-center mdl-typography--display-1-color-contrast">Tratamentos</div> -->
                <div class="android-card-container mdl-grid">
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/restauracao-obturacao-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Restauração / Obturação</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <!-- <span class="mdl-typography--font-light mdl-typography--subhead"> -->
                        <p class="mdl-typography--font-light mdl-typography--subhead">{!! \Str::of("É um procedimento realizado pelo dentista que tem como objetivo tratar e recuperar danos( lesão de cárie,fratura, manchas, erosão,desgaste ) causado ao dente.")->words(20, '[...]') !!}</p>
                        <p class="mdl-typography--font-light mdl-typography--subhead">As restaurações são feitas na maioria dos casos com resinas compostas que é um material com a mesma cor do dente.</p>
                      <!-- </span> -->
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/dental-cleaning-prophylaxis-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Clareamento dental / Profilaxia</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p  class="mdl-typography--font-light mdl-typography--subhead">
                        É um tratamento realizado sobre a superfície do dente no esmalte que tem a função de apresentar um aspecto de dente mas branco.
                      </p>
                      <p  class="mdl-typography--font-light mdl-typography--subhead">
                        O tratamento poderá ser realizado basicamente de duas maneiras: 
                          <ol>
                            <li>no consultório o profissional dentista utilizará um gel clareador ativado por uma fonte de luz (LASER) em torno de 2 horas de procedimento.</li>
                            <li>o clareamento feito em casa, é um tratamento que se encaixa na rotina do paciente.</li>
                          </ol>
                      </p>
                      
                      <p  class="mdl-typography--font-light mdl-typography--subhead">
                        Utilizando uma moldeira confeccionada que se adapta arcada dentária juntamente com o gel clareador. O período de tratamento varia de acordo com a necessidade de cada paciente.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/dental-appliance-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Aparelho Ortodôntico</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        A função do tratamento ortodôntico é corrigir os dentes tortos e desalinhados devolvendo assim a cavidade oral uma oclusão dentária ajustada e saudável que é quando os dentes superiores e inferiores se tocam o mais correto distribuindo a força mastigatória ao fechar a boca.
                      </p>
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        É importante entender que o tempo de uso do aparelho depende da gravidade do problema de cada paciente, e que as manutenções periódicas com o dentista é o que garante a eficácia do tratamento.
                      </p>
                      
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/dental-implant-sm.png') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Implante dentário</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        Os implantes dentários são dispositivos tipo um parafuso feitos em titânio que serve para substituir a estrutura raiz do dente o que dá suporte a uma reabilitação de uma prótese devolvendo assim a função mastigatória e uma aparência estética melhor. 
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/endodontia-tratamento-de-canal-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Endodontia / Canal</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                      O tratamento de canal ou endodontia é o procedimento aonde se faz a remoção da polpa (do nervo do dente). Depois que a polpa é contaminada por bactéria ficando danificada ou necrosada e feito a sua remoção, no espaço restante aonde ficava o nervo faz adaptação e um preenchimento o que sela o canal da raiz do dente.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/dental-removal-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Remoção dente / Exodontia</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                      A exodontia é o processo cirúrgico de extração do dente ou seja é a remoção, o tirar ou o arrancar do dente em relação ao alvéolo.
                      </p>
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
            </div>
            <div style="background-color: #fff2f1" class="right-side mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--8-col-phone">
              <div class="tratamentos-subtitle">
                <h3 class=" mdl-typography--font-thin">Estéticos Específico Facial</h3>
              </div>
              <div class="tratamentos-section">
                <!-- <div class="tratamento-section-title mdl-typography--text-center mdl-typography--display-1-color-contrast">Tratamentos</div> -->
                <div class="android-card-container mdl-grid">
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/fios-pdo.png') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Fios de PDO</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        Os fios de PDO são compostos de polidioxanona, possuem espículas (garras) que promovem a tração e o efeito lifting no rosto, 
                        além disso estimulam também o organismo a produzir o colágeno na região aonde o fio é aplicado proporcionando assim um aspecto 
                        jovem na face.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/preenchimento-facial-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Preenchimento facial</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        O preenchimento facial é realizado através da aplicação com ácido hialurônico um componente modelador e biocompatível que penetram na camada profunda da pele o que hidrata, corrigir, ajuda a suavizar as rugas de expressões do rosto é utilizado também para dar volume a determinadas regiões.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/skinbooster-sm.png') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">SKINBOOSTER</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                      O SKINBOOSTER é um Procedimento estético com complexo vitamínico e ácido hialurônico injetável que hidrata e trata profundamente a pele, proporcionando um resultado muito superior aos cremes noturnos.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                        Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/aplicacao-de-botox-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Aplicação de BOTOX</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <p class="mdl-typography--font-light mdl-typography--subhead">
                        Tratamento que tem a função de tratar as rugas dinâmicas do rosto que surge todas as vezes que fazemos uma expressão facial, nesse caso o mecanismo do tratamento é baseado na paralisação do músculo que quando se move surge na face as linhas de expressão tipo os pés de galinha em volta do olho e as linhas da testa.
                      </p>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/tratamentos/sculptra-sm.jpg') }}">
                    </div>
                    <div class="mdl-card__title">
                      <h4 class="mdl-card__title-text">Sculptra / ácido L lático</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <span class="mdl-typography--font-light mdl-typography--subhead">O ÁCIDO POLI L LÁTICO TAMBÉM CONHECIDO COMO SCULPTRA, é um bioestimulador de colageno, é feito a sua aplicação em camadas mais profundas na face que tem a função de rejuvenescimento tratando as rugas, flacidez e linhas de expressão.</span>
                    </div>
                    <div class="mdl-card__actions">
                      <a class="presdents-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Mais informações
                        <i class="material-icons">chevron_right</i>
                      </a>
                    </div>
                  </div>

                  <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--8-col-phone mdl-card mdl-shadow--3dp">
                    <div class="mdl-card__media">
                      <img src="{{ url('public/images/calendar.jpg') }}">
                    </div>
                    <div class="agende mdl-card__title mdl-typography--text-center">
                      <h4 class="mdl-card__title-text mdl-typography--text-uppercase  mdl-typography--text-center">AGENDE UMA AVALIAÇÃO</h4>
                    </div>
                    <div class="mdl-card__supporting-text">
                      <span class="mdl-typography--font-light mdl-typography--subhead mdl-typography--text-center">Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo </span>
                    </div>
                    <div class="mdl-card__actions">
                    <a class="mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{ route('agendar') }}" target="_blank">
                      Agende agora
                      <i class="material-icons">chevron_right</i>
                    </a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- <div style="background-color: pink" class="mdl-cell mdl-cell--2-col mdl-cell--4-col-phone">2 (4 phone)</div> -->
          </div>
        </div>
        
        <div class="tratamentos-slider-section">
          <div class="tratamentos-slider">
            
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
            
            <!-- <div style=""><img src="{{ url('public/images/presdents/slider/foto1.jpeg') }}" /></div>
            <div><img src="{{ url('public/images/presdents/slider/foto2.jpeg') }}" /></div>
            <div><img src="{{ url('public/images/presdents/slider/foto3.jpeg') }}" /></div> -->
          </div>
        </div>

        <div class=" mdl-typography--text-center">
          <!-- Accent-colored raised button with ripple -->
          <a href="{{ route('agendar') }}" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect agendar-threatments-btn">
            Agende sua avaliação agora <i class="material-icons">event</i>
          </a>
        </div>
        <div class="tratamentos-list-section mdl-typography--text-left">
          <div class="mdl-grid">
            <div class="tratamentos-list-left mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <ul class="tratamentos-list mdl-list">
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Aplicação de Flúor</span>
                    <span class="mdl-list__item-text-body">
                    O flúor é um elemento químico muito importante para evitar a perda de minerais pelos dentes e impedir o desgaste causado por bactérias que formam a cárie e por substâncias ácidas presentes na saliva e na alimentação. 
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Placa Bruxismo</span>
                    <span class="mdl-list__item-text-body">
                    Também conhecida como placa de mordida ou miorrelaxante, a placa de bruxismo é um dispositivo móvel que se ajusta perfeitamente sobre a superfície do seu sorriso tanto na região superior ou inferior.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Tratamento em criaças / Odontopediatria</span>
                    <span class="mdl-list__item-text-body">
                    Odontopediatria é a especialidade que tem como objetivo o diagnóstico, a prevenção, o tratamento e o controle dos problemas de saúde bucal do bebê, da criança e do adolescente
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Enxerto Ósseo</span>
                    <span class="mdl-list__item-text-body">
                    O enxerto ósseo dentário é um procedimento cirúrgico que consiste em retirar um fragmento de osso de um local adequado que pode ser a mandíbula do paciente, por exemplo, e implantá-lo no local que se quer fazer o reparo.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Dentadura Fixa</span>
                    <span class="mdl-list__item-text-body">
                    A dentadura fixa ou prótese tipo protocolo é uma das melhores soluções estéticas e funcionais para pacientes que não têm os dentes. Apesar de ser chamada de dentadura, esse item é muito diferente da prótese móvel mais popular.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Prótese Flexit / Silicone</span>
                    <span class="mdl-list__item-text-body">
                    A prótese flexível é uma alternativa às próteses parciais removíveis ou dentaduras. São fabricadas com o material Silicone, uma resina flexível que é utilizada como base para próteses e ajuda a corrigir falhas no acrílico convencional.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Prótese Roach / Metal</span>
                    <span class="mdl-list__item-text-body">
                    É uma prótese que cobre uma porção menor da boca, devido à robustez da sua parte metálica. A composição metálica utilizada é uma liga não preciosa de crômio-cobalto ou crômio-níquel.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                
                
              </ul>
            </div>
            <div class="tratamentos-list-right mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <ul class="tratamentos-list mdl-list">
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Prótese Acrílica</span>
                    <span class="mdl-list__item-text-body">
                    O material é resistente, mas requer cuidados com a limpeza e desgaste. É recomendada para pessoas que têm poucos ou nenhum dente natural.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Dentaduras / Prótese Total</span>
                    <span class="mdl-list__item-text-body">
                    A prótese total convencional é colocada em sua boca depois que os dentes remanescentes foram extraídos e os tecidos cicatrizarem. A cicatrização pode demorar vários meses durante os quais você poderá ficar sem dentes.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Dentaduras Caracterizadas</span>
                    <span class="mdl-list__item-text-body">
                    São próteses personalizadas exclusivamente para o paciente, ou seja nós conseguimos reproduzir com uma excelente anatomia estética tanto o tecido gengival, quanto a forma e a cromaticidade dos dentes.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Lente de Contato Dental</span>
                    <span class="mdl-list__item-text-body">
                    As lentes de contato dental são facetas ou lâminas ultrafinas, com 1 mm de espessura ou menos, confeccionadas em cerâmica ou resina composta. Elas são aderidas aos dentes com a intenção de alterar forma, contorno, proporção e cor.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Piercing Dental</span>
                    <span class="mdl-list__item-text-body">
                    O twinkle ou mais conhecido como piercing dental é um pequeno brilhante, pedrinha, colada no seu dente, na maioria da vezes ele é colado no canino ou incisivo lateral.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Caracterização Dental em Ouro e Metal</span>
                    <span class="mdl-list__item-text-body">
                    Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo Texto exemplo 
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
                
                <li class="mdl-list__item mdl-list__item--three-line">
                  <span class="mdl-list__item-primary-content">
                    <i class="material-icons mdl-list__item-avatar">circle</i>
                    <span>Tratamento em Idosos / Odontogeriatria</span>
                    <span class="mdl-list__item-text-body">
                    Odontogeriatria é a especialidade que se concentra no estudo dos fenômenos decorrentes do envelhecimento que também têm repercussão na boca e suas estruturas associadas, bem como a promoção da saúde, o diagnóstico, a prevenção e o tratamento de enfermidades bucais e do sistema estomatognático do idoso.
                    </span>
                  </span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect all-threatments-btn">
                      <i class="material-icons">chevron_right</i>
                    </button> -->
                    <!-- <a class="mdl-list__item-secondary-action mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Leia mais
                      <i class="material-icons">chevron_right</i>
                    </a> -->
                    <a class="mdl-list__item-secondary-action mdl-button mdl-js-button" href="#"><i class="material-icons">chevron_right</i></a>
                  </span>
                </li>
              </ul>
            </div>
          </div>
          
        </div>
        
        <div class="tratamentos-agende-contato-section">
          <div class="mdl-grid ">
            <div class="tratamentos-agende-contato-section-content mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              <!-- Simple Textfield -->
              <div class="tratamentos-agende-contato-section-title mdl-typography--display-2 mdl-typography--font-light">Agende sua avaliação</div>
              <p class="tratamentos-agende-contato-section-text mdl-typography--headline mdl-typography--font-light">
                <!-- Nossa equipe de profissionais competentes de qualificados trabalham com efetividade buscando, acima de tudo, que os sonhos e os objetivos de nossos pacientes sejam conquistados. -->
                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect agendar-btn1-link" href="{{ route('agendar') }}" target="_blank">
                  Agendar avaliação&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
              <!-- <p class="tratamentos-agende-contato-section-text mdl-typography--headline mdl-typography--font-light">
                Realizamos nossos atedimentos com clareza, empatia e lealdade, mantendo e perpetuando, assim, respeito e confiança dos nossos pacientes.
              </p> -->
              
              <!-- <p class="tratamentos-agende-contato-section-text2 mdl-typography--text-center mdl-typography--subhead mdl-typography--font-medium ">
                Utilizamos os melhores materiais odontológicos disponíveis no mercado.
              </p> -->
            </div>
            <!-- <div class="tratamentos-agende-contato-form-section mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
              
              <form action="#">
                <div class="tratamentos-agende-contato-section-title mdl-typography--display-2 mdl-typography--font-light">Fale conosco</div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="nome">
                  <label class="mdl-textfield__label" for="nome">Nome</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="email">
                  <label class="mdl-textfield__label" for="email">E-mail</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" id="telefone">
                  <label class="mdl-textfield__label" for="telefone">Telefone / Whhatsapp</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <textarea class="mdl-textfield__input" type="text" rows="4" id="Mensagem"></textarea>
                  <label class="mdl-textfield__label" for="Mensagem">Mensagem</label>
                </div>
                <div class=" mdl-typography--text-center">
                  
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect enviar-mensagem-btn">
                    Enviar mensagem <i class="material-icons">send</i>
                  </button>
                </div>
              </form>
            </div> -->
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
<link rel="stylesheet" href="{{ url('public/css/tratamentos.css') }}">
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
<script src="{{ url('public/js/tratamentos.js') }}"></script>
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
