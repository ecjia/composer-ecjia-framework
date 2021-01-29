<?php


namespace Ecjia\Component\DataTransform;


use Illuminate\Contracts\Support\Arrayable;
use ReflectionProperty;
use ReflectionClass;

abstract class DataAbstract implements DataInterface, Arrayable
{
    /**
     * @return array
     */
    public function handle()
    {
        $reflect = new ReflectionClass(static::class);

        $props = $reflect->getProperties(ReflectionProperty::IS_PUBLIC);

        $data = [];

        foreach ($props as $prop) {
            $name        = $prop->getName();
            $data[$name] = $this->$name;
        }

        return $data;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->handle();
    }


}