<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавить новость</title>
</head>
<body>
    <h1>Добавить новость</h1>

    <form method="POST" action="/news">
        @csrf
        <p>
            <label>Заголовок:</label><br>
            <input type="text" name="title" required>
        </p>
        <p>
            <label>Текст:</label><br>
            <textarea name="content" required></textarea>
        </p>
        <button type="submit">Сохранить</button>
    </form>

    <p><a href="/news">Назад к списку</a></p>
</body>
</html>
