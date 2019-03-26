<?php get_header(); ?>
    
        <div class="top">
            <img src="<?php echo get_option('original_image')?>">
        </div>
    <div class="wrap">    
        <div class="concept_upper">
            <div id="concept">
                <div class="title blue">
                    <h1 class="left">CONCEPT</h1>
                    <h3 class="left">保護猫カフェについて</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cat-pows_white.png" alt="">
                </div>
                <div class="concept_message">
                <?php
                    $options = get_option('options'); // キーの前半部分（[]の前）を変数に格納
                    $options_2 = get_option('options2'); 
                    $options_3 = get_option('options3');
                    $options_4 = get_option('options4');
                    $options_5 = get_option('options5');
                    $options_6 = get_option('options6');
                    if ( $options['originCheckbox'] ) : ?>
                        <p><?php echo esc_html($options['originText']); ?></p>
                        <p><?php echo esc_html($options_2['originText']); ?></p>
                        <p><?php echo esc_html($options_3['originText']); ?></p>
                        <p><?php echo esc_html($options_4['originText']); ?></p>
                        <p><?php echo esc_html($options_5['originText']); ?></p>
                        <p><?php echo esc_html($options_6['originText']); ?></p>
                    <?php endif; ?>
                </div>  
                
            </div><!-- /concept -->
            <div class="saying_1 maxim">
                <p>あなたがおこなう行動がほとんど無意味だとしても</p>
                <p>それでもあなたは、それをやらなければなりません</p>
                <p>それは世界を変えるためではなく</p>
                <p>あなたが世界によって変えられないようにするためです</p>
                <p class="right">マハトマ・ガンジー</p>
            </div>
        </div><!-- /concept_upper-->
        <div class="concept_bottom">
            <div class="saying_2 maxim">
                <p>動物一匹救うことで世界は変わらないだろう</p>
                <p>でも、その動物にとっての世界は、全く違うものになる</p>
                <p class="right">ピエール・ティヴィヨン　Pierre Thivillon</p>
            </div>
            <div class="sleeping_cats">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top-image.jpg" alt="お休み中の猫">
            </div>
            <div class="m-sleeping_cats"></div>
        </div><!-- /concept_bottom-->
        <div id="system">
            <div class="title pink">
                <h1>SYSTEM</h1>
                <h3>営業日 / 営業時間</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/cat-pows_white.png" alt="肉球白">
            </div>
            
            <div class="working_hour">
                <div class="day row">
                    <div class="th"><p>営業日</p></div>
                    <div class="system_detail">
                        <div class="row1">
                        <?php
                    $business_day1 = get_option('business_day1'); // キーの前半部分（[originText]の前）を変数に格納
                    $business_day2 = get_option('business_day2'); // キーの前半部分（[originText]の前）を変数に格納
                    if ( $options['originCheckbox'] ) : ?>
                        <p><?php echo esc_html($business_day1['originText']); ?></p>
                        <p><?php echo esc_html($business_day2['originText']); ?></p>
                    <?php endif; ?>
                        </div>
                        <div class="row2">
                            <p>台風などで臨時休業の場合はSNSでお知らせします → <a href="https://www.facebook.com/necoutatane/"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="https://twitter.com/necoutatane"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="https://www.instagram.com/necocafe_utatane/"><i class="fab fa-instagram fa-2x"></i></a></p>
                        </div>  
                    </div>
                </div>
                <div class="day row">
                    <div class="th"><p>営業時間</p></div>
                    <div class="system_detail left">
                        <div class="hour-inner">
                        <?php
                    $business_hour1 = get_option('business_hour1'); 
                    $business_hour2 = get_option('business_hour2');
                    $business_hour3 = get_option('business_hour3');
                    $business_hour4 = get_option('business_hour4');
                    $business_hour5 = get_option('business_hour5');
                    $business_hour6 = get_option('business_hour6');
                    if ( $options['originCheckbox'] ) : ?>    
                            <p><?php echo esc_html($business_hour1['originText']); ?></p>
                            <p><?php echo esc_html($business_hour2['originText']); ?></p>
                            <p class="small"><?php echo esc_html($business_hour3['originText']); ?></p>
                        </div>
                        <div class="hour-inner">
                            <p><?php echo esc_html($business_hour4['originText']); ?></p>
                            <p><?php echo esc_html($business_hour5['originText']); ?></p>
                            <p class="small"><?php echo esc_html($business_hour6['originText']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row hour">
                    <div class="th"><p>注意事項</p></div>
                    <div class="system_detail center-position">
                        ご利用の際の注意事項は<a href="https://necoutatane.com/guide/" class="underline">こちら</a>
                    </div>
                </div>
            </div>
                <div class="price_lists">
                    <div class="price_list one_column">
                        <div class="price_list_inner">
                            <div class="price_row">
                                <h3>未就学園児</h3><span>をお連れのお客様</span>
                            </div>
                            <p class="p-t20">11:00〜12:00は未就学園児も入店できます</p>
                            <p>ワンドリンク付/消費税込</p>
                            <?php
                                $kids1 = get_option('kids1');
                                $kids2 = get_option('kids2');
                                if ( $options['originCheckbox'] ) : ?>    
                            <table>
                                <tr>
                                    <th>時間</th><th>料金</th>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($kids1['originText']); ?></td>
                                    <td><?php echo esc_html($kids2['originText']); ?></td>
                                </tr>
                            <?php endif; ?>
                            </table>
                            <p>※未就学園児と同伴者は30分コースのみとなります</p>
                            <p>※0才児のみ無料です</p>
                        </div>
                    </div>
                    <div class="price_list">
                        <div class="price_row">
                            <h3>土・日・祝日</h3>
                        </div>
                        <p class="p-t20">ワンドリンク付/消費税込</p>
                        <?php
                        $price1 = get_option('price1');
                        $price2 = get_option('price2');
                        $price3 = get_option('price3');
                        $price4 = get_option('price4');
                        $price5 = get_option('price5');
                        $price6 = get_option('price6');
                        $price7 = get_option('price7');
                        $price8 = get_option('price8');
                        $price9 = get_option('price9');
                        $price10 = get_option('price10');
                        if ( $options['originCheckbox'] ) : ?>    
                        <table>
                            <tr>
                                <th>時間</th><th>料金</th>
                            </tr>
                            <tr>
                                <td><?php echo esc_html($price1['originText']); ?></td>
                                <td><?php echo esc_html($price2['originText']); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo esc_html($price3['originText']); ?></td>
                                <td><?php echo esc_html($price4['originText']); ?></td>
                            </tr>
                            <tr>
                                <td><?php echo esc_html($price5['originText']); ?></td>
                                <td><?php echo esc_html($price6['originText']); ?></td>
                            </tr>
                        </table>
                    </div>
                        <div class="price_list">
                            <div class="price_row">
                                <h3>平日</h3>
                            </div>
                            <p class="p-t20">ワンドリンク付/消費税込</p>
                            <table>
                                <tr>
                                    <th>時間</th><th>料金</th>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($price1['originText']); ?></td>
                                    <td><?php echo esc_html($price2['originText']); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($price3['originText']); ?></td>
                                    <td><?php echo esc_html($price4['originText']); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($price5['originText']); ?></td>
                                    <td><?php echo esc_html($price6['originText']); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($price7['originText']); ?></td>
                                    <td><?php echo esc_html($price8['originText']); ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo esc_html($price9['originText']); ?></td>
                                    <td><?php echo esc_html($price10['originText']); ?></td>
                                </tr>    
                            </table>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="notice">
                        <ul>
                            <li>●延長　15分間　200円（混雑時はできません）</li>
                            <li>●ドリンクの追加オーダーは200円にて承ります</li>
                            <li>●価格は全て消費税8%込みです</li>
                        </ul>
                    </div>

            <div class="other">
                <div class="reserved row">
                    <div class="th_bottom"><p>猫ルーム貸切ご希望のお客様</p></div>
                    <div class="system_detail left">
                        <p class="left">ワンドリンク+猫ルーム　60分　1200円</p>
                        <p class="left">10:00 〜 11:00 / 18:00 〜 19:00（夏季は19:00〜20:00）</p>
                        <p class="small left">2名様以上 / 前日までに要予約 <a href="tel:0985532922">0985-53-2922</a> / 貸切は未就学園児も入店できます</p>
                     </div>
                </div>
            </div>
            
        </div><!--/system-->        
        
        <div id="sns">
            <div class="title">
                <h1>猫カフェうたたねのSNS</h1>
                <h3>ぜひフォロー&いいね！お願いします</h3>
            </div>
            <div class="sns-inner">
            <div class="facebook">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnecoutatane%2F&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=2222150961333824" width="300" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="twitter">
                    <a class="twitter-timeline" data-width="318" data-height="500" href="https://twitter.com/necoutatane?ref_src=twsrc%5Etfw">Tweets by necoutatane</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="instagram">
                <!-- InstaWidget -->
                <a href="https://instawidget.net/v/user/necocafe_utatane" id="link-1dda7cac4f71508a4096ec25db8ade1df907f17b8a92ffba305965c9c2397ce2">@necocafe_utatane</a>
                <script src="https://instawidget.net/js/instawidget.js?u=1dda7cac4f71508a4096ec25db8ade1df907f17b8a92ffba305965c9c2397ce2&width=300px"></script>
            </div>
        </div>
        </div><!--/sns-->

        <div id="cafe">
            <div class="cafes-photo">
                <img src="<?php echo get_option('original_image2')?>">
            </div>
        </div>

        <div id="access">
            <div class="title">
                <h1>ACCESS</h1>
                <h3>アクセス</h3>
            </div>
            <div class="cafe-info">
                <div class="cafe-info-inner">
                    <p class="large-font bold">猫カフェうたたね</p>
                    <div class="adress">
                        <p>〒880-0941</p>
                        <p>宮崎県宮崎市北川内町野間口4634-2</p>                   
                    </div>
                    <div class="tel">
                        TEL <a href="tel:0985532922">0985-53-2922</a>
                    </div>
                    <div class="open-hours">
                        <p>7月-9月　11:00〜19:00(L.O 18:00)</p>
                        <p>10月-6月　11:00〜18:00(L.O 17:00)</p>
                    </div>            
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13549.72045830436!2d131.3962524!3d31.8949091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf6807197a9e5e92e!2z54yr44Kr44OV44Kn44GG44Gf44Gf44Gt!5e0!3m2!1sja!2sjp!4v1539076221222" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a href="comgooglemaps://?daddr=猫カフェうたたね">地図アプリで見る</a>
                </div>
            </div>
            
        </div>
        <div class="info">
                <div class="licence">
                        <h3>動物取扱業標識</h3>
                        <table>
                        <?php
                            $animal1 = get_option('animal1');
                            $animal2 = get_option('animal2');
                            $animal3 = get_option('animal3');
                            if ( $options['originCheckbox'] ) : ?>
                            <tr><td>氏名</td><td>橋本智子</td></tr>
                            <tr><td>名称</td><td>猫カフェうたたね</td></tr>
                            <tr><td>住所</td><td>宮崎市北川内町野間口4634-2</td></tr>
                            <tr><td>種別</td><td>展示</td></tr>
                            <tr><td>登録番号</td><td><?php echo esc_html($animal1['originText']); ?></td></tr>
                            <tr><td>初年度登録</td><td>平成20年8月22日</td></tr>
                            <tr><td>登録年月日</td><td><?php echo esc_html($animal2['originText']); ?></td></tr>
                            <tr><td>有効期限</td><td><?php echo esc_html($animal3['originText']); ?></td></tr>
                    <?php endif; ?>
                        </table>
                </div> 
        </div>
    </div><!-- /wrap -->
<?php get_footer(); ?>