<?php

//  data base config . cast to object
$database_config = (object)[
 'host' => 'localhost',
 'user' => 'root',
 'pass' => '',
 'db' => '7map'
];


$admins = [
 'admin' => '$2y$10$Y9.d2uBflvag7OVfuJ9/vOkSgfCqhq1Pm1XnwbxYgTUiJr3oaMQoC',
 'ali' => '$2y$10$vy7x.FLKSOMZqm.siDnrwe43o0ybRau6Y2LLvxspnFFiKtLzHOpQG'
];

// echo password_hash('ali' , PASSWORD_BCRYPT);