@extends('app')

@section('content')
<br>
<div class="panel">
	<div class="heading">
		<span class="title">
			Edit Post
		</span>
	</div>
		<div class="content">
			<form method="POST" action="{{ url('artikel/update') }}" enctype="multipart/form-data">
			<table style="width:100%">
				<tr>
				<td>Judul</td> 
				<td>
					<div class="input-control text full-size">
						<input type="text" name="judul" value="{{ $data->judul }}">
						<input type="hidden" name="id" value="{{ $data->id }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</td>
				</tr>
				<tr>
				<td>Isi</td>
				<td>
					<div class="input-control textarea full-size">
						<textarea name="isi">{{ $data->isi }}</textarea>
					</div>
						</td>
				</tr>
				<tr>
				<td>Tag</td>
				<td>
					<div class="input-control text full-size">
						<input type="text" name="tag" value="{{ $data->tag }}">
					</div>
				</td>
			</tr>
				<tr>
				<td>Sampul</td>
				<td>

				<div class="image-container bordered" style="max-width:300px;">
				<div class="frame"><img src="{{ url('images/'.$data->sampul) }}">
				</div>
				</div>
					<div class="input-control file full-size" data-role="input">
						<input type="file" name="sampul">
						<button class="button"><span class="mif-folder"></span></button>
					</div>
				</td>
				</tr>
				<td></td>
				<td>
					<button class="button info block-shadow-info text-shadow" type="submit">Submit</button>
				</td>	
		</table>
	</div>
</div>

@endsection