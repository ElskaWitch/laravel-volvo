<nav class="flex items-center justify-between p-5 bg-gray-50 fixed top-0 left-0 right-0 z-50">
		{{-- logo --}}
		<div class="w-90">
				<a href="/"> <img alt="logo" src="img/1.svg"></a>
		</div>
		{{-- nav-item --}}
		<div class="space-x-5">
				<a class="hover:underline hover:underline-offset-8 font-bold" href="/offre-du-moment">Offres du moment</a>
				<a class="hover:underline hover:underline-offset-8 font-bold" href="{{ route('show') }}">Nos voitures</a>
		</div>
</nav>
