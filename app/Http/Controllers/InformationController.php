<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /***
     * 返回班级列表
     * @return \Illuminate\Http\JsonResponse
     */
    public function getclass(){
        $data = Information::returnclass();
        return $data ?
            json_success('查询成功',$data,200) :
            json_fail('查询失败',$data,100);
    }

}