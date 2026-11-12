<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Schema\Struct\SelectItem;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

// Add tt_news as a new content element type (CType)
ExtensionManagementUtility::addPlugin(
    new SelectItem(type: 'select', label: 'LLL:EXT:tt_news/Resources/Private/Language/locallang_tca.xlf:tt_news', value: 'tt_news', icon: 'tt-news-plugin'),
    'FILE:EXT:tt_news/Resources/Private/Flexform/flexform_ds.xml'
);
