<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'vendor/app',
        'dev' => true,
    ),
    'versions' => array(
        'erusev/parsedown' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../erusev/parsedown',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => '6598f3860c2698fe2f0f1bc98212fc01d0a1893c',
            'dev_requirement' => false,
        ),
        'phpmailer/phpmailer' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpmailer/phpmailer',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'cbfe93b75a5d2ca217b32fdefee6dfeb7a971a0a',
            'dev_requirement' => false,
        ),
        'vendor/app' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
