<?php
namespace app\index\controller;
// 对应 测试二  ok
use app\index\model\User;

// load_trait('controller/Test');   // no
use think\Controller;
use think\Db;
class Index extends Controller
{
	// use \traits\controller\Test;  //  no



    public function index()
    {
    	// 测试一 调用 /extend/my/Test.php下的 类    ok
    	// $test = new \my\Test();
    	// $test->sayHello();

		// 测试二 调用model下的方法   ok
		// $user = new User();
		// echo $user->sayHelloTwo();

    	// 测试三 失败的 no
		// $test = new Test();
  		// $test->test();

  		// 测试json
  		// echo 111;
    	// return ['name'=>'thinkphp','status'=>1];


    	// 数据库使用
    	$data = db('fa_test')->select();
    	// echo "<pre>";
    	// print_r($data);
    	// $this->display('index.html');
    	// return view('Index/index',$data);
    	return $this->engine('php')->fetch('Index/index',$data);

    }

    // public function hellos($name = 'ThinkPHP5')
    // {
    // 	// echo 11111;
    //     return 'hello,' . $name;
    // }
}
