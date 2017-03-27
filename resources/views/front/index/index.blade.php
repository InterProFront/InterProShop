@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <div class="wrap-1200 wrap-1200--offers">
        <div class="offers wrap-1200__offers">
            <div class="offers__header header">
                <div class="information-row header__information-row">
                    <div class="information-row__discuss">
                        <a href="#discuss" class="link discuss-project">Обсудить проект</a>
                    </div>
                    <div class="information-row__logo">
                        <img src="/img/logo.png" alt="Разработка интернет-магазинов, ИнтерПро">
                    </div>
                    <div class="information-row__phone">{{$all->phone_field}}</div>
                </div>
            </div>
            <div class="offers__about about">
                <h1 class="about__title">Разработка интернет-магазинов:
                    быстро, хорошо, дорого</h1>
                <p class="about__description">{{$offer->offer_about_field}}</p>
            </div>

            <div class="offers__offer-case">
                <div class="offer-case offer-case--package">
                    <h2 class="offer-case__title">{{$offer->offer_case_title1}}</h2>
                    <p class="offer-case__description">{{$offer->offer_case_desc1}}</p>
                </div>
                <div class="offer-case offer-case--cart">
                    <h2 class="offer-case__title">{{$offer->offer_case_title2}}</h2>
                    <p class="offer-case__description">{{$offer->offer_case_desc2}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-1200">
        <div class="wrap-1200__quick-start quick-start">
            <div class="quick-start__table table">
                <div class="table__column column">
                    <h2 class="column__block-title block-title">Быстрый старт</h2>
                    @foreach($quick->text_left_group as $item)
                        <div class="offer-case offer-case--no-pad">
                            <p class="offer-case__title">{{$item->adv_title_field}}</p>
                            <p class="offer-case__description offer-case__description--small-space">{{$item->descr_field}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="table__column column column--printer">
                    <div class="printer"></div>
                    @foreach($quick->on_check_group as $item)
                        <div class=" column-check">
                            <img src="{{$item->icon_field->link}}" alt="{{$item->icon_field->alt}}" class="column-check__icon">
                            <p class="column-check__description">{{$item->descr_field}}</p>
                        </div>
                    @endforeach
                    <div class="table__pen"></div>
                </div>
            </div>
            <div class="quick-start__referat referat">
                <a target="_blank" href="https://docs.google.com/document/d/1nIqrMdT9-0VU1gnGXIqYPs6w-fh5WHTmj1AANApbct8/edit?usp=sharing">
                    <img src="/img/referat.png" alt="реферат по интернет-магазинам мебели эконом-класса." class="referat__icon">
                </a>
                <p class="referat__text">Например, наш <a rel="noindex" target="_blank" href="https://docs.google.com/document/d/1nIqrMdT9-0VU1gnGXIqYPs6w-fh5WHTmj1AANApbct8/edit?usp=sharing" class="link">реферат по интернет-магазинам мебели эконом-класса.</a></p>
            </div>
        </div>
    </div>

    <div class="wrap-1200 wrap-1200--clients">
        <div class="clients wrap-1200__clients">
            <h2 class="clients__block-title block-title block-title--white">Среди клиентов</h2>
            <ul class="clients__clients-list clients-list">
                @foreach($client->clients_group as $item)
                    <li class="clients-list__item item">
                        <img src="{{$item->client_logo_field->link}}" alt="{{$item->client_logo_field->alt}}" class="item__picture">
                        <p class="item__description">{{$item->descr_field}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="wrap-1200 ">
        <div class="wrap-1200__all-inclusive all-inclusive">
            <h2 class="all-inclusive__block-title block-title">Все включено</h2>
            <ul class="all-inclusive__advantages-list advantages-list">
                @foreach($inclusive->advantages_group as $item)
                    <li class="advantages-list__advantages-item advantages-item">
                        <img class="advantages-item__icon" src="{{$item->icon_field->link}}" alt="{{$item->icon_field->alt}}">
                        <p class="advantages-item__title">{{$item->adv_title_field}}</p>
                        <p class="advantages-item__description">{{$item->descr_field}}</p>
                    </li>
                @endforeach
            </ul>
            <p class="all-inclusive__interview">
              Мы подробно расскажем о возможностях интернет-магазина на личной встрече.
            </p>
        </div>
    </div>

    <div class="wrap-1200 wrap-1200--in-cost">
        <div class="wrap-1200__in-cost in-cost">
            <h2 class="in-cost__block-title block-title block-title--white block-title--over">Что входит в стоимость</h2>
            <div class="in-cost__package package">
                <ul class="package__in-cost-list in-cost-list">
                    @foreach($in_cost->works_group as $item)
                        <li class="in-cost-list__item advantages-item advantages-item--cost">
                            <img src="{{$item->work_field->link}}" alt="{{$item->work_field->alt}}" class="advantages-item__icon">
                            <p class="advantages-item__title advantages-item__title--blue">{{$item->work_title_field}}</p>
                            <p class="advantages-item__description">{{$item->descr_field}}</p>
                        </li>
                    @endforeach
                </ul>
                <p class="package__instruction-and-warranty">
                  Подготовим инструкцию для сотрудников и предоставим бесплатную поддержку на 3 месяца.
                    <span class="yellow-black">На сайт действует пожизненная гарантия.</span>
                </p>
            </div>

            <div class="in-cost__cost cost">

                <div class="cost__block-title block-title">Магазины на любой вкус</div>
                <ul class="cost__offers-cost offers-cost">
                    @foreach($cost->shops_variant_group as $item)
                        <li class="offers-cost__tarif tarif tarif--package">
                            <img src="{{$item->figure_field->link}}" class="tarif--before" alt="">
                            <p class="tarif__name">{{$item->title_field}}</p>
                            <p class="tarif__description">{!! $item->descr_field !!}</p>

                            <ul class="tarif__services">
                                @foreach($item->shop_work_group as $shop_item)
                                    <li class="tarif__services-item">{{$shop_item->work_name_field}}</li>
                                @endforeach
                            </ul>

                            <p class="tarif__cost-row">@if($item->cost_with_field != '')<span class="sale-row">{{$item->cost_with_field}}</span>@endif{{$item->cost_without_field}}</p>
                            <button href="#discuss_type" class="tarif__discuss-button discuss-button discuss-project-type">Обсудить проект</button>
                            @if($item->special_condition_field != '')
                                <div class="tarif__sale" style="background-color: {{$item->spec_cond_color_field}};">{{$item->special_condition_field}}</div>
                            @endif
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
    <div class="wrap-1200">
        <div class="wrap-1200__recommendations recommendations">
            <h2 class="recommendations__block-title block-title">Рекомендации клиентов</h2>
            <div class="recommendations__table">
                <div class="recommendations__column">
                    @foreach($rec->recommend_group->odd() as $key => $item)
                        @if($key >= count($rec->recommend_group->even()) )
                            <div class="recommendations__comment comment comment--last">
                        @else
                            <div class="recommendations__comment comment">
                        @endif
                                <div class="comment__head">
                                    <div class="comment__photo">
                                        <img src="{{$item->photo_field->link}}" alt="">
                                    </div>
                                    <div class="comment__about">
                                        <p class="comment__name">{{$item->r_name_field}}</p>
                                        <p class="comment__profession">
                                            {!! $item->profession_field !!}
                                        </p>
                                        <img src="{{$item->logo_field->link}}" alt="" class="comment__logo">
                                    </div>
                                </div>
                                <div class="comment__content">{!! $item->content_field !!}</div>
                            </div>
                    @endforeach
                </div>
                <div class="recommendations__column">
                    @foreach($rec->recommend_group->even() as $key => $item)
                        @if($key == 3 )
                            <div class="recommendations__comment comment comment--last">
                                @else
                                    <div class="recommendations__comment comment">
                                        @endif
                                        <div class="comment__head">
                                            <div class="comment__photo">
                                                <img src="{{$item->photo_field->link}}" alt="">
                                            </div>
                                            <div class="comment__about">
                                                <p class="comment__name">{{$item->r_name_field}}</p>
                                                <p class="comment__profession">
                                                    {!! $item->profession_field !!}
                                                </p>
                                                <img src="{{$item->logo_field->link}}" alt="" class="comment__logo">
                                            </div>
                                        </div>
                                        <div class="comment__content">{!! $item->content_field !!}</div>
                                    </div>
                                    @endforeach

                    <div class="recommendations__all-recommendations">
                        <a class="recommendations__link" target="_blank" href="http://interpro.kz/agency/rekomendations">Все рекомендации</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection