<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Редактировать новость</title>
</head>
<body>
    <h1>Редактировать новость</h1>

    <form method="POST" action="/news/{{ $news->id }}">
        @csrf
        @method('PUT')
        <p>
            <label>Заголовок:</label><br>
            <input type="text" name="title" value="{{ $news->title }}" required>
        </p>
        <p>
            <label>Текст:</label><br>
            <textarea name="content" required>{{ $news->content }}</textarea>
        </p>
        <button type="submit">Сохранить изменения</button>
    </form>

    <p><a href="/news">Назад к списку</a></p>
</body>
</html>
