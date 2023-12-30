<h1>This is a listings page bro!</h1>
<h1>{{ $heading }}</h1>
@foreach ($listings as $listing)
    <a href="/listings/{{ $listing['id'] }}">
        <h1>{{ $listing['title'] }}</h1>
    </a>
    <h2>{{ $listing['name'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@endforeach
