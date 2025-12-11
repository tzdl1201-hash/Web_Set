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
 * Strings for component 'tool_unittest', language 'zh_tw', version '5.0'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = '添加字首到設定檔(config.php)';
$string['all'] = '全部';
$string['codecoverageanalysis'] = '執行代碼涵蓋分析';
$string['codecoveragecompletereport'] = '(檢視代碼涵蓋完整報告)';
$string['codecoveragedisabled'] = '無法在此伺服器啟用代碼涵蓋(少了xdebug 附檔名)';
$string['codecoveragelatestdetails'] = '(在{$a->date}, 以{$a->files} 檔案, {$a->percentage} 被涵蓋)';
$string['codecoveragelatestreport'] = '檢視最新代碼涵蓋完整報告';
$string['confignonwritable'] = '這config.php檔案無法被網頁伺服器寫入。你若不是要改變它的讀寫權限，或以適當的用戶帳號編輯它，並在關閉php標籤之前添加下列一行：<br />
$CFG->unittestprefix = \'tst_\' //把tst_改成你要的前置字，但不同於$CFG->prefix';
$string['coveredlines'] = '包含的行';
$string['coveredpercentage'] = '全部代碼涵蓋';
$string['dbtest'] = '功能資料庫測試';
$string['deletingnoninsertedrecord'] = '嘗試要刪除在這些單元測試中沒被插入的紀錄(編號{$a->id}在資料表{$a->table})。';
$string['deletingnoninsertedrecords'] = '嘗試要刪除在這些單元測試中沒被插入的紀錄(從資料表 {$a->table})。';
$string['droptesttables'] = '放棄測試資料表';
$string['exception'] = '異常';
$string['executablelines'] = '可執行的行';
$string['fail'] = '失敗';
$string['ignorefile'] = '忽略檔案中的測試';
$string['ignorethisfile'] = '忽略此測試檔案，重新執行測試。';
$string['installtesttables'] = '安裝測試資料表';
$string['moodleunittests'] = 'Moodle單元測試：{$a}';
$string['notice'] = '注意';
$string['onlytest'] = '測試只執行於';
$string['othertestpages'] = '其他測試頁面';
$string['pass'] = '通過';
$string['pathdoesnotexist'] = '路徑“{$a}”不存在。';
$string['pluginname'] = '單元測試';
$string['prefix'] = '單元測試資料表的字首';
$string['prefixnotset'] = '這單元測試資料庫資料表的前置字沒有設定。請填寫並提交這一表單來把它添加到config.php檔案中。';
$string['reinstalltesttables'] = '重新安裝測試用資料表';
$string['retest'] = '重新執行測試。';
$string['retestonlythisfile'] = '只重新執行此測試檔案';
$string['runall'] = '執行來自全部測試檔案的測試。';
$string['runat'] = '在{$a}上執行。';
$string['runonlyfile'] = '在此檔案中只執行這測試';
$string['runonlyfolder'] = '在此資料夾中只執行這測試';
$string['runtests'] = '執行測試';
$string['rununittests'] = '執行單元測試';
$string['showpasses'] = '既顯示通過也顯示失敗';
$string['showsearch'] = '顯示用於測試檔案的搜尋。';
$string['skip'] = '跳過';
$string['stacktrace'] = '堆疊追蹤：';
$string['summary'] = '{$a->run}/{$a->total} 測試案例完成： <strong>{$a->passes}</strong>個通過, <strong>{$a->fails}</strong>個失敗並且 <strong>{$a->exceptions}</strong>個異常。';
$string['tablesnotsetup'] = '單元測試的資料表還沒建立？你是否要現在建立它們？';
$string['testdboperations'] = '測試資料庫運作';
$string['testtablescsvfileunwritable'] = '這測試資料表CSV檔事無法寫入的({$a->filename})';
$string['testtablesneedupgrade'] = '這測試用資料表需要升級。你希望現在進行升級？';
$string['testtablesok'] = '測試用的資料表已經成功安裝。';
$string['thorough'] = '執行整個測試（可能會很慢）。';
$string['timetakes'] = '花費時間： {$a}';
$string['totallines'] = '總行數';
$string['uncaughtexception'] = '在[{$a->getFile()}:{$a->getLine()}]中未捕捉到異常[{$a->getMessage()}]，測試異常中斷。';
$string['uncoveredlines'] = '未包含的行';
$string['unittest:execute'] = '執行單元測試功能';
$string['unittestprefixsetting'] = '單元測試字首: <strong>{$a->unittestprefix}</strong> (編輯 config.php 來修改這字)';
$string['unittests'] = '單元測試';
$string['updatingnoninsertedrecord'] = '嘗試去更新一筆紀錄，它沒有被這些單元測試插入 (編號 {$a->id} 在資料表 {$a->table})';
$string['version'] = '使用<a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a>版本{$a}。';
