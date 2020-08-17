<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiController;
use App\Models\FrontendAsset;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class FrontendAssetController extends ApiController
{
    use UploadFiles;

    /**
     * Get list of assets
     */
    public function index()
    {
        $assets = FrontendAsset::get();

        return $this->respondWithSuccess([
            'assets' => $assets,
        ]);
    }

    /**
     * Update the asset
     */
    public function update(Request $request)
    {
        $data = $this->validate($request, [
            'key' => 'required|string',
            'label' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'is_visible' => 'required|boolean',
        ]);

        $asset = FrontendAsset::where('key', $data['key'])->first();
        $asset->label = $data['label'];
        $asset->url = $data['url'];
        $asset->is_visible = $data['is_visible'];
        $asset->save();

        return $this->respondWithSaved(['asset' => $asset]);
    }

    /**
     * Upload image & video
     */
    public function uploadFile(Request $request)
    {
        $this->validate($request, [
            'file' => ['required', 'mimetypes:image/*,video/*']
        ]);

        $file = $request->file('file');
        $filePath = $this->saveFile($file, '/storage/home');

        return $this->respondWithSuccess([
            'filepath' => $filePath,
        ]);
    }
}
