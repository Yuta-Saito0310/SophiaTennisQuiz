<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Quiz;
use Illuminate\Support\Facades\DB;
use Image;

class CrudController extends Controller
{
     public function index()
	{
		// カテゴリと地域をviewに渡す
		$quizzes = DB::table('quizzes')
			->select('id', 'title')
			->get();

		return view('crud.index', compact('quizzes'));
	}
	
	public function edit($quizID){
	    $quiz = Quiz::find($quizID);
	    //dd($quiz);
	    $categories=Category::all();
	    
	    return view('crud.edit', ['quiz'=>$quiz, 'categories'=>$categories]);
	}
	
	public function update(Request $request, $quizID)
	{
		dd($request);
		$quiz = Quiz::findOrFail($quizID);
		if($request->category_id >= 10){
			$quiz->category_id = ($request->category_id+5)/10;

		}else{
			$quiz->category_id = $request->category_id;
		}
		$quiz->title = $request->title;
		$quiz->correct = $request->correct;
		$quiz->uncorrect1 = $request->uncorrect1;
		$quiz->uncorrect2 = $request->uncorrect2;
		$quiz->explain_sentence = $request->explain_sentence;

		//画像ファイル名をランダムの文字列へ＆path変更
		$file = $request->file('image_name');
		if ($file != null) {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();
			Image::make($file)->save(public_path('images/' . $fileName));
			$quiz->image_name = '/images/' . $fileName;
		}

		$quiz->save();

		return redirect('/crud/index2021');
	}
	
    public function create()
	{
		$categories = DB::table('categories')
			->select('id', 'name')
			->get();

		return view('crud.create', compact('categories'));
	}
	
	public function store(Request $request)
	{
		$quiz = new Quiz();
		$quiz->category_id = $request->category_id;
		$quiz->title = $request->title;
		$quiz->correct = $request->correct;
		$quiz->uncorrect1 = $request->uncorrect1;
		$quiz->uncorrect2 = $request->uncorrect2;
		$quiz->explain_sentence = $request->explain_sentence;

		//画像ファイル名をランダムの文字列へ＆path変更
		$file = $request->file('image_name');
		if ($file != null) {
			$fileName = str_random(20) . '.' . $file->getClientOriginalExtension();
			Image::make($file)->save(public_path('images/' . $fileName));
			$quiz->image_name = '/images/' . $fileName;
		}

		$quiz->save();

		return redirect('/crud/index2021/edit/'. $quiz->id);
	}
	 public function categoryIndex()
	{
		$categories = DB::table('categories')
			->select('id', 'name')
			->get();

		return view('crud.category.categoryIndex', compact('categories'));
	}
	
	public function categoryEdit($categoryID){
	    $category = Category::find($categoryID);
	    $categories=Category::all();
	    
	    return view('crud.category.categoryEdit', ['category'=>$category, 'categories'=>$categories]);
	}
	
	public function categoryUpdate(Request $request, $categoryID)
	{
		$category = Category::findOrFail($categoryID);
		$category->id = $request->id;
		$category->name = $request->name;

		$category->save();

		return redirect('/crud/index2021/category');
	}
	
    public function categoryCreate()
	{
		$categories = DB::table('categories')
			->select('id', 'name')
			->get();

		return view('crud.category.categoryCreate', compact('categories'));
	}
	
	public function categoryStore(Request $request)
	{
		$category = new category();
		$category->name = $request->name;


		$category->save();

		return redirect('/crud/index2021/category/edit/'. $category->id);
	}
}
