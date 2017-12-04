@extends('layouts.app')

@section('content')
    <div class="container" id="app">
        @if (Auth::check())
            <form action="posts" class="form-horizontal" method="post">
                @if(count($errors) > 0)
                    <div class="errors">
                        <ul class="alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="id_usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" class="form-control" name="nombre_usuario" value="{{ Auth::user()->name }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="fecha">Fecha que recibio la queja:</label>
                        <input type="date" class="form-control" name="fecha" v-model="fecha" value="{{old('fecha')}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="tipo">Tipo de queja:</label>
                      <select name="tipo" class="form-control" value="{{old('tipo')}}" v-model="tipo">
                          <option value="Queja">Queja</option>
        	            		<option value="Sugerencia">Sugerencia</option>
                    	</select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="entrada">Entrada:</label>
                      <select name="entrada" class="form-control" value="{{old('entrada')}}" v-model="entrada">
                          <option value="Llamada">Llamada Telefónica</option>
                          <option value="Correo">Correo Electrónico</option>
                          <option value="Escrito">Escrito</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="mes">Mes:</label>
                      <select name="mes" class="form-control" value="{{old('tipo')}}" v-model="mes" >
                          <option value="enero">Enero</option>
                          <option value="febrero">Febrero</option>
                          <option value="marzo">Marzo</option>
                          <option value="abril">Abril</option>
                          <option value="mayo">Mayo</option>
                          <option value="junio">Junio</option>
                          <option value="julio">Julio</option>
                          <option value="agosto">Agosto</option>
                          <option value="septiembre">Septiembre</option>
                          <option value="octubre">Octubre</option>
                          <option value="noviembre">Noviembre</option>
                          <option value="diciembre">Diciembre</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="empresa">Empresa:</label>
                        <input type="text" class="form-control" name="empresa" placeholder="Empresa..." value="{{old('empresa')}}" v-model="empresa">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="representante">Representante legal:</label>
                        <input type="text" class="form-control" name="representante" placeholder="Empresa..." value="{{old('representante')}}" v-model="representante">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="domicilio">Domicilio del Servicio:</label>
                        <input type="text" class="form-control" name="domicilio" placeholder="Empresa..." value="{{old('domicilio')}}" v-model="domicilio">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="ambito">Ambito:</label>
                      <select name="ambito" class="form-control" value="{{old('ambito')}}" v-model="ambito">
                          <option value="privada">Privada</option>
                          <option value="federal">Federal</option>
                          <option value="estatal">Estatal</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="delegacion">Delegacion o Sub Delegacion:</label>
                      <select name="delegacion" class="form-control" value="{{old('delegacion')}}" v-model="delegacion">
                          <option value="valles">Valles Centrales</option>
                          <option value="huajuapam">Huajuapam de leon</option>
                          <option value="matias">Matias Romero</option>
                          <option value="salina">Salina Cruz</option>
                          <option value="pinotepa">Pinotepa Nacional</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="codigo">Codigo:</label>
                      <select name="codigo" class="form-control" value="{{old('codigo')}}" v-model="codigo">
                          <option value="problemas_operatividad">PROBLEMAS DE OPERATIVIDAD</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="codigo_queja">Codigo de Queja:</label>
                      <select name="codigo_queja" class="form-control" value="{{old('codigo_queja')}}" v-model="codigo_queja">
                          <option value="mala_atencion">MALA ATENCION DE LA DELEGACIÓN</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="status">Status:</label>
                      <select name="status" class="form-control" value="{{old('status')}}" v-model="status">
                        <option value="pendiente">Pendiente</option>
                          <option value="atendida">Atendida</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                      <label for="contenido">Quejas</label>

                        <textarea class="form-control" rows="3" name="contenido" placeholder="Escribe la Queja..." v-model="contenido"></textarea>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary" value="Guardar" v-on:click="mostrarAlert">
            </form>


       @endif
       <div class="row">
          <div class="col-xs-12">
            <pre>@{{$data}}</pre>
          </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
