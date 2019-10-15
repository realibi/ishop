<?php

namespace Core;

use Smarty;

final class RenderEngine {

    private static $engine;

    private function __construct()
    {
        self::$engine = new Smarty();
        self::$engine->setTemplateDir(Helpers::path("app", "Views"));
        self::$engine->setCompileDir(Helpers::path("app", "Views", "_compiled"));
    }

    static function get() {

        if (!self::$engine instanceof Smarty)
            new self();

        return self::$engine;

    }

}