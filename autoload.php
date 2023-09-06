<?php

use php\module;
use Trounex\Development\Trounex;

$applicationRootDir = Trounex::GetApplicationRootDir ();

if (class_exists (module::class)) {
  module::config ([
    'rootDir' => $applicationRootDir
  ]);

  module::initialize_config ();
}
