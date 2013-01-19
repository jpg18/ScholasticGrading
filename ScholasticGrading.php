<?php

/**
 * ScholasticGrading extension for MediaWiki
 *
 * @file
 * @ingroup Extensions
 *
 * @author Jeffrey Gill <jeffrey.p.gill@gmail.com>
 */

if(!defined('MEDIAWIKI')) {
        echo <<<EOT
To install the ScholasticGrading extension, put the following line in LocalSettings.php:
require_once("\$IP/extensions/ScholasticGrading/ScholasticGrading.php");
EOT;
        exit(1);
}

# List the extension credits on the Special:Version page
$wgExtensionCredits['specialpage'][] = array(
    'path'              => __FILE__,
    'name'              => 'ScholasticGrading',
    'author'            => array('Jeffrey Gill'),
    'url'               => 'https://github.com/jpg18/ScholasticGrading',
    'descriptionmsg'    => 'scholasticgrading-desc',
    'version'           => 0.0,
);

# Register classes and system messages
$wgAutoloadClasses['SpecialGrades'] = __DIR__ . '/ScholasticGrading.body.php';
$wgExtensionMessagesFiles['ScholasticGrading'] = __DIR__ . '/ScholasticGrading.i18n.php';

# Create the special page Special:Grades
$wgSpecialPages['Grades'] = 'SpecialGrades';
$wgSpecialPageGroups['Grades'] = 'other';
