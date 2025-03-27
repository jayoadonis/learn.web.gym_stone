<?php
declare(strict_types=1);

namespace learn\web\gym_stone\model;

abstract class App extends ObjectI {

    private string $title;

    private function __construct(
        ?string $title = null
    ) {
        $this->title = $title ?? $this->__toString();
    }

    public function setTitle( string $title ): void {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }
    
    /**
     * @param class-string<App> $appClass
     * @param array<string> $args
     */
    protected static function launch( string $appClass, array $args = [] ): void {

        (new $appClass())->run();
    }

    public abstract function run(): void;
}