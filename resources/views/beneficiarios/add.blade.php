<div class="modal fade" id="mdlAddBeneficiario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="addBeneficiario" method="POST"">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar beneficiario</h4>
      </div>
      <div class="modal-body">
            <div class="col">
                <label>Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"/>
            </div>
            <div class="col">
                <label>Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario"/>
            </div>
            <div class="col">
                <label>Correo</label>
                <input type="mail" class="form-control" id="correo" name="correo"/>
            </div>
            <div class="col">
                <label>Contraseña</label>
                <input type="text" class="form-control" id="password" name="password"/>
            </div>
            @csrf
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary btnGuardarBeneficiario">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
@section('script')
@parent
    <script>

    $('#addBeneficiario').on('submit', function(e) {
        // evito que propague el submit
        e.preventDefault();
        var frmContent = new FormData(this);
        frmContent.append('_token', $('#addBeneficiario input[name=_token]').val());
        $.ajax({
            url: '{{ route('beneficiario.add') }}',
            type: 'POST',
            data: frmContent,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            console.log(data);            
            },
            error:function(data){
            console.log(data);
            }
        });
        });
    </script>
@endsection