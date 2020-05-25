<?php

namespace Vergissberlin\Thumbor\ViewHelpers;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

/**
 * This ViewHelper takes two string and returns
 * a `img` tag.
 */
class ExternalViewHelper extends AbstractTagBasedViewHelper
{
    /** @var string The tag name */
    protected $tagName = 'img';

    /**
     * Initialize all arguments of the ViewHelper.
     *
     * @return void
     */
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerUniversalTagAttributes();
        $this->registerTagAttribute('alt', 'string', 'Alternative Text for the image', true);
        $this->registerTagAttribute('width', 'number', 'Width of the image');
        $this->registerTagAttribute('height', 'number', 'Height of the image');
        $this->registerArgument('src', 'string', 'URL of the external image resource.', true);
    }

    public function render()
    {
        // Get extension configuration
        $backendConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class)
   ->get('typo3_thumbor');

        // Create image tag
        $this->tag->addAttribute(
            'src',
            \Thumbor\Url\Builder::construct(
                $backendConfiguration['SERVICE_URL'],
                $backendConfiguration['SECRET_KEY'],
                $this->arguments['src']
            )
                    ->resize($this->arguments['width'], $this->arguments['height'])
        );

        return $this->tag->render();
    }
}
