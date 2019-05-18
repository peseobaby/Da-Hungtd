<?php
namespace App\Repositories\Address;

use App\Models\Address;
use App\Repositories\Base\BaseRepository;

class AddressRepository extends BaseRepository implements AddressRepositoryInterface
{
    /**
     * AddressRepository constructor.
     * @param Address $address
     */
    public function __construct(Address $address)
    {
        parent::__construct($address);
        $this->model = $address;
    }
}