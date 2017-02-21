<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Преимущество {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="advantages">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Логотип</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">

                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->logo_field->link}}?{{$item->logo_field->cache_index}}"
                                         class="kv-preview-data file-preview-image"
                                         title="{{$item->logo_field->alt}}"
                                         alt="{{$item->logo_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption"
                                         title="{{$item->logo_field->alt}}">{{$item->logo_field->name_field}}
                                        <br><samp>(425.24 KB)</samp></div>
                                    <input type="text" class="form-control alt-text" data-block="recommend"
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
                            class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                <div tabindex="500" class="btn btn-primary btn-file">
                    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                    <span class="hidden-xs">Выбрать изображение …</span>
                    <input type="file" class="form-control file"
                           data-name="logo"
                           data-type="image"
                           data-block="recommend"
                           data-id="{{$item->id_field}}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Фотография</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">

                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->photo_field->link}}?{{$item->photo_field->cache_index}}"
                                         class="kv-preview-data file-preview-image"
                                         title="{{$item->photo_field->alt}}"
                                         alt="{{$item->photo_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption"
                                         title="{{$item->photo_field->alt}}">{{$item->photo_field->name_field}}
                                        <br><samp>(425.24 KB)</samp></div>
                                    <input type="text" class="form-control alt-text" data-block="recommend"
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
                            class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                <div tabindex="500" class="btn btn-primary btn-file">
                    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                    <span class="hidden-xs">Выбрать изображение …</span>
                    <input type="file" class="form-control file"
                           data-name="photo"
                           data-type="image"
                           data-block="recommend"
                           data-id="{{$item->id_field}}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Имя</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->r_name_field}}"
                   data-name="r_name"
                   data-type="string"
                   data-block="recommend"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Профессия</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->profession_field}}"
                   data-name="profession"
                   data-type="string"
                   data-block="recommend"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="form-group">
            <label>Рекомендация</label>
            <textarea class="form-control text"
                      data-name="content"
                      data-type="text"
                      data-block="recommend"
                      data-id="{{$item->id_field}}">{{$item->content_field}}</textarea>
        </div>
    </div>
</div>