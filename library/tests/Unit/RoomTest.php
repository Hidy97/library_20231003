<?php

namespace Tests\Unit;

use App\Room;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function testHas(): void
    {
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertTrue($room->has("Bonnie"));
    }

    public function testHasNot(): void
    {
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertFalse($room->has("Ironman"));
    }

    public function testRoomAdd(): void
    {
        //$room = new Room(["Jackie"]);
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertContains("Jackie", $room->add("Jackie"));
    }

    public function testRoomRemove()
    {
        $room = new Room(["Bonnie", "Clyde"]);
        $this->assertCount(1, $room->remove("Bonnie"));
    }
    public function testRoomTakeOne()
    {
        $room = new Room(["Bonnie"]);
        $this->assertEquals("Bonnie", $room->takeOne());
        //Már üres
        $this->assertNull($room->takeOne());
    }
}
