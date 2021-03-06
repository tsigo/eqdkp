<?php
/**
 * Project:     EQdkp - Open Source Points System
 * License:     http://eqdkp.com/?p=license
 * -----------------------------------------------------------------------
 * File:        index.php
 * Began:       Mon Dec 23 2002
 * Date:        $Date$
 * -----------------------------------------------------------------------
 * @author      $Author$
 * @copyright   2002-2008 The EQdkp Project Team
 * @link        http://eqdkp.com/
 * @package     eqdkp
 * @version     $Rev$
 */

define('EQDKP_INC', true);
$eqdkp_root_path = './';
require_once($eqdkp_root_path . 'common.php');

// Short and sweet
if ( isset($eqdkp->config['start_page']) )
{
    $start_page = str_replace($eqdkp_root_path, '', $eqdkp->config['start_page']);
    redirect($start_page);
}
else
{
    redirect(news_path());
}