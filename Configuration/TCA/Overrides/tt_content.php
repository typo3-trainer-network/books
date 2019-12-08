<?php
defined('TYPO3_MODE') or die();

// This makes the plugin selectable in the BE.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    // extension name, exactly matching the PHP namespaces (vendor and product)
    'TTN.Books',
    // arbitrary, but unique plugin name (not visible in the BE)
    'HelloWorldWithoutTemplate',
    // plugin title, as visible in the drop-down in the BE
    'Books greeting (without template)',
    // the icon visible in the drop-down in the BE
    'EXT:books/Resources/Public/Icons/Extension.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'TTN.Books',
    'HelloWorldWithTemplate',
    'Books greeting (with template)',
    'EXT:books/Resources/Public/Icons/Extension.svg'
);
