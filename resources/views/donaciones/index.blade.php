@extends('layouts.app')
@include('beneficiarios.add')
@section('content')
<div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="">Donaciones</h3>
            <div class="pull-right" style="margin-right: -10px; margin-top: -8px">
                <button type="button" class="btn btn-primary text-center btnAddBeneficiario">
                    <span class="hidden-xs">Agregar beneficiario</span>
                    <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-primary text-center btnAddDonacion">
                    <span class="hidden-xs">Agregar donacion</span>
                    <i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                </thead>
                <tbody id="contentDonaciones">

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
@parent
    <script>
        $('.btnAddBeneficiario').click(function(){
            $("#mdlAddBeneficiario").modal('toggle');
        });
        $('.btnAddDonacion').click(function(){
            $("#mdlAddDonaciones").modal('toggle');
        });
    </script>
@endsection