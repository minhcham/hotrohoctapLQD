<?php

namespace App\Repositories\Image;

use App\Models\ImageApp;
use App\Repositories\Base\BaseRepository;
use Intervention\Image\ImageManagerStatic as Image;
use Config;
use Carbon\Carbon;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return ImageApp::class;
    }

    /* public static $aws_access_key_id = "AKIAJZQOB45SPDGA7ZDA";
     public static $aws_secret_access_key = "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";
     public static $bucket_name = 'katoryapp1';
     public static $client;*/

    /*
        Upload Ảnh đơn
    */
  public function saveSingleImage($photo, $category)
    {
        $deg = 0;
        $arrData = array();
        $imageName = $photo->getClientOriginalName();
        $imageSize = getimagesize($photo);
        switch ($category) {
            case 'avatar':
                $baseFolder = 'uploads/avatar';
                if (!file_exists($baseFolder)) {
                    mkdir($baseFolder, 0777, true);
                }
                break;
            default:
                // tạo thư mục upload theo category đồng hồ
                $baseFolder = $this->createFolderToSaveImage($category);
                break;
        }

        // upload image
        $ImageRaw = Image::make($photo);
        $ImageRaw->rotate($deg);
        // xử lý lưu ảnh gốc vào server
        $imageName = date('Ymd_His') . '_' . $imageName;
        $save_path = $baseFolder. '/' . $imageName;
        $ImageRaw->save($save_path, 90);
        $arrData['raw'] = $imageName;
        // xử lý scale ảnh theo tỉ lệ cho sẵn là 320, 640, 980
        if ($category != 'avatar') {
            $arrScale = array(320, 640, 980);

            foreach ($arrScale as $key => $value) {
                if ($imageSize[0] >= $value) {
                    $newName = $value . '_' . $imageName;
                    $resizeHeight = ($value * $imageSize[1]) / $imageSize[0];
                    $ImageRaw->resize($value, $resizeHeight);
                    $ImageRaw->save($baseFolder . $value . '/' . $newName, 90);
                    $arrData[$value] = $newName;
                    $ImageRaw = Image::make($photo);
                    $ImageRaw->rotate($deg);
                } else {
                    //nếu kích thước ảnh không cho phép thì có trường chỉ số của scale để ko bị lỗi
                    $arrData[$value] = '';
                }
            }
        }
        return $arrData;
    }

    // create folder to save image
    public function createFolderToSaveImage($category)
    {
        $publicPath = 'uploads/';
        if (!file_exists($publicPath . $category)) {
            $old = umask(0);
            mkdir($publicPath . $category, 0777, true);
            umask($old);
        }
        return $publicPath . $category . '/';
    }

    public function removeFile($file)
    {
        if (!file_exists($file)) {
            return;
        }
        return unlink($file);
    }
}

?>
