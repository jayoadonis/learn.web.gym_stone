<?php
declare(strict_types=1);

namespace learn\web\gym_stone\model;


class ObjectI {

    protected function __construct() {
        echo realpath( __DIR__ . "/../bootstrap.php" );
    }

    /**
     * @magic_member_function
     */
    public function __toString(): string {

        return $this->toString( php_sapi_name() !== "cli" );
    }

    private function toString( bool $isEscape = false ): string {

        $toStr =  sprintf(
            "%s@%08x",
            $this::class,
            $this->hashCode()
        );

        return match( $isEscape ) {
            true => htmlentities( $toStr, ENT_QUOTES|ENT_SUBSTITUTE, "UTF-8"),
            default => $toStr
        };
    }

    public function hashCode(): int {

        return crc32( spl_object_hash($this) ) ;
    }

    /**
     * @param ObjectI|string|int|float
     */
    public function equals( mixed $obj ): bool {

        return $this === $obj;
    }
}