<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'knp_snappy.image' shared service.

include_once $this->targetDirs[3].'/vendor/knplabs/knp-snappy/src/Knp/Snappy/GeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-snappy/src/Knp/Snappy/AbstractGenerator.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-snappy/src/Knp/Snappy/Image.php';

$this->services['knp_snappy.image'] = $instance = new \Knp\Snappy\Image(($this->targetDirs[5].'/Binder/vendor/bin/wkhtmltoimage-amd64'), [], []);

$instance->setLogger(${($_ = isset($this->services['monolog.logger.snappy']) ? $this->services['monolog.logger.snappy'] : $this->load('getMonolog_Logger_SnappyService.php')) && false ?: '_'});

return $instance;
