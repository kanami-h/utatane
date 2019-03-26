<?php
// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
//カスタムメニュー機能を使用可能にする
add_theme_support('menus');
//メニュー位置を決める
register_nav_menus(array(
    'top_menu' => 'トップページ用メニュー',
    'footer_menu_L' => 'フッター用メニュー（左）',
    'footer_menu_R' => 'フッター用メニュー（右）',
));
// メニューの日本語表示を表示させる
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);
function description_in_nav_menu($item_output, $item){
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<p>{$item->description}</p><", $item_output);
}

// ロゴ画像をカスタマイザーから設定する
function theme_customize($wp_customize){
    //ロゴ画像
    $wp_customize->add_section('logo_section',array(
        'title' => 'ロゴ画像',
        'priority' => 100,
        'description' => 'ロゴ画像を使用する場合はアップロードしてください。画像を使用しない場合はタイトルがテキストで表示されます。',
    ));
    $wp_customize->add_setting('logo_url');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_url', array(
        'label' => 'ロゴ画像',
        'section' => 'logo_section',
        'settings' => 'logo_url',
        'description' => 'ロゴ画像を設定してください。',
    )));
}
add_action('customize_register', 'theme_customize');
// テーマカスタマイザーで設定された画像のURLを取得
//ロゴ画像
function get_the_logo_url(){
    return esc_url(get_theme_mod('logo_url'));
}

