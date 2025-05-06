<?php

return [

    /*
    |----------------------------------------------------------------------
    | バリデーション言語ライン
    |----------------------------------------------------------------------
    |
    | 以下の言語ラインには、バリデーションクラスで使用されるデフォルトのエラーメッセージが含まれています。
    | これらのルールのいくつかには、サイズルールなどのバージョンが複数あります。これらのメッセージを自由に調整できます。
    |
    */

    'accepted' => ':attribute は承認されなければなりません。',
    'accepted_if' => ':other が :value のとき、:attribute は承認されなければなりません。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date より後の日付でなければなりません。',
    'after_or_equal' => ':attribute は :date 以降の日付でなければなりません。',
    'alpha' => ':attribute には文字のみを含めることができます。',
    'alpha_dash' => ':attribute には文字、数字、ダッシュ、およびアンダースコアのみを含めることができます。',
    'alpha_num' => ':attribute には文字と数字のみを含めることができます。',
    'array' => ':attribute は配列でなければなりません。',
    'ascii' => ':attribute には1バイトのアルファベット文字および記号のみを含めることができます。',
    'before' => ':attribute は :date より前の日付でなければなりません。',
    'before_or_equal' => ':attribute は :date より前または等しい日付でなければなりません。',
    'between' => [
        'array' => ':attribute は :min から :max アイテムの間でなければなりません。',
        'file' => ':attribute は :min から :max キロバイトの間でなければなりません。',
        'numeric' => ':attribute は :min から :max の間でなければなりません。',
        'string' => ':attribute は :min から :max 文字の間でなければなりません。',
    ],
    'boolean' => ':attribute フィールドには true または false を設定してください。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが間違っています。',
    'date' => ':attribute は有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付でなければなりません。',
    'date_format' => ':attribute はフォーマット :format と一致しません。',
    'decimal' => ':attribute は :decimal 桁の小数を含める必要があります。',
    'declined' => ':attribute は拒否されるべきです。',
    'declined_if' => ':other が :value のとき、:attribute は拒否されるべきです。',
    'different' => ':attribute と :other は異なる必要があります。',
    'digits' => ':attribute は :digits 桁でなければなりません。',
    'digits_between' => ':attribute は :min と :max の間でなければなりません。',
    'dimensions' => ':attribute は無効な画像の寸法です。',
    'distinct' => ':attribute フィールドに重複した値があります。',
    'doesnt_end_with' => ':attribute は以下のいずれかで終了してはなりません：:values。',
    'doesnt_start_with' => ':attribute は以下のいずれかで始まってはなりません：:values。',
    'email' => ':attribute は有効なメールアドレスでなければなりません。',
    'ends_with' => ':attribute は以下のいずれかで終わる必要があります：:values。',
    'enum' => '選択された :attribute は無効です。',
    'exists' => '選択された :attribute は無効です。',
    'file' => ':attribute はファイルでなければなりません。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'array' => ':attribute は :value アイテムより多くなければなりません。',
        'file' => ':attribute は :value キロバイトより大きくなければなりません。',
        'numeric' => ':attribute は :value より大きくなければなりません。',
        'string' => ':attribute は :value 文字より多くなければなりません。',
    ],
    'gte' => [
        'array' => ':attribute は :value アイテム以上でなければなりません。',
        'file' => ':attribute は :value キロバイト以上でなければなりません。',
        'numeric' => ':attribute は :value 以上でなければなりません。',
        'string' => ':attribute は :value 文字以上でなければなりません。',
    ],
    'image' => ':attribute は画像でなければなりません。',
    'in' => '選択された :attribute は無効です。',
    'in_array' => ':attribute フィールドは :other に存在しません。',
    'integer' => ':attribute は整数でなければなりません。',
    'ip' => ':attribute は有効なIPアドレスでなければなりません。',
    'ipv4' => ':attribute は有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attribute は有効なIPv6アドレスでなければなりません。',
    'json' => ':attribute は有効なJSON文字列でなければなりません。',
    'lowercase' => ':attribute は小文字でなければなりません。',
    'lt' => [
        'array' => ':attribute は :value アイテムより少なくなければなりません。',
        'file' => ':attribute は :value キロバイトより小さくなければなりません。',
        'numeric' => ':attribute は :value より小さくなければなりません。',
        'string' => ':attribute は :value 文字より少なくなければなりません。',
    ],
    'lte' => [
        'array' => ':attribute は :value アイテム以下でなければなりません。',
        'file' => ':attribute は :value キロバイト以下でなければなりません。',
        'numeric' => ':attribute は :value 以下でなければなりません。',
        'string' => ':attribute は :value 文字以下でなければなりません。',
    ],
    'mac_address' => ':attribute は有効なMACアドレスでなければなりません。',
    'max' => [
        'array' => ':attribute は :max アイテムより多くてはなりません。',
        'file' => ':attribute は :max キロバイトより大きくてはなりません。',
        'numeric' => ':attribute は :max より大きくてはなりません。',
        'string' => ':attribute は :max 文字より多くてはなりません。',
    ],
    'max_digits' => ':attribute は :max 桁より多くてはなりません。',
    'mimes' => ':attribute は以下のタイプのファイルでなければなりません：:values。',
    'mimetypes' => ':attribute は以下のタイプのファイルでなければなりません：:values。',
    'min' => [
        'array' => ':attribute は少なくとも :min アイテムを含まなければなりません。',
        'file' => ':attribute は少なくとも :min キロバイトを含まなければなりません。',
        'numeric' => ':attribute は少なくとも :min でなければなりません。',
        'string' => ':attribute は少なくとも :min 文字でなければなりません。',
    ],
    'min_digits' => ':attribute は少なくとも :min 桁でなければなりません。',
    'missing' => ':attribute フィールドは欠落していなければなりません。',
    'missing_if' => ':other が :value のとき、:attribute フィールドは欠落していなければなりません。',
    'missing_unless' => ':other が :value でない限り、:attribute フィールドは欠落していなければなりません。',
    'missing_with' => ':values が存在する場合、:attribute フィールドは欠落していなければなりません。',
    'missing_with_all' => ':values が存在する場合、:attribute フィールドは欠落していなければなりません。',
    'multiple_of' => ':attribute は :value の倍数でなければなりません。',
    'not_in' => '選択された :attribute は無効です。',
    'not_regex' => ':attribute の形式は無効です。',
    'numeric' => ':attribute は数字でなければなりません。',
    'password' => [
        'letters' => ':attribute には少なくとも1文字の文字が必要です。',
        'mixed' => ':attribute には少なくとも1文字の大文字と小文字が必要です。',
        'numbers' => ':attribute には少なくとも1つの数字が必要です。',
        'symbols' => ':attribute には少なくとも1つの記号が必要です。',
        'uncompromised' => '指定された :attribute はデータ漏洩に登場しました。別の :attribute を選択してください。',
    ],
    'present' => ':attribute フィールドは存在していなければなりません。',
    'prohibited' => ':attribute フィールドは禁止されています。',
    'prohibited_if' => ':other が :value のとき、:attribute フィールドは禁止されています。',
    'prohibited_unless' => ':other が :values に含まれていない限り、:attribute フィールドは禁止されています。',
    'prohibits' => ':attribute フィールドは :other の存在を禁止しています。',
    'regex' => ':attribute の形式は無効です。',
    'required' => ':attribute フィールドは必須です。',
    'required_array_keys' => ':attribute フィールドには次の :values のエントリが必要です。',
    'required_if' => ':other が :value のとき、:attribute フィールドは必須です。',
    'required_if_accepted' => ':other が承認された場合、:attribute フィールドは必須です。',
    'required_unless' => ':other が :values に含まれていない限り、:attribute フィールドは必須です。',
    'required_with' => ':values が存在する場合、:attribute フィールドは必須です。',
    'required_with_all' => ':values がすべて存在する場合、:attribute フィールドは必須です。',
    'required_without' => ':values が存在しない場合、:attribute フィールドは必須です。',
    'required_without_all' => ':values がすべて存在しない場合、:attribute フィールドは必須です。',
    'same' => ':attribute と :other は一致しなければなりません。',
    'size' => [
        'array' => ':attribute は :size アイテムを含まなければなりません。',
        'file' => ':attribute は :size キロバイトでなければなりません。',
        'numeric' => ':attribute は :size でなければなりません。',
        'string' => ':attribute は :size 文字でなければなりません。',
    ],
    'starts_with' => ':attribute は以下のいずれかで始まらなければなりません：:values。',
    'string' => ':attribute は文字列でなければなりません。',
    'timezone' => ':attribute は有効なタイムゾーンでなければなりません。',
    'unique' => ':attribute はすでに使われています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'uppercase' => ':attribute は大文字でなければなりません。',
    'url' => ':attribute は有効なURLでなければなりません。',
    'ulid' => ':attribute は有効なULIDでなければなりません。',
    'uuid' => ':attribute は有効なUUIDでなければなりません。',

    /*
    |----------------------------------------------------------------------
    | カスタムバリデーション言語ライン
    |----------------------------------------------------------------------
    |
    | ここでは、"attribute.rule" という規則で属性に対応するカスタムメッセージを定義できます。
    | これにより、特定の属性ルールに対して迅速にカスタムメッセージを設定できます。
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |----------------------------------------------------------------------
    | カスタムバリデーション属性
    |----------------------------------------------------------------------
    |
    | 以下の言語ラインは、属性のプレースホルダーを「E-Mail Address」のように
    | より読みやすいものに置き換えるために使用されます。「email」の代わりに。
    |
    */

    'attributes' => [
        'password' => 'パスワード',
        'name' => '氏名',
        'title' => '件名',
        'gender' => '性別',
        'age' => '年齢',
        'contact' => 'お問い合わせ内容',
        'caution' => '注意事項'
    ],

];
