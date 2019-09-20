<?php

$url      = parse_url(env("DATABASE_URL"));
$host     = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

return [

    'fetch' => PDO::FETCH_CLASS,
    'default' => env('DB_CONNECTION', 'pgsql'),
    'connections' => [
        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => $host,
            'database' => $database,
            'username' => $username,
            'password' => $password,
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],
    ],
    'migrations' => 'migrations',
];

?>
