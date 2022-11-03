<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'PincodesFrontend',
            'Frontend',
            [
                \Checkitsedo\PincodesFrontend\Controller\PincodeController::class => 'list, new, create, edit, update, delete, accessDenied'
            ],
            // non-cacheable actions
            [
                \Checkitsedo\PincodesFrontend\Controller\PincodeController::class => 'list, new, create, edit, update, delete'
            ]
        );

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'pincodes_frontend-plugin-frontend',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:pincodes_frontend/Resources/Public/Icons/user_plugin_frontend.svg']
        );

        // overwrite Form_Pincodes pincode model with PincodesFrontend pincode model
        // this is needed in order have new properties available everywhere
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class)
            ->registerImplementation(
                \Checkitsedo\FormPincodes\Domain\Model\Pincode::class,
                \Checkitsedo\PincodesFrontend\Domain\Model\Pincode::class
            );

    }
);
