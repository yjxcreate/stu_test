<?php

namespace App\Http\Controllers;

use App\Http\Requests\Completion9Request;
use App\Http\Requests\PdfRequest;
use App\Http\Requests\SorephotoRequest;
use App\Models\Completion9;
use App\Models\Student;
use Illuminate\Http\Request;
use Mpdf;

class Completion9Controller extends Controller
{
    public function completion9(Completion9Request $request){
        $number = $request['number'];
        $constant = $request['constant'];
        $a1 = $request['a1'];
        $a2 = $request['a2'];
        $a3 = $request['a3'];
        $a4 = $request['a4'];
        $a5 = $request['a5'];
        $a6 = sprintf("%.3f",$request['a6']);
        $b1 = $request['b1'];
        $b2 = $request['b2'];
        $b3 = $request['b3'];
        $b4 = $request['b4'];
        $b5 = $request['b5'];
        $b6 = sprintf("%.3f",$request['b6']);
        $c1 = $request['c1'];
        $c2 = $request['c2'];
        $c3 = $request['c3'];
        $c4 = $request['c4'];
        $c5 = $request['c5'];
        $c6 = sprintf("%.3f",$request['c6']);
        $d1 = $request['d1'];
        $d2 = $request['d2'];
        $d3 = $request['d3'];
        $d4 = $request['d4'];
        $d5 = $request['d5'];
        $d6 = sprintf("%.3f",$request['d6']);
        $e1 = $request['e1'];
        $e2 = $request['e2'];
        $e3 = $request['e3'];
        $e4 = $request['e4'];
        $e5 = $request['e5'];
        $e6 = sprintf("%.3f",$request['e6']);
        $f1 = $request['f1'];
        $f2 = $request['f2'];
        $f3 = $request['f3'];
        $f4 = $request['f4'];
        $f5 = $request['f5'];
        $f6 = sprintf("%.3f",$request['f6']);
        $g1 = $request['g1'];
        $g2 = $request['g2'];
        $g3 = $request['g3'];
        $g4 = $request['g4'];
        $g5 = $request['g5'];
        $g6 = sprintf("%.3f",$request['g6']);
        $h1 = $request['h1'];
        $h2 = $request['h2'];
        $h3 = $request['h3'];
        $h4 = $request['h4'];
        $h5 = $request['h5'];
        $h6 = sprintf("%.3f",$request['h6']);
        $i1 = $request['i1'];
        $i2 = $request['i2'];
        $i3 = $request['i3'];
        $i4 = $request['i4'];
        $i5 = $request['i5'];
        $i6 = sprintf("%.3f",$request['i6']);
        $j1 = $request['j1'];
        $j2 = $request['j2'];
        $j3 = $request['j3'];
        $j4 = $request['j4'];
        $j5 = $request['j5'];
        $j6 = sprintf("%.3f",$request['j6']);
        $k1 = $request['k1'];
        $k2 = $request['k2'];
        $k3 = $request['k3'];
        $k4 = $request['k4'];
        $k5 = $request['k5'];
        $k6 = sprintf("%.3f",$request['k6']);
        $l1 = $request['l1'];
        $l2 = $request['l2'];
        $l3 = $request['l3'];
        $l4 = $request['l4'];
        $l5 = $request['l5'];
        $l6 = sprintf("%.3f",$request['l6']);
        $m1 = $request['m1'];
        $m2 = $request['m2'];
        $m3 = $request['m3'];
        $m4 = $request['m4'];
        $m5 = $request['m5'];
        $m6 = sprintf("%.3f",$request['m6']);
        $n1 = $request['n1'];
        $n2 = $request['n2'];
        $n3 = $request['n3'];
        $n4 = $request['n4'];
        $n5 = $request['n5'];
        $n6 = sprintf("%.3f",$request['n6']);
        $o1 = $request['o1'];
        $o2 = $request['o2'];
        $o3 = $request['o3'];
        $o4 = $request['o4'];
        $o5 = $request['o5'];
        $o6 = sprintf("%.3f",$request['o6']);
        $p1 = $request['p1'];
        $p2 = $request['p2'];
        $p3 = $request['p3'];
        $p4 = $request['p4'];
        $p5 = $request['p5'];
        $p6 = sprintf("%.3f",$request['p6']);
        $xz1 = $request['xz1'];
        $xz2 = $request['xz2'];
        $student_id = $request['student_id'];
        $tu = $request['tu'];
        $fraction = $request['fraction'];
        $grade_xp = $request['grade_xp'];

        $res1 = Completion9::establish($request);

        Student::statechange($student_id);
        Completion9::changetustate($student_id);

        $grade = 35;

        $k = 0.173;
        $is = 5.00;
        if($constant >= 200 && $constant <= 350)
        {
            $grade += 3;
        }
        if ($a5 == ((abs($a1) + abs($a2) + abs($a3) + abs($a4)) * 0.25)) {
            $grade += 1;
        }
        if($a6 == $a5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($b5 == ((abs($b1) + abs($b2) + abs($b3) + abs($b4)) * 0.25)) {
            $grade += 1;
        }
        if($b6 == $b5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($c5 == ((abs($c1) + abs($c2) + abs($c3) + abs($c4)) * 0.25)) {
            $grade += 1;
        }
        if($c6 == $c5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($d5 == ((abs($d1) + abs($d2) + abs($d3) + abs($d4)) * 0.25)) {
            $grade += 1;
        }
        if($d6 == $d5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($e5 == ((abs($e1) + abs($e2) + abs($e3) + abs($e4)) * 0.25)) {
            $grade += 1;
        }
        if($e6 == $e5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($f5 == ((abs($f1) + abs($f2) + abs($f3) + abs($f4)) * 0.25)) {
            $grade += 1;
        }
        if($f6 == $f5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($g5 == ((abs($g1) + abs($g2) + abs($g3) + abs($g4)) * 0.25)) {
            $grade += 1;
        }
        if($g6 == $g5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($h5 == ((abs($h1) + abs($h2) + abs($h3) + abs($h4)) * 0.25)) {
            $grade += 1;
        }
        if($h6 == $h5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($i5 == ((abs($i1) + abs($i2) + abs($i3) + abs($i4)) * 0.25)) {
            $grade += 1;
        }
        if($i6 == $i5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($j5 == ((abs($j1) + abs($j2) + abs($j3) + abs($j4)) * 0.25)) {
            $grade += 1;
        }
        if($j6 == $j5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($k5 == ((abs($k1) + abs($k2) + abs($k3) + abs($k4)) * 0.25)) {
            $grade += 1;
        }
        if($k6 == $k5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($l5 == ((abs($l1) + abs($l2) + abs($l3) + abs($l4)) * 0.25)) {
            $grade += 1;
        }
        if($l6 == $l5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($m5 == ((abs($m1) + abs($m2) + abs($m3) + abs($m4)) * 0.25)) {
            $grade += 1;
        }
        if($m6 == $m5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($n5 == ((abs($n1) + abs($n2) + abs($n3) + abs($n4)) * 0.25)) {
            $grade += 1;
        }
        if($n6 == $n5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($o5 == ((abs($o1) + abs($o2) + abs($o3) + abs($o4)) * 0.25)) {
            $grade += 1;
        }
        if($o6 == $o5 / ($k * $is))
        {
            $grade += 1;
        }
        if ($p5 == ((abs($p1) + abs($p2) + abs($p3) + abs($p4)) * 0.25)) {
            $grade += 1;
        }
        if($p6 == $p5 / ($k * $is))
        {
            $grade += 1;
        }
        

        $grade = $grade + $grade_xp;
        $res2 = Student::grade($student_id, $grade,$grade_xp);

        return $res1 && $res2 ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);

    }

    public function pdf9(Request $request)
    {

        $student_id = $request['student_id'];

        $student_a = Completion9::show($student_id);

        $student_b = json_decode($student_a);

        $number = $student_b[0]->number;
        $constant = $student_b[0]->constant;
        $a1 = $student_b[0]->a1;
        $a2	= $student_b[0]->a2;
        $a3 = $student_b[0]->a3;
        $a4 = $student_b[0]->a4;
        $a5 = $student_b[0]->a5;
        $a6 = $student_b[0]->a6;

        $b1 = $student_b[0]->b1;
        $b2	= $student_b[0]->b2;
        $b3 = $student_b[0]->b3;
        $b4 = $student_b[0]->b4;
        $b5 = $student_b[0]->b5;
        $b6 = $student_b[0]->b6;

        $c1 = $student_b[0]->c1;
        $c2	= $student_b[0]->c2;
        $c3 = $student_b[0]->c3;
        $c4 = $student_b[0]->c4;
        $c5 = $student_b[0]->c5;
        $c6 = $student_b[0]->c6;

        $d1 = $student_b[0]->d1;
        $d2	= $student_b[0]->d2;
        $d3 = $student_b[0]->d3;
        $d4 = $student_b[0]->d4;
        $d5 = $student_b[0]->d5;
        $d6 = $student_b[0]->d6;

        $e1 = $student_b[0]->e1;
        $e2	= $student_b[0]->e2;
        $e3 = $student_b[0]->e3;
        $e4 = $student_b[0]->e4;
        $e5 = $student_b[0]->e5;
        $e6 = $student_b[0]->e6;

        $f1 = $student_b[0]->f1;
        $f2	= $student_b[0]->f2;
        $f3 = $student_b[0]->f3;
        $f4 = $student_b[0]->f4;
        $f5 = $student_b[0]->f5;
        $f6 = $student_b[0]->f6;

        $g1 = $student_b[0]->g1;
        $g2	= $student_b[0]->g2;
        $g3 = $student_b[0]->g3;
        $g4 = $student_b[0]->g4;
        $g5 = $student_b[0]->g5;
        $g6 = $student_b[0]->g6;

        $h1 = $student_b[0]->h1;
        $h2	= $student_b[0]->h2;
        $h3 = $student_b[0]->h3;
        $h4 = $student_b[0]->h4;
        $h5 = $student_b[0]->h5;
        $h6 = $student_b[0]->h6;

        $i1 = $student_b[0]->i1;
        $i2	= $student_b[0]->i2;
        $i3 = $student_b[0]->i3;
        $i4 = $student_b[0]->i4;
        $i5 = $student_b[0]->i5;
        $i6 = $student_b[0]->i6;

        $j1 = $student_b[0]->j1;
        $j2	= $student_b[0]->j2;
        $j3 = $student_b[0]->j3;
        $j4 = $student_b[0]->j4;
        $j5 = $student_b[0]->j5;
        $j6 = $student_b[0]->j6;

        $k1 = $student_b[0]->k1;
        $k2	= $student_b[0]->k2;
        $k3 = $student_b[0]->k3;
        $k4 = $student_b[0]->k4;
        $k5 = $student_b[0]->k5;
        $k6 = $student_b[0]->k6;

        $l1 = $student_b[0]->l1;
        $l2	= $student_b[0]->l2;
        $l3 = $student_b[0]->l3;
        $l4 = $student_b[0]->l4;
        $l5 = $student_b[0]->l5;
        $l6 = $student_b[0]->l6;

        $m1 = $student_b[0]->m1;
        $m2	= $student_b[0]->m2;
        $m3 = $student_b[0]->m3;
        $m4 = $student_b[0]->m4;
        $m5 = $student_b[0]->m5;
        $m6 = $student_b[0]->m6;

        $n1 = $student_b[0]->n1;
        $n2	= $student_b[0]->n2;
        $n3 = $student_b[0]->n3;
        $n4 = $student_b[0]->n4;
        $n5 = $student_b[0]->n5;
        $n6 = $student_b[0]->n6;

        $o1 = $student_b[0]->o1;
        $o2	= $student_b[0]->o2;
        $o3 = $student_b[0]->o3;
        $o4 = $student_b[0]->o4;
        $o5 = $student_b[0]->o5;
        $o6 = $student_b[0]->o6;

        $p1 = $student_b[0]->p1;
        $p2	= $student_b[0]->p2;
        $p3 = $student_b[0]->p3;
        $p4 = $student_b[0]->p4;
        $p5 = $student_b[0]->p5;
        $p6 = $student_b[0]->p6;

        $xz1 = $student_b[0]->xz1;
        $xz2 = $student_b[0]->xz2;

        $tu = $student_b[0]->tu;

        $student_name = $student_b[0]->student_name;
        $student_level = $student_b[0]->student_level;
        $student_spec = $student_b[0]->student_spec;
        $student_year = $student_b[0]->student_year;
        $student_class = $student_b[0]->student_class;
        $student_num = $student_b[0]->student_num;
        $experiment_name = $student_b[0]->experiment_name;
        $course_name = $student_b[0]->course_name;
        $student_date = $student_b[0]->student_date;
        $student_teacher = $student_b[0]->student_teacher;
        $grade = $student_b[0]->grade;
        $grade_xp = $student_b[0]->grade_xp;



        $res = view('huoer', [
            'name' => $student_name,
            'student_level' => $student_level,
            'student_spec' => $student_spec,
            'student_year' => $student_year,
            'experiment_name' => $experiment_name,
            'course_name' => $course_name,
            'student_date' => $student_date,
            'student_teacher' => $student_teacher,
            'student_num' => $student_num,
            'student_class' => $student_class,
            'grade' => $grade,
            'grade_xp' => $grade_xp,
            'grade_tk' => ($grade - $grade_xp),



            'number' => $number,
            'constant' => $constant,
            'a1' => $a1,
            'a2' => $a2,
            'a3' => $a3,
            'a4' => $a4,
            'a5' => $a5 ,
            'a6' => $a6 ,
            'b1' => $b1 ,
            'b2' => $b2 ,
            'b3' => $b3 ,
            'b4' => $b4 ,
            'b5' => $b5 ,
            'b6' => $b6 ,
            'c1' => $c1 ,
            'c2' => $c2 ,
            'c3' => $c3 ,
            'c4' => $c4 ,
            'c5' => $c5 ,
            'c6' => $c6 ,
            'd1' => $d1 ,
            'd2' => $d2 ,
            'd3' => $d3 ,
            'd4' => $d4 ,
            'd5' => $d5 ,
            'd6' => $d6 ,
            'e1' => $e1 ,
            'e2' => $e2 ,
            'e3' => $e3 ,
            'e4' => $e4 ,
            'e5' => $e5 ,
            'e6' => $e6 ,
            'f1' => $f1 ,
            'f2' => $f2 ,
            'f3' => $f3 ,
            'f4' => $f4 ,
            'f5' => $f5 ,
            'f6' => $f6 ,
            'g1' => $g1 ,
            'g2' => $g2 ,
            'g3' => $g3 ,
            'g4' => $g4 ,
            'g5' => $g5 ,
            'g6' => $g6 ,
            'h1' => $h1 ,
            'h2' => $h2 ,
            'h3' => $h3 ,
            'h4' => $h4 ,
            'h5' => $h5 ,
            'h6' => $h6 ,
            'i1' => $i1 ,
            'i2' => $i2 ,
            'i3' => $i3 ,
            'i4' => $i4 ,
            'i5' => $i5 ,
            'i6' => $i6 ,
            'j1' => $j1 ,
            'j2' => $j2 ,
            'j3' => $j3 ,
            'j4' => $j4 ,
            'j5' => $j5 ,
            'j6' => $j6 ,
            'k1' => $k1 ,
            'k2' => $k2 ,
            'k3' => $k3 ,
            'k4' => $k4 ,
            'k5' => $k5 ,
            'k6' => $k6 ,
            'l1' => $l1 ,
            'l2' => $l2 ,
            'l3' => $l3 ,
            'l4' => $l4 ,
            'l5' => $l5 ,
            'l6' => $l6 ,
            'm1' => $m1 ,
            'm2' => $m2 ,
            'm3' => $m3 ,
            'm4' => $m4 ,
            'm5' => $m5 ,
            'm6' => $m6 ,
            'n1' => $n1 ,
            'n2' => $n2 ,
            'n3' => $n3 ,
            'n4' => $n4 ,
            'n5' => $n5 ,
            'n6' => $n6 ,
            'o1' => $o1 ,
            'o2' => $o2 ,
            'o3' => $o3 ,
            'o4' => $o4 ,
            'o5' => $o5 ,
            'o6' => $o6 ,
            'p1' => $p1 ,
            'p2' => $p2 ,
            'p3' => $p3 ,
            'p4' => $p4 ,
            'p5' => $p5 ,
            'p6' => $p6 ,
            'xz1' => $xz1 ,
            'xz2' => $xz2 ,
            'student_id' => $student_id ,
            'tu' => $tu

        ]);

        $mpdf = new Mpdf\Mpdf(['utf-8', 'A4', 16, '', 10, 10, 15, 15]);


        //$mpdf->showImageErrors = true;

        $mpdf->WriteHTML($res);

        $mpdf->Output($student_num.'-'.$student_name.'-'.$experiment_name.".pdf", "I");

        exit;
    }

    public function scorephoto(SorephotoRequest $request)
    {

        $res=Completion9::establishphoto($request);
        return $res ?
            json_success('操作成功!', null, 200) :
            json_fail('操作失败!', null, 100);
    }

    public function returnphoto(PdfRequest $request)
    {
        $res=Completion9::returnurl($request);
        return $res ?
            json_success('操作成功!', $res, 200) :
            json_fail('操作失败!', null, 100);
    }
}
