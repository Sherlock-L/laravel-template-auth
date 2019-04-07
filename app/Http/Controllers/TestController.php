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
        $data = [
            'name'=>"sherlock_l",
            'age'=>18,
            'sex'=>"男",
        ];
        return view('testVue');
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