<?php
echo '2は素数である<br>';
for($num=3; $num<=100; $num++)
{
  for($i=2; $i<$num; $i++)
  {
    if($num%$i == 0)
    {
      continue 2;
    }
  }
      echo $num. 'は素数である<br>';
      continue ;
}