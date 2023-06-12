@extends('layouts.admin', ['title' => env('APP_NAME'). ' - расширенная заявка №' . $full_order->id ])

@section('head+')
    <link rel="stylesheet" href="{{ asset('css/forms-1.0.min.css') }}" type="text/css"/>
@endsection

@section('header')
    <strong>Расширенная заявка №{{ $full_order->id }}</strong>
@endsection

@section('content')

    <!--allrecords-->
    <div class="t-records">
        <div id="rec427542532" class="r t-rec t-rec_pt_150 t-rec_pb_150"
             style="padding-left:15px;padding-top:20px;padding-bottom:20px;background-color:#f2f2f0; ">
            <!-- t678 -->
            <div class="t678 t-input_nomargin">
                <div class="t-container">
                    <div class="t-col t-col_8 t-prefix_2">
                        <div>
                            <div class="t-form__inputsbox">
                                <div class="t-input-group t-input-group_nm">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">ФИО владельца: </span>
                                        {{ $full_order->name }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ph">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Телефон: </span>
                                        {{ $full_order->phone }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_em">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Email: </span>
                                        {{ $full_order->email }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_rd">
                                    <div class="t-input-title t-descr t-descr_md"
                                         style="color:#2a2122;font-weight:600;">
                                        Предпочтительный способ связи:
                                    </div>
                                    <div class="t-input-block">
                                        <div class="t-checkboxes__wrapper">
                                            <label class="t-checkbox__control t-text t-text_xs"
                                                   style="color: #2a2122">
                                                <input type="checkbox" name="favorite_phone" value="1"
                                                       class="t-checkbox"
                                                       {{ $full_order->favorite_phone == 1 ? "checked" : "" }} disabled>
                                                <div class="t-checkbox__indicator"
                                                     style="border-color:#2a2122"></div>
                                                Телефон
                                            </label>
                                            <label class="t-checkbox__control t-text t-text_xs"
                                                   style="color: #2a2122">
                                                <input type="checkbox" name="favorite_email" value="1"
                                                       class="t-checkbox"
                                                       {{ $full_order->favorite_email == 1 ? "checked" : "" }} disabled>
                                                <div class="t-checkbox__indicator"
                                                     style="border-color:#2a2122"></div>
                                                Email
                                            </label>
                                            <label class="t-checkbox__control t-text t-text_xs"
                                                   style="color: #2a2122">
                                                <input type="checkbox" name="favorite_whatsapp" value="1"
                                                       class="t-checkbox"
                                                       {{ $full_order->favorite_whatsapp == 1 ? "checked" : "" }} disabled>
                                                <div class="t-checkbox__indicator"
                                                     style="border-color:#2a2122"></div>
                                                WhatsApp
                                            </label>
                                            <label class="t-checkbox__control t-text t-text_xs"
                                                   style="color: #2a2122">
                                                <input type="checkbox" name="favorite_telegram" value="1"
                                                       class="t-checkbox"
                                                       {{ $full_order->favorite_telegram == 1 ? "checked" : "" }} disabled>
                                                <div class="t-checkbox__indicator"
                                                     style="border-color:#2a2122"></div>
                                                Telegram
                                            </label>
                                        </div>

                                        <style>
                                            #rec427542532 .t-checkbox__indicator:after {
                                                border-color: #2a2122;
                                            }
                                        </style>
                                    </div>
                                    <hr>
                                </div>
                                <div class="t-input-group t-input-group_nm">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Кличка питомца: </span>
                                        {{ $full_order->pet_name }}
                                    </div>

                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Возраст питомца: </span>
                                        {{ $full_order->age }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_rd">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Пол питомца:</span>
                                        {{ $full_order->petSex->category }}
                                    </div>

                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">В каком возрасте была стерилизация: </span>
                                        {{ $full_order->sterilized }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Порода:</span>
                                        {{ $full_order->breed }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Актуальный вес:</span>
                                        {{ $full_order->weight }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Вес отца и матери:</span>
                                        {{ $full_order->parents_weight }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_rd">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Индекс кондиции тела:</span>
                                        {{ $full_order->conditionIndex->category }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_rd">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Активность:</span>
                                        {{ $full_order->activity_table->category }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span
                                            style="color:#2a2122;font-weight:600;">Описание ежедневной активности:</span>
                                        {{ $full_order->daily_activity }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Условия содержания:</span>
                                        {{ $full_order->location_condition }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Состояние стула питомца:</span>
                                        {{ $full_order->pet_shit }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span
                                            style="color:#2a2122;font-weight:600;">Питание животного до жизни с Вами:</span>
                                        {{ $full_order->food_before }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Питание животного в период жизни с Вами:</span>
                                        {{ $full_order->food_with_you }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Питается ли ваш питомец в присутствии других животных:</span>
                                        {{ $full_order->food_with_other }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span
                                            style="color:#2a2122;font-weight:600;">Пищевые предпочтения животного:</span>
                                        {{ $full_order->favorite_food }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Данные о пищевой непереносимости у животного:</span>
                                        {{ $full_order->intolerance }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_in">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Принципиальные взгляды на кормление:</span>
                                        {{ $full_order->principled_views }}
                                    </div>
                                </div>
                                <hr>
                                <div class="t-input-group t-input-group_tx">
                                    <div class="t-input-block">
                                        <div class="t-text" style="color:#2a2122">
                                            <div style="font-size:18px;padding-bottom: 10px;">

                                                <strong>Актуальный рацион животного</strong>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Мясо, рыба, яйцо: </span>
                                        {{$full_order->meat_fish_egg}}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Молочные продукты: </span>
                                        {{ $full_order->milk }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Крупы, картофель, макароны: </span>
                                        {{ $full_order->cereals_potato_pasta }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Овощи и фрукты: </span>
                                        {{ $full_order->vegetables_fruits }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Масла и жиры: </span>
                                        {{ $full_order->oils_fats }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Лакомства, снеки, косточки: </span>
                                        {{ $full_order->treats_snacks_bones }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Добавки, витамины, пасты: </span>
                                        {{ $full_order->supplements_vitamins_pastes }}
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Другие продукты: </span>
                                        {{ $full_order->other_products }}
                                    </div>
                                </div>
                                <hr>
                                <div class="t-input-group t-input-group_tx">
                                    <div class="t-input-block">
                                        <div class="t-text" style="color:#2a2122">
                                            <div style="font-size:18px;padding-bottom: 10px;">
                                                <strong>Состояние здоровья</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Диагностированные заболевания, пройденное лечение: </span>
                                        {{ $full_order->healing }}
                                    </div>

                                </div>
                                <div class="t-input-group t-input-group_ta">
                                    <div class="t-input-title t-descr t-descr_md">
                                        <span style="color:#2a2122;font-weight:600;">Назначенные препараты:</span>
                                        {{ $full_order->medicament }}
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
