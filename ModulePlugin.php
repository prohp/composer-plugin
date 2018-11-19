<?php
namespace app\composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class ModulePlugin
 * @package app\common\composer
 * @author Dzhamal Tayibov
 */
class ModulePlugin implements PluginInterface
{
    protected $composer;
    protected $io;
    
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
        $installer = new ModuleInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
