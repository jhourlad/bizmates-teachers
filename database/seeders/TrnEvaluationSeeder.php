<?php

namespace Database\Seeders;

use App\Models\TrnEvaluation;
use Illuminate\Database\Seeder;

class TrnEvaluationSeeder extends Seeder
{
    /**
     * @var array Record container
     */
    protected $data = [];

    /**
     * Class constructor
     * @param TrnEvaluation $model
     */
    public function __construct(protected TrnEvaluation $model)
    {
        $this->data = [
            [ 'teacher_id' => 110250, 'lesson_datetime' => '2020-01-11 17:00:00', 'result' => 1],
            [ 'teacher_id' => 110250, 'lesson_datetime' => '2020-01-11 16:30:00', 'result' => 1],
            [ 'teacher_id' => 110250, 'lesson_datetime' => '2020-01-10 16:00:00', 'result' => 1],
            [ 'teacher_id' => 110011, 'lesson_datetime' => '2020-01-10 17:00:00', 'result' => 1],
            [ 'teacher_id' => 110011, 'lesson_datetime' => '2020-01-10 21:00:00', 'result' => 2],
            [ 'teacher_id' => 110011, 'lesson_datetime' => '2020-01-10 23:00:00', 'result' => 1],
            [ 'teacher_id' => 110030, 'lesson_datetime' => '2020-01-10 21:30:00', 'result' => 1],
            [ 'teacher_id' => 110030, 'lesson_datetime' => '2020-01-10 20:00:00', 'result' => 1],
            [ 'teacher_id' => 110030, 'lesson_datetime' => '2020-01-10 19:30:00', 'result' => 1],
            [ 'teacher_id' => 110023, 'lesson_datetime' => '2020-01-10 17:00:00', 'result' => 1],
            [ 'teacher_id' => 110023, 'lesson_datetime' => '2020-01-17 17:00:00', 'result' => 1],
            [ 'teacher_id' => 110023, 'lesson_datetime' => '2020-01-08 16:30:00', 'result' => 2],
            [ 'teacher_id' => 110033, 'lesson_datetime' => '2020-01-07 15:30:00', 'result' => 1],
            [ 'teacher_id' => 110033, 'lesson_datetime' => '2020-01-06 16:30:00', 'result' => 2],
            [ 'teacher_id' => 110033, 'lesson_datetime' => '2020-01-07 10:30:00', 'result' => 1],
        ];
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->model->insert($this->data);
    }
}
