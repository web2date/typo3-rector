<?php

namespace Ssch\TYPO3Rector\Tests\Rector\v11\v0\RemoveLanguageModeMethodsFromTypo3QuerySettings\Fixture;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

$querySettings = new Typo3QuerySettings();
$querySettings->setLanguageMode();
$querySettings->setLanguageMode()->setLanguageUid(0);
$querySettings->setLanguageUid(0)->setLanguageMode()->getLanguageMode();

?>
-----
<?php

namespace Ssch\TYPO3Rector\Tests\Rector\v11\v0\RemoveLanguageModeMethodsFromTypo3QuerySettings\Fixture;

use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;

$querySettings = new Typo3QuerySettings();
$querySettings->setLanguageUid(0);
$querySettings->setLanguageUid(0);

?>
