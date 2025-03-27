<?php
declare(strict_types=1);

namespace learn\web\gym_stone\test;

use PHPUnit\Framework\TestCase;


/**
 * 
 * 
 */
final class SampleITest extends TestCase {

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        printf(":::* %s static %s\n", self::class, "setUpBeforeClass(V)V");
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass(): void {
        printf(":::* %s static %s\n", self::class, "tearDownAfterClass(V)V");
    }

    /**
     * @test
     * @before
     */
    public function setUpInstance(): void {
        printf(":::* %s %s\n", $this::class, "setUpInstance(V)V");
    }

    /**
     * @test
     * @after
     */
    public function tearDownInstance(): void {
        printf(":::* %s %s\n", $this::class, "tearDownInstance(V)V");
    }

    /**
     * @test
     */
    public function checkSomething(): void {
        printf("::: %s %s\n", $this::class, "checkSomething(V)V");
    }

}