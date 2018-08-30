 
<div class="container">

  <div class="row">
    <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          Crear Papeleta <a href="<?= base_url()?>user/" class="btn btn-default pull-right">Lista</a>
        </div>
        <div class="card-body">

          <label>Fecha Emisión</label>
          <input type="date" class="form-control form-control-sm col-md-6" value="<?php echo date("Y-m-d")?>" disabled>
          <br>
          <label>Tipo Papeleta</label>
          <select name="papeleta" id="papeleta" class="form-control form-control-sm">
            <option value="0">Seleccionar...</option>
            <?php foreach ($data as $key): ?>
              <option value="<?= $key->idPapeletas ?>" name="<?= $key->nombrePapeleta ?>"><?= $key->nombrePapeleta ?></option>
            <?php endforeach ?>
          </select>
          <small id="passwordHelpInline" class="text-muted">
            Selecciona una papeleta
          </small>

        </div>
      </div>
    </div>

    <div class="col-md-7" id="divSobretiempo" style="display:none;">
      <div class="card">
        <div class="card-header">
          SOBRETIEMPO
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <label>Fecha/Hora Inicio</label>
              <input type="datetime" name="finicio" class="form-control form-control-sm">
            </div>
            <div class="col-md-6">
              <label>Fecha/hora Termino</label>
              <input type="datetime" name="finicio" class="form-control form-control-sm">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <textarea name="descripcion" class="form-control" cols="30" rows="5" placeholder="Describa el labor a realizar"></textarea>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          COMPENSACION
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <label>Fecha/Hora Inicio</label>
              <input type="datetime" name="finicio" class="form-control form-control-sm">
            </div>
            <div class="col-md-6">
              <label>Fecha/hora Termino</label>
              <input type="datetime" name="finicio" class="form-control form-control-sm">
            </div>
          </div>
          <hr>
          <button class="btn btn-succes btn-sm pull-right">Registrar</button>
        </div>
      </div>
    </div>

    <div class="col-md-7" id="divPapeletas" style="display:none;">
      <div class="card">
        <div class="card-header">
          <span id="nombrePapeleta"></span>
        </div>
        <form action="<?= base_url()?>" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <label>Fecha/Hora Inicio</label>
                <input type="datetime" name="finicio" class="form-control form-control-sm">
              </div>
              <div class="col-md-6">
                <label>Fecha/hora Termino</label>
                <input type="datetime" name="finicio" class="form-control form-control-sm">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <textarea name="descripcion" class="form-control" cols="30" rows="10" placeholder="Ingrese el motivo"></textarea>
                <hr>
                <input type="hidden" name="id" id="id">
                <button class="btn btn-succes btn-sm">Registrar</button>
              </div>             
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>