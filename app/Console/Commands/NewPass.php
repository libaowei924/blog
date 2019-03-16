<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use App\Pro;
use Hash;
class NewPass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:pass {pass}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成一个新的口令';
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
     * @return mixed
     */
    public function handle()
    {
        //赋值
        $pass = $this->argument('pass');
        //创建口令
        $state = Pro::create([
            'name' => '',
            'pw' => Hash::make($pass),
            'role' => 1,
            'states' => 1,
        ]);
        //判断是否成功
        if($state)
        {
            $this->info('成功！您的密码是'.$pass);
        }
        else
        {
            $this->error('失败！');
        }
    }
}