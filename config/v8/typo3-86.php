<?php

declare(strict_types=1);

use Rector\Renaming\Rector\Namespace_\RenameNamespaceRector;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__ . '/../services.php');

    $services = $containerConfigurator->services();
    $services->set('namespace_typo3_cms_core_tests_to__typo3_testing_framework_core')->class(
        RenameNamespaceRector::class
    )
        ->call(
                 'configure',
                 [
                     [
                         RenameNamespaceRector::OLD_TO_NEW_NAMESPACES => [
                             'TYPO3\CMS\Core\Tests' => 'TYPO3\TestingFramework\Core',
                         ],
                     ],
                 ]
             );
};
