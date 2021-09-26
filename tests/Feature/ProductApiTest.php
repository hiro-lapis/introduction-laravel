<?php
declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

/**
 * 商品機能に関するテスト
 */
class ProductApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * User
     *
     * @var User
     */
    protected $user;

    /**
     * テストユーザー作成処理
     *
     * @return void
     */
    public function setUp():void
    {
        parent::setUp();
        $this->user = User::factory()->create();

        Artisan::call('db:seed', ['--class' => 'CategorySeeder']);
    }

    public function tearDown():void
    {
        parent::tearDown();
    }

    /**
     * 商品新規作成データプロバイダ
     *
     * リクエストdata
     * API実行結果の期待値
     * @return array
     */
    public function storeDataProvider():array
    {
        return [
            '#1 OK' =>
            [
                [
                    'name' => '商品名',
                    'category_id' => null,
                    'price' => 1000,
                    'stock' => 100,
                ]
            ],
            '#2 OK2' =>
            [
                [
                    'name' => '商品名',
                    'category_id' => null,
                    'price' => 1000,
                    'stock' => 100,
                ]
            ],
        ];
    }

    /**
     * 商品を新規作成できるか
     * @dataProvider storeDataProvider
     * @return void
     */
    public function test_商品を新規作成できるか(array $data):void
    {
        $data['category_id'] = Category::factory()->create()->id;
        $response = $this->actingAs($this->user)->postJson('/api/products', $data);

        // HTTPステータス
        $response->assertOk();
        // レスポンスの確認
        $response->assertExactJson(['message' => '商品を登録しました']);

        $result = Product::where('user_id', $this->user->id)->first();
        // 登録情報の確認
        $this->assertSame($data['name'], $result->name);
        $this->assertSame($data['category_id'], $result->category_id);
        $this->assertSame($data['price'], $result->price);
        $this->assertSame($data['stock'], $result->stock);
    }

    /**
     * test_ログインしてないと未ログインエラーが発生するか
     * @dataProvider storeDataProvider
     * @return void
     */
    public function test_ログインしてないと未ログインエラーが発生するか(array $data):void
    {
        $response = $this->postJson('/api/products', $data);

        // HTTPステータス
        $response->assertUnauthorized();
    }
}
