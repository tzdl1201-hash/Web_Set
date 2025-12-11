<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'workshopallocation_scheduled', language 'zh_tw', version '5.0'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentstatus'] = '目前的狀態';
$string['currentstatusexecution'] = '狀態';
$string['currentstatusexecution1'] = '已經在{$a->datetime}執行';
$string['currentstatusexecution2'] = '將在{$a->datetime}再執行一次';
$string['currentstatusexecution3'] = '將在{$a->datetime}執行';
$string['currentstatusexecution4'] = '等待執行';
$string['currentstatusnext'] = '下一次執行';
$string['currentstatusnext_help'] = '在某些情況下，即使已經分配過，還會再次自動執行分配。例如，作業截止日期被延後時。';
$string['currentstatusreset'] = '重置';
$string['currentstatusreset_help'] = '勾選此核取方塊，並保存表單，將導致重置當前狀態。前次配置的所有資訊都會被刪除，這樣就能再次配置（如果在上面啟用）。';
$string['currentstatusresetinfo'] = '勾選方格和儲存表單可重置這執行結果';
$string['currentstatusresult'] = '最近執行結果';
$string['enablescheduled'] = '啟用排程分配';
$string['enablescheduledinfo'] = '在繳交階段結束時自動地分配作業';
$string['pluginname'] = '排程分配';
$string['randomallocationsettings'] = '分配設定';
$string['randomallocationsettings_help'] = '在此定義隨機配置方式的參數。隨機配置外掛會使用它們來進行實際的作業配置。';
$string['resultdisabled'] = '停用排程分配';
$string['resultenabled'] = '排程分配已啟用';
$string['resultexecuted'] = '成功';
$string['resultfailed'] = '無法自動分配作業';
$string['resultfailedconfig'] = '排程分配設定不正確';
$string['resultfaileddeadline'] = '工作坊沒有定義繳交截止日期';
$string['resultfailedphase'] = '工作坊不處於繳交階段';
$string['resultvoid'] = '沒有作業被分配';
$string['resultvoiddeadline'] = '尚未到作業截止日之後';
$string['resultvoidexecuted'] = '已經執行的分配';
$string['scheduledallocationsettings'] = '排程分配的設定';
$string['scheduledallocationsettings_help'] = '如果啟用，排程分配方式將會在繳交階段結束後自動分配作業進行評價。此階段的結束時間在工作坊設定的“繳交截止日期”中定義。本質上，是使用此表單中預定的參數來執行隨機分配。這意味著排程分配工作起來就像是教師在繳交結束階段使用下面的分配設定來親自執行隨機分配。注意，如果您在繳交截止日期前手動轉換工作坊到評價階段，排程分配 *不會* 執行。這種情況下，您不得不親自分配作業。排程分配方式和自動階段轉換功能一起使用時特別有用。';
$string['setup'] = '設定排程分配';
