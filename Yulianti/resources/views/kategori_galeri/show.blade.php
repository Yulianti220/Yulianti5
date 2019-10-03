@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">list Kategori Galeri</div>

				<div class="card-body">

					<div class="from-group row">
					 <label class="col-md-4 col-from-label text-md-right">ID</label>
					 <label class="col-md-4 col-from-label text-md-left">{!! $KategoriGaleri->
					 id !!}</label>
					</div>

					<div class="from-group row">
					 <label class="col-md-4 col-from-label text-md-right">Nama</label>
					 <label class="col-md-4 col-from-label text-md-left">{!! $KategoriGaleri->nama !!}</label>
					</div>

					<div class="from-group row">
					 <label class="col-md-4 col-from-label text-md-right">Users Id</label>
					 <label class="col-md-4 col-from-label text-md-left">{!! $KategoriGaleri->users_id !!}</label>
					</div>

					<div class="from-group row">
					 <label class="col-md-4 col-from-label text-md-right">Create</label>
					 <label class="col-md-4 col-from-label text-md-left">{!! $KategoriGaleri->created_at->format('d/m/Y H:i') !!}</label>
					</div>

					<div class="from-group row">
					 <label class="col-md-4 col-from-label text-md-right">Update</label>
					 <label class="col-md-4 col-from-label text-md-left">{!! $KategoriGaleri->updated_at->format('d/m/Y H:i') !!}</label>
					</div>

					<div class="from-group row mb-0">
							<div class="col-md-0 offset-md-4">
								<a href="{!! route('kategori_galeri.index') !!}" class="btn btn-primary">
							 Back
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection



