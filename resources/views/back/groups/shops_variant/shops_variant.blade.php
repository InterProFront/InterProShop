@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование магазина'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Заголовок для магазина</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->title_field}}"
                       data-name="title"
                       data-block="shops_variant"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Изображение бэкграунд для заголовка</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->figure_field->link}}?{{$item->figure_field->cache_index}}"
                                             class="kv-preview-data file-preview-image"
                                             title="{{$item->figure_field->alt}}"
                                             alt="{{$item->figure_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption"
                                             title="{{$item->figure_field->alt}}">{{$item->figure_field->name_field}}
                                            <br><samp>(425.24 KB)</samp></div>
                                        <input type="text" class="form-control alt-text" data-block="shops_variant"
                                               data-type="images" data-id="{{$item->id_field}}" data-name="alt">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files"
                            class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span>
                    </button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="shops_variant"
                               data-name="figure"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Текст входящих в пакет работ</label>
                <textarea class="form-control text"
                          data-name="descr"
                          data-type="text"
                          data-block="shops_variant"
                          data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цена со скидкой</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->cost_with_field}}"
                           data-name="cost_with"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цена без скидки (перечеркнутая)</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->cost_without_field}}"
                           data-name="cost_without"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Специальное условие (отображается внизу блока)</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->special_condition_field}}"
                           data-name="special_condition"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цвет блока спец. условия</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->spec_cond_color_field}}"
                           data-name="spec_cond_color"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>
        </div>
    </div>
    <div class="box box-info group-item-widget"
         data-block="shop_work">
        <div class="box-header with-border">
            <h3 class="box-title"> Работы по сайту </h3>
            <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($item->shop_work_group as $item_shop)
                    @include('back.groups.shop_work.shop_work_box', ['item' => $item_shop])
                @endforeach
            </div>
        </div>
    </div>
@endsection