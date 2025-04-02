@props(['role', 'contacts'])

<div class="flex flex-col items-center">
    <div class="flex flex-col items-center my-50">
        <h1 class="font-bold">GABRIEL PALOMINOS TEIGA</h1>
        <h2 class="text-base">{{ $role }}</h2>
        <ul class="flex size-24 gap-x-2">
            @foreach($contacts as $contact)
            <li>
                <a href="{{ $contact['link'] }}" target="_blank">
                    <img src="{{ $contact['icon'] }}" alt="{{ $contact['name'] }}"/>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <p class="text-sm">©2025 GT Software Solutions</p>
</div>
