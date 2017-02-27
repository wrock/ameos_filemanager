<?php
namespace Ameos\AmeosFilemanager\Controller;

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
 
class SearchController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    
    /**
     * Homepage
     *
     * @return void
     */
    protected function indexAction()
    {
        $this->view->assign('filemanagerPid', $this->settings['filemanagerPid']);
    }
}

