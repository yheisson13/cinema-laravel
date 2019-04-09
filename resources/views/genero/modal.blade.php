<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Actualizar Genero</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>
			<div class="modal-body">
			
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
				<input type="hidden" id="id">
				@include('genero.form.genero')

			</div>
			<div class="modal-footer">
				{!! link_to('#', $title = 'Actualizar', $attributes = ['id' => 'actualizar', 'class' => 'btn btn-primary'], $secure = null) !!}
			</div>
		</div>
	</div>
</div>