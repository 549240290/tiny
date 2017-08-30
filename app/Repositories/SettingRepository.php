<?php

namespace App\Repositories;


use App\Models\Setting;

class SettingRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Setting::class;
    }

    public function filterData(array &$data)
    {
        if(isset($data['description']))
            $data['description'] = e($data['description']);
        return $data;
    }

    public function preCreate(array &$data)
    {
        return $this->filterData($data);
    }


    public function preUpdate(array &$data)
    {
        return $this->filterData($data);
    }

}