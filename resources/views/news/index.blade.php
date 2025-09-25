<h1>Список новостей</h1>

<p><a href="/news/create">Добавить новость</a></p>

<ul>
    @foreach($news as $item)
        <li>
            <strong>{{ $item->title }}</strong> — {{ $item->content }}
            <a href="/news/{{ $item->id }}/edit">Редактировать</a>
            
            <form action="/news/{{ $item->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>




