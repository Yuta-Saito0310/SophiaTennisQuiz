<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    
     public function quizPageShow(Request $request)
    {
        $categoryID= $request->id;
        $quizzes = DB::table('quizzes')
                    ->select('id','title','image_name','correct','uncorrect1','uncorrect2','explain_sentence')
                    ->where([
                        ['category_id', '=', $categoryID]
                        ])
                    ->inRandomOrder()
                    ->take(5)
                    ->get();

        return view('quiz.quiz_page')->with([
                'categoryID'=> $categoryID,
                'quizzes'=> $quizzes,
            ]);
    }
}