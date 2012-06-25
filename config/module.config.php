<?php

return array(
    'bjyauthorize' => array(
        'default_role' => 'guest',
        'identity_provider' => 'BjyAuthorize\Provider\Identity\ZfcUserZendDb',
        'role_providers' => array(
            'BjyAuthorize\Provider\Role\Config' => array(
                'guest' => array('default' => true),
                'user'  => array('children' => array(
                    'admin' => array(),
                )),
            ),
        ),
        'resource_providers' => array(
            'BjyAuthorize\Provider\Resource\Config' => array(
                'pants' => array(),
            ),
        ),
        'rule_providers' => array(
            'BjyAuthorize\Provider\Rule\Config' => array(
                'allow' => array(
                    array(array('guest', 'user'), 'pants', 'wear')
                ),
                'deny' => array(
                    // ...
                ),
            ),
        ),
    ),
);
