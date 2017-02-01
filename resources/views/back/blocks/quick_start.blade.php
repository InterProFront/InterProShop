@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Быстрый старт'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля блока</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Изображение внизу блока (для примера)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$quick_start->for_example_field->link}}?{{$quick_start->for_example_field->cache_index}}" class="kv-preview-data file-preview-image" title="{{$quick_start->for_example_field->alt}}" alt="{{$quick_start->for_example_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$quick_start->for_example_field->alt}}">{{$quick_start->for_example_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="quick_start" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="static_all_site"
                               data-name="for_example"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Текст внизу блока (для примера)</label>
                <textarea class="form-control text"
                          data-name="example"
                          data-type="text"
                          data-block="quick_start"
                          data-id="0">{{$quick_start->example_field}}</textarea>
            </div>

            <div class="box box-info group-item-widget"
                 data-block="text_adv">
                <div class="box-header with-border">
                    <h3 class="box-title"> Преимущества слева </h3>
                    <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">

                    <div class="groupflat-widget group-item-wrap">
                        @foreach($quick_start->text_adv_group as $item)
                            @include('back.groups.text_adv.text_adv_box', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="box box-info group-item-widget"
                 data-block="adv_on_check">
                <div class="box-header with-border">
                    <h3 class="box-title"> Преимущества на туалетной бумаге </h3>
                    <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">

                    <div class="groupflat-widget group-item-wrap">
                        @foreach($quick_start->adv_on_check_group as $item)
                            @include('back.groups.adv_on_check.adv_on_check_box', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection