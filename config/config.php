<?php
/**
 * @author Mougrim <rinat@mougrim.ru>
 */

namespace Mougrim\XdebugProxy;

date_default_timezone_set('PRC');

return [
    'xdebugServer'          => [
        // xdebug proxy server host:port
        'listen' => '0.0.0.0:9008'
    ],
    'ideServer'             => [
        // if proxy can't find ide, then it uses default ide,
        // pass empty string if you want to disable default ide
        // defaultIde is useful when there is only one user for proxy
        'defaultIde'        => '127.0.0.1:9000',
        // predefined ide list in format 'idekey' => 'host:port',
        // pass empty array if you don't need predefined ide list
        // predefinedIdeList is useful when proxy's users aren't changed often,
        // so they don't need to register in proxy each proxy restart
        'predefinedIdeList' => [
            'idekey' => '127.0.0.1:9000'
        ],
    ],
    'ideRegistrationServer' => [
        // host:port for register ide in proxy
        'listen' => '0.0.0.0:9001'
    ],
];