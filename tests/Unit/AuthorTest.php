<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;

class AuthorTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */

    public function a_dob_is_nullable()
    {
            Author::firstOrCreate([
                'name' => 'Sam Colons'
            ]);

            $this->assertCount(1, Author::all());

    }

}
