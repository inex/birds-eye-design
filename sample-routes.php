<?php

// show route protocol xxx all
// 188.93.0.0/21      via 193.242.111.54 on eth1 [pb_0127_as42227 2016-10-09] * (100) [AS42227i]
// 	Type: BGP unicast univ
// 	BGP.origin: IGP
// 	BGP.as_path: 42227
// 	BGP.next_hop: 193.242.111.54
// 	BGP.med: 100
// 	BGP.local_pref: 100
// 	BGP.community: (0,31122)

// show route table xxx all
// 119.17.51.0/24     via 193.242.111.69 on eth1 [pb_0187_as6939 2016-10-18] * (100) [AS45780i]
// 	Type: BGP unicast univ
// 	BGP.origin: IGP
// 	BGP.as_path: 6939 7545 2764 45780 45780 45780
// 	BGP.next_hop: 193.242.111.69
// 	BGP.med: 1478
// 	BGP.local_pref: 100
// 104.18.32.0/20     via 193.242.111.76 on eth1 [pb_0194_as13335 2016-10-13] * (100) [AS13335i]
// 	Type: BGP unicast univ
// 	BGP.origin: IGP
// 	BGP.as_path: 13335 13335 13335
// 	BGP.next_hop: 193.242.111.76
// 	BGP.local_pref: 100
// 	BGP.aggregator: 162.158.36.1 AS13335
// 	BGP.community: (0,43760) (13335,20030) (13335,20100) (13335,20500) (13335,20530) (43760,15502) (43760,15612) (43760,16509) (43760,25441) (43760,31641) (43760,34218) (43760,34245) (43760,42227) (43760,43406) (43760,49233)
//

$response = [
    'api' => [
        'version'           => '1.0',
        'result_from_cache' => true,
        'cache_status'      => [
            'cached_at' => DateTime::createFromFormat( 'Y-m-d H:i:s', '2016-10-22 10:43:48' ),
            'orig_ttl'  => 300
        ],
    ],

    'routes' => [
        [
            'network'        => '119.17.51.0/24',
            'gateway'        => '193.242.111.54',
            'interface'      => 'eth1',
            'from_protocol'  => 'pb_0127_as42227',
            'metric'         => 100,
            'type'           => [
                'bgp',
                'unicast',
                'univ'
            ],
            'bgp' => [
                'origin'     => 'igp',
                'as_path'    => [ 13335, 13335, 13335 ],
                'next_hop'   => '193.242.111.76',
                'local_pref' => 100,
                'med'        => 400,   // may not appear
                'communities'  => [
                    [ 0,43760 ],
                    [ 13335,20030 ],
                    [ 13335,20100 ],
                    [ 13335,20500 ],
                    [ 13335,20530 ],
                ]
            ]
        ],
    ]
];


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
//     "routes": [
//         {
//             "network": "119.17.51.0\/24",
//             "gateway": "193.242.111.54",
//             "interface": "eth1",
//             "from_protocol": "pb_0127_as42227",
//             "metric": 100,
//             "type": [
//                 "bgp",
//                 "unicast",
//                 "univ"
//             ],
//             "bgp": {
//                 "origin": "igp",
//                 "as_path": [
//                     13335,
//                     13335,
//                     13335
//                 ],
//                 "next_hop": "193.242.111.76",
//                 "local_pref": 100,
//                 "med": 400,
//                 "communities": [
//                     [
//                         0,
//                         43760
//                     ],
//                     [
//                         13335,
//                         20030
//                     ],
//                     [
//                         13335,
//                         20100
//                     ],
//                     [
//                         13335,
//                         20500
//                     ],
//                     [
//                         13335,
//                         20530
//                     ]
//                 ]
//             }
//         }
//     ]
// }
