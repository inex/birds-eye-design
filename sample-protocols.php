<?php

// notes:
//
// received routes: query route protocol pb_0109_as42
// advertised routes: route table t_0109_as42


$response = [
    'api' => [
        'version'           => '1.0',
        'result_from_cache' => true,
        'cache_status'      => [
            'cached_at' => DateTime::createFromFormat( 'Y-m-d H:i:s', '2016-10-22 10:43:48' ),
            'orig_ttl'  => 300
        ],
    ],

    'protocols' => [
        [
            'protocol'      => 'pb_0109_as42',
            'table'         => 't_0109_as42',
            'state'         => 'up', // 'start'
            'connection'    => 'Established', // 'Connect'
            'state_changed' => DateTime::createFromFormat( 'Y-m-d', '2016-09-30' ),
            'description'   => 'RIB for AS42 - Packet Clearing House DNS - VLAN Interface 109',
            'preference'    => 100,
            'input_filter'  =>'(unnamed)',
            'output_filter' => 'ACCEPT',
            'import_limit'  => 1000,
            'limit_action'  => 'restart',
            'routes'        => [
                'imported'  => 35,
                'exported'  => 41127,
                'preferred' => 2590,
            ],

            'route_changes' => [
                'import_updates' => [
                    'received' => 94,
                    'rejected' => 0,
                    'filtered' => 0,
                    'ignored'  => 0,
                    'accepted' => 94,
                ],
                'import_withdraws' => [
                    'received' => 59,
                    'rejected' => 0,
                    'ignored'  => 0,
                    'accepted' => 94,
                ],
                'export_updates' => [
                    'received' => 1089442,
                    'rejected' => 94,
                    'filtered' => 0,
                    'accepted' => 1089348,
                ],
                'export_withdraws' => [
                    'received' => 216076,
                    'accepted' => 216017,
                ],
            ],


        ],

        'bgp_state'             => 'Established',
        'neighbor_address'      => '193.242.111.60',
        'neighbor_as'           => 42,
        'neighbor_id'           => '204.61.210.182',
        'neighbor_capabilities' => [
            'refresh'
        ],
        'bgp_session'           => [
            'external',
            'route-server'
        ],
        'source_address'        => '193.242.111.8',
        'route_limit_at'        => 35,
        'hold_timer'            => 180,
        'keepalive'             => 60
    ]
];

// pb_0137_as10310 BGP      t_0137_as10310 start  2015-04-30  Connect       Socket: No route to host
//   Description:    RIB for AS10310 - Yahoo! - VLAN Interface 137
//   Preference:     100
//   Input filter:   (unnamed)
//   Output filter:  ACCEPT
//   Import limit:   500
//     Action:       restart
//   Routes:         0 imported, 0 exported, 0 preferred
//   Route change stats:     received   rejected   filtered    ignored   accepted
//     Import updates:              0          0          0          0          0
//     Import withdraws:            0          0        ---          0          0
//     Export updates:              0          0          0        ---          0
//     Export withdraws:            0        ---        ---        ---          0
//   BGP state:          Connect
//     Neighbor address: 193.242.111.77
//     Neighbor AS:      10310
//     Last error:       Socket: No route to host


echo json_encode( $response, JSON_PRETTY_PRINT ) . "\n\n";

//
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
//     "protocols": {
//         "0": {
//             "protocol": "pb_0109_as42",
//             "table": "t_0109_as42",
//             "state": "up",
//             "connection": "Established",
//             "state_changed": {
//                 "date": "2016-09-30 10:43:46.000000",
//                 "timezone_type": 3,
//                 "timezone": "UTC"
//             },
//             "description": "RIB for AS42 - Packet Clearing House DNS - VLAN Interface 109",
//             "preference": 100,
//             "input_filter": "(unnamed)",
//             "output_filter": "ACCEPT",
//             "import_limit": 1000,
//             "limit_action": "restart",
//             "routes": {
//                 "imported": 35,
//                 "exported": 41127,
//                 "preferred": 2590
//             },
//             "route_changes": {
//                 "import_updates": {
//                     "received": 94,
//                     "rejected": 0,
//                     "filtered": 0,
//                     "ignored": 0,
//                     "accepted": 94
//                 },
//                 "import_withdraws": {
//                     "received": 59,
//                     "rejected": 0,
//                     "ignored": 0,
//                     "accepted": 94
//                 },
//                 "export_updates": {
//                     "received": 1089442,
//                     "rejected": 94,
//                     "filtered": 0,
//                     "accepted": 1089348
//                 },
//                 "export_withdraws": {
//                     "received": 216076,
//                     "accepted": 216017
//                 }
//             }
//         },
//         "bgp_state": "Established",
//         "neighbor_address": "193.242.111.60",
//         "neighbor_as": 42,
//         "neighbor_id": "204.61.210.182",
//         "neighbor_capabilities": [
//             "refresh"
//         ],
//         "bgp_session": [
//             "external",
//             "route-server"
//         ],
//         "source_address": "193.242.111.8",
//         "route_limit_at": 35,
//         "hold_timer": 180,
//         "keepalive": 60
//     }
// }
