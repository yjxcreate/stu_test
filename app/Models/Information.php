<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = "specialized";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function returnclass(){
        try{
            $data = Information::select('class')
                ->get();
            return $data;

        }catch (\Exception $e) {
            logError("查询失败！", [$e->getMessage()]);
            return false;
        }
    }
}