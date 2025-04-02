@props(['about', 'stack'])

<h3>ABOUT ME</h3>
<p>{{ $about }}</p>
<ul>
    @foreach($stack as $technology)
        <img src="{{$technology['image']}}" alt="{{ $technology['language'] }}" />
    @endforeach
</ul>
