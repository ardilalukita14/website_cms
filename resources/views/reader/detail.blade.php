@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')

<hr>
<div class="col-md-12" style="margin-left:30px">
<h1><b>{{$news->judul}}</b></h1>
<p>Penulis : <b>{{$news->author}}</b> ,{{$news->tanggal}}</p> <hr>
</div>

<div class="row">
	<div class="col-md-7" style="margin-left:30px">
		<p align="center"><img style="width: 600px;height: 300px;" src="{{asset('foto/'.$news->foto)}}"></p>
        <div class="mb-10;"><p align="justify" style="margin-top: 40px;">{!!$news->isi!!}</p></div>
		<hr><br>
		@if(Session::has('success'))
		<div class="alert alert-info">
			<p>{{Session::get('success')}}</p>
		</div>
		@endif
		<br>
		@foreach($komen as $k)
			<div class="panel panel-info">
				<div class="panel-body">
					<p><b>{{$k->nama}}</b></p>
					<p>{{$k->tanggal}}</p>
					<p>{{$k->keterangan}}</p>
					<hr>		
				</div>
			</div>
		@endforeach
		<p><b>LEAVE A REPLAY</b></p>
		<form action="{{route('reader.komentar',$news->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<textarea class="form-control" name="isi" required="" placeholder="Masukan Komentar" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;"></textarea>
			</div>
			<div class="form-group">
				<input type="text" name="nama" required=""  class="form-control" placeholder="Masukan Username" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="Masukan Email" style="font-size: 16px; font-family: Arial, Helvetica, sans-serif;">
			</div>
			<input type="submit" value="KIRIM" class="btn btn-info">
		</form>
	</div>
	<div class="col-md-4">
		<div class="btn btn-success"><b>BERITA TERBARU</b></div>
		<hr>
		@foreach($semua as $ls)
		<a href="{{route('reader.show_news',$ls->id)}}" style="text-decoration: none; color: black">
			<p><b>{{$ls->judul}}</b></p>
			<p>{{$ls->tanggal}}</p>
			<br>
		</a>
		@endforeach
	</div>
</div>
@endsection
