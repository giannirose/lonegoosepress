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
          'username'  => 'giannitest_xxxx.comcast.net',
          'password'  => 'xxxx',
          'signature' => 'xxxx',
        ],
      ],
    ],
  ];
?>


<?php
/*	return [ *?

		/*
		|--------------------------------------------------------------------------
		| Gateway settings
		|--------------------------------------------------------------------------
		*/

/*		'gateways' => [

			'default' => [
				'enabled'   => true,
				'test_mode' => false,
				'live' => [
					'api_key'      => 'abc123',
				],
				'test' => [
					'api_key'      => 'abc123',
				],
			],


			'stripe' => [
				'enabled'   => true,
				'test_mode' => true,
				'live' => [
					'secret_key'      => '',
					'publishable_key' => '',
				],
				'test' => [
					'secret_key'      => '',
					'publishable_key' => '',
				],
			],

		],

	];
*/
	?>


