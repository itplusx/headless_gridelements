<?php
defined('TYPO3') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'headless_gridelements',
    'Configuration/TypoScript',
    'Headless Gridelements'
);
