@include("layouts.nav")

<div class="title_cart">
    <h1>Корзина</h1>
    <i class="fa-solid fa-xmark"></i>
</div>
<div class="content">
    <div class="cardList">
        <div class="card">
            <img src="" alt="">
            <p></p>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z"/>
                </svg>
            </button>
        </div>
        <div class="card">
            <img src="" alt="">
            <p></p>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z"/>
                </svg>
            </button>
        </div>

    </div>
    <div class="sum_price">
        <div class="continue">
            <button>Продолжить покупки</button>
        </div>
        <div class="price">
            <div class="column">
                <p>2297</p>
                <button>Оформить заказ</button>
            </div>

        </div>
    </div>
    <div class="together">
        <h4>Вместе дешевле</h4>
        <div class="cardListTogether">
            <div class="card">
                <div class="cardList">
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                </div>
                <div class="data_product">
                    <p class="code">Код комплекта: 10357768-255900031-330657409</p>
                    <p class="price">1 245 ₴</p>
                    <button class="buy">Купить комплект</button>
                </div>
            </div>
            <div class="card">
                <div class="cardList">
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                </div>
                <div class="data_product">
                    <p class="code">Код комплекта: 10357768-255900031-330657409</p>
                    <p class="price">1 245 ₴</p>
                    <button class="buy">Купить комплект</button>
                </div>
            </div>
            <div class="card">
                <div class="cardList">
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                </div>
                <div class="data_product">
                    <p class="code">Код комплекта: 10357768-255900031-330657409</p>
                    <p class="price">1 245 ₴</p>
                    <button class="buy">Купить комплект</button>
                </div>
            </div>
            <div class="card">
                <div class="cardList">
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <p></p>
                        <em class="price"></em>
                    </div>
                </div>
                <div class="data_product">
                    <p class="code">Код комплекта: 10357768-255900031-330657409</p>
                    <p class="price">1 245 ₴</p>
                    <button class="buy">Купить комплект</button>
                </div>
            </div>
        </div>
    </div>
{{--    <div>--}}
{{--        <p>chtoto</p>--}}

{{--        @foreach($cart as $item)--}}
{{--            <p>{{$item->prent_id}}</p>--}}
{{--            <em>{{$item->product_id}}</em>--}}

{{--        @endforeach--}}
{{--        @foreach($user_profile as $item)--}}
{{--            <p>{{$item->balance}}</p>--}}
{{--        @endforeach--}}
{{--<p>chtoto</p>--}}
{{--    </div>--}}
</div>

