<?php $this-> menu() ?>

  <main>

    <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>

    <div id="login-page" class="row">
      <div class="col s4 offset-s4 card-panel">
        <form class="login-form">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="<?= URL_IMG . 'logo_white.svg' ?>" alt="" class="circle responsive-img valign profile-image-login CorFundo">
              <h4 class="center login-form-text">Login</h4>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class = "material-icons prefix CorTexto">account_circle</i>
              <input id="username" type="text">
              <label for="username" class="center-align">Usuário</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class = "material-icons prefix CorTexto">vpn_key</i>
              <input id="password" type="password">
              <label for="password">Senha</label>
            </div>
          </div>
          <div class="row">
            <div class="center input-field col s12 m12 l12  login-text">
              <label>
                <input type="checkbox"/>
                <span>Lembrar!</span>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <a href="index.html" class="btn CorFundo CorLink waves-effect waves-light col s12">Entrar</a>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="page-register.html">Registrar agora!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="page-forgot-password.html">
Esqueceu a senha ?</a></p>
            </div>
          </div>

        </form>
      </div>
    </div>
  </main>

<?php $this-> footer() ?>
