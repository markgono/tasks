<?php

namespace Tests\Unit;

use App\Task;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTaskArchive()
    {
        // Given I have two tasks in the DB, created one month apart
        $first = factory(Task::class)->create();

        $second = factory(Task::class)->create([
          'created_at' => Carbon::now()->subMonth(),
        ]);

        // When I fetch the archive
        $archive = Task::archive();

        // Then the response should be in the proper format
        $this->assertEquals([
            0 => [
              "year" => $first->created_at->format('Y'),
              "month" => $first->created_at->format('F'),
              "count" => 1,
            ],
            1 => [
              "year" => $second->created_at->format('Y'),
              "month" => $second->created_at->format('F'),
              "count" => 1,
            ],
        ], $archive);
    }
}
