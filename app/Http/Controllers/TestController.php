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

            dd('test');
        }
}