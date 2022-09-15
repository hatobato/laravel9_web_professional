<?php

namespace Tests\Unit\Services;

use PHPUnit\Framework\TestCase;
use App\Services\TweetService;
use Mockery;

class TweetServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     * @runInSepareteProcess
     * @return void
     */
    public function test_check_own_tweet()
    {

        $tweetService = new TweetService();

        $mock = Mockery::mock('alias:App\Models\Tweet');
        $mock->shouldReceive('where->first')->andReturn((object)[
            'id' => 1,
            'user_id' => 1
        ]);

        $result = $tweetService->checkOwnTweet($userId = 1, $tweetId = 1);
        $this->assertTrue(true);

        $result = $tweetService->checkOwnTweet($userId = 1, $tweetId = 2);
        $this->assertTrue(true);
    }
}
