<?php

namespace Database\Seeders;

use App\Models\TrnTeacher;
use Illuminate\Database\Seeder;

class TrnTeacherSeeder extends Seeder
{
    /**
     * @var array Record container
     */
    protected $data = [];

    /**
     * Class constructor
     * @param TrnTeacher $teacher
     */
    public function __construct(protected TrnTeacher $model)
    {
        $this->data = [
            [ 'id' => 110250, 'nickname' => 'John D', 'status' => '1' ],
            [ 'id' => 110023, 'nickname' => 'Mike', 'status' => '0' ],
            [ 'id' => 110011, 'nickname' => 'Luca', 'status' => '1' ],
            [ 'id' => 110033, 'nickname' => 'Scottie', 'status' => '2' ],
            [ 'id' => 110030, 'nickname' => 'Steph C', 'status' => '1' ],
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
