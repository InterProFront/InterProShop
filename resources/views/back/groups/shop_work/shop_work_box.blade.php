<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Пункт пакета {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="advantages">Удалить</button>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Текст работы</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->work_name_field}}"
                   data-name="work_name"
                   data-type="string"
                   data-block="shop_work"
                   data-id="{{$item->id_field}}">
        </div>
    </div>
</div>