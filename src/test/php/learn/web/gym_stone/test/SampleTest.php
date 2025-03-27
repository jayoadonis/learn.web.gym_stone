<?php
declare(strict_types=1);

namespace learn\web\gym_stone\test;

use PHPUnit\Framework\TestCase;


/**
 * 
 * 
 */
final class SampleTest extends TestCase {

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        printf(":::[] static %s\n", "setUpBeforeClass(V)V");
    }

    /**
     * {@inheritdoc}
     */
    public static function tearDownAfterClass(): void {
        printf(":::[] static %s\n", "tearDownAfterClass(V)V");
    }

    /**
     * @test
     * @before
     */
    public function setUpInstance(): void {
        printf(":::[] %s\n", "setUpInstance(V)V");
    }

    /**
     * @test
     * @after
     */
    public function tearDownInstance(): void {
        printf(":::[] %s\n", "tearDownInstance(V)V");
    }

    /**
     * @test
     */
    public function checkSomething(): void {
        printf("::: %s\n", "checkSomething(V)V");
    }

}