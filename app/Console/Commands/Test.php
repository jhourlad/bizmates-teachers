<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:answer {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display answers to test questions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');

        $sql = match ($id) {
            '1' => "SELECT CONCAT('T', LPAD(t.id, 11, 0)) AS ID, t.nickname AS Nickname, t.status AS Status, (SELECT GROUP_CONCAT( (SELECT CASE r.role WHEN 1 THEN 'Trainer' WHEN 2 THEN 'Assessor' WHEN 3 THEN 'Staff' END) SEPARATOR '/') FROM trn_teacher_role AS r WHERE r.teacher_id = t.id) AS Roles FROM `trn_teacher` AS t;",
            '2' => "SELECT t.id AS ID, t.nickname AS Nickname, SUM(IF(e.result = '1', 1, 0)) AS Taught, SUM(IF(e.result = '2', 1, 0)) AS NoShow, (SELECT COUNT(tt.status) AS Open FROM trn_time_table AS tt WHERE tt.teacher_id = t.id AND tt.status = '1') AS Open, (SELECT COUNT(tt.status) FROM trn_time_table AS tt WHERE tt.teacher_id = t.id AND tt.status = '3') AS Reserved FROM `trn_teacher` t JOIN trn_evaluation AS e ON e.teacher_id = t.id WHERE t.status <> '0' GROUP BY t.id;",
            default => null
        };

        if( !$sql ) dd('Invalid test ID: ' . $id);

        $this->do($sql);
    }

    protected function do($sql)
    {
        $user = env('DB_USERNAME');
        $db = env('DB_DATABASE');
        $command = "mysql -u $user -p $db -e \"$sql\"";

        ob_start();
        passthru($command);
        $output = ob_get_contents();
        ob_end_clean();

        echo PHP_EOL . PHP_EOL . $sql . PHP_EOL . PHP_EOL;
        print $output . PHP_EOL;
    }

}
