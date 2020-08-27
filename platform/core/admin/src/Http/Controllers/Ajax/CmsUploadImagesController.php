<?php

namespace Core\Admin\Http\Controllers\Ajax;

use Core\Admin\Http\Controllers\CmsAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CmsUploadImagesController extends CmsAdminController
{
    public function uploads(Request $request)
    {
        $fileImage = $request->avatar;
        Log::info($request->all());
        $fileName = $this->processUploads($fileImage);
        return response()->json([
            'file' => $fileName
        ]);
    }

    protected function processUploads($fileImage)
    {
        $ext    = $fileImage->getClientOriginalExtension();
        $extend = [
            'png', 'jpg', 'jpeg', 'PNG', 'JPG'
        ];

        if (!in_array($ext, $extend)) return false;

        $filename = str_replace($ext,'',$fileImage->getClientOriginalName());
        $filename = date('Y-m-d__') . Str::slug($filename) . '.' . $ext;
        $path     = public_path() . '/uploads/' . date('Y/m/d/');
        if (!\File::exists($path)) {
            mkdir($path, 0777, true);
        }

        $fileImage->move($path, $filename);

        return $filename;
    }
}
