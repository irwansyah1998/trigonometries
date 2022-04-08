<?php

function squarearea1($data1in){
// $AB,$BC,$A,$B,$C
	// search t perlu tambahan fungsi kuadrat
	$RadB=deg2rad($data1in['B']);
	$cosB=cos($RadB);
	$sinusB=sin($RadB);
	$BC2=$data1in['BC']*$data1in['BC'];
	$AB2=$data1in['AB']*$data1in['AB'];
	$t1=$BC2+$AB2;
	$t2=(2*$data1in['BC']*$data1in['AB'])*round($cosB,3);
	$t_total=round(sqrt(($t1-$t2)),3);
	$t_total2=$t_total*$t_total;
	$t_bulat=round($t_total,3);
	$c2_1=($t_bulat*$t_bulat+$AB2-$BC2);
	$c2_2=(2*$t_bulat*$data1in['BC']);
	$c2=$c2_1/$c2_2;
	$acosc2=acos($c2);
	$area=($data1in['BC']*$data1in['AB']*$sinusB)/2;
	return $data1out = array('t' => $t_bulat,'c2' => $acosc2, 'area'=>$area );
}

function squarearea2($data2in){
// $DA,$CD,$A,$C,$D
	$RadD=deg2rad($data2in['D']);
	$cosD=cos($RadD);
	$sinusD=round(sin($RadD),7);
	$DA2=$data2in['DA']*$data2in['DA'];
	$CD2=$data2in['CD']*$data2in['CD'];
	$t1=$DA2+$CD2;
	$t2=(2*$data2in['DA']*$data2in['CD'])*$cosD;
	$t_total=sqrt(($t1-$t2));
	$t_total2=$t_total*$t_total;
	$t_bulat=round($t_total,3);
	$a1_1=($t_bulat*$t_bulat+$CD2-$DA2);
	$a1_2=(2*$t_bulat*$data2in['DA']);
	$a1=$a1_1/$a1_2;
	$acosa1=acos($a1);
	$area=($data2in['DA']*$data2in['CD']*$sinusD)/2;
	return $data1out = array('t' => $t_bulat,'a1' => $acosa1, 'area'=>$area );
}


?>