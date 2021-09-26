<?php
declare(strict_types=1);

namespace Tests\Unit\Requests\Products;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

/**
 * Product新規登録フォームリクエストのテスト
 * ./vendor/bin/phpunit ./tests/Unit/Requests/Products/StoreRequestTest.php
 */
class StoreRequestTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @dataProvider storeRequestDataProvider
     * @return void
     */
    public function test_正常値入力時にパスするか(array $data):void
    {
        $data['category_id'] = Category::factory()->create()->id;

        // バリデーションルールを抽出
        $rules = (new StoreRequest())->rules();
        // 入力値と合わせてバリデータ作成
        $validator = Validator::make($data, $rules);
        // バリデーション実行
        $result = $validator->passes();
        // \Log::info('HIRO:resultの中身' . print_r($validator->errors(), true));
        // 期待値の判定
        $this->assertTrue($result);
    }

    /**
     * 商品登録データプロバイダ
     *
     * @return array
     */
    public function storeRequestDataProvider():array
    {
        return [
            '#1' => [
                [
                    'name' => '商品名',
                    'price' => 100,
                    'stock' => 1,
                ],
            ],
            '#1' => [
                [
                    'name' => '商品名',
                    'price' => 100,
                    'stock' => 1,
                ],
            ],
        ];
    }

    /**
     * 異常値入力データプロバイダ
     *
     * @return array
     */
    public function storeInvalidRequestDataProvider():array
    {
        return [
            '#1 商品名未入力' => [
                [
                    'name' => null,
                    'price' => 100,
                    'stock' => 1,
                ]
            ],
            '#2 最低価格未満' => [
                [
                    'name' => '商品名',
                    'price' => 0,
                    'stock' => 1,
                ]
            ],
            '#3 最高価格オーバー' => [
                [
                    'name' => '商品名',
                    'price' => 100000,
                    'stock' => 1,
                ]
            ],
            '#4 カテゴリー未存在' => [
                [
                    'name' => '商品名',
                    'category_id' => 999999,
                    'price' => 100,
                    'stock' => 0,
                ],
            ],
            '#5 最高在庫数オーバー' => [
                [
                    'name' => '商品名',
                    'price' => 100,
                    'stock' => 1000,
                ],
            ],
        ];
    }

    /**
     * A basic unit test example.
     *
     * @dataProvider storeInvalidRequestDataProvider
     * @return void
     */
    public function test_異常値入力時にエラーメッセージを返すか(array $data):void
    {
        $data['category_id'] = isset($data['category_id']) ? $data['category_id'] : Category::factory()->create()->id;

        // バリデーションルールを抽出
        $rules = (new StoreRequest())->rules();
        // 入力値と合わせてバリデータ作成
        $validator = Validator::make($data, $rules);
        // バリデーション実行
        $result = $validator->passes();
        // 期待値の判定
        $this->assertFalse($result);
    }
}
