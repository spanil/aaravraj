<?php
namespace App\Repositories;

use App\Models\GeneralSetting; 
use App\Interfaces\GeneralSettingRepositoryInterface;



class GeneralSettingRepository implements GeneralSettingRepositoryInterface
{
    protected $model;

    public function __construct(GeneralSetting $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
         return $this->model->create($data);
    }

    
}
?>