<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class ImageController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $imagePath = $request->file('image')->store('images', 'public');

            $image = Image::create([
                'title' => $request->title,
                'image_path' => $imagePath,
            ]);

            return view('upload', ['image' => $image])->with('success', 'Gambar berhasil diunggah!');
        } catch (\Exception $e) {
            // Handle errors if upload or storage fails
            \Log::error('Error during image upload: ' . $e->getMessage());

            return back()->withInput()->withErrors('Gagal mengunggah gambar. Silakan coba lagi.')->with('error', 'Gagal mengunggah gambar. Silakan coba lagi.');
        }
    }

    /**
     * Delete image from database and storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Image $image)
    {
        try {
            // Delete image file from storage
            if (Storage::disk('public')->exists($image->image_path)) {
                Storage::disk('public')->delete($image->image_path);
            }

            // Delete image entry from database
            $image->delete();

            return back()->with('success', 'Gambar berhasil dihapus!');
        } catch (\Exception $e) {
            // Handle errors if deletion fails
            \Log::error('Error during image deletion: ' . $e->getMessage());

            return back()->withErrors('Gagal menghapus gambar. Silakan coba lagi.')->with('error', 'Gagal menghapus gambar. Silakan coba lagi.');
        }
    }
}