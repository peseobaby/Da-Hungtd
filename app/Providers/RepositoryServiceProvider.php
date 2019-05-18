<?php

namespace App\Providers;

use App\Repositories\Address\AddressRepository;
use App\Repositories\Convenience\ConvenienceRepository;
use App\Repositories\Convenience\ConvenienceRepositoryInterface;
use App\Repositories\Event\EventRepository;
use App\Repositories\Event\EventRepositoryInterface;
use App\Repositories\Hotel\HotelRepository;
use App\Repositories\Hotel\HotelRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Room\RoomRepository;
use App\Repositories\Room\RoomRepositoryInterface;
use App\Repositories\RoomHasConvenience\RoomHasConvenienceRepositoryInterface;
use App\Repositories\RoomHasConvenience\RoomHasConvenienceRepository;
use App\Repositories\RoomType\RoomTypeRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Base\BaseRepositoryInterface;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Address\AddressRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            BaseRepositoryInterface::class,
            BaseRepository::class
        );

        $this->app->bind(
            AddressRepositoryInterface::class,
            AddressRepository::class
        );

        $this->app->bind(
            ConvenienceRepositoryInterface::class,
            ConvenienceRepository::class
        );

        $this->app->bind(
            EventRepositoryInterface::class,
            EventRepository::class
        );

        $this->app->bind(
            HotelRepositoryInterface::class,
            HotelRepository::class
        );

        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );

        $this->app->bind(
            RoomRepositoryInterface::class,
            RoomRepository::class
        );

        $this->app->bind(
            RoomTypeRepositoryInterface::class,
            RoomRepository::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            RoomHasConvenienceRepositoryInterface::class,
            RoomHasConvenienceRepository::class
        );
    }
}