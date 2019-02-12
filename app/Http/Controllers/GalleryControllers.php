<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use Illuminate\Http\Request;

class GalleryControllers extends Controller
{
    public function index()
    {
        return view('gallery');
    }

    public function getImageGallery(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');

        $data = Gallery::orderBy('id','desc')->simplePaginate(9);

        $output = '';
        $pagina = '';
        foreach($data as $key => $value){
            $output .= '<div class="col s12 m4 l4 col-page">
                            <div class="card">
                                <div class="card-image">
                                    <a href="'.asset('/upload/image/'.$value->image).'" data-fancybox="gallery" data-caption="'.$value->category.'" data-width="2048" data-height="1365">
                                        <img src="'.asset('/upload/image/'.$value->image).'" class="responsive-img" alt="">
                                    </a>
                                    <span class="card-title">'.$value->category.'</span>
                                </div>
                            </div>
                            '.csrf_field().'
                        </div>';
        }
        
        $pagina .= $data->links();

        return response()->json([
            'image' => $output,
            'pagina'=> $pagina,
            'total' => $data->count()
        ]);
    }

    public function ImageGalleryCategories(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');
        
        if($request->categories != 'all'){
            $data = Gallery::where('category', $request->categories)->orderBy('id', 'desc')->simplePaginate(9);
        }else{
            $data = Gallery::orderBy('id', 'desc')->simplePaginate(9);
        }
        
        $pagina = '';
        $output = '';
        foreach($data as $key => $value){
            $output .= '<div class="col s12 m4 l4 col-page">
                            <div class="card">
                                <div class="card-image">
                                    <a href="'.asset('/upload/image/'.$value->image).'" data-fancybox="gallery" data-caption="'.$value->category.'" data-width="2048" data-height="1365">
                                        <img src="'.asset('/upload/image/'.$value->image).'" class="responsive-img" alt="">
                                    </a>
                                    <span class="card-title">'.$value->category.'</span>
                                </div>
                            </div>
                            '.csrf_field().'
                        </div>';
        }
        $pagina .= $data->links();

        return response()->json([
            'image' => $output,
            'pagina'=> $pagina,
            'total' => $data->count()
        ]);
    }
}
