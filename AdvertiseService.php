<?php

namespace App\AdminServices;

use App\Repositories\Advertise\AdvertiseInterface;

class AdvertiseService
{
    private $adds;


    public function __construct(AdvertiseInterface $adds)
    {
        $this->adds = $adds;
    }
    public function getAll()
    {
        return $this->adds->getAll();
    }

    public function store(array $data)
    {
        $matka = $this->adds->create($data);
        return $matka;
    }

    public function update(array $data, $id)
    {
        return $this->adds->update($data, $id);
    }

    public function get($id)
    {
        return $this->adds->get($id);
    }
}
