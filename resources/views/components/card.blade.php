@props(['url_img', 'title', 'description'])

<div class="pb-24 ">
		<div class="max-w-sm bg-gray-100">
				<img alt="camping" src="img/{{ $url_img }}">
				<div class="py-7 text-xl p-5">
						<h2 class="font-black text-2xl pb-3">{{ $title }}</h2>
						<p>{{ $description }}</p>
				</div>
		</div>
</div>
