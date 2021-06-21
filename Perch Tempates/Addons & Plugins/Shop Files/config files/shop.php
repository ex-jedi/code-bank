<?php
  return [
    'gateways' => [
      'paypal-express' => [
        'enabled'   => true,
        'test_mode' => true,
        'live' => [
          'username'  => 'paypal_api_username',
          'password'  => 'paypal_api_password',
          'signature' => 'paypal_api_signature',
        ],
        'test' => [
          'username'  => 'mark_api2.pixelsmiths.co.uk',
          'password'  => 'BRA6XW62QFA3Q2HJ',
          'signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AnqouYa5CorvN5cKQJ5q9j8sJodc',
        ],
      ],
    ],
  ];
?>
