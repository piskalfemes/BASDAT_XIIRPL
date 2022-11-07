<?php

// Tugas Array
$teman1 = ['piskal','parjo','doni','manted','indut'];
$teman2 = ['nazhif','dono','rafi','arjun','rere'];

echo $teman1[0]," ",$teman2[0]," ",$teman1[1]," ",$teman2[1]," ",$teman1[2]," ",$teman2[2]," ",$teman1[3]," ",$teman2[3]," ",$teman1[4]," ",$teman2[4];
echo "<br />";
// Tambah teman
array_push($teman1,'udin');
array_push($teman2,'dono');

echo $teman1[0]," ",$teman2[0]," ",$teman1[1]," ",$teman2[1]," ",$teman1[2]," ",$teman2[2]," ",$teman1[3]," ",$teman2[3]," ",$teman1[4]," ",$teman2[4]," ",$teman1[5]," ",$teman2[5];

?>