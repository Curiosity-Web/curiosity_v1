<!-- Prefix 'alev' -->

@extends('templates.administer-menu')

@section('css-plus')
@stop

@section('baner-tittle')
   Nivels (Grados Escolares)
@stop

@section('content-administer')
   <div class='row'>
      <div class='col-xs-12'>
         <div class='alev-buttons float-xs-right'>
            <a class='btn-floating btn-small primary-color-dark waves-effect waves-light' id='alev-btnNew'></a>
         </div>
      </div>
   </div>

   <div class='row'>
      <div class='col-xs-12'>
         <table class='table table-hover table-striped z-depth-1 msad-table' id='alev-table'>
            <thead>
               <tr>
                  <th>Nombre</th><th>Acciones</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1ro</td>
                  <td>
                     <button type='button' class='btn msad-table-btnConf alev-btnConf'>
                        <span class='fa fa-gears'></span>
                     </button>
                     <button type='button' class='btn btn-outline-default msad-table-btnDel alev-btnDel'>
                        <span class='fa fa-trash-o'></span>
                     </button>
                  </td>
               </tr>
               <tr>
                  <td>2do</td>
                  <td>
                     <button type='button' class='btn msad-table-btnConf alev-btnConf'>
                        <span class='fa fa-gears'></span>
                     </button>
                     <button type='button' class='btn btn-outline-default msad-table-btnDel alev-btnDel'>
                        <span class='fa fa-trash-o'></span>
                     </button>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>

   <div class="modal fade msad-mdl" id="alev-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header"></div>
         <div class="modal-body">
            <form class="form form-horizontal" id="alev-form">
               <div class="form-group">
                 <label for="alev-name" class="msad-mdl-label">Nombre</label>
                 <input type="text" class="form-control" id="alev-name" name="alev-name">
               </div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-default" id="alev-cancel">
              <span class="fa fa-reply"></span>&nbsp;
              Cancelar
            </button>
           <button type="button" class="btn btn-default" id="alev-save">
             <span class="fa fa-upload"></span>&nbsp;
             Guardar
           </button>
         </div>
       </div>
     </div>
   </div>
@stop

@section('js-plus')
   <script src="/packages/assets/js/administer/models/Level.js" charset="utf-8"></script>
   <script src="/packages/assets/js/administer/Controllers/alevController.js" charset="utf-8"></script>
   <script src="/packages/assets/js/administer/dispatchers/alev.js" charset="utf-8"></script>
@stop
