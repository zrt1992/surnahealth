<?PHP

namespace App\Traits;

use App\Models\MediaFile;
use Illuminate\Support\Facades\Storage;
use Image;

trait FileUpload
{
    public function uploadImage($file, $path)
    {
        $filename = md5(time()) . '_' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs($path, $file, $filename);

        $meta = pathinfo(asset(Storage::url($path . '/' . $filename)));
        $meta['mime_type'] = $file->getClientMimeType();
        $meta['file_size'] = $file->getSize();
        return $meta;
    }
}
