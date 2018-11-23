<?php
/**
 * Created by IntelliJ IDEA.
 * User: otamac
 * Date: 2018/09/09
 * Time: 16:25
 */

namespace App\Http\Controllers;

use App\User;

class ChartController extends Controller
{
    /**
     * 指定ユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

        $chart = 'aiueo';

        return view('chart', compact('chart'));
    }
}
