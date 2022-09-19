@extends('layout.layout')
@section('title', 'Voir nos voitures')

@php
$arrayCards = [
    ['img' => 'volvo1.webp', 'title' => 'C40 Recharge Start', 'description' => 'À partir de 510 €/mois(1) avec apport, jusqu’au 31/10/2022.'],
    [
        'img' => 'volvo2.webp',
        'title' => 'XC40 Recharge Start',
        'description' => 'À partir de 485 €/mois(1) avec apport, jusqu’au 31/10/2022.',
    ],
    [
        'img' => 'volvo3.webp',
        'title' => 'XC40 B3 Micro-hybride Start',
        'description' => '
À partir de 540 €/mois(1) sans apport, jusqu’au 31/10/2022.',
    ],
    [
        'img' => 'volvo4.webp',
        'title' => 'S60 B4 Micro-hybride Plus Dark',
        'description' => '
À partir de 680 €/mois(1) sans apport, jusqu’au 31/10/2022.',
    ],
    ['img' => 'volvo5.webp', 'title' => 'V60 B3 Micro-hybride Start', 'description' => 'À partir de 640 €/mois(1) sans apport, jusqu’au 31/10/2022.'],
    [
        'img' => 'volvo6.webp',
        'title' => 'XC60 Edition Plus B4 Micro-hybride Chrome',
        'description' => '
À partir de 715 €/mois(1) sans apport, jusqu’au 31/10/2022.',
    ],
];
@endphp

@section('content')
		@include('partials.showpage._show1Texte')
		@include('partials.showpage._hero')
		<div class="grid grid-cols-2 px-36 space-x-7">
				@foreach ($arrayCards as $arrayCard)
						@include('partials.homepage._card')
				@endforeach
		</div>
		@include('partials.showpage._showOneCard')
@endsection
