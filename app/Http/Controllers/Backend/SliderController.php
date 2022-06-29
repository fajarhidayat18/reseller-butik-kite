<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Peluncur;
use App\Models\Reseller;
use App\Models\Slider;
use Image;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $slider = Slider::all();
        $resellers = Reseller::all();
        return view('backend.slider.index', compact('slider', 'resellers'));
    }
    public function save(request $request)
    {
        $foto = "ft_slider/" . md5(date('dmyhis')) . '.webp';
        Image::make($request->foto)->encode('webp', 100)->save($foto);

        $slider = $request->all();
        $slider['foto'] = $foto;
        // $slider->save();
        Slider::create($slider);

        return redirect()->back()->with('success', 'Berhasil Menambah Foto');
    }

    public function update(request $request)
    {
        $data = $request->all();
        $slider = Slider::find($request->id);
        if ($request->foto) {
            $foto = "ft_slider/" . md5(date('dmyhis')) . '.webp';
            $data['foto'] = $foto;
            $berhasil = Image::make($request->foto)->encode('webp')->save($foto);
            if ($berhasil) {
                // echo 'berhasil upload |';
                if (file_exists($slider->foto)) {
                    // echo 'file sebelumnya masih ada |';
                    unlink($slider->foto);
                }
            }
        }
        $slider->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengubah Foto');
    }

    public function delete($id)
    {
        $data = Slider::find($id);
        if (file_exists($data->foto)) {
            unlink($data->foto);
        }
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Foto');
    }
}
