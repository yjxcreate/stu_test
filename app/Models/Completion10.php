<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Completion10 extends Model
{
    protected $table = "completion10";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function establish(
        $student_id,
        $ig,
        $rg,
        $i,
        $rs,
        $ix,
        $vm,
        $rf,
        $vx,
        $xz1,
        $xz2,
        $xz3,
        $xz4
    ){
        try {
            $res = Completion10::create(
                [
                    'ig' => $ig,
                    'rg' => $rg,
                    'i' => $i,
                    'rs' => $rs,
                    'ix' => $ix,
                    'vm' => $vm,
                    'rf' => $rf,
                    'vx' => $vx,
                    'xz1' => $xz1,
                    'xz2' => $xz2,
                    'xz3' => $xz3,
                    'xz4' => $xz4,

                    'student_id' => $student_id
                ]

            );
            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }
    }

    public static function show($student_id)
    {
        try {

            $res = Completion10::
            join('student', 'student.id', '=', 'completion10.student_id')
                ->where('student.id', '=', $student_id)
                ->select(
                    'student.student_name',
                    'student.student_level',
                    'student.student_spec',
                    'student.student_year',
                    'student.student_class',
                    'student.student_num',
                    'student.experiment_name',
                    'student.course_name',
                    'student.student_date',
                    'student.student_teacher',

                    'student.grade',
                    'student.grade_xp',


                    'ig',
                    'rg',
                    'i',
                    'rs',
                    'ix',
                    'vm',
                    'rf',
                    'vx',
                    'xz1',
                    'xz2',
                    'xz3',
                    'xz4'
                )->get();

            return $res ?
                $res :
                false;
        } catch (\Exception $e) {
            logError('搜索错误', [$e->getMessage()]);
            return false;
        }


    }
}