<?php
/**
 * Created by PhpStorm.
 * User: gay
 * Date: 2019/3/31
 * Time: 10:32
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
class TestController extends Controller
{
        public function index(){
            dd(Auth::id());
            $user = Auth::user();

        // 获取当前通过认证的用户 ID...
            $id = Auth::id();
            return "hello world!";
        }
}