@extends('layout.master')
@section('titulo','Detalles Prestamos')
@section('contenido')

<div class="container" id="prestamo">
    @{{prestamos}}
    <div class="row">
        <div class="col-12">
            <h1>Libros Prestados</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-5">
            <div class="input-group">
                <input type="text" name="" class="form-control">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
			<div class="col-8">
				<table class="table table-bordered">
					<thead style="background: #ffffcc">
						<th>folio</th>
						<th>ISBN</th>
						<th width="15%">TITULO</th>
						<th width="15%">ESTADO</th>
						<th width="15%">OPCIONES</th>
					</thead>
					<tbody>
						<tr v-for="(v in detprestamo">
							<td>@{{v.folio}}</td>
							<td>@{{v.id_libro}}</td>
							<td>@{{v.codigo}}</td>
							<td>@{{v.titulo}}</td>
							<td><span class="btn btn-bg" @click="eliminarLibro(index)">eliminar</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-4">
				<div>
				<span class="input-group-btn">
                    <button type="button" class="btn btn-success" >Agregar</button>
                </span>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="col-4">
			<span class="input-group-btn">
				<button class="btn btn-success" @click="prestamo">Realizar prestamo</button>
			</span>
		</div>
	</div>
</div>
@endsection
@push('scripts')
	<script src="js/prestamo/prestamo.js"></script>
	<script src="js/moment-with-locales.min.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">