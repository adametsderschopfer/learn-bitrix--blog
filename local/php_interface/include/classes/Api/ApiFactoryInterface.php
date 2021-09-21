<?php

namespace ADDesign\Api;

interface ApiFactoryInterface
{
    public static function create(): Api;
}
