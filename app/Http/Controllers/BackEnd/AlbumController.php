<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ablums\Store;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::get(['id','name']);
        return view('backend.albums.index',compact('albums'));
    }

    public function create(){
        return view('backend.albums.create');
    }

    public function store(Store $request){
        try{
            toast('Created Success','success');
            $request->validated();
            $albumcreate = Album::create([
               'name' => $request->name
            ]);
            return redirect(route('albums.index'));
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id){
        try{
            $album = Album::where('id',$id)->first();
            if($album){
                return view('backend.albums.edit',compact('album'));
            }else{
                toast('album not found','danger');
                return redirect()->back();
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function update(Request $request){
        try{
            toast('album updated success','success');
            $album = Album::where('id',$request->id)->first();
            $album->name = $request->name;
            $album->save();
            return redirect()->back();
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(Request $request){
        try {
            toast('album deleted success','success');
            $album = Album::with('images')->where('id',$request->id)->first();
            if($album){
                $album->delete();
                return redirect(route('albums.index'));
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function createImages($id){
        try{
            $album = Album::where('id',$id)->first();
            return view('backend.albums.images',compact('album'));
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function saveImage(Request $request){
        $file = $request->file('dzfile');
        $ext = '.'.$file->getClientOriginalExtension();
        $file_name = str_replace($ext, date('d-m-Y-H-i') . $ext, $file->getClientOriginalName());
        $uploadPath = public_path(). '/uploads/images';
        $file->move($uploadPath, $file_name);
        return response()->json([
            'name' => $file_name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function postImages(Request $request){
        try{
            toast('images created success','success');
            if($request->document){
                foreach ($request->document as $image){
                    $image = Image::create([
                        'image' => $image,
                        'album_id' => $request->album_id,
                        'name' => 'image'
                    ]);
                }
                return redirect(route('images.index'));
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function showImages($id){
        try{
            $album = Album::where('id',$id)->first();
            $images = Image::where('album_id',$id)->get();
            return view('backend.albums.show_images',compact('images','album'));
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function deleteImages($id){
        try{
            toast('images deleted','success');
            $images = Image::where('album_id',$id)->get();
            foreach ($images as $image){
                $image->delete();
            }
            return redirect()->back();
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function moveImages($id){
        try{
            $album = Album::where('id',$id)->first();
            $next_album = Album::where('id','>',$id)->first();
            $images = Image::where('album_id',$id)->get();
            if($next_album){
                toast('Images have been moved','success');
                foreach ($images as $image){
                    $move_images = Image::create([
                        'image' => $image->image,
                        'album_id' => $next_album->id,
                        'name' => 'name'
                    ]);
                    $image->delete();
                }
                return redirect()->back();
            }else{
                toast('There are no other albums','danger');
                return redirect()->back();
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }
}
