<?php
$g = array( 
'gademn' => 'wow',
'tab' => 'notworking',
'idkwhy' => 'butmaybe',
'icfix' => 'needtotry',
'timeis$' => array( 'lessgo', 'tofixthetab'));
echo $g['tab'];
//----------------------
echo '<hr>'; 
$h = true;
$j = false;
echo 'test: $h<br>';
echo "test: $h<hr>"; 
//--------------------
$name = 'Chel';
$surname = 'Super';
echo $name . ' ' . $surname;
echo '<hr>';
//------------------------------
echo '5111+889=';
$u = 5111;
$i = 889;
$res = $u+$i;
echo $res;
echo '<br>';
echo (10+150) * (70-50) / 40;
echo '<hr>';
//------------------------------
$weather = 'ясно';
$temp = 30;
if ($weather == 'ясно' and $temp >= 20) {
  echo 'Прогноз: ' . 'погода норм и на улице тепло:)';
}
else if($weather == 'пасмурно' and $temp <= 10){
  echo 'Прогноз: ' . 'погода не очень мужик, так еще и холодно:(';
}
else{
  echo 'Прогноз: ' . 'какая то неопределенность, лучше посиди дома:/';
}
echo '<hr>';
//-----------------------------
for($thing = 0; $thing <= 10; $thing++ )
{
  echo $thing;
  if($thing % 2 != 0)
  {
    echo '<--не четное';
  }
  else{
    echo '<-- четное';
  }
  echo '<br>';
}
echo '<hr>';
//------------------------------
$tired = 0;
while ($tired <= 5)
{
  echo 'устал на' . $tired++ . 'из 5'. '<br/>';
}
echo '<hr>';
//-----------------------------

$iqeverysec = array( 100,110,120,130,140);
foreach($iqeverysec as $levelup){
  echo 'IQ every second' . ($levelup+5) . '<br>' ;
}
echo'<hr>';
//-------------------------------
function me($motivation, $selfcontrol)
{
 if ($motivation > $selfcontrol){
    echo 'супер мотивация: ' . $motivation;
  }
  else if($motivation == $selfcontrol){
    echo 'супер мотивация: ' . $motivation . ', плюс самоконтроль: ' . $selfcontrol;
  }
  else{
    echo'мотивации нет, но самоконтроль всегда на месте: '. $selfcontrol;
  }
  echo'<br>';
}

me(100,99);
me(5,99);
me(99,99);
echo'<hr>';
//--------------------------------
function muchzp($front, $back)
{
  if($front > $back){
    echo 'на фронте больше получают:)';
    return $front;
  }
  else{ 
    echo'<br>' . '---------------------' . '<br>';
    echo 'на бэке больше пoлучают:) ';
    return $back;
  }
}
$zp = muchzp(4000,3700);
$zp = muchzp(3700,4000);
echo'<hr>';
//------------------------------
  $firststr = "hi_ my_ name_ is_ slimshady";
  $secondstr = "RED";
  $thirdstr = "GREEN";
  $fourthstr =  "BLUE"; 
  echo "Вывод базовой строки: $firststr" . '<br>';
  echo "Вывод строки с приколами: ", strtoupper(trim($firststr)), '<br>';
  
  


?>