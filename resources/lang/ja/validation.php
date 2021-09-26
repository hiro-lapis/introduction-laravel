<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Validation Language Lines
      | 検証言語
      |--------------------------------------------------------------------------
      |
      | The following language lines contain the default error messages used by
      | the validator class. Some of these rules have multiple versions such
      | as the size rules. Feel free to tweak each of these messages here.
      |
      | 次の言語行には、バリデータークラスで使用されるデフォルトのエラーメッセージが含まれています。
      | これらの規則の中には、サイズ規則などの複数のバージョンがあります。
      | これらのメッセージのそれぞれをここで微調整してください。
    */

    'accepted'             => ':attributeが未承認です',
    'active_url'           => ':attributeは有効なURLではありません',
    'after'                => ':attributeは :date より後の日付にしてください',
    'after_or_equal'       => ':attributeは :date 以降の日付にしてください',
    'alpha'                => ':attributeは英字のみ有効です',
    'alpha_dash'           => ':attributeは「英字」「数字」「-(ダッシュ)」「_(下線)」のみ有効です',
    'alpha_num'            => ':attributeは「英字」「数字」のみ有効です',
    'array'                => ':attributeは配列タイプのみ有効です',
    'before'               => ':attributeは :date より前の日付にしてください',
    'before_or_equal'      => ':attributeは :date 以前の日付にしてください',
    'between'              => [
        'numeric' => ':attributeは :min ～ :max までの数値まで有効です',
        'file'    => ':attributeは :min ～ :max キロバイトまで有効です',
        'string'  => ':attributeは :min ～ :max 文字まで有効です',
        'array'   => ':attributeは :min ～ :max 個まで有効です',
    ],
    'boolean'              => ':attributeの値は true もしくは false のみ有効です',
    'confirmed'            => ':attributeを確認用と一致させてください',
    'date'                 => ':attributeを有効な日付形式にしてください',
    'date_format'          => ':attributeを :format 書式と一致させてください',
    'different'            => ':attributeを :other と違うものにしてください',
    'digits'               => ':attributeは :digits 桁のみ有効です',
    'digits_between'       => ':attributeは :min ～ :max 桁のみ有効です',
    'dimensions'           => ':attributeルールに合致する画像サイズのみ有効です',
    'distinct'             => ':attributeに重複している値があります',
    'email'                => 'メールアドレスの書式のみ有効です',
    'exists'               => ':attribute無効な値です',
    'file'                 => ':attributeアップロード出来ないファイルです',
    'filled'               => ':attribute値を入力してください',
    'gt'                   => [
        'numeric' => ':attributeは :value より大きい必要があります。',
        'file'    => ':attributeは :value キロバイトより大きい必要があります。',
        'string'  => ':attribute は :value 文字より多い必要があります。',
        'array'   => ':attribute には :value 個より多くの項目が必要です。',
    ],
    'gte'                  => [
        'numeric' => ':attributeは :value 以上である必要があります。',
        'file'    => ':attributeは :value キロバイト以上である必要があります。',
        'string'  => ':attributeは :value 文字以上である必要があります。',
        'array'   => ':attributeには value 個以上の項目が必要です。',
    ],
    'image'                => ':attribute画像は「jpg」「png」「bmp」「gif」「svg」のみ有効です',
    'in'                   => ':attribute無効な値です',
    'in_array'             => ':attributeは :other と一致する必要があります',
    // 'integer'              => ':attributeは整数のみ有効です',
    'integer'              => ':attributeは数値で入力してください',
    'ip'                   => ':attributeIPアドレスの書式のみ有効です',
    'ipv4'                 => ':attributeIPアドレス(IPv4)の書式のみ有効です',
    'ipv6'                 => ':attributeIPアドレス(IPv6)の書式のみ有効です',
    'json'                 => ':attribute正しいJSON文字列のみ有効です',
    'lt'                   => [
        'numeric' => ':attributeは :value 未満である必要があります。',
        'file'    => ':attributeは :value キロバイト未満である必要があります。',
        'string'  => ':attributeは :value 文字未満である必要があります。',
        'array'   => ':attributeは :value 未満の項目を持つ必要があります。',
    ],
    'lte'                  => [
        'numeric' => ':attributeは :value 以下である必要があります。',
        'file'    => ':attributeは :value キロバイト以下である必要があります。',
        'string'  => ':attributeは :value 文字以下である必要があります。',
        'array'   => ':attributeは :value 以上の項目を持つ必要があります。',
    ],
    'min'                  => [
        'numeric' => ':attributeは :max 以上のみ有効です',
        'file'    => ':attributeは :max KB上のファイルのみ有効です',
        'string'  => ':attributeは :max 文字上のみ有効です',
        'array'   => ':attributeは :max 個上のみ有効です',
    ],
    'max'                  => [
        'numeric' => ':attributeは :max 以下のみ有効です',
        'file'    => ':attributeは :max KB以下のファイルのみ有効です',
        'string'  => ':attributeは :max 文字以下のみ有効です',
        'array'   => ':attributeは :max 個以下のみ有効です',
    ],
    'mimes'                => ':attributeは :values タイプのみ有効です',
    'mimetypes'            => ':attributeは :values タイプのみ有効です',
    'min'                  => [
        'numeric' => ':attributeは :min 以上のみ有効です',
        'file'    => ':attributeは :min KB以上のファイルのみ有効です',
        'string'  => ':attributeは :min 文字以上のみ有効です',
        'array'   => ':attributeは :min 個以上のみ有効です',
    ],
    'not_in'               => ':attribute 無効な値です',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attributeは数字のみ有効です',
    'present'              => ':attributeが存在しません',
    'regex'                => ':attribute無効な値です',
    'required'             => ':attributeは入力必須です',
    'required_if'          => ':attributeは :other が :value には必須です',
    'required_unless'      => ':attributeは :other が :values でなければ必須です',
    'required_with'        => ':attributeは :values が入力されている場合は必須です',
    'required_with_all'    => ':attributeは :values が入力されている場合は必須です',
    'required_without'     => ':attributeは :values が入力されていない場合は必須です',
    'required_without_all' => ':attributeは :values が入力されていない場合は必須です',
    'same'                 => ':attributeは :other と同じ場合のみ有効です',
    'size'                 => [
        'numeric' => ':attributeは :size のみ有効です',
        'file'    => ':attributeは :size KBのみ有効です',
        'string'  => ':attributeは :size 文字のみ有効です',
        'array'   => ':attributeは :size 個のみ有効です',
    ],
    'string'               => ':attributeは文字列のみ有効です',
    'timezone'             => ':attribute正しいタイムゾーンのみ有効です',
    'unique'               => ':attributeは既に存在します',
    'uploaded'             => ':attributeアップロードに失敗しました',
    'url'                  => ':attributeは正しいURL書式のみ有効です',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    | カスタム検証言語
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    | ここでは、行に名前を付けるために "attribute.rule"という規則を使って属性のカスタム
    | 検証メッセージを指定することができます。 これにより、特定の属性ルールに対して特定の
    | カスタム言語行をすばやく指定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
      |--------------------------------------------------------------------------
      | Custom Validation Attributes
      | カスタム検証属性
      |--------------------------------------------------------------------------
      |
      | The following language lines are used to swap attribute place-holders
      | with something more reader friendly such as E-Mail Address instead
      | of "email". This simply helps us make messages a little cleaner.
      |
      | 次の言語行は、属性プレースホルダを「email」ではなく「E-Mail Address」などの
      | 読みやすいものと交換するために使用されます。
      |
    */

    'attributes' => [
        'name'           => '商品名',
        'category_id'           => 'カテゴリー',
        'email'                 => 'メールアドレス',
        'stock'                 => '在庫',
        'img'                   => '画像',
        'img_url'               => '画像URL',
        'list_price'              => '定価',
        'msg'                   => 'メッセージ',
        'name'                  => '名前',
        'offset'                => '件数',
        'old_password'          => '現在のパスワード',
        'order'                 => '並び順',
        'page'                  => 'ページ番号',
        'current_password'      => '現在のパスワード',
        'password'              => 'パスワード',
        'password_confirmation' => '確認用パスワード',
        'price'                 => '価格',
        'price_min'             => '最低価格',
        'price_max'             => '最高価格',
    ],

];
