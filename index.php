<?php

require 'vendor/autoload.php';

use DateRange\DateRange;
use PhpGantt\PhpGantt;

$tasks = [
  [
    'project' => 'Project 1',
    'name' => 'hello world',
    'startDate' => strtotime('2015-10-01'),
    'assignee' => 'someone1',
    'workload' => 5
  ],
  [
    'project' => 'Project 1',
    'name' => 'hello world 2',
    'startDate' => strtotime('2015-10-05'),
    'assignee' => 'someone2',
    'workload' => 10 
  ],
  [
    'project' => 'Project 2',
    'name' => 'hello world 3',
    'dependency' => 'afterPrevious',
    'assignee' => 'someone3',
    'workload' => 15 
  ],
  [
    'project' => 'Project 2',
    'name' => 'hello world 3',
    'dependency' => 'afterPrevious',
    'assignee' => 'someone2',
    'workload' => 15 
  ]
];
$nonBusinessdays = [
  strtotime('2015-10-02'),
  strtotime('2015-10-06'),
  strtotime('2015-10-20'),
  strtotime('2015-11-23'),
  strtotime('2015-11-24')
];
$gantt = new PhpGantt($tasks, $nonBusinessdays);
?>

<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php $gantt->render(); ?>
</body>
</html>
