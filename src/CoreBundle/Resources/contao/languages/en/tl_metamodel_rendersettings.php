<?php

/**
 * This file is part of MetaModels/core.
 *
 * (c) 2012-2020 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage Core
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2012-2020 The MetaModels team.
 * @license    https://github.com/MetaModels/core/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['title_legend']            = 'Name';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['general_legend']          = 'General settings';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['expert_legend']           = 'Expert settings';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpto_legend']           = 'Frontend jump-to settings';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['additional_legend']       = 'Additional files';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['name'][0]                 = 'Name';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['name'][1]                 = 'Setting name.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['template'][0]             = 'Template';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['template'][1]             =
    'The template to use to render the items.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['format'][0]               = 'Output format';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['format'][1]               =
    'Define the output format. Leave empty to use the format used by current page.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['formatOptions']['html5']  = 'HTML5';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['formatOptions']['text']   = 'Text';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo'][0]               = 'JumpTo page';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo'][1]               =
    'The page that shall be used as "show details" urls. Note that the detailed URL params will get generated by the ' .
    'filter setting that is currently in use.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_allLanguages']     = 'All languages';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_language'][0]      = 'Language';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_language'][1]      = 'The language for the jump to page.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_page'][0]          = 'Jump to page';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_page'][1]          = 'The page to use for detail links.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_filter'][0]        = 'Filter settings';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['jumpTo_filter'][1]        =
    'The filter settings that define how the target (the reader/lister on the detail page) will filter the items.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['hideEmptyValues'][0]      = 'Hide empty values';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['hideEmptyValues'][1]      =
    'Hide empty values in backend and frontend.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['hideLabels'][0]           = 'Hide labels';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['hideLabels'][1]           =
    'Hide all labels in backend and frontend.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['additionalCss'][0]        = 'Additional css files';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['additionalCss'][1]        =
    'Choose this, if you want to include additional css files.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['additionalJs'][0]         = 'Additional javascript files';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['additionalJs'][1]         =
    'Choose this, if you want to include additional javascript files.';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['file']                    = 'File';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['publish']                 = 'Publish';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['new'][0]                  = 'New';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['new'][1]                  = 'Create new setting';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['edit'][0]                 = 'Edit setting';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['edit'][1]                 = 'Edit setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['copy'][0]                 = 'Copy setting definition';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['copy'][1]                 = 'Copy setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['delete'][0]               = 'Delete setting';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['delete'][1]               = 'Delete setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['show'][0]                 = 'Filter details';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['show'][1]                 = 'Show details of setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['settings'][0]             = 'Define attribute settings';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['settings'][1]             =
    'Define attribute settings for setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['pastenew'][0]             = 'Add new at the top';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['pastenew'][1]             = 'Add new after setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['pasteafter'][0]           = 'Create new setting at the top';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['pasteafter'][1]           = 'Create new after setting ID %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['error_unknown_id']        = 'unknown ID: %s';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['error_unknown_attribute'] = 'unknown attribute';
$GLOBALS['TL_LANG']['tl_metamodel_rendersettings']['error_unknown_column']    = 'unknown column';
