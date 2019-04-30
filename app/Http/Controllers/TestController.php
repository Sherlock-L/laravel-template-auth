<?php
/**
 * Created by PhpStorm.
 * User: gay
 * Date: 2019/3/31
 * Time: 10:32
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function index(Request $request){
        echo "初始: ".memory_get_usage()." 字节 <br>:";
        $array = range(1, 1000000);
        $a  = $array;
        echo "赋值a时: ".memory_get_usage()." 字节  <br>";
        function dummy($array) {}

        $i = 0;
        $start = microtime(true);
        while($i++ < 100) {
            dummy($array);
        }
        printf("Used %sS <br>", microtime(true) - $start);

        $b = &$array; //注意这里, 假设我不小心把这个Array引用给了一个变量
        echo "赋值b时: ".memory_get_usage()." 字节  <br>";
        $b[] = 1;
        echo "修改B时: ".memory_get_usage()." 字节  <br>";
        $i = 0;
        $start = microtime(true);
        while($i++ < 1) {
            dummy($array);

        }
        printf("Used %ss <br>", microtime(true) - $start);
        $data = [
            'name'=>"sherlock_l",
            'age'=>18,
            'sex'=>"男",
        ];
//        return $data;
//        return view('testVue');
        }

    public function info(Request $request){
        $data = [
            'name'=>"sherlock_l",
            'age'=>18,
            'sex'=>"男",
        ];
        return ['data'=>$data];
    }

    public function save(Request $request){
        return ['data'=>$request->all()];
    }
}