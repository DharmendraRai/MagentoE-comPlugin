<?php

$lpd_compaire_value = gmdate('Y-m-d', time()) . " 00:00:00";
print "\$lpd_compaire_value = " . $lpd_compaire_value . "\n";

$lpd_compaire_value_lt = gmdate('Y-m-d', (time()-86400)) . " 00:00:00";
print "\$lpd_compaire_value_lt = " . $lpd_compaire_value_lt . "\n";
