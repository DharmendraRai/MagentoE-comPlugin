<?php
$count = 0;
$faballey = array(62901, 62904, 62905, 62907, 62908, 62909, 62910, 62911, 62913, 62920, 62921, 62922, 62926, 62927, 62928, 62929, 62931, 62932, 62933, 62935, 62936, 62937, 62940, 62941, 62942, 62944, 62945, 62947, 62948, 62949, 62950, 62953, 62954, 62956, 62957, 62958, 62968, 62969, 62970, 62971, 62974, 62975, 62976, 62977, 62978, 62979, 62980, 62981, 62982, 62983, 62984, 62985, 62986, 62987, 62988, 62989, 62991, 62992, 62993, 62994, 62995, 62996, 62997, 62998, 63002, 63003, 63004, 63005, 63006, 63008, 63009, 63011, 63012, 63013, 63014, 63016, 63019, 63022, 63023, 63024, 63025, 63026, 63027, 63028, 63029, 63030, 63032, 63033, 63034, 63035, 63037, 63038, 63039, 63042, 63043, 63044, 63045, 63046, 63047, 63048, 63050, 63052, 63054, 63055, 63056, 63057, 63058, 63059, 63060, 63061, 63062, 63063, 63064, 63065, 63066, 63069, 63074, 63075, 63076, 63077, 63079, 63080, 63081, 63082, 63083, 63084, 63086, 63087, 63088, 63091, 63093, 63094, 63095, 63096, 63097, 63098, 63099, 63100, 63101, 63102, 63104, 63105, 63107, 63108, 63109, 63110, 63111, 63112, 63113, 63114, 63115, 63117, 63118, 63119, 63120, 63121, 63122, 63123, 63124, 63126, 63127, 63128, 63129, 63130, 63131, 63132, 63133, 63136, 63137, 63140, 63141, 63142, 63144, 63145, 63146, 63148, 63150, 63151, 63153, 63154);
$beta = array(62923, 62926, 62931, 62929, 62933, 62937, 62940, 63002, 62939, 62944, 62948, 62949, 62951, 62969, 62953, 62957, 62985, 62971, 62970, 62977, 62974, 62975, 62980, 63099, 63013, 62981, 62982, 63006, 62989, 63032, 62994, 62995, 62997, 62998, 63000, 63037, 63005, 63004, 63029, 63008, 63009, 63012, 63011, 63016, 63019, 63023, 63026, 63035, 63044, 63045, 63046, 63047, 63048, 63049, 63081, 63057, 63061, 63063, 63062, 63066, 63074, 63069, 63075, 63079, 63080, 63082, 63083, 63084, 63087, 63092, 63091, 63095, 63097, 63100, 63102, 63105, 63107, 63108, 63109, 63111, 63110, 63112, 63114, 63113, 63115, 63117, 63118, 63119, 63124, 63121, 63123, 63122, 63126, 63130, 63127, 63128, 63129, 63132, 63133, 63136, 63137, 63140, 63146, 63141);
foreach ($faballey as $value) {
    if (in_array($value, $faballey)) {
        $foundArr[] = $value;
    } else {
        print "\$value = " . $value . "\n";

        $NotfoundArr[] = $value;
        $count++;
    }
}
die;

$sourceFilePath = 'http://d3l2031tfshpe7.cloudfront.net/images/Product/TOP01460A/2.jpg?v=2.0.0.1';
$contents = file_get_contents($sourceFilePath);
var_dump($contents);
die;
$client = new GearmanClient();
// add the default server
$client->addServer("localhost ", 4730);
// print the output of the job. first parameter is the job name, second one is the parameter
print $client->do("process_string", "Hello Gearman from Client!");

# set some arbitrary application data
$data['foo'] = 'bar';

# add two tasks
$task = $client->addTask("reverse", "foo", $data);
$task2 = $client->addTaskLow("reverse", "bar", NULL);

# run the tasks in parallel (assuming multiple workers)
if (!$client->runTasks()) {
    echo "ERROR " . $client->error() . "\n";
    exit;
}

echo "DONE\n";
?>