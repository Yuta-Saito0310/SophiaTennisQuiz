<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //  public function categoryShow()
    // {
    //     $work = Category::find(2);
    //     $rule = Category::find(1);
    //     $trivia = Category::find(5);
    //     return view('quiz.category')->with([
    //             'work' => $work,
    //             'rule' => $rule,
    //             'trivia'=> $trivia,
    //         ]);;
    // }
     public function quizPageShow(Request $request)
    {
        $categoryID= $request->id;
        $category = Category::find($categoryID);
        dd($category);
        $quizzes = DB::table('quizzes')
                    ->select('id','title','image_name','correct','uncorrect1','uncorrect2','explain_sentence')
                    ->where([
                        ['category_id', '=', $categoryID]
                        ])
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
                    
        return view('quiz.quiz_page')->with([
                'categoryID' => $categoryID,
                'category' => $category,
                'quizzes'=> $quizzes,
            ]);
    }
}