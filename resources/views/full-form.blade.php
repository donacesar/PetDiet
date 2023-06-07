@extends('layouts.main-layout', ['title' => env('APP_NAME'). ' - Рацион'])
@section('content')

    <!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="3664634"
         data-tilda-page-id="26487543" data-tilda-page-alias="zayavka"
         data-tilda-formskey="01774ea7e43ddb4d5d26439f93664634" data-tilda-lazy="yes">

        <div id="rec427542532" class="r t-rec t-rec_pt_150 t-rec_pb_150"
             style="padding-top:150px;padding-bottom:150px;background-color:#f2f2f0; " data-animationappear="off"
             data-record-type="678" data-bg-color="#f2f2f0">
            <!-- t678 -->
            <div class="t678 t-input_nomargin">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__title t-title t-title_xs" >
                                <div style="color:#2a2122;" >
                                    <strong>Форма заявки для составления рациона</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-container">
                    <div class="t-col t-col_8 t-prefix_2">
                        <div>
                            <form id="form427542532" name='form427542532'  action='{{ route('full_form.create') }}' method='POST'>

                                @csrf

                                <div class="t-form__inputsbox">
                                    <div class="t-input-group t-input-group_nm">
                                        <div class="t-input-title t-descr t-descr_md" style="color:#2a2122;font-weight:600;">ФИО
                                            владельца*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text"  name="name"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ph" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Ваш
                                            телефон*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="tel"  name="phone"
                                                   class="t-input js-tilda-rule t-input_bbonly" pattern="[0-9\s\-\+\(\)]*"
                                                   style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_em" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Ваш
                                            Email
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text"  name="email"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""

                                                   style="color:#2a2122; border:1px solid #2a2122; ">
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_rd" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Предпочтительный способ связи
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">можно выбрать несколько
                                        </div>
                                        <div class="t-input-block">
                                            <div class="t-checkboxes__wrapper">
                                                <label class="t-checkbox__control t-text t-text_xs"
                                                       style="color: #2a2122">
                                                    <input type="checkbox"  name="favorite_phone" value="1" class="t-checkbox" checked>
                                                    <div class="t-checkbox__indicator"
                                                         style="border-color:#2a2122"></div>
                                                    Телефон
                                                </label>
                                                <label class="t-checkbox__control t-text t-text_xs"
                                                       style="color: #2a2122">
                                                    <input type="checkbox" name="favorite_email" value="1" class="t-checkbox">
                                                    <div class="t-checkbox__indicator"
                                                         style="border-color:#2a2122"></div>
                                                    Email
                                                </label>
                                                <label class="t-checkbox__control t-text t-text_xs"
                                                       style="color: #2a2122">
                                                    <input type="checkbox" name="favorite_whatsapp" value="1" class="t-checkbox">
                                                    <div class="t-checkbox__indicator"
                                                         style="border-color:#2a2122"></div>
                                                    WhatsApp
                                                </label>
                                                <label class="t-checkbox__control t-text t-text_xs"
                                                       style="color: #2a2122">
                                                    <input type="checkbox" name="favorite_telegram" value="1" class="t-checkbox">
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
                                    </div>
                                    <div class="t-input-group t-input-group_ws" >
                                        <div class="t-input-block">
                                            <div class="" style="height:102px">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_nm" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Кличка питомца*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text"  name="pet_name"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""

                                                   style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Возраст питомца*
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">укажите точную дату рождения, если она известна
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="age"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   placeholder="Х лет, Х мес, чч/мм/гггг"
                                                   style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_rd" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Пол
                                            питомца*
                                        </div>
                                        <div class="t-input-block">
                                            <div class="t-radio__wrapper">
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="1"
                                                           class="t-radio js-tilda-rule" checked>
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Кобель (не кастрирован)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="2"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Кобель (кастрирован)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="3"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Собака (не стерилизована)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="4"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Собака (стерилизована)
                                                </label>
                                                <style>
                                                    #rec427542532 .t-radio__indicator:after {
                                                        background: #2a2122;
                                                    }
                                                </style>
                                            </div>
                                            <div class="t-radio__wrapper">
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="5"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                   Кот (не кастрирован)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="6"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Кот (кастрирован)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="7"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Кошка (не стерилизована)
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="pet_sex" value="8"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Кошка (стерилизована)
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Если
                                            животное стерилизовано, укажите в каком возрасте была операция
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="sterilized"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   style="color:#2a2122; border:1px solid #2a2122; ">
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Порода*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="breed"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                    style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Актуальный вес*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="weight" class="t-input js-tilda-rule t-input_bbonly"
                                                   value=""
                                                   style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Вес
                                            отца и матери (пункт для котят и щенков до 1 года)
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="parents_weight"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   placeholder="вес отца: вес матери:"
                                                   style="color:#2a2122; border:1px solid #2a2122; ">
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_rd">
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Индекс кондиции тела*
                                        </div>
                                        <div class="t-input-block">
                                            <div class="t-radio__wrapper">
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="1"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Крайнее истощение
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="2"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Истощение
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="3"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Недостаточный вес
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index"
                                                           value="4"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Слегка недостаточный вес
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="5"
                                                           class="t-radio js-tilda-rule" checked>
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Норма
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index"
                                                           value="6" class="t-radio js-tilda-rule"
                                                           >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Слегка избыточный вес
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="7"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Избыточный вес
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="8"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Ожирение
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="condition_index" value="9"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    Крайнее ожирение
                                                </label>
                                                <style>
                                                    #rec427542532 .t-radio__indicator:after {
                                                        background: #2a2122;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_rd" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Активность*
                                        </div>
                                        <div class="t-input-block">
                                            <div class="t-radio__wrapper">
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="activity" value="1"
                                                           class="t-radio js-tilda-rule" checked>
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    до 2 часов в день
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="activity" value="2"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    2-4 часа в день
                                                </label>
                                                <label class="t-radio__control t-text t-text_xs" style="color: #2a2122">
                                                    <input type="radio" name="activity" value="3"
                                                           class="t-radio js-tilda-rule" >
                                                    <div class="t-radio__indicator" style="border-color:#2a2122"></div>
                                                    от 4 часов в день
                                                </label>
                                                <style>
                                                    #rec427542532 .t-radio__indicator:after {
                                                        background: #2a2122;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Опишите ежедневную активность
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="daily_activity" class="t-input js-tilda-rule t-input_bbonly"
                                                      placeholder="прогулки, игры, спорт, работа и т.д."
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Условия содержания*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="location_condition"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   placeholder="квартира, частный дом и сад, вольер и т.д."
                                                    style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Состояние стула питомца*
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="pet_shit" class="t-input js-tilda-rule t-input_bbonly"
                                                   value=""
                                                   placeholder="кратность, оформленность, особенности – если есть"
                                                    style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Питание животного до жизни с Вами*
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">у заводчика, прошлых владельцев, в приюте и т.д.
                                            (для щенков и котят важно как можно подробнее описать все что Вам известно)
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="food_before" class="t-input js-tilda-rule t-input_bbonly"

                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Питание животного в период жизни с Вами*
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">перечислите марки, названия и вкусы ранее
                                            используемых промышленных кормов и натуральных продуктов, желательно указать
                                            причины отказа от них
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="food_with_you" class="t-input js-tilda-rule t-input_bbonly"

                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Питается ли ваш питомец в присутствии других животных?
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">если да – опишите
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="food_with_other"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   style="color:#2a2122; border:1px solid #2a2122; ">
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Пищевые предпочтения животного*
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">перечислите наиболее охотно поедаемые продукты
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="favorite_food"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                    style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Данные о пищевой непереносимости у животного*
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">перечислите продукты, которые в рационе использовать
                                            нежелательно (в этом пункте можно не опираться на результат аллергопанели, а
                                            просто вспомнить на что зверь явно реагировал плохо)
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="intolerance"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                    style="color:#2a2122; border:1px solid #2a2122; " required>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">Ваши
                                            личные принципиальные взгляды на кормление (если есть)
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">неприемлемость различных компонентов, кормов,
                                            добавок, способов обработки продуктов и т.п.
                                        </div>
                                        <div class="t-input-block">
                                            <input type="text" name="principled_views"
                                                   class="t-input js-tilda-rule t-input_bbonly" value=""
                                                   style="color:#2a2122; border:1px solid #2a2122; ">
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ws" >
                                        <div class="t-input-block">
                                            <div class="" style="height:102px">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_tx" >
                                        <div class="t-input-block">
                                            <div class="t-text"  style="color:#2a2122">
                                                <div style="font-size:26px;text-align:center;" >

                                                    Актуальный рацион животного <br/>
                                                    (заполняется максимально точно) <br/>
                                                    <br/>
                                                    <span style="font-size: 14px;">Пожалуйста, убедитесь в том что в анкете указан вес продуктов/корма в суточной порции</span>
                                                    <br/>
                                                    <span style="font-size: 14px;">
                                                            <strong>
                                                                <em data-redactor-tag="em"></em>
                                                                <em>
                                                                    Пример: <br/>бедро индейки 150 г;
                                                                </em>
                                                                <em>Royal</em>
                                                                <em>Canin</em>
                                                                <em>Digestive</em>
                                                            </strong>
                                                        </span>
                                                    <strong>
                                                        <em data-redactor-tag="em">
                                                            <span style="font-size: 14px;">Care сухой 40 г; крупа гречневая 50 г</span>
                                                        </em>
                                                    </strong>
                                                    <br/>
                                                    <br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Мясо, рыба, яйцо
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">вес в сыром виде, г/день; частота исполь-зования,
                                            раз в неделю; перечислите все виды мяса/рыбы по отдельности, укажите способ
                                            обработки
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="meat_fish_egg" class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Молочные продукты
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">вес в сыром виде, г/день; частота использования, раз
                                            в неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="milk"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Крупы, картофель, макароны
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">вес в сыром виде, г/день; частота использования, раз
                                            в неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="cereals_potato_pasta"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Овощи и фрукты
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">вес в сыром виде, г/день; частота использования, раз
                                            в неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="vegetables_fruits" class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Масла и жиры
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">кол-во в день; частота использования, раз в неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="oils_fats" class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Лакомства, снеки, косточки
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">название, г/день; частота использования, раз в
                                            неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="treats_snacks_bones"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Добавки, витамины, пасты
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">название, г/день; частота использования, раз в
                                            неделю
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="supplements_vitamins_pastes"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Другие продукты
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">в том числе доступ к кормам других животных в доме
                                            или на улице (украденное со стола тоже считается)
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="other_products"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ws" >
                                        <div class="t-input-block">
                                            <div class="" style="height:102px">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_tx" >
                                        <div class="t-input-block">
                                            <div class="t-text"  style="color:#2a2122">
                                                <div style="font-size:24px;text-align:center;" >
                                                    Состояние здоровья – наличие хронических и острых заболеваний,
                                                    назначенное лечение, применяемые препараты
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ws" >
                                        <div class="t-input-block">
                                            <div class="" style="height:102px">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Перечислите диагностированные заболевания, по возможности – пройденное ранее
                                            лечение
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="healing" class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" >
                                        <div class="t-input-title t-descr t-descr_md"
                                              style="color:#2a2122;font-weight:600;">
                                            Назначенные препараты
                                        </div>
                                        <div class="t-input-subtitle t-descr t-descr_xxs t-opacity_70"

                                             style="color:#2a2122;">Название, дозировка и курс
                                        </div>
                                        <div class="t-input-block">
                                            <textarea name="medicament"
                                                      class="t-input js-tilda-rule t-input_bbonly"
                                                      style="color:#2a2122; border:1px solid #2a2122; height:102px"
                                                      rows="3"></textarea>
                                        </div>
                                    </div>
                                    <!--[if IE 8]>
                                    <style>.t-checkbox__control .t-checkbox, .t-radio__control .t-radio {
                                        left: 0px;
                                        z-index: 1;
                                        opacity: 1;
                                    }

                                    .t-checkbox__indicator, .t-radio__indicator {
                                        display: none;
                                    }

                                    .t-img-select__control .t-img-select {
                                        position: static;
                                    }</style><![endif]-->
                                    <div class="t-form__submit">
                                        <input type="hidden" name="finished" value="0">
                                        <button type="submit" class="t-submit"
                                                style="color:#ffffff;background-color:#000000;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <style>
                                #rec427542532 input::-webkit-input-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 input::-moz-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 input:-moz-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 input:-ms-input-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 textarea::-webkit-input-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 textarea::-moz-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 textarea:-moz-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }

                                #rec427542532 textarea:-ms-input-placeholder {
                                    color: #2a2122;
                                    opacity: 0.5;
                                }
                            </style>
                        </div>
                        <div class="t678__form-bottom-text t-text t-text_xs" >Нажимая кнопку "отправить", Вы
                            даёте согласие на обработку персональных данных.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
