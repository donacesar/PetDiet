{{-- Blog --}}
<div class="some-place2"></div>
<div id="rec279567382" class="r t-rec t-rec_pt_60 t-rec_pb_45"
     style="padding-top:60px;padding-bottom:45px;background-color:#39352c; " data-animationappear="off"
     data-record-type="829" data-bg-color="#b39883">
    <!-- t829 -->
    <div class="t829">
        <div class="t-section__container t-container">
            <div class="t-col t-col_12">
                <div class="t-section__topwrapper t-align_center">
                    <div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">
                        <div style="font-size: 28px;" data-customstyle="yes">
                            <strong style="color: rgba(255,255,255,0.88);text-shadow: 4px 2px 4px rgba(0,0,0,0.8);">
                                Полезные статьи:<span class="ql-cursor"></span>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="t829__container t829__container_padd-column t-container">
            <div class="t829__grid">
                <div class="t829__grid-sizer" style="width: 400px;"></div>
                <div class="t829__gutter-sizer t829__gutter-sizer_40"></div>

                @foreach($posts as $post)
                    <div class="t-align_left t-item t829__grid-item t829__grid-item_mb-40 t829__grid-item_flex_padd-40 t829__grid-item_first-flex_padd-12 block-shadow" style="width: 400px;">
                        <div class="t829__content-wrapper block-shadow" style="background-color:#f2f2f0; border: 1px solid transparent; border-radius: 16px;">
                            <div class="t829__content ">
                                <div class="t829__imgwrapper">
                                    <img src="{{ 'storage/' . $post->image_url }}" class="t829__img t-img js-product-img" alt="Картинка поста">
                                </div>
                                <div class="t829__textwrapper t829__textwrapper_padd">
                                    <div class="t829__title t-name t-name_md" style="color:#2a2122;">
                                        <span style="color: rgb(10, 33, 34);">{{ $post->title }}</span>
                                    </div>
                                    <div class="t829__descr t-descr t-descr_xxs" style="color:#292021;">
                                        {{ $post->description }}</div>
                                </div>
                            </div>
                            <div class="t829__btnwrapper t829__btnwrapper_padd">
                                <a href="{{ route('post.show', $post) }}" class="button-read t829__btn t829__btn t-btn t-btn_xs" style="color:#2a2122;border:1px solid rgba(42,33,34,0.29);">
                                    <table style="width:100%; height:100%;">
                                        <tr>
                                            <td style="color: white; text-shadow: 0px 0px 3px rgba(0,0,0,0.84);" style="color: white; text-shadow: 0px 0px 3px rgba(0,0,0,0.84);">Читать</td>
                                        </tr>
                                    </table>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        t_onReady(function () {
            t_onFuncLoad('t829_init', function () {
                t829_init('279567382');
            });
        });
    </script>
</div>
