<?php

namespace Database\Seeders;

use App\Models\TrnTeacherRole;
use Illuminate\Database\Seeder;

class TrnTeacherRoleSeeder extends Seeder
{
    /**
     * @var array Record container
     */
    protected $data = [];

    /**
     * Class constructor
     * @param TrnTeacherRole $teacher
     */
    public function __construct(protected TrnTeacherRole $model)
    {
        $this->data = [
            [ 'teacher_id' => 110250, 'role' => 1],
            [ 'teacher_id' => 110250, 'role' => 2],
            [ 'teacher_id' => 110250, 'role' => 3],
            [ 'teacher_id' => 110011, 'role' => 1],
            [ 'teacher_id' => 110030, 'role' => 1],
            [ 'teacher_id' => 110030, 'role' => 2],
            [ 'teacher_id' => 110023, 'role' => 1],
            [ 'teacher_id' => 110033, 'role' => 3],
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
