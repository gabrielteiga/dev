@props(['projects'])

<h3>PROJECTS</h3>
<ul>
    @foreach($projects as $project)
        <li>
            <img src="{{ $project['image'] }}" alt="imagem"/>
            <div>
                <h4>{{ $project['title'] }}</h4>
                <p>{{ $project['shortDescription'] }}</p>
                <ul>
                    @foreach($project['tags'] as $tag)
                    <li>{{ $tag }}</li>
                    @endforeach
                </ul>
                <div>
                    <button>details</button>
                    <a>
                        <img src="{{ asset("icons/git.png") }}" alt="git repository"/>
                    </a>
                </div>
            </div>

        </li>
    @endforeach
</ul>
