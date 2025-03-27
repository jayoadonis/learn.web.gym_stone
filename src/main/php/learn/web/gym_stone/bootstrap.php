<?php
declare(strict_types=1);

namespace learn\web\gym_stone;

if( php_sapi_name() === "cli" ) {
    define( "__PHP_EOL", "\n");
}
else {
    define( "__PHP_EOL", "<br>");
}

function trigger_error_handler(
    int $error_no,
    string $error_str,
    string $error_filepath,
    int $error_line
): bool {

    $console_type = match( $error_no ) {

        E_USER_NOTICE   => "info",
        E_USER_WARNING  => "warn",
        E_USER_ERROR    => "error",

        default         => "error"
    };

    $error_message = strtr(
        "{console_type} [{$error_no}]: "
        . "{$error_str} in {$error_filepath} on line {$error_line}",
        [
            "{console_type}" => strtoupper($console_type)
        ]
    );

    $interfaceEnv = php_sapi_name();

    switch( $interfaceEnv ) {

        case "cli":
            echo "PHP CLI {$error_message}";
            break;

        default:
            ob_start();
            ?><script>console.<?=$console_type?>(<?=json_encode( "PHP {$interfaceEnv} $error_message" )?>);</script><?php
            echo ob_get_clean();
    }

    return true;
}

set_error_handler( trigger_error_handler(...) );



$autoloadFilepath = realpath( __DIR__ . "/../../../../../../vendor/autoload.php");

if( $autoloadFilepath === false ) {
    trigger_error(
        "Specify properly the filepath 'vendor/autload.php'",
        E_USER_ERROR
    );
    exit();
}

require_once $autoloadFilepath;