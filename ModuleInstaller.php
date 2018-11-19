<?php
namespace app\composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class ModuleInstaller
 * @package app\common\composer
 * @author Dzhamal Tayibov
 */
class ModuleInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $vendorPath = $this->composer->getConfig()->get('vendor-dir');
        $pName = basename($package->getName());
        return dirname($vendorPath) . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $pName;
    }
    
    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return 'module-type' === $packageType;
    }
}
