<?php

namespace App\Repositories\Image;

interface ImageRepositoryInterface
{
	public function saveSingleImage($photo, $category);
    public function removeFile($file);
}