//カスタマイザーに色の項目を追加する
function theme_customizer_extension($wp_customize) {
    $wp_customize->add_setting( 'header_background_color', array(
    'default' => '#fff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
    'label' => 'ヘッダー背景色',
    'section' => 'colors',
    'settings' => 'header_background_color',
    'priority' => 20,
    )));

    $wp_customize->add_setting( 'background_color', array(
        'default' => '#fff',
        ) );
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
        'label' => '背景色',
        'section' => 'colors',
        'settings' => 'background_color',
        'priority' => 20,
        )));
   }

   add_action('customize_register', 'theme_customizer_extension');
   
   function customizer_color() {
    $header_background_color = get_theme_mod( 'header_background_color', '#fff');
    $background_color = get_theme_mod( 'background_color', '#fff');
    ?>
    <style type="text/css">
     /* ヘッダー */
    .navbar {
        background-color: <?php echo $header_background_color; ?>;
    }
    /* 背景色 */
    body {
        background-color: <?php echo $background_color; ?>;
    }
    </style>
    <?php
    }
    add_action( 'wp_head', 'customizer_color');

    //コンセプトの文章をカスタマイズ
    function customize_concept( $wp_customize ) {
        // セクション
        $wp_customize->add_section( 'origin_scheme', array(
          'title'     => 'コンセプト文章の編集',
          'priority'  => 30,
        ));
      
        // Text セッティング
        $wp_customize->add_setting( 'options[originText]', array(
          'default'   => '',
          'type'      => 'option',
          'transport' => 'postMessage',
        ));
        $wp_customize->add_setting( 'options2[originText]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_setting( 'options3[originText]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_setting( 'options4[originText]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_setting( 'options5[originText]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_setting( 'options6[originText]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        // Text コントロール
        $wp_customize->add_control( 'text', array(
          'settings'  => 'options[originText]',
          'label'     => 'テキスト１行目',
          'section'   => 'origin_scheme',
          'type'      => 'textarea',
        ));
        $wp_customize->add_control( 'text2', array(
            'settings'  => 'options2[originText]',
            'label'     => 'テキスト２行目',
            'section'   => 'origin_scheme',
            'type'      => 'textarea',
        ));
        $wp_customize->add_control( 'text3', array(
            'settings'  => 'options3[originText]',
            'label'     => 'テキスト３行目',
            'section'   => 'origin_scheme',
            'type'      => 'textarea',
        ));
        $wp_customize->add_control( 'text4', array(
            'settings'  => 'options4[originText]',
            'label'     => 'テキスト４行目',
            'section'   => 'origin_scheme',
            'type'      => 'textarea',
        ));
        $wp_customize->add_control( 'text5', array(
            'settings'  => 'options5[originText]',
            'label'     => 'テキスト５行目',
            'section'   => 'origin_scheme',
            'type'      => 'textarea',
        ));
        $wp_customize->add_control( 'text6', array(
            'settings'  => 'options6[originText]',
            'label'     => 'テキスト６行目',
            'section'   => 'origin_scheme',
            'type'      => 'textarea',
        ));
      
        // Checkbox セッティング
        $wp_customize->add_setting( 'options[originCheckbox]', array(
          'default'   => false,
          'type'      => 'option',
          'transport' => 'refresh',
        ));
        // Checkbox コントロール
        $wp_customize->add_control( 'options_origin_checkbox', array(
          'settings'  => 'options[originCheckbox]',
          'label'     => 'プレビューを見る',
          'section'   => 'origin_scheme',
          'type'      => 'checkbox',
        ));
    }  
    add_action( 'customize_register', 'customize_concept' );
    
    //営業時間
    function customize_business_hours( $wp_customize ) {
        // セクション（営業時間）
        $wp_customize->add_section( 'origin_scheme2', array(
          'title'     => '営業時間の編集',
          'priority'  => 30,
        ));
      
        // 営業日Text セッティング
        $wp_customize->add_setting( 'business_day1[originText]', array(
          'default'   => '年中無休',
          'type'      => 'option',
          'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_day_text1', array(
            'settings'  => 'business_day1[originText]',
            'label'     => '営業日（1行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'business_day2[originText]', array(
            'default'   => '（年末年始のみ休み）',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_day_text2', array(
            'settings'  => 'business_day2[originText]',
            'label'     => '営業日（2行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));

        //営業時間textセッティング一段目
        $wp_customize->add_setting( 'business_hour1[originText]', array(
            'default'   => '7月〜9月',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text1', array(
            'settings'  => 'business_hour1[originText]',
            'label'     => '営業時間（1段目-1行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'business_hour2[originText]', array(
            'default'   => '11:00〜19:00',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text2', array(
            'settings'  => 'business_hour2[originText]',
            'label'     => '営業時間（1段目-2行目）小文字',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'business_hour3[originText]', array(
            'default'   => '（ラストオーダー18:00）',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text3', array(
            'settings'  => 'business_hour3[originText]',
            'label'     => '営業時間（1段目-3行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        //2段目
        $wp_customize->add_setting( 'business_hour4[originText]', array(
            'default'   => '10月〜6月',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text4', array(
            'settings'  => 'business_hour4[originText]',
            'label'     => '営業時間（2段目-1行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'business_hour5[originText]', array(
            'default'   => '11:00〜18:00',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text5', array(
            'settings'  => 'business_hour5[originText]',
            'label'     => '営業時間（2段目-2行目）小文字',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'business_hour6[originText]', array(
            'default'   => '（ラストオーダー17:00）',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'business_hour_text6', array(
            'settings'  => 'business_hour6[originText]',
            'label'     => '営業時間（2段目-3行目）',
            'section'   => 'origin_scheme2',
            'type'      => 'text',
        ));

        // Checkbox セッティング
        $wp_customize->add_setting( 'business_day[originCheckbox]', array(
            'default'   => false,
            'type'      => 'option',
            'transport' => 'refresh',
        ));
        // Checkbox コントロール
        $wp_customize->add_control( 'business_day_checkbox', array(
        'settings'  => 'options[originCheckbox]',
        'label'     => 'プレビューを見る',
        'section'   => 'origin_scheme2',
        'type'      => 'checkbox',
        ));
    }
    add_action( 'customize_register', 'customize_business_hours' );

    //料金
    function customize_charge( $wp_customize ) {
        // セクション（料金）
        $wp_customize->add_section( 'origin_scheme3', array(
          'title'     => '料金表の編集',
          'priority'  => 30,
        ));

        // 料金表（未就学園児）Text セッティング
        $wp_customize->add_setting( 'kids1[originText]', array(
            'default'   => '30分',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_kids1', array(
            'settings'  => 'kids1[originText]',
            'label'     => '【未就学園児】時間',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'kids2[originText]', array(
            'default'   => '500円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_kids2', array(
            'settings'  => 'kids2[originText]',
            'label'     => '【未就学園児】料金',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
      
        // 料金表（土日祝）Text セッティング
        $wp_customize->add_setting( 'price1[originText]', array(
          'default'   => '30分',
          'type'      => 'option',
          'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text1', array(
            'settings'  => 'price1[originText]',
            'label'     => '【土日祝】時間/１行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price2[originText]', array(
            'default'   => '600円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text2', array(
            'settings'  => 'price2[originText]',
            'label'     => '料金/１行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));

        $wp_customize->add_setting( 'price3[originText]', array(
            'default'   => '45分',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text3', array(
            'settings'  => 'price3[originText]',
            'label'     => '【土日祝】時間/2行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price4[originText]', array(
            'default'   => '800円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text4', array(
            'settings'  => 'price4[originText]',
            'label'     => '料金/2行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));

        // 料金表（平日）Text セッティング
        $wp_customize->add_setting( 'price5[originText]', array(
            'default'   => '60分',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text5', array(
            'settings'  => 'price5[originText]',
            'label'     => '【平日】時間/１行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price6[originText]', array(
            'default'   => '1000円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text6', array(
            'settings'  => 'price6[originText]',
            'label'     => '料金/１行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));

        $wp_customize->add_setting( 'price7[originText]', array(
            'default'   => '90分',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text7', array(
            'settings'  => 'price7[originText]',
            'label'     => '【平日】時間/2行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price8[originText]', array(
            'default'   => '1200円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text8', array(
            'settings'  => 'price8[originText]',
            'label'     => '料金/2行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price9[originText]', array(
            'default'   => '120分',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text9', array(
            'settings'  => 'price9[originText]',
            'label'     => '【平日】時間/3行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'price10[originText]', array(
            'default'   => '1500円',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'price_text10', array(
            'settings'  => 'price10[originText]',
            'label'     => '料金/3行目',
            'section'   => 'origin_scheme3',
            'type'      => 'text',
        ));

        // Checkbox セッティング
        $wp_customize->add_setting( 'price[originCheckbox]', array(
            'default'   => false,
            'type'      => 'option',
            'transport' => 'refresh',
        ));
        // Checkbox コントロール
        $wp_customize->add_control( 'price_checkbox', array(
        'settings'  => 'options[originCheckbox]',
        'label'     => 'プレビューを見る',
        'section'   => 'origin_scheme3',
        'type'      => 'checkbox',
        ));
    }
    add_action( 'customize_register', 'customize_charge' );

    //動物取扱業標識
    function customize_animal( $wp_customize ) {
        // セクション
        $wp_customize->add_section( 'origin_scheme4', array(
          'title'     => '動物取扱業標識の編集',
          'priority'  => 30,
        ));
      
        //Text セッティング
        $wp_customize->add_setting( 'animal1[originText]', array(
          'default'   => '宮保衛指令122号256',
          'type'      => 'option',
          'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'animal_text1', array(
            'settings'  => 'animal1[originText]',
            'label'     => '登録番号',
            'section'   => 'origin_scheme4',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'animal2[originText]', array(
            'default'   => '平成30年8月22日',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'animal_text2', array(
            'settings'  => 'animal2[originText]',
            'label'     => '登録年月日',
            'section'   => 'origin_scheme4',
            'type'      => 'text',
        ));
        $wp_customize->add_setting( 'animal3[originText]', array(
            'default'   => '平成35年8月21日',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control( 'animal_text3', array(
            'settings'  => 'animal3[originText]',
            'label'     => '有効期限',
            'section'   => 'origin_scheme4',
            'type'      => 'text',
        ));
        
        // Checkbox セッティング
        $wp_customize->add_setting( 'animal[originCheckbox]', array(
            'default'   => false,
            'type'      => 'option',
            'transport' => 'refresh',
        ));
        // Checkbox コントロール
        $wp_customize->add_control( 'animal_checkbox', array(
        'settings'  => 'options[originCheckbox]',
        'label'     => 'プレビューを見る',
        'section'   => 'origin_scheme4',
        'type'      => 'checkbox',
        ));
    }
    add_action( 'customize_register', 'customize_animal' );

    //トップ画像を挿入する
    function top_image($wp_customize) {
        // セクション
        $wp_customize->add_section( 'original_img_section', array(
            'title'     => 'トップ画像の変更',
            'priority'  => 20,
        ));
        //Type セッティング
        $wp_customize->add_setting( 'original_image', array(
            'type'      => 'option',
        ));
        //画像コントロール
        $wp_customize->add_control( $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'original_image', array(
            'settings' => 'original_image',
            'label' => 'オリジナル画像',
            'section' => 'original_img_section',
        ))));
    }
    add_action( 'customize_register', 'top_image' );

    //トップ画像を挿入する
    function bottom_image($wp_customize) {
        // セクション
        $wp_customize->add_section( 'original_img_section2', array(
            'title'     => 'ページ下部画像の変更',
            'priority'  => 20,
        ));
        //Type セッティング
        $wp_customize->add_setting( 'original_image2', array(
            'type'      => 'option',
        ));
        //画像コントロール
        $wp_customize->add_control( $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'original_image2', array(
            'settings' => 'original_image2',
            'label' => 'オリジナル画像',
            'section' => 'original_img_section2',
        ))));
    }
    add_action( 'customize_register', 'bottom_image' );


    //よくある質問を入力するショートコード
    function question( $atts, $content = null ) {
        return '<div class="accordions">
        <button class="accordion">' . $content . '</button>';
    }
    add_shortcode('title', 'question');
    function answer( $atts, $content = null ) {
        return '<div class="answer">' . $content .'</div></div>';
    }
    add_shortcode('answer', 'answer');
?>