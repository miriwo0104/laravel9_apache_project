<?php

namespace Tests\Feature\Content;

use App\Tests\FeatureBaseTestCase;

class PostContentControllerTest extends FeatureBaseTestCase
{

    const URL = '/api/content';

    public function test_投稿内容が登録できる(): void
    {
        $url = self::URL;
        $requestBody = [
            'content' => 'XXX',
        ];

        $response = $this->post($url, $requestBody);
        $response->assertCreated();
        $this->assertDatabaseCount(table: 'contents', count: 1);
    }
}
