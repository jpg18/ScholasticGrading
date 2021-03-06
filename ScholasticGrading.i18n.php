<?php

/**
 * Internationalization for ScholasticGrading
 *
 * @package ScholasticGrading
 */


$messages = array();


/**
 * English
 *
 * @author Jeffrey Gill <jeffrey.p.gill@gmail.com>
 */

$messages['en'] = array(
    # General messages
    'grades' => "Grades",
    'specialpages-group-scholastic' => "Scholastic tools",
    'scholasticgrading-desc' => "[[Special:Grades | Allows graders to assign and students to review course grades]]",

    # User groups
    'group-grader' => "Graders",
    'group-grader-member' => "{{GENDER:$1|grader}}",
    'grouppage-grader' => "{{ns:project}}:Graders",

    # Rights
    'right-editgrades' => "Create, modify, and delete grades",
    'action-editgrades' => "edit grades",

    # Logs
    'log-name-grades' => "Grade log",
    'log-description-grades' => "Below is a list of the most recent grade changes made to [[Special:Grades]].",
    'logentry-grades-addAssignment' => "$1 {{GENDER:$2|added}} an assignment",
    'logentry-grades-addEvaluation' => "$1 {{GENDER:$2|added}} an evaluation",
    'logentry-grades-addAdjustment' => "$1 {{GENDER:$2|added}} a point adjustment",
    'logentry-grades-addGroup' => "$1 {{GENDER:$2|added}} a group",
    'logentry-grades-addGroupAssignment' => "$1 {{GENDER:$2|added}} an assignment to a group",
    'logentry-grades-addGroupUser' => "$1 {{GENDER:$2|added}} a user to a group",
    'logentry-grades-editAssignment' => "$1 {{GENDER:$2|modified}} an assignment",
    'logentry-grades-editEvaluation' => "$1 {{GENDER:$2|modified}} an evaluation",
    'logentry-grades-editAdjustment' => "$1 {{GENDER:$2|modified}} a point adjustment",
    'logentry-grades-editGroup' => "$1 {{GENDER:$2|modified}} a group",
    'logentry-grades-deleteAssignment' => "$1 {{GENDER:$2|deleted}} an assignment",
    'logentry-grades-deleteEvaluation' => "$1 {{GENDER:$2|deleted}} an evaluation",
    'logentry-grades-deleteAdjustment' => "$1 {{GENDER:$2|deleted}} a point adjustment",
    'logentry-grades-deleteGroup' => "$1 {{GENDER:$2|deleted}} a group",
    'logentry-grades-deleteGroupAssignment' => "$1 {{GENDER:$2|removed}} an assignment from a group",
    'logentry-grades-deleteGroupUser' => "$1 {{GENDER:$2|removed}} a user from a group",
    #   $1: user name with links
    #   $2: user name
    #   $3: page title
    #   $4: param1
    #   $5: param2
);


/**
 * Message documentation
 * 
 * @author Jeffrey Gill <jeffrey.p.gill@gmail.com>
 */

$messages['qqq'] = array(
    # General
    'grades' => "The name of the extension's entry in Special:SpecialPages and the title of the special page",
    'specialpages-group-scholastic' => "Category title in Special:SpecialPages",
    'scholasticgrading-desc' => "{{desc|name=ScholasticGrading|url=https://github.com/jpg18/ScholasticGrading}}",

    # User groups
    'group-grader' => "{{doc-group|grader}}",
    'group-grader-member' => "{{doc-group|grader|member}}",
    'grouppage-grader' => "{{doc-group|grader|page}}",

    # Rights
    'right-editgrades' => "{{doc-right|editgrades}}",
    'action-editgrades' => "{{doc-action|editgrades}}",

    # Logs
    'log-name-grades' => "Page title on Special:Log/grades",
    'log-description-grades' => "Description shown on Special:Log/grades",
    'logentry-grades-addAssignment' => "Appears on [[Special:Log/grades]] when a new assignment is created",
    'logentry-grades-addEvaluation' => "Appears on [[Special:Log/grades]] when a new evaluation is created",
    'logentry-grades-addAdjustment' => "Appears on [[Special:Log/grades]] when a new point adjustment is created",
    'logentry-grades-addGroup' => "Appears on [[Special:Log/grades]] when a new group is created",
    'logentry-grades-addGroupAssignment' => "Appears on [[Special:Log/grades]] when an assignment is added to a group",
    'logentry-grades-addGroupUser' => "Appears on [[Special:Log/grades]] when a user is added to a group",
    'logentry-grades-editAssignment' => "Appears on [[Special:Log/grades]] when an assignment is updated",
    'logentry-grades-editEvaluation' => "Appears on [[Special:Log/grades]] when an evaluation is updated",
    'logentry-grades-editAdjustment' => "Appears on [[Special:Log/grades]] when a point adjustment is updated",
    'logentry-grades-editGroup' => "Appears on [[Special:Log/grades]] when a group is updated",
    'logentry-grades-deleteAssignment' => "Appears on [[Special:Log/grades]] when an assignment is deleted",
    'logentry-grades-deleteEvaluation' => "Appears on [[Special:Log/grades]] when an evaluation is deleted",
    'logentry-grades-deleteAdjustment' => "Appears on [[Special:Log/grades]] when a point adjustment is deleted",
    'logentry-grades-deleteGroup' => "Appears on [[Special:Log/grades]] when a group is deleted",
    'logentry-grades-deleteGroupAssignment' => "Appears on [[Special:Log/grades]] when an assignment is removed from a group",
    'logentry-grades-deleteGroupUser' => "Appears on [[Special:Log/grades]] when a user is removed from a group",
);
