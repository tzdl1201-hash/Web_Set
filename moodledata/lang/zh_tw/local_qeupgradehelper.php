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
 * Strings for component 'local_qeupgradehelper', language 'zh_tw', version '5.0'.
 *
 * @package     local_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '動作';
$string['alreadydone'] = '所有一切都轉換完畢';
$string['areyousure'] = '您確定嗎？';
$string['areyousuremessage'] = '您想升級課程{$a->shortname}的測驗"{$a->name}"中的{$a->numtoconvert}次試答嗎？';
$string['areyousureresetmessage'] = '課程{$a->shortname}下的測驗“{$a->name}”有{$a->totalattempts}次試答，其中{$a->convertedattempts}次是從舊系統升級的。其中有{$a->resettableattempts}次可以被重置，方便重新轉換。您想這麼做嗎？';
$string['attemptstoconvert'] = '需要轉換的試答';
$string['backtoindex'] = '回到主要頁面';
$string['conversioncomplete'] = '轉換完成';
$string['convertattempts'] = '嘗試轉換';
$string['convertedattempts'] = '嘗試轉換';
$string['convertquiz'] = '嘗試轉換...';
$string['cronenabled'] = '啟用排程';
$string['croninstructions'] = '在部分升級之後，您可以讓排程自動完成剩下的升級任務。排程會在設定的時間斷(伺服器的本機時間）內執行。每次排程執行時，都會處理幾條試答，直到時間用盡，然後再等到下一次排程時候執行，直到它偵測到2.1的主要升級已經完成。';
$string['cronprocesingtime'] = '每次排程處理時間';
$string['cronsetup'] = '設定排程';
$string['cronsetup_desc'] = '您可以設定排程，讓它自動完成測驗試答數據的升級。';
$string['cronstarthour'] = '開始時間';
$string['cronstophour'] = '結束時間';
$string['extracttestcase'] = '抓取測試用例子';
$string['extracttestcase_desc'] = '用資料庫中的範例資料建立測適用，用來測試升級。';
$string['gotoindex'] = '回到可升級的測驗列表';
$string['gotoquizreport'] = '前往此測驗的報告，檢查這次升級';
$string['gotoresetlink'] = '前往可以重置的測驗列表';
$string['includedintheupgrade'] = '包含在升級中？';
$string['invalidquizid'] = '無效的測驗id。此測驗不存在，或者它沒有可以轉換的試卷。';
$string['listpreupgrade'] = '列出測驗和試答';
$string['listpreupgrade_desc'] = '會顯示系統的所有測驗，以及它們有多少次試答，幫助您了解有多少升級工作要做。';
$string['listpreupgradeintro'] = '這是升級您往暫時需要處理的試答適量。如果有幾萬個，不用擔心。更應該考慮的，是升級會花多久。';
$string['listtodo'] = '列出仍須升級的測驗';
$string['listtodo_desc'] = '將顯示一個報表，包含系統中所有有試答且需要升級到新試題引擎的測驗。';
$string['listtodointro'] = '這是所有試答且需要轉換的測驗。您可以點連結轉換試答。';
$string['listupgraded'] = '列出可重置的已經升級測驗';
$string['listupgraded_desc'] = '將顯示一個報表，包含系統中所有試答已經升級，但舊資料還存在的測驗。可以重置並重設定這些測驗的升級。';
$string['listupgradedintro'] = '這是全部有測驗卷且已經升級的測驗，但舊資料仍被保留，所以可以重置並且重新升級它們。';
$string['noquizattempts'] = '您的網站沒有任何測驗被試答！';
$string['nothingupgradedyet'] = '沒有可重置的已經升級試答';
$string['notupgradedsiterequired'] = '此程序只能在網站升級前使用。';
$string['numberofattempts'] = '測驗試答數';
$string['oldsitedetected'] = '此網站還沒有升級到新的試題引擎。';
$string['outof'] = '{$a->total}中的{$a->some}次';
$string['pluginname'] = '試題引擎升級助手';
$string['pretendupgrade'] = '模擬執行一次試答升級';
$string['pretendupgrade_desc'] = '升級做三件事：從資料庫載入已經存在的資料；轉換資料；將轉換過的資料寫入資料庫。此程序測試此過程中的前兩不。';
$string['questionsessions'] = '試題工作階段';
$string['quizid'] = '測驗id';
$string['quizupgrade'] = '測驗升級狀態';
$string['quizzesthatcanbereset'] = '下例測驗有轉換的試答，而且您可以重置';
$string['quizzestobeupgraded'] = '所有試答的測驗';
$string['quizzeswithunconverted'] = '下列測驗有需要轉換的試答';
$string['resetcomplete'] = '重置完成';
$string['resetquiz'] = '重置試答...';
$string['resettingquizattempts'] = '正在重置測驗試答';
$string['resettingquizattemptsprogress'] = '重置試答 {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = '看到這條訊息，說明此站已經升級到了新的試題引擎。';
$string['upgradedsiterequired'] = '此程序只能在已經升級過的網站使用。';
$string['upgradingquizattempts'] = '正升級課程{$a->shortname}的測驗「{$a->name}」中的試答';
$string['veryoldattemtps'] = '在從 Moodle 1.4 升級到 Moodle 1.5 的過程中，您的網站有 {$a} 次試卷沒有被正確更新。這些試卷會在主要升級之前被處理。您要對額外消耗的時間有心理準備。';
