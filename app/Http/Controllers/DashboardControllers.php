<?php

namespace App\Http\Controllers;

use App\User;
use App\Model\Gallery;
use App\Model\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ErrorFormUpload;
use App\Http\Requests\ErrorFormPassword;
use App\Http\Requests\ErrorFormPortofolio;

class DashboardControllers extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function portofolio() 
    {
        return view('portofolio_owner');
    }

    public function getPortofolio(Request $request)
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
                                    <a class="waves-effect waves-light btn modal-trigger red darken-3" href="#modal1" id="edit" data-id="'.$value->id.'">Edit</a>
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
                                    <a class="waves-effect waves-light btn modal-trigger red darken-3" href="#modal1" id="edit" data-id="'.$value->id.'">Edit</a>
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
                                                watch
                                            </a>
                                            <a class="waves-effect waves-light btn-small modal-trigger red darken-3" href="#modal1"  id="edit" data-id="'.$value->id.'" style="margin-top:20px;">Edit</a>
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

    public function editPortofolio(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');
        
        $data = Portofolio::findOrfail($request->id);
        
        return response()->json([
            'id' => $data->id,
            'nama' => $data->name,
            'kerjaan' => $data->job,
            'deskripsi' => $data->deskripsi,
            'url' => $data->url
        ]);
    }

    public function updatePortofolio(ErrorFormPortofolio $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');
        
        $data = Portofolio::findOrfail($request->id);
        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = 'berokenjawa_img_'.time().'.'.$file->getClientOriginalExtension();

            if($data->image != NULL){
                unlink(public_path('upload/image/'.$data->image));
            }
            $file->move(public_path('upload/image'), $filename);
            $update = Portofolio::where('id', $data->id)->update([
                'image' => $filename,
                'name' => $request->nama,
                'job' => $request->kerjaan,
                'deskripsi' => $request->deskripsi,
                'url' => $request->url
            ]);
        }else{
            $update = Portofolio::where('id', $data->id)->update([
                'image' => $data->image,
                'name' => $request->nama,
                'job' => $request->kerjaan,
                'deskripsi' => $request->deskripsi,
                'url' => $request->url
            ]);
        }
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
                                    <a class="btn-floating halfway-fab waves-effect waves-light red darken-4" id="delete" data-id="'.$value->id.'">
                                        <i class="material-icons">delete_forever</i>
                                    </a>
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

    public function upload(ErrorFormUpload $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');

        $image = $request->file('file');
        $filename = 'berokenjawa_img_'.time().'.'.$image->getClientOriginalExtension();

        if($request->hasFile('file')){
            $image->move(public_path('upload/image'), $filename);
            Gallery::create([
                'image'    => $filename,
                'category' => $request->category
            ]);
        }
    }

    public function categories(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');
        
        if($request->categories != 'all'){
            $data = Gallery::where('category', $request->categories)->orderBy('id', 'desc')->simplePaginate(6);
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
                                    <a class="btn-floating halfway-fab waves-effect waves-light red darken-4" id="delete" data-id="'.$value->id.'">
                                        <i class="material-icons">delete_forever</i>
                                    </a>
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

    public function delete(Request $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo Mau Ngapain!');

        $image = Gallery::findOrFail($request->id);

        if(file_exists(public_path('upload/image/'.$image->image))){
            unlink(public_path('upload/image/'.$image->image));
            $delete = $image->delete();
            if($delete){
                return response()->json(['status'=>true,'msg'=>'Berhasil Dihapus']);
            }
        }else{
            $delete = $image->delete();
            return response()->json(['status'=>true,'msg'=>'Berhasil Dihapus']);
        }
    }

    public function editpass()
    {
        return view('password');
    }

    public function updatepass(ErrorFormPassword $request)
    {
        if(!$request->ajax()) dd('Woow, Hayo mau ngapain!');

        $user = User::where('email', $request->email)->first();
        if($user){
            if (Hash::check($request->oldpass, $user->password)) {
                // The passwords match...
                User::where('id', $user->id)->update([
                    'password' => bcrypt($request->password)
                ]);
            }else{
                return response()->json([
                    'status' => false,
                    'msg' => 'Password tidak terdaftar!'
                ]);
            }
        }else{
            return response()->json([
                'status' => false,
                'msg' => 'Email tidak ditemukan!'
            ]);
        }
    }
}
