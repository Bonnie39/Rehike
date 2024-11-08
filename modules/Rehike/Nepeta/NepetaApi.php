<?php
namespace Rehike\Nepeta;

use Rehike\Nepeta\Internal\{
    NepetaCore,
    NepetaPackageInfo,
    NepetaPackageType,
    NepetaResult,
    NepetaTheme,
    PackageManager,
};

/**
 * Public API for the Nepeta extensions system.
 * 
 * @author Taniko Yamamoto <kirasicecreamm@gmail.com>
 * @author The Rehike Maintainers
 */
class NepetaApi
{
    /**
     * Initializes Nepeta.
     */
    public static function init(): void
    {
        NepetaCore::init();
    }

    /**
     * Checks if Nepeta is enabled.
     */
    public static function isNepetaEnabled(): bool
    {
        return NepetaCore::isNepetaEnabled();
    }

    /**
     * Get the current theme set by the user.
     */
    public static function getTheme(): ?NepetaTheme
    {
        return NepetaCore::getTheme();
    }

    /**
     * Gets all available packages in Nepeta.
     */
    public static function getAvailablePackages(): array
    {
        return PackageManager::getAvailablePackages();
    }

    /**
     * Loads information about a package.
     */
    public static function getPackageInfo(string $packageName): ?NepetaPackageInfo
    {
        return PackageManager::getPackageInfo($packageName);
    }
}