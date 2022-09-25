@extends("layouts.app")
@section("title_name", $product->description)
@section("content")

    <div class="product">


        <div class="product_top">
            <div class="location_product">
                {{--Задать вопрос по этому блоку!!!--}}
                <div>
                    <a href="http://127.0.0.1:8000/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="home_svg">
                            <path
                                d="M575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6H511.8L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5L575.8 255.5z"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">

                            <path
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                        <span>Инструменты и автотовары</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">

                            <path
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                        <span>Авто и мото</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">

                            <path
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                        <span>Мототовары</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">

                            <path
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                        <span>Мотоэкипировка</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">

                            <path
                                d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/>
                        </svg>
                        <span>Мотоперчатки</span>
                    </a>
                </div>
            </div>
            <div class="product_name">
                <h1>{{$product->description}}</h1>
                <div class="redactor_svg" onclick="update_name()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"/>
                    </svg>
                </div>
                <form action="{{route("ajax_update_product")}}"
                      method="post"
                      onsubmit="update_product(this); return false"
                      class="hidden form_name">
                    @csrf
                    <textarea name="description" class="description" required>{{$product->description}}</textarea>
                    <input type="hidden" value="{{$product->id}}" name="id_product">
                    <button type="submit">Внести изминения</button>
                </form>
            </div>
            <div class="product_rating">
                <div class="product_rating_stars">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                            </svg>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path
                                    d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                            </svg>
                        </li>
                    </ul>
                </div>
                <a href="" class="product_rating_views">
                    <p>оставить отзыв</p>
                </a>
                <p class="product_code">
                    <span>Код:  </span>
                    <span class="code">314908303</span>
                </p>
            </div>

        </div>
        <div class="navbar">
            <div class="tabs">
                <ul>
                    <li><a href="">Все о товаре</a></li>
                    <li><a href="">Характеристики</a></li>
                    <li><a href="">Оставить отзыв</a></li>
                    <li><a href="">Вопросы<span>1</span></a></li>
                    <li><a href="">Фото</a></li>
                    <li><a href="">Покупают вместе</a></li>
                    <li><a href="{{route('update_product')}}">Редактировать</a></li>
                </ul>
            </div>
        </div>
        <div class="content_product">
            <div class="product_main">
                <div class="img_block">
                    <div class="img">
                        {{--                    <img src="{{$product->img}}" alt="">--}}

                        <img src="C:\fakepath\Без названия.jpg" alt="">

                    </div>
                    <div class="images">
                        <div class="small_images"><img
                                src="https://content2.rozetka.com.ua/goods/images/preview/260636960.jpg" alt=""></div>
                        <div class="small_images"><img
                                src="https://content1.rozetka.com.ua/goods/images/preview/260636961.png" alt=""></div>
                        <div class="small_images"><img
                                src="https://content1.rozetka.com.ua/goods/images/preview/260636962.jpg" alt=""></div>
                        <div class="small_images"><img
                                src="https://content2.rozetka.com.ua/goods/images/preview/260636963.jpg" alt=""></div>
                        <div class="small_images"><img
                                src="https://content1.rozetka.com.ua/goods/images/preview/260636965.png" alt=""></div>
                        <div class="small_images"><img
                                src="https://content.rozetka.com.ua/goods/images/preview/260636967.png" alt=""></div>
                        <div class="small_images"><img
                                src="https://content1.rozetka.com.ua/goods/images/preview/260636970.jpg" alt=""></div>
                        <div class="small_images"><img
                                src="https://content2.rozetka.com.ua/goods/images/preview/260636973.png" alt=""></div>

                    </div>
                    <button>Подробнее о товаре</button>
                </div>

                <div class="product_main_info">
                    <div class="product_status">
                        <p><span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/></svg>
                </span>
                            Есть в наличии
                        </p>
                    </div>
                    <div class="product_trade">
                        <div class="price">
                            <p class="product_price">{{$product->price*($product->sale/100)}}<span>₴</span></p>
                            <p class="product_old_price"><s>{{$product->price}}</s><span>₴</span></p>
                            <form action="{{route("ajax_update_product")}}"
                                  method="post" enctype="multipart/form-data"
                                  onsubmit="update_product(this); return false"
                                  class="hidden form_price">
                                @csrf
                                <textarea name="name" class="description" required></textarea>
                                <input type="hidden" value="{{$product->id}}" name="id_product">
                                <button type="submit">Внести изминения</button>
                            </form>
                            <div class="redactor_svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"/>
                                </svg>
                            </div>
                        </div>
                        <ul class="product_button">
                            <li>
                                <div class="buy_button">
                                    <button><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/>
                        </svg></span>Купить
                                    </button>
                                </div>
                            </li>
                            <li>
                                <ul class="product_action">
                                    <li>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                 class="compare">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M554.9 154.5c-17.62-35.25-68.12-35.38-85.87 0c-87 174.3-84.1 165.9-84.1 181.5c0 44.13 57.25 80 128 80s127.1-35.88 127.1-80C639.1 319.9 641.4 327.3 554.9 154.5zM439.1 320l71.96-144l72.17 144H439.1zM256 336c0-16.12 1.375-8.75-85.12-181.5c-17.62-35.25-68.12-35.38-85.87 0c-87 174.3-84.1 165.9-84.1 181.5c0 44.13 57.25 80 127.1 80S256 380.1 256 336zM127.9 176L200.1 320H55.96L127.9 176zM495.1 448h-143.1V153.3C375.5 143 393.1 121.8 398.4 96h113.6c17.67 0 31.1-14.33 31.1-32s-14.33-32-31.1-32h-128.4c-14.62-19.38-37.5-32-63.62-32S270.1 12.62 256.4 32H128C110.3 32 96 46.33 96 64S110.3 96 127.1 96h113.6c5.25 25.75 22.87 47 46.37 57.25V448H144c-26.51 0-48.01 21.49-48.01 48c0 8.836 7.165 16 16 16h416c8.836 0 16-7.164 16-16C544 469.5 522.5 448 495.1 448z"/>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="heart">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z"/>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="salesman">
                        <div class="info_salesman">
                            <div class="product_seller">
                                <div class="product_seller_title">
                                    <p>Продавец: <a href="">LIFE</a></p>
                                </div>
                            </div>
                            <div class="product_seller_feedback">
                                <a href="">
                                    <div class="product_seller_stars">
                                        <ul class="stars">
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"/>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mark">
                                        <p><b>3.85</b> (1176 оценок)</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="product_seller_links">
                            <div>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM256 336c-18 0-32 14-32 32s13.1 32 32 32c17.1 0 32-14 32-32S273.1 336 256 336zM289.1 128h-51.1C199 128 168 159 168 198c0 13 11 24 24 24s24-11 24-24C216 186 225.1 176 237.1 176h51.1C301.1 176 312 186 312 198c0 8-4 14.1-11 18.1L244 251C236 256 232 264 232 272V288c0 13 11 24 24 24S280 301 280 288V286l45.1-28c21-13 34-36 34-60C360 159 329 128 289.1 128z"/>
                                    </svg>
                                    <p>Написать продовцу</p>
                                </button>
                            </div>
                            <div>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M506.3 417l-213.3-364c-16.33-28-57.54-28-73.98 0l-213.2 364C-10.59 444.9 9.849 480 42.74 480h426.6C502.1 480 522.6 445 506.3 417zM232 168c0-13.25 10.75-24 24-24S280 154.8 280 168v128c0 13.25-10.75 24-23.1 24S232 309.3 232 296V168zM256 416c-17.36 0-31.44-14.08-31.44-31.44c0-17.36 14.07-31.44 31.44-31.44s31.44 14.08 31.44 31.44C287.4 401.9 273.4 416 256 416z"/>
                                    </svg>
                                    <p>Пожаловаться на товар</p>
                                </button>
                            </div>
                            <div>
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M160 48C160 21.49 181.5 0 208 0H256V80C256 88.84 263.2 96 272 96H304C312.8 96 320 88.84 320 80V0H368C394.5 0 416 21.49 416 48V176C416 202.5 394.5 224 368 224H208C181.5 224 160 202.5 160 176V48zM96 288V368C96 376.8 103.2 384 112 384H144C152.8 384 160 376.8 160 368V288H208C234.5 288 256 309.5 256 336V464C256 490.5 234.5 512 208 512H48C21.49 512 0 490.5 0 464V336C0 309.5 21.49 288 48 288H96zM416 288V368C416 376.8 423.2 384 432 384H464C472.8 384 480 376.8 480 368V288H528C554.5 288 576 309.5 576 336V464C576 490.5 554.5 512 528 512H368C341.5 512 320 490.5 320 464V336C320 309.5 341.5 288 368 288H416z"/>
                                    </svg>
                                    <p>Страница продавца</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="product_attention">
                        <div class="text">
                            <p>Оплата : - Наложенный платёж. - На карту ПриватБанк, Монобанк , Visa/MasterCard. - Срок
                                доставки 1-2 дня, Отправка в день заказа!</p>
                        </div>
                    </div>
                    <div class="product_delivery">
                        <div class="head_product_delivery">
                            <p>
                                Доставка в:
                                <a href="">Умань</a>
                            </p>
                        </div>
                        <div class="body_product_delivery">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M130.7 313.9C126.5 300.4 137.8 288 151.1 288H364.5C378.7 288 389.9 300.4 385.8 313.9C368.1 368.4 318.2 408 258.2 408C198.2 408 147.5 368.4 130.7 313.9V313.9zM208.4 192C208.4 209.7 194 224 176.4 224C158.7 224 144.4 209.7 144.4 192C144.4 174.3 158.7 160 176.4 160C194 160 208.4 174.3 208.4 192zM281.9 214.6C273.9 207 273.5 194.4 281 186.3C295.6 170.8 316.3 164 335.6 164C354.1 164 375.7 170.8 390.2 186.3C397.8 194.4 397.4 207 389.3 214.6C381.2 222.1 368.6 221.7 361 213.7C355.6 207.8 346.3 204 335.6 204C324.1 204 315.7 207.8 310.2 213.7C302.7 221.7 290 222.1 281.9 214.6zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"/>
                                    </svg>
                                    <div class="product_delivery_type">
                                        <p>Самовывоз из точек выдачи Rozetka</p>
                                        <div class="inserted">
                                            <a href="">Показать на карте</a>
                                        </div>
                                    </div>
                                    <div class="product_delivery_time">
                                        <time>Забрать 27 июля с 15:00</time>
                                    </div>
                                    <div class="product_delivery_cost">
                                        <p>Бесплатно</p>
                                    </div>
                                </li>

                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M495.5 223.2C491.6 223.7 487.6 224 483.4 224C457.4 224 434.2 212.6 418.3 195C402.4 212.6 379.2 224 353.1 224C327 224 303.8 212.6 287.9 195C272 212.6 248.9 224 222.7 224C196.7 224 173.5 212.6 157.6 195C141.7 212.6 118.5 224 92.36 224C88.3 224 84.21 223.7 80.24 223.2C24.92 215.8-1.255 150.6 28.33 103.8L85.66 13.13C90.76 4.979 99.87 0 109.6 0H466.4C476.1 0 485.2 4.978 490.3 13.13L547.6 103.8C577.3 150.7 551 215.8 495.5 223.2H495.5zM499.7 254.9C503.1 254.4 508 253.6 512 252.6V448C512 483.3 483.3 512 448 512H128C92.66 512 64 483.3 64 448V252.6C67.87 253.6 71.86 254.4 75.97 254.9L76.09 254.9C81.35 255.6 86.83 256 92.36 256C104.8 256 116.8 254.1 128 250.6V384H448V250.7C459.2 254.1 471.1 256 483.4 256C489 256 494.4 255.6 499.7 254.9L499.7 254.9z"/>
                                    </svg>
                                    <div class="product_delivery_type">
                                        <p>Самовывоз из отделений почтовых<br>операторов</p>
                                        <div class="inserted">
                                            <a href="">Показать на карте</a>
                                        </div>
                                    </div>
                                    <div class="product_delivery_time">
                                        <time></time>
                                    </div>
                                    <div class="product_delivery_cost">
                                        <p>по тарифам <br>перевозчика</p>
                                    </div>
                                </li>

                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M32 432C32 458.5 53.49 480 80 480h352c26.51 0 48-21.49 48-48V160H32V432zM160 236C160 229.4 165.4 224 172 224h168C346.6 224 352 229.4 352 236v8C352 250.6 346.6 256 340 256h-168C165.4 256 160 250.6 160 244V236zM480 32H32C14.31 32 0 46.31 0 64v48C0 120.8 7.188 128 16 128h480C504.8 128 512 120.8 512 112V64C512 46.31 497.7 32 480 32z"/>
                                    </svg>
                                    <div class="product_delivery_type">
                                        <p>Доставка курьером</p>
                                        <div class="inserted">
                                            <a href="">новая почта</a>
                                        </div>
                                    </div>
                                    <div class="product_delivery_time">
                                        <time></time>
                                    </div>
                                    <div class="product_delivery_cost">
                                        <p>по тарифам <br>перевозчика</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_about_block">
                        <div class="product_about_item">
                            <h4></h4>
                            <div class="product_about_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M448 32C465.7 32 480 46.33 480 64C480 81.67 465.7 96 448 96H80C71.16 96 64 103.2 64 112C64 120.8 71.16 128 80 128H448C483.3 128 512 156.7 512 192V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM416 336C433.7 336 448 321.7 448 304C448 286.3 433.7 272 416 272C398.3 272 384 286.3 384 304C384 321.7 398.3 336 416 336z"/>
                                </svg>
                            </div>
                            <div class="product_about_text">
                                <strong>Оплата. </strong><span>Оплата при получении товара</span>
                                <div class="product_delivery_attention"> В настоящий момент использование бонусов на
                                    данный
                                    товар недоступно.
                                </div>
                            </div>
                        </div>

                        <div class="product_about_item border">
                            <h4></h4>
                            <div class="product_about_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M448 32C465.7 32 480 46.33 480 64C480 81.67 465.7 96 448 96H80C71.16 96 64 103.2 64 112C64 120.8 71.16 128 80 128H448C483.3 128 512 156.7 512 192V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM416 336C433.7 336 448 321.7 448 304C448 286.3 433.7 272 416 272C398.3 272 384 286.3 384 304C384 321.7 398.3 336 416 336z"/>
                                </svg>
                            </div>
                            <div class="product_about_text">
                                <strong>Гарантия. </strong><span>3 месяца Обмен/возврат товара в течение 14 дней</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="related_product">
                <h4>Также вас могут заинтересовать</h4>
                <div class="product_content">
                    {{--                <button class="left_button_simple"></button>--}}
                    <div class="card_product">
                        <div class="cardList">
                            <div class="card">
                                <i class="fa-solid fa-heart"></i>
                                <div class="img">
                                    <img src="https://content.rozetka.com.ua/goods/images/preview/15670585.jpg" alt="">
                                </div>
                                <a href="">Мотоперчатки кожаные Pursuit без перфорации M (10106)</a>
                                <em class="sale"></em>
                                <p class="price">745</p>
                                <p class="countStatus ends waiting">Заканчивается</p>
                            </div>
                        </div>
                    </div>
                    {{--                <button class="right_button_simple"></button>--}}
                </div>
            </div>

            <div class="product_sponsored">
                <h4></h4>
                <div class="simple_slider">
                    <button></button>
                    <div class="related_product">
                        <h4>Реклама</h4>
                        <div class="product_content">
                            {{--                <button class="left_button_simple"></button>--}}
                            <div class="card_product">
                                <div class="cardList">
                                    <div class="card">
                                        <i class="fa-solid fa-heart"></i>
                                        <div class="img">
                                            <img src="https://content.rozetka.com.ua/goods/images/preview/15670585.jpg"
                                                 alt="">
                                        </div>
                                        <a href="">Мотоперчатки кожаные Pursuit без перфорации M (10106)</a>
                                        <em class="sale"></em>
                                        <p class="price">745</p>
                                        <p class="countStatus ends waiting">Заканчивается</p>
                                    </div>
                                    <div class="card">
                                        <i class="fa-solid fa-heart"></i>
                                        <div class="img">
                                            <img src="https://content.rozetka.com.ua/goods/images/preview/15670585.jpg"
                                                 alt="">
                                        </div>
                                        <a href="">Мотоперчатки кожаные Pursuit без перфорации M (10106)</a>
                                        <em class="sale"></em>
                                        <p class="price">745</p>
                                        <p class="countStatus ends waiting">Заканчивается</p>
                                    </div>
                                    <div class="card">
                                        <i class="fa-solid fa-heart"></i>
                                        <div class="img">
                                            <img src="https://content.rozetka.com.ua/goods/images/preview/15670585.jpg"
                                                 alt="">
                                        </div>
                                        <a href="">Мотоперчатки кожаные Pursuit без перфорации M (10106)</a>
                                        <em class="sale"></em>
                                        <p class="price">745</p>
                                        <p class="countStatus ends waiting">Заканчивается</p>
                                    </div>
                                    <div class="card">
                                        <i class="fa-solid fa-heart"></i>
                                        <div class="img">
                                            <img src="https://content.rozetka.com.ua/goods/images/preview/15670585.jpg"
                                                 alt="">
                                        </div>
                                        <a href="">Мотоперчатки кожаные Pursuit без перфорации M (10106)</a>
                                        <em class="sale"></em>
                                        <p class="price">745</p>
                                        <p class="countStatus ends waiting">Заканчивается</p>
                                    </div>
                                </div>
                            </div>

                            {{--                <button class="right_button_simple"></button>--}}
                        </div>
                    </div>
                    <button></button>
                </div>
            </div>
            <div class="product_description">
                <div class="product_description_left">
                    <div class="product_description_about">
                        <div class="product_description_about_text">
                        <h3>
                            <p>Описание </p>
                            <span>{{$product->description}}</span>
                        </h3>
                        <div class="product_description_about_text">
                            <p>lorem inputlorem inputlorem inputlorem inputlorem inputlorem inputlorem inputlorem
                                inputlorem inputlorem input</p>
                            <p>lorem inputlorem inputlorem inputlorem inputlorem inputlorem inputlorem inputlorem
                                inputlorem inputlorem input</p>
                        </div>
                        <button type="button"><span>Читать полностью</span></button>
                        </div>
                        <div class="product_description_characteristic">
                            <h3><p>Характеристики </p><span>Стиральный порошок Persil автомат Колор 8.1 кг (9000101428230)</span></h3>
                            <div class="list_product_characteristic">
                                <ul>
                                    <li>
                                        <div class="characteristic_label">
                                            <span>Вид стирки</span>
                                        </div>
                                        <div class="characteristic_value">
                                            <a>Автоматическая</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="characteristic_label">
                                            <span>Назначение по типу белья</span>
                                        </div>
                                        <div class="characteristic_value">
                                            <a>Все виды белья</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <a href="">Смотреть все характеристики</a>
                        </div>

                    </div>
                </div>
                <div class="product_description_right">
                    <div class="comments">
                        <div class="product_comments_header">
                            <h3><p>Отзывы покупателей</p><span>1330</span></h3>
                            <div>
                                <button type="button">Написать отзыв</button>
                            </div>
                        </div>
                        <ul class="product_comments_list">
                            <li class="product_comments_list_item">
                                <div class="comment">
                                    <div class="comment_header">
                                        <div class="svg"></div>
                                        <div class="comment_author">
                                            <p>Ольга</p>
                                            <time class="comment_date">18 сентября 2022</time>
                                            <ul class="comment_actions">
                                                <li>
                                                    <div class="svg"></div>
                                                </li>
                                                <li>
                                                    <div class="svg"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment_vars">
                                        <ul>
                                            <li>
                                                <span class="comment_vars_label">Продавец: </span>
                                                <span class="comment_vars_value">Rozetka</span>
                                            </li>
                                            <li>
                                                <span class="comment_vars_label">Вес: </span>
                                                <span class="comment_vars_value">8.1 кг</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="comment_body">
                                        <div class="comment_stars">
                                            <ul>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                    </svg>
                                                </li>
                                                <li>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/>
                                                    </svg>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="comment_text">Брала с дополнительной скидкой, от чего покупка в разы
                                            приятней</p>
                                        <ul class="comment_essentials">
                                            <li><span>Достоинства:</span><p>Хороший порошок</p></li>
                                            <li class="top_margin"><span>Недостатки:</span><p>Нет</p></li>
                                        </ul>
                                        <div class="comment_footer">
                                            <div class="replay_comment">
                                                <button>
                                                    <div class="svg"></div>
                                                    <p>Ответить</p>
                                                </button>
                                            </div>
                                            <div class="comment_votes">
                                                <div class="product_comment_votes">
                                                    <button>
                                                        <div class="svg"></div>
                                                    </button>
                                                    <button>
                                                        <div class="svg"></div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('update_product')
            </div>

            <script src="{{asset("js/product.js")}}"></script>
            <script src="{{asset("js/choice.js")}}"></script>
            <script src="{{asset("js/form.js")}}"></script>

@stop
