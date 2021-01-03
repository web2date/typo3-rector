<?php

declare(strict_types=1);

use Ssch\TYPO3Rector\Rector\v7\v4\DropAdditionalPaletteRector;
use Ssch\TYPO3Rector\Rector\v7\v4\InstantiatePageRendererExplicitlyRector;
use Ssch\TYPO3Rector\Rector\v7\v4\MoveLanguageFilesFromRemovedCmsExtensionRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../services.php');
    $services = $containerConfigurator->services();
    $services->set(InstantiatePageRendererExplicitlyRector::class);
    $services->set(MoveLanguageFilesFromRemovedCmsExtensionRector::class);
    $services->set(DropAdditionalPaletteRector::class);
};
