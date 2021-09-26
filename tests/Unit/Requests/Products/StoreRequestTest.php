<?php
declare(strict_types=1);

namespace Tests\Unit\Requests\Products;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Category;
use Database\Seeders\CategorySeeder;
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
        $category_id = Category::factory()->create()->id;
        $data['category_id'] = $category_id;

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
            ]
        ];
    }
}
