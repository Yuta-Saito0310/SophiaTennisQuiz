<?php

use Illuminate\Database\Seeder;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $allquizzes = [
			
			$quiz5 = [
				'id' => 10,
				'title' => 'OB会のダブルスにて。80期のAさん(25歳)と81期のBさん(27歳)のペアがファーストゲームを取った。正しいコールは次のうちどれか。',
				'correct' => 'game A B 1st game',
				'uncorrect1' => 'game B A 1st game',
				'uncorrect2' => 'game B A',
				'explain_sentence' => '（正解：game A B 1st game)期が小さい方を先に呼ぶようにしましょう。',
				'category_id' => '3',
			],
			
		];

		foreach ($allquizzes as $quiz) {
			DB::table('quizzes')->insert($quiz);
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
