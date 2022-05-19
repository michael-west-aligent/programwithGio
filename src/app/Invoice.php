<?php

namespace App;

class Invoice
{

    protected array $data;

    public function __get(string $name)
    {
if (array_key_exists($name, $this->data)){
    return $this->data[$name];
}
    return null;
    }

    public function  __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /** isset is called when you use eset or empty function on undefined or inaccessible properties
     *needs to return a boolean value
     */
    public function __isset(string $name): bool
    {
        // TODO: Implement __isset() method.
    }

    /** unset methods get called when you use the unset function onundefined properties   */
    public function __unset(string $name): void
    {
        // TODO: Implement __unset() method.
    }


}