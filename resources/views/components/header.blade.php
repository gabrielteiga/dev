@props(["sections"])

<div class="flex flex-row place-content-between m-6">
    <p class="">
        Logo
    </p>
    <nav class="">
        <ul class="flex flex-row gap-x-5">
            @foreach($sections as $section)
            <li class="">
                <a class="" href="#{{ $section }}">
                    {{ $section }}
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</div>
