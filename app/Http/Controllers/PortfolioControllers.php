<?php

namespace App\Http\Controllers;

use App\Model\Portofolio;
use Illuminate\Http\Request;

class PortfolioControllers extends Controller
{
    public function index()
    {
        return view('portfolio');
    }

    public function dataPortfolio(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');

        $data = Portofolio::all();
        
        $output1 = '';
        $output2 = '';
        $output3 = '';
        $total = [];
        foreach($data as $key => $value){
            $total[$key] = $value->name;
            if($value->position == 'top'){
                if(count($total) <= 3){
                    $output1 .= '<div class="col s12 m4">
                            <div class="card-panel teal hoverable orange lighten-3">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m12 center-align">
                                    <img src="'.($value->image ? asset('upload/image/'.$value->image) : asset('assets/portrait.jpeg')).'" alt="" class="circle responsive-img" style="margin-top:10px;overflow:hidden;border-radius:50%;width:150px;height:150px;"> <!-- notice the "circle" class -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 center-align" style="margin-top:-50px;">
                                    <h6 class="cyan-text text-darken-4"><b>'.$value->name.'</b></h6>
                                    <p style="margin-top:-10px;font-size:12px;">'.$value->job.'</p>
                                    <blockquote>
                                        <i class="grey-text text-darken-2">'.$value->deskripsi.'</i>
                                    </blockquote>
                                    </div>
                                    <div class="col s12 m12 center-align">
                                    <a data-fancybox href="https://www.youtube-nocookie.com/embed/pJTGy0P6hwg" data-width="640" data-height="360" class="waves-effect waves-light btn orange darken-4"><i class="material-icons left">play_arrow</i>watch overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }else{
                    $output2 .= '<div class="col s12 m4 '.(count($total) >= 4 && count($total) <= 4 ? 'offset-l2' : '').'">
                            <div class="card-panel teal hoverable orange lighten-3">
                                <div class="row valign-wrapper">
                                    <div class="col s12 m12 center-align">
                                    <img src="'.($value->image ? asset('upload/image/'.$value->image) : asset('assets/portrait.jpeg')).'" alt="" class="circle responsive-img" style="margin-top:10px;overflow:hidden;border-radius:50%;width:150px;height:150px;"> <!-- notice the "circle" class -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 center-align" style="margin-top:-50px;">
                                    <h6 class="cyan-text text-darken-4"><b>'.$value->name.'</b></h6>
                                    <p style="margin-top:-10px;font-size:12px;">'.$value->job.'</p>
                                    <blockquote>
                                        <i class="grey-text text-darken-2">'.$value->deskripsi.'</i>
                                    </blockquote>
                                    </div>
                                    <div class="col s12 m12 center-align">
                                    <a data-fancybox href="https://www.youtube-nocookie.com/embed/pJTGy0P6hwg" data-width="640" data-height="360" class="waves-effect waves-light btn orange darken-4"><i class="material-icons left">play_arrow</i>watch overview</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }else{
                $output3 .= '<div class="col s12 m4 l4">
                                <div class="card-panel grey lighten-5 z-depth-1" style="height:170px;">
                                    <div class="row valign-wrapper">
                                        <div class="col s4 m4 l4">
                                            <div class="col s12 m12 l12 offset-l1">
                                                <img src="'.($value->image ? asset('upload/image/'.$value->image) : asset('assets/portrait.jpeg')).'" alt="" class="circle responsive-img" style="margin-top:-10px;overflow:hidden;border-radius:50%;width:80px;height:80px;">
                                            </div>
                                            <div class="col s12 m12 l12 offset-l1">
                                                <h6 class="cyan-text text-darken-4 center-align" style="font-size:10px;margin-top:-20px;"><b>'.$value->name.'</b></h6>
                                            </div>
                                            </div>
                                            <div class="col s8 m8 l8" style="">
                                            <span class="black-text">
                                                '.$value->deskripsi.'
                                            </span>
                                            <div>
                                            <a data-fancybox href="https://www.youtube.com/watch?v=pJTGy0P6hwg&rel=0&amp;controls=0&amp;showinfo=1" data-width="640" data-height="360" class="waves-effect waves-light btn-small teal" style="margin-top:20px;">
                                                <i class="material-icons left">play_arrow</i>
                                                watch overview
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
        }

        return response()->json([
            'output1' => $output1,
            'output2' => $output2,
            'output3' => $output3
        ]);
    }
}
