<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Quicklinks');

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('wondrousquicklinks', 'Content');

