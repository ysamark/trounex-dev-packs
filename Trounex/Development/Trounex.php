<?php

namespace Trounex\Development;

class Trounex {
  /**
   * Get the main application root dir
   */
  public static function getApplicationRootDir () {
    $isRootDir = function ($dir) {
      return (boolean)(
        is_file ($dir . '/composer.json') &&
        is_dir ($dir . '/vendor/ysamark/trounex-dev-packs/Trounex/Development')
      );
    };

    $currentDir = dirname (__DIR__);

    $rootDirFetchIntervalCount = count (preg_split ('/(\/|\\\\)/', $currentDir));

    for ( ; $rootDirFetchIntervalCount >= 0; $rootDirFetchIntervalCount--) {
      if (call_user_func_array ($isRootDir, [$currentDir])) {
        return $currentDir;
      }

      $currentDir = dirname ($currentDir);
    }
  }
}
