<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\content;
use App\contentDetail;
use DB;
use App\morecontent;

class ContentController extends Controller
{

    public function showaction(){
        $contents=contentDetail::first();
        return view('frontend.action',compact('contents'));
    }

    public function showabout(){
        return view('frontend.about');
    }

    public function showmorecontent(){
        return view('frontend.morecontent');
    }

    public function showvisits(){
        return view('frontend.visit');
    }

    public function randommainpage(){
        $randomimg = DB::table('placenames')
        ->join('divisions', 'placenames.did', '=', 'divisions.id')
        ->join('categories', 'placenames.cid', '=', 'categories.id')
        ->select('placenames.*', 'divisions.division_Name', 'categories.Category')
        ->orderBy(DB::raw('RAND()'))->get();
        return view('frontend.mainpage',compact('randomimg'));
    }
    public function randomaction(){
        $randomimg = DB::table('placenames')
        ->join('divisions', 'placenames.did', '=', 'divisions.id')
        ->join('categories', 'placenames.cid', '=', 'categories.id')
        ->select('placenames.*', 'divisions.division_Name', 'categories.Category')
        ->orderBy(DB::raw('RAND()'))->get();
        return view('frontend.action',compact('randomimg'));
    }

    public function index() {
        $users = DB::table('morecontents')->select('*')->get();
        return view('frontend.morecontent',compact('users'));
    }


    public function showmorecontents($id){
        $image = DB::table('morecontents')->find($id);
        return view('frontend.morecontent',compact('image'));
    }


    public function showvisit($id){
        $image = DB::table('placenames')->find($id);

        $category = DB::table('placenames')
        ->select('cid')
        ->where('id', '=', $id)->pluck('cid');
        $category = $category[0];
        $moreimage = DB::table('placenames')
        ->join('divisions', 'placenames.did', '=', 'divisions.id')
        ->join('categories', 'placenames.cid', '=', 'categories.id')
        ->select('placenames.*', 'divisions.division_Name', 'categories.Category')
        ->where('placenames.cid', '=', $category)
        ->orderBy(DB::raw('RAND()'))->get();

        // $slideimages[] = DB::table('placenames')
        // ->join('divisions', 'placenames.did', '=', 'divisions.id')
        // ->join('categories', 'placenames.cid', '=', 'categories.id')
        // ->select('placenames.*')
        // ->where('placenames.cid', '=', $category)->get();
        // $slideimage=$slideimages[0];
        return view('frontend.visit',compact(['image','moreimage']));
    }

    // public function showmorevisit($id){
    //     $moreimage = DB::table('placenames')->where('cid', '=', '2')->get();
    //     return view('frontend.visit',compact('moreimage'));
    //     // echo $moreimage;
    // }

    // public function showmorevisit($id){
    //     $moreimage = DB::table('placenames')
    //     ->join('divisions', 'placenames.did', '=', 'divisions.id')
    //     ->join('categories', 'placenames.cid', '=', 'categories.id')
    //     ->select('placenames.*', 'divisions.division_Name', 'categories.Category')
    //     ->where('cid', '=', '2')->get();

    //     return view('frontend.visit',compact('moreimage'));
    //     // echo $moreimage;

    // }


}



