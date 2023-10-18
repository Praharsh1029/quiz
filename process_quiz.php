
<?php
require "functions.php";
require_once "config.php";

check_login();
$score = $_COOKIE['score'];
$quiz = $_COOKIE['quiz'];
$res=$_SESSION['USER']->id;
$res1="q$quiz";
$sel="select * from stats where userid=$res";
$r=$link->query($sel);
$row = $r->fetch_assoc();
$ma = $row[$res1];
if($ma==NULL){
    $sql="update stats set $res1=$score where userid=$res";
    $link->query($sql);
}

$count=0;
$sel1="select * from stats where userid=$res";
$all=$link->query($sel);
$data=array();
while($row=mysqli_fetch_assoc($all)){
    $q1=$row['q1'];
    $q2=$row['q2'];
    $q3=$row['q3'];
    $q4=$row['q4'];
    $q5=$row['q5'];
    $q6=$row['q6'];
    $q7=$row['q7'];
    $q8=$row['q8'];
    $q9=$row['q9'];
    $q10=$row['q10'];
    $q11=$row['q11'];
    $q12=$row['q12'];
    $q13=$row['q13'];
    $q14=$row['q14'];
    $q15=$row['q15'];
    $q16=$row['q16'];
    $q17=$row['q17'];
    $q18=$row['q18'];
    $q19=$row['q19'];
    $q20=$row['q20'];
    $q21=$row['q21'];
    $q22=$row['q22'];
    $q23=$row['q23'];
    $q24=$row['q24'];
    $q25=$row['q25'];
}
$acc=0;
$s=0;
$c=0;
if($q1!=NULL){
$c=$c+1;
$s=$s+$q1;
}
if($q2!=NULL){
$c=$c+1;
$s=$s+$q2;

}
if($q3!=NULL){
$c=$c+1;
$s=$s+$q3;
}

if($q4!=NULL){
    $c=$c+1;
    $s=$s+$q4;
}
if($q5!=NULL){
    $c=$c+1;
    $s=$s+$q5;
}

if($q6!=NULL){
    $c=$c+1;
    $s=$s+$q6;
}
if($q7!=NULL){
    $c=$c+1;
    $s=$s+$q7;
}

if($q8!=NULL){
    $c=$c+1;
    $s=$s+$q8;
}

if($q9!=NULL){
    $c=$c+1;
    $s=$s+$q9;
}

if($q10!=NULL){
    $c=$c+1;
    $s=$s+$q10;
}

if($q11!=NULL){
    $c=$c+1;
    $s=$s+$q11;
}
if($q12!=NULL){
    $c=$c+1;
    $s=$s+$q12;
}
if($q13!=NULL){
    $c=$c+1;
    $s=$s+$q13;
}
if($q14!=NULL){
    $c=$c+1;
    $s=$s+$q14;
}
if($q15!=NULL){
    $c=$c+1;
    $s=$s+$q15;
}

if($q16!=NULL){
    $c=$c+1;
    $s=$s+$q16;
}
if($q17!=NULL){
    $c=$c+1;
    $s=$s+$q18;
}
if($q19!=NULL){
    $c=$c+1;
    $s=$s+$q19;
}
if($q20!=NULL){
    $c=$c+1;
    $s=$s+$q20;
}
if($q21!=NULL){
    $c=$c+1;
    $s=$s+$q21;
}
if($q22!=NULL){
    $c=$c+1;
    $s=$s+$q22;
}
if($q23!=NULL){
    $c=$c+1;
    $s=$s+$q23;
}
if($q24!=NULL){
    $c=$c+1;
    $s=$s+$q24;
}
if($q25!=NULL){
    $c=$c+1;
    $s=$s+$q25;
}


$acc=($s*100)/(6*$c);


$sql="update stats set num_quizzes=$c where userid=$res";
$link->query($sql);

$sql="update stats set totalscore=$s where userid=$res";
$link->query($sql);

$sql="update stats set accuracy=$acc where userid=$res";
$link->query($sql);

?>

