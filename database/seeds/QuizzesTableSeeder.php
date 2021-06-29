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
			$quiz1 = [
				'id' => 1,
				'title' => '「一期一笑」のコピーで広告を打っているのはどこの会社？',
				'correct' => 'アリシアクリニック',
				'uncorrect1' => '微笑整形外科',
				'uncorrect2' => '湘南美容外科クリニック',
				'explain_sentence' => 'アリシアクリニックは他にも、「一転百起」などの四字熟語をもじった広告を打っています。',
				'category_id' => '3',
			],
			$quiz2 = [
				'id' => 2,
				'title' => '電子書籍が登場したことによって「紙の本」という言葉が生まれた。このように、新しく登場したモノ・コトに対応して生み出された呼び名を何という？',
				'correct' => 'レトロニム',
				'uncorrect1' => 'レトリック',
				'uncorrect2' => 'レトリカ',
				'explain_sentence' => '白黒テレビ、回らない寿司、などもレトロニムの一種ですね',
				'category_id' => '3',
			],
			$quiz3 = [
				'id' => 3,
				'title' => '人生の時期を表す言葉として、陰陽思想では若い順番に青春、朱夏、白秋がある。白秋に続く時期は何という？？',
				'correct' => '玄冬',
				'uncorrect1' => '黒冬',
				'uncorrect2' => '緑冬',
				'explain_sentence' => '青春という言葉も、陰陽思想から作られていたって何か意外ですよね',
				'category_id' => '3',
			],
			$quiz4 = [
				'id' => 4,
				'title' => 'ONE PIECEのクロコダイルが結成した組織の名前は？',
				'correct' => 'バロックワークス',
				'uncorrect1' => 'ラコステ',
				'uncorrect2' => 'アラバスタ',
				'explain_sentence' => 'アラバスタ編は、スリラーバーグ、空島に続いて好きです',
				'category_id' => '3',
			],
			
		];

		foreach ($allquizzes as $quiz) {
			DB::table('quizzes')->insert($quiz);
		}
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
