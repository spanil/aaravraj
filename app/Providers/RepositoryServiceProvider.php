<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\RoleRepository;
use App\Interfaces\RoleRepositoryInterface;
use App\Repositories\UserRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Interfaces\ProductRepositoryInterface;
use App\Repositories\GeneralSettingRepository;
use App\Interfaces\GeneralSettingRepositoryInterface;
use App\Repositories\BannerRepository;
use App\Interfaces\BannerRepositoryInterface;
use App\Repositories\PageRepository;
use App\Interfaces\PageRepositoryInterface;
use App\Repositories\PostRepository;
use App\Interfaces\PostRepositoryInterface;
use App\Repositories\ServiceRepository;
use App\Interfaces\ServiceRepositoryInterface;
use App\Repositories\StaffRepository;
use App\Interfaces\StaffRepositoryInterface;
use App\Repositories\FaqRepository;
use App\Interfaces\FaqRepositoryInterface;
use App\Repositories\TestimonialRepository;
use App\Interfaces\TestimonialRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(GeneralSettingRepositoryInterface::class, GeneralSettingRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(PageRepositoryInterface::class, PageRepository::class);
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(StaffRepositoryInterface::class, StaffRepository::class);
        $this->app->bind(FaqRepositoryInterface::class, FaqRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
