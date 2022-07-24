<?php

namespace Tests\Feature\Content;

use App\Models\Content;
use App\Tests\FeatureBaseTestCase;

class PatchContentControllerTest extends FeatureBaseTestCase
{
    private $contentId = 1;

    const URL = '/api/content';

    public function setUp(): void
    {
        parent::setUp();

        Content::factory()->createOne([
            'id' => $this->contentId,
        ]);
    }

    public function test_投稿内容が登録できる(): void
    {
        $url = self::URL;

        $content = 'XXX';
        $requestBody = [
            'contentId' => $this->contentId,
            'content' => $content,
        ];

        $response = $this->patch($url, $requestBody);
        // 200が返るか確認
        $response->assertOk();
        // テーブルの確認
        $this->assertDatabaseHas(
            table: 'contents',
            data:[
                'id' => $this->contentId,
                'content' => $content,
            ]
        );
    }
}
