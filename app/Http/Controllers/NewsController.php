<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Список новостей
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    // Форма добавления новости
    public function create()
    {
        return view('news.create');
    }

    // Сохранение новости
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create($request->only(['title', 'content']));

        return redirect('/news');
    }

    // Форма редактирования новости
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    // Обновление новости
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->only(['title', 'content']));

        return redirect('/news');
    }

    // Удаление новости
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect('/news');
    }
}
