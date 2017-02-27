<?php
namespace Ameos\AmeosFilemanager\ViewHelpers;

use Ameos\AmeosFilemanager\Tools\Tools;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
 
class CanAddFileViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper
{

    /**
     * Initializes arguments
     */
    public function __construct()
    {
        parent::__construct();
        $this->registerArgument('folder',    'Ameos\\AmeosFilemanager\\Domain\\Model\\Folder', 'Folder value.', false);
        $this->registerArgument('arguments', 'array', 'Arguments.', false);
    }

    /**
     * This method decides if the condition is TRUE or FALSE
     *
     * @param array $arguments ViewHelper arguments to evaluate the condition for this ViewHelper, allows for flexiblity in overriding this method.
     * @return bool
     */
    static protected function evaluateCondition($arguments = null)
    {
        $user = $GLOBALS['TSFE']->fe_user->user;
		return Tools::userHasAddFileAccess($user, $arguments['folder'], $arguments['arguments']);
    }
}
