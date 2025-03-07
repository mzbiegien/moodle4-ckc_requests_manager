<?php
// ---------------------------------------------------------
// block_ckc_requests_manager is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// block_ckc_requests_manager is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
//
// COURSE REQUEST MANAGER BLOCK FOR MOODLE
// by Kyle Goslin & Daniel McSweeney
// Copyright 2012-2014 - Institute of Technology Blanchardstown.
// ---------------------------------------------------------
/**
 * COURSE REQUEST MANAGER
 *
 * @package   block_ckc_requests_manager
 * @copyright 2014 Kyle Goslin, Daniel McSweeney
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


function xmldb_block_ckc_requests_manager_upgrade($oldversion)
{
    global $GLOBALS['CFG'], $GLOBALS['DB'];

    $GLOBALS['DB']man = $GLOBALS['DB']->get_manager();

    $result = true;

    if ($oldversion < 2013112539) {
        // $GLOBALS['DB']->get_record_sql("ALTER TABLE  mdl_block_ckc_requests_manager_comments MODIFY  message LONGTEXT ");
        $newrec          = new stdClass();
        $newrec->varname = 'denytext1';
        $newrec->value   = 'You may enter a denial reason here.';
        $GLOBALS['DB']->insert_record('block_ckc_requests_manager_config', $newrec, false);

        $newrec          = new stdClass();
        $newrec->varname = 'denytext2';
        $newrec->value   = 'You may enter a denial reason here.';
        $GLOBALS['DB']->insert_record('block_ckc_requests_manager_config', $newrec, false);

        $newrec          = new stdClass();
        $newrec->varname = 'denytext3';
        $newrec->value   = 'You may enter a denial reason here.';
        $GLOBALS['DB']->insert_record('block_ckc_requests_manager_config', $newrec, false);

        $newrec          = new stdClass();
        $newrec->varname = 'denytext4';
        $newrec->value   = 'You may enter a denial reason here.';
        $GLOBALS['DB']->insert_record('block_ckc_requests_manager_config', $newrec, false);

        $newrec          = new stdClass();
        $newrec->varname = 'denytext5';
        $newrec->value   = 'You may enter a denial reason here.';
        $GLOBALS['DB']->insert_record('block_ckc_requests_manager_config', $newrec, false);
    }//end if

    return $result;

}//end xmldb_block_ckc_requests_manager_upgrade()
