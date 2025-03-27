<?php
declare(strict_types=1);

namespace learn\web\gym_stone;

// require_once realpath( __DIR__ . "/bootstrap.php" );

use learn\web\gym_stone\model\App;


class GymStone extends App {

    /**
     * {@inheritdoc}
     */
    public function run(): void {

        // $this->setTitle("..ok..!");
        
        echo "::: title = {$this->getTitle()}" . __PHP_EOL;
        echo "::: Hi there!" . __PHP_EOL;
        echo "::: Nice meeting you." . __PHP_EOL;
        echo "::: ..." . __PHP_EOL;
    }

    public static function main( array $args = [] ): void {

        self::launch( self::class, $args );

        exit();
    }
}