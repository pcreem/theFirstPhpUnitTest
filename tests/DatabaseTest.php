<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use App\Data\Database;

final class DatabaseTest extends TestCase
{
    public function testCanCreateDatabase(): void
    {
        $database = new Database();
        $this->assertSame('create database\n', $database->sayHi());
    }
}