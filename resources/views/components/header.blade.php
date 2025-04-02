@props(["sections"])

<nav>
    <p>
        Logo
    </p>
    <ul>
        @foreach($sections as $section)
        <li>
            <a href="#{{ $section }}">
                {{ $section }}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
