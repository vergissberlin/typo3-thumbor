<?php

defined('TYPO3_MODE') || exit('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('thumbor', 'Configuration/TypoScript', 'thumbor');
    }
);
