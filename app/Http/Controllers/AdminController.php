<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('text_left')->sortBy('id','DESC');
        $this->extract->tuneSelection('on_check')->sortBy('id','DESC');
        $this->extract->tuneSelection('clients')->sortBy('id','DESC');
        $this->extract->tuneSelection('advantages')->sortBy('id','DESC');
        $this->extract->tuneSelection('works')->sortBy('id','DESC');
        $this->extract->tuneSelection('recommend')->sortBy('id','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getAll(){
        $static_all_site = $this->extract->getBlock('static_all_site');
        return view('back.blocks.static_all_site',[
            'static_all_site' => $static_all_site
        ]);
    }

    public function getOffers(){
        $offer = $this->extract->getBlock('offer');
        return view('back.blocks.offer',[
            'offer' => $offer
        ]);
    }

    public function getQuick(){
        $quick_start = $this->extract->getBlock('quick_start');
        return view('back.blocks.quick_start',[
            'quick_start' => $quick_start
        ]);
    }

    public function getAmong(){
        $clients_block = $this->extract->getBlock('clients_block');
        return view('back.blocks.clients_block',[
            'clients_block' => $clients_block
        ]);
    }

    public function getAllInclusive(){
        $all_inclusive = $this->extract->getBlock('all_inclusive');
        return view('back.blocks.all_inclusive',[
            'all_inclusive' => $all_inclusive
        ]);
    }

    public function getInCost(){
        $in_cost = $this->extract->getBlock('in_cost');
        return view('back.blocks.in_cost',[
            'in_cost' => $in_cost
        ]);
    }

    public function getShops(){
        $shops = $this->extract->getBlock('shops');
        return view('back.blocks.shops',[
            'shops' => $shops
        ]);
    }

    public function getShopsItem( $id ){
        $shop_item = $this->extract->getGroupItem('shops_variant', $id);
        return view('back.groups.shops_variant.shops_variant', [
            'item' => $shop_item
        ]);
    }

    public function getSeo(){
        $seo = $this->extract->getBlock('static_all_site');
        return view('back.blocks.seo', [
            'seo' => $seo
        ]);
    }



    public function getRecommend(){
        $shops = $this->extract->getBlock('recommendations');
        return view('back.blocks.recommendations',[
            'recommendations' => $shops
        ]);
    }
}
