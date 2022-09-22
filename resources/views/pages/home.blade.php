@extends('layout.layout')
@section('title', 'Acceuil')

@php
$arrayCards = [['img' => 'voiture3.webp', 'title' => 'XC40 Recharge Start', 'description' => "A partir de 485 €/mois, jusqu'au 31 décembre 2022"], ['img' => 'voiture4.webp', 'title' => 'Recharger simplement', 'description' => 'La Solution de Recharge Volvo vous accompagne pour recharger chez vous ou sur votre lieu de travail.']];
@endphp
@php
$arrCards = [['img' => 'volvo1.webp'], ['img' => 'volvo5.webp'], ['img' => 'volvo6.webp'], ['img' => 'volvo2.webp']];
@endphp

@section('content')
		@include('partials.homepage._hero')
		@include('partials.homepage._home1Text')
		<div class="flex justify-center space-x-10">
				<x-card description='bonjour bienvenue sur le site de volvo partez en camping avec la super voiture volvo'
						title='Camping Volvo' url_img='camping.webp' />
				<x-card description='bonjour bienvenue sur le site de volvo partez en ville avec la super voiture volvo'
						title='Ville Volvo' url_img='nosvolvo.webp' />
		</div>
		@include('partials.homepage._home2PhotoButton')
		@include('partials.homepage._home3ModeleDispo')
		@include('partials.homepage._home4AllModeles')
		<div class="grid grid-cols-4 px-36 gap-5">
				@foreach ($arrCards as $arrCard)
						@include('partials.homepage._cardHome4')
				@endforeach
		</div>
		@include('partials.homepage._home4Liens')
		@include('partials.homepage._home5PkVolvo')
		<div class="flex px-36 space-x-7">
				@foreach ($arrayCards as $arrayCard)
						@include('partials.homepage._card')
				@endforeach
		</div>
		@include('partials.homepage._home7Offre')
		@include('partials.homepage._home8LiensUtile')
@endsection
