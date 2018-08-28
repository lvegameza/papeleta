 
<div class="container">
  <div class="row">
  	<div class="col-md-12">
       <h2>
        Crear Papeleta
        <a href="<?= base_url()?>user/" class="btn btn-default">Lista</a>
    </h2> 
</div>

<div class="col-md-12">
    <form class="form-inline">
        <div class="form-group">
            <label class="col-sm-2 col-form-label col-form-label-sm">Fecha:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control form-control-sm" value="<?php echo date("Y-m-d")?>" disabled>
          </div>
      </div>

      <div class="form-group">
        <label for="inputPassword6">Tipo Papeleta</label>
        <select name="papeleta" id="" class="form-control">
            <option value="0">Papeleta Permiso</option>
        </select>
        <!-- <small id="passwordHelpInline" class="text-muted">
          Must be 8-20 characters long.
      </small> -->
    </div>
</form>
</div>


</div>
</div>