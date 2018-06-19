<?php

namespace Yuri\Renderer;

interface PHPRendererInterface
{
    public function setData($data);
    public function run();
}
