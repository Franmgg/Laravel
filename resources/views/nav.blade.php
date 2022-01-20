<?php $error = false; ?>
  <nav>
    <div class="nav-wrapper center cyan darken-4">
      <a href="#!" id ="nav" class="brand-logo center"><b>S</b>iempre <span class="material-icons">all_inclusive</span> <b>C</b>olgados</a>
      <ul class="left hide-on-med-and-down">
        <li><a class="btn modal-trigger" href="#modal1">Cliente</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Acceder</a></li>
      </ul>
    </div>
  </nav>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Entrar como Cliente</h4>
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="CIF" id="cif" type="text" class="validate">
              <label for="cif">CIF</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Telefono" id="tlf" type="text" class="validate">
              <label for="tlf">TELEFONO</label>
            </div>
          </div>
        </form>
      </div>
      <form>
     
    </div>
    <div class="modal-footer">
      <a href="#!" class="@if(!$error) modal-close @endif waves-effect waves-green btn-flat">Acceder</a>
    </div>
  </div>