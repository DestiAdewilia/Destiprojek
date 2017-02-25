<div class="modals text-left fade" id="delete{{ $modal-s>id}}">
	<div class="modals-dialog">
		<div class="modals-content">
			<form method="delete" action="{{url('delete')}}">
			<div class="modals-header">
				<button type="button" class="close" data-dismiss="modals" aria-hidden="true"></button>
				<h4 class="modals-title">{{{$title or "delete data"}}}</h4>
			</div>
			<div class="modals-body">
				<p>{{$message or "Apakah anda yakin ingin menghapus data ini?"}}</p>
			</div>
			<div class="modals-rooter">
				<button type="submit" class="btn btn-primary">Ya</button>
				<button type="button=" class="btn btn-default" data-dismiss="modals">Tidak</button>
			</div>
			</form>
		</div>
	</div>
</div>