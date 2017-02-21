@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Что входит в стоимость'])

    <div class="box box-info group-item-widget"
         data-block="recommend">
        <div class="box-header with-border">
            <h3 class="box-title">Рекомендации</h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($recommendations->recommend_group as $item)
                    @include('back.groups.recommend.recommend_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection