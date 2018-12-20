<?php
	// 此文件对应测试二
	namespace app\index\model;

	use think\Model;
	use think\Db;

	class User extends Model{
		public function sayHelloTwo(){
			return "hello GaoYu~";
		}
		public function faTest(){
			return db('fa_test')->select();
		}
	}