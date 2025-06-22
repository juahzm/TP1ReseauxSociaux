<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('student')->get();
        $students = Student::all();
        return view('article.index', compact('articles', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([

            'title_en' => 'required|max:100',
            'title_fr' => 'max:100',
            'content_en' => 'required|min:5|max:500',
            'content_fr' => 'max:500',
            'url' => 'nullable|url'
        ]);
        // return $request;

        $title = array_filter([
            'en' => $request->title_en,
            'fr' => $request->title_fr
        ]);

        $content = array_filter([
            'en' => $request->content_en,
            'fr' => $request->content_fr
        ]);



        $userId = Auth::id();
        $student = Student::where('user_id', $userId)->first();

        $article = Article::create([
            'title' => $title,
            'content' => $content,
            'url' => $request->url,
            'student_id' => $student->id,
            'category_id' => null,


        ]);

        // $category = Category::create([]); ???ou j'ai dois creer une function???

        return redirect()->route('article.index', $article->id)->with('success', 'The article was added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $title = array_filter([
            'en' => $request->title_en,
            'fr' => $request->title_fr
        ]);

        $content = array_filter([
            'en' => $request->content_en,
            'fr' => $request->content_fr
        ]);


        $article->update([

            'title' => $title,
            'content' => $content,
            'url' => $request->url,
        ]);

        return redirect()->route('article.index')->with('success', 'Article was updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $target = $article->title;
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article: ' . $target . ' was deleted successfully!');
    }
}
