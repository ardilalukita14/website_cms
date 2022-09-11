@extends('contents.layouts.app')
    <!-- Preloader Start-->
@include('contents.layouts.header')
@extends('contents.layouts.contents')
@section('content')

<div class="row">
	<div class="col-md-8">
        <br></br>
		<b class="label label-info"><h3 style="margin-left:55px;"><b>LIST NEWS</b></b></h3>
		<hr>
		<div class="panel">
			<div class="panel">
				<!-- ekonomi -->
				@foreach ($ekonomi as $e)
					<div class="row" style="margin-left:10px;">
						<a href="{{route('reader.show_news',$e->id)}}" style="color:black">
							<div class="col-md-3">
								<img style="width: 300px;height: 200px;margin: 15px" class="img-rounded img-responsive" src="{{asset('foto/'.$e->foto)}}">
							</div>
							<div class="col-md-6" style="margin: 15px;">
                                <h3>{{$e->judul}}</a></h3>
                                <p class="normal">{!!substr($e->isi,0,100)!!}...</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>	
		</div>
	</div>
	<div class="col-md-4">
		<!-- new news -->
        <br></br>
		<b class="label label-info"><h3 style="margin-left:55px;"><b>TOP NEWS</b></b></h3>
		<hr>
		<div class="row">
			@foreach($semua as $tp)
			<a href="{{route('reader.show_news',$tp->id)}}">
				<div class="col-md-8">
					<div class="panel panel-default">
					  <div class="panel-body">
					  	<img style="width: 200px;height: 100px" class="img-rounded img-responsive" src="{{asset('foto/'.$tp->foto)}}"><br>
					  	<p><h5 style="width: 200px; font-size: 12px; font-family: Lucida Console, Courier New, monospace; font-color:#072366;  text-align: justify;">{!!substr($tp->judul,0,25)!!}...</h5></p>
					  </div>
					</div>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</div>
@endsection