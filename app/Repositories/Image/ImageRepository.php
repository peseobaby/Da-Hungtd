<?php
namespace App\Repositories\Image;

use ViralsBackpack\BackPackImageUpload\Models\Image;
use App\Repositories\Base\BaseRepository;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
    public function __construct(Image $image)
    {
        parent::__construct($image);
        $this->modelClass = Image::class;
    }
}