<?php

namespace Database\Seeders;

use App\Models\TrnTimeTable;
use Illuminate\Database\Seeder;

class TrnTimeTableSeeder extends Seeder
{
    /**
     * @var array Record container
     */
    protected $data = [];

    /**
     * Class constructor
     * @param TrnTimeTable $model
     */
    public function __construct(protected TrnTimeTable $model)
    {
        $this->data = [
            [ 'teacher_id' => 110250, 'status' => 1, 'lesson_datetime' => '2020-10-11 17:00:00'],
            [ 'teacher_id' => 110250, 'status' => 1, 'lesson_datetime' => '2020-10-11 16:30:00'],
            [ 'teacher_id' => 110250, 'status' => 1, 'lesson_datetime' => '2020-10-10 16:00:00'],
            [ 'teacher_id' => 110011, 'status' => 1, 'lesson_datetime' => '2020-10-10 17:00:00'],
            [ 'teacher_id' => 110011, 'status' => 2, 'lesson_datetime' => '2020-10-11 21:00:00'],
            [ 'teacher_id' => 110011, 'status' => 3, 'lesson_datetime' => '2020-10-10 23:00:00'],
            [ 'teacher_id' => 110030, 'status' => 1, 'lesson_datetime' => '2020-10-10 21:30:00'],
            [ 'teacher_id' => 110030, 'status' => 1, 'lesson_datetime' => '2020-10-10 20:00:00'],
            [ 'teacher_id' => 110030, 'status' => 1, 'lesson_datetime' => '2020-10-10 19:30:00'],
            [ 'teacher_id' => 110023, 'status' => 1, 'lesson_datetime' => '2020-10-10 17:00:00'],
            [ 'teacher_id' => 110023, 'status' => 1, 'lesson_datetime' => '2020-10-11 17:00:00'],
            [ 'teacher_id' => 110023, 'status' => 2, 'lesson_datetime' => '2020-10-11 16:30:00'],
            [ 'teacher_id' => 110033, 'status' => 1, 'lesson_datetime' => '2020-10-11 15:30:00'],
            [ 'teacher_id' => 110033, 'status' => 2, 'lesson_datetime' => '2020-10-11 16:30:00'],
            [ 'teacher_id' => 110033, 'status' => 1, 'lesson_datetime' => '2020-10-11 10:30:00'],
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
