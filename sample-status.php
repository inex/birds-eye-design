<?php

$response = [
    'api' => [
        'version'           => '1.0',
        'result_from_cache' => true,
        'cache_status'      => [
            'cached_at' => DateTime::createFromFormat( 'Y-m-d H:i:s', '2016-10-22 10:43:48' ),
            'orig_ttl'  => 300
        ],
    ],
    'status' => [
        'version'       => '1.4.0',
        'router_id'     => '193.242.111.8',
        'server_time'   => DateTime::createFromFormat( 'Y-m-d H:i:s', '2016-10-22 10:43:48' ),
        'last_reboot'   => DateTime::createFromFormat( 'Y-m-d H:i:s', '2015-03-18 20:42:57' ),
        'last_reconfig' => DateTime::createFromFormat( 'Y-m-d H:i:s', '2016-10-22 09:17:04' ),
        'message'       => 'Daemon is up and running'
    ]
];

echo json_encode( $response, JSON_PRETTY_PRINT ) . "\n\n";

// {
//     "api": {
//         "version": "1.0",
//         "result_from_cache": true,
//         "cache_status": {
//             "cached_at": {
//                 "date": "2016-10-22 10:43:48.000000",
//                 "timezone_type": 3,
//                 "timezone": "UTC"
//             },
//             "orig_ttl": 300
//         }
//     },
//     "status": {
//         "version": "1.4.0",
//         "router_id": "193.242.111.8",
//         "server_time": {
//             "date": "2016-10-22 10:43:48.000000",
//             "timezone_type": 3,
//             "timezone": "UTC"
//         },
//         "last_reboot": {
//             "date": "2015-03-18 20:42:57.000000",
//             "timezone_type": 3,
//             "timezone": "UTC"
//         },
//         "last_reconfig": {
//             "date": "2016-10-22 09:17:04.000000",
//             "timezone_type": 3,
//             "timezone": "UTC"
//         },
//         "message": "Daemon is up and running"
//     }
// }
