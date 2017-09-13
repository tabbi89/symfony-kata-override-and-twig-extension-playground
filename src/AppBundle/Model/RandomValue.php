<?php

namespace AppBundle\Model;

final class RandomValue
{
    public function __toString()
    {
        return (string) rand();
    }
}
