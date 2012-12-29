<?php
/**
 * @package     Social_Counter
 * @subpackage  mod_social_counter
 * @copyright   Copyright (C) 2012 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Initialise variables.
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$twitter         = htmlspecialchars($params->get('twitter'));
$facebook        = htmlspecialchars($params->get('facebook'));

require JModuleHelper::getLayoutPath('mod_social_counter', $params->get('layout', 'default'));
