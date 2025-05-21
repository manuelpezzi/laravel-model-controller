
<ol>
    @foreach ($movies as $movie)
        <li>
            {{$movie['title']}}
            {{$movie['original_title']}}
            {{$movie['nationality']}}
             {{$movie['date']}}
             {{$movie['vote']}}

        </li>
    @endforeach
</ol>