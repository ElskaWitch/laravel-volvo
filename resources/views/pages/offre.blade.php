@extends('layout.layout')
@section('title', 'Nos offres du moment')

@php
$arrayCards = [['img' => 'offre1.webp', 'title' => 'Particuliers'], ['img' => 'offre2.webp', 'title' => 'Professionnels']];
@endphp

@section('content')
		@include('partials.offrepage._offre1Texte')
		<div class="flex px-36 space-x-7">
				@foreach ($arrayCards as $arrayCard)
						@include('partials.offrepage._card')
				@endforeach
		</div>
@endsection
