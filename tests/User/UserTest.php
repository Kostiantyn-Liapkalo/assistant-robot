<?php
require_once 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    private $user;

    protected function setUp() : void
    {
        $this->user = new User();
        $this->user->setName("Bee");
    }

    protected function tearDown() : void
    {
       
    
    }

    public function testName() {
        $this->assertEquals("Bee", $this->user->getName());
    }
        
   
}