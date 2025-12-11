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
 * Strings for component 'tool_coursedates', language 'zh_tw', version '5.0'.
 *
 * @package     tool_coursedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = '您必須至少設定一個日期才能更新';
$string['autoenddate'] = '計算結束日期？';
$string['autoenddate_default'] = '請勿修改';
$string['autoenddate_help'] = 'Moodle可以根據使用每週主題格式的課程的節數來計算結束日期。您可以選擇是否在類別層別上強制執行此操作。';
$string['autoenddate_off'] = '停用自動結束日期';
$string['autoenddate_on'] = '強制自動結束日期';
$string['coursedates:setdates'] = '設定類別中所有課程的開始/結束日期。';
$string['keependdates'] = '保留現有的結束日期';
$string['pluginname'] = '設定課程日期';
$string['privacy:metadata'] = '設定課程日期外掛不會儲存任何個人資料。';
$string['setdates'] = '設定課程日期';
$string['setdatesinstruction'] = '設置類別（包括子類別）中所有課程的開始和結束日期。選擇您的選項，然後單擊“確認”。確認後，Moodle將建立一個“臨時任務”以在後台設置所有日期。這個設置需要啟用cron。';
$string['updatequeued'] = '一個臨時任務已排隊，以更新<strong>{$a}</strong>類別中的所有課程。它將在下次cron執行時運行。';
