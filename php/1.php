<?php

$sequence = [0, 1];
$iterations = 100;

for ($i=2; $i<=$iterations; $i++) {
  $sequence[] = $sequence[$i-1] + $sequence[$i-2];
}

print_r(join(',', $sequence));
