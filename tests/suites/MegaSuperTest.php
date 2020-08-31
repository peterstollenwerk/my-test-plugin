<?php

declare(strict_types=1);

namespace auf;

use PHPUnit\Framework\TestCase;
use auf\MegaSuperClass;

final class MegaSuperTest extends TestCase {
  public function testTitleValue () {
    $this->assertEquals(site()->title()->value(), 'Auf-Kirby-Plugin-Template');
  }

  public function testCreatesExampleClass () {
    $myTestClass = new MegaSuperClass('asdf');
    $this->assertEquals('asdf', $myTestClass->test);
  }

}