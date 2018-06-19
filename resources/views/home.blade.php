@extends('layouts.app')

@section('content')
	<div id="home-competitions">
		<div class="card-deck-wrapper">
				
			<div class="card-deck">
				
				@foreach ($competitions as $competition)
			
					<div class="card mb-4 card-overlay">
						@foreach($competition->media as $key => $media)
							@if($key == 0)
								<img class="card-img" src="{{ Storage::url('competitions/' . $media->extern_id . '/' . $media->filename) }}" alt="{{ $media->legend }}">
								@break;
							@endif
						@endforeach
						<div class="card-body card-absolute">
							<span class="card-badge">{{ count($competition->epreuves) }} épreuves</span>
							<h3 class="card-title">{{ str_limit($competition->name, 40) }}</h3>
							<p class="card-text">{{ str_limit($competition->description, 75) }}</p>
						</div>
					</div>

				@endforeach
			
			</div>
		</div>

		<div class="row">
			<div class="col-12 text-center">
				<p>
					<a href="" class="badge-link"><i class="fal fa-eye"></i> Voir tous</a>
				</p>
			</div>
		</div>
	</div>
@endsection
