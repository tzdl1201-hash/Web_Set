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
 * Strings for component 'tool_coursearchiver', language 'zh_tw', version '5.0'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = '上次訪問之後';
$string['accessbefore'] = '上次訪問之前';
$string['accessbeforeafter'] = '上次訪問之後';
$string['anycategory'] = '所有類別';
$string['archive'] = '歸檔課程';
$string['archivedeletesetting'] = '延遲刪除歸檔';
$string['archivedeletesetting_help'] = '歸檔刪除將延遲多少天。';
$string['archiveemail'] = '發送“要歸檔的課程”電子郵件';
$string['archivelimit'] = '檔案庫搜尋限制器';
$string['archivelimit_help'] = '螢幕上顯示的最大結果數';
$string['archivelimitstring'] = '顯示最大值';
$string['archivelist'] = '課程檔案';
$string['archivelocation'] = '課程存檔子目錄';
$string['archiverecoverform'] = '待刪除';
$string['archivewarningemailsetting'] = '課程存檔的預設電子郵件警告';
$string['archivewarningemailsetting_help'] = '這是一封電子郵件的內容，該電子郵件將發送給選擇存檔的課程的所有教師。';
$string['archivewarningemailsettingdefault'] = '%to

我們謹通知您，您教授的以下 Moodle 課程即將存檔
這意味著課程將以當前狀態備份，然後從 Moodle 中刪除。如果您想選擇退出以下課程之一的此流程，請點擊課程旁邊的連結。

%courses

Thank you.';
$string['archivewarningsubject'] = '注意：課程即將存檔。';
$string['back'] = '重來';
$string['backup'] = '備份課程';
$string['cannotdeletecoursenotexist'] = '無法刪除不存在的課程';
$string['category'] = '類別';
$string['cli_cannot_continue'] = '\\n已停止:資料不足，無法繼續。 \\n';
$string['cli_question_archive'] = '存檔並刪除這些 {$a} 課程？';
$string['cli_question_archiveemail'] = '向這些 {$a} 使用者發送一封「要存檔的課程」電子郵件？';
$string['cli_question_delete'] = '刪除這些{$a}課程嗎？';
$string['cli_question_hide'] = '隱藏這些 {$a} 課程？';
$string['cli_question_hideemail'] = '向這些 {$a} 使用者發送一封「要隱藏的課程」電子郵件？';
$string['confirm'] = '繼續';
$string['confirmdelete'] = '你確定你要刪除？';
$string['confirmmessage'] = '您確定要 {$a}';
$string['confirmmessagearchive'] = '存檔並刪除這些 {$a} 課程？';
$string['confirmmessagearchiveemail'] = '向這些 {$a} 課程所有者發送電子郵件嗎？';
$string['confirmmessagebackup'] = '備份這些{$a}課程嗎？';
$string['confirmmessagedelete'] = '完全刪除這些{$a}課程嗎？';
$string['confirmmessagehide'] = '隱藏這些 {$a} 課程？';
$string['confirmmessagehideemail'] = '向這些 {$a} 課程所有者發送電子郵件嗎？';
$string['confirmmessageoptout'] = '選擇退出這些 {$a} 課程？';
$string['confirmrestore'] = '恢復待刪除的存檔？';
$string['course_readded'] = '{$a->fullname} 已從選擇退出清單中刪除。謝謝。';
$string['course_skipped'] = '在接下來的 {$a->optoutmonths} 個月內將跳過 {$a->fullname}。謝謝。';
$string['coursearchiver'] = '課程存檔器';
$string['coursearchiver_help'] = '使用以下條件搜尋課程： 匹配簡稱、全名、ID 號碼、課程 ID、上次訪問課程的日期或*空課程。\\n
如果課程已隱藏，則課程將顯示為灰色。如果課程是*空課程，課程的全名中將有一條橫線。\\n\\n
注意：上次訪問搜尋將僅返回在提供的日期之前建立的課程。\\n
注意：找到的電子郵件地址數量可能與發送的電子郵件不同。這有兩個原因。 \\n
   1. 如果選擇隱藏課程，則已隱藏的課程將不會發送電子郵件通知所有者。\\n
   2. 顯示在多個課程下的單一位址將合併到單一電子郵件中。\\n\\n
*空課程定義為成績冊中 0 個作業、0 個資源、0 個類別、成績冊中 0 個成績項目。';
$string['coursearchiver_settings'] = '課程存檔器設置';
$string['coursearchiverpath'] = '儲存存檔課程的資料夾路徑';
$string['coursearchiverpath_help'] = '該路徑相對於 Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = '上傳課程預覽';
$string['coursearchiverresult'] = '上傳課程結果';
$string['coursearchiverrootpath'] = '存檔資料夾所在的系統路徑';
$string['coursearchiverrootpath_help'] = '預設為 CFG->dataroot';
$string['coursedeleted'] = '課程已刪除';
$string['coursedeletionnotallowed'] = '不允許刪除課程';
$string['coursefullname'] = '課程全名';
$string['courseid'] = '課程編號ID';
$string['courseidnum'] = '課程編號';
$string['courseselector'] = '課程搜尋結果';
$string['courseshortname'] = '課程簡稱';
$string['courseteacher'] = '課程所有者';
$string['createdafter'] = '創建於之後';
$string['createdbefore'] = '之前創建過';
$string['createdbeforeafter'] = '創建之前/之後';
$string['crontask'] = '課程檔案刪除作業';
$string['delete'] = '刪除課程';
$string['deletedarchiveemails'] = '所有者電子郵件地址';
$string['deselectall'] = '取消全選';
$string['email'] = '發電子郵件';
$string['emailselector'] = '使用者選擇接收電子郵件。';
$string['empty'] = '空的';
$string['emptycourse'] = '空白課程';
$string['emptyonly'] = '只返回空課程';
$string['endafter'] = '之後結束';
$string['endbefore'] = '結束時間早於';
$string['error_key'] = '安全密鑰不正確。';
$string['error_nocourseid'] = '課程記錄不包含 ID';
$string['error_savepointid'] = '未找到保存點';
$string['errorarchivefile'] = '課程存檔檔案不存在。';
$string['errorarchivepath'] = '無法建立存檔路徑。';
$string['errorarchivingcourse'] = '課程：({$a->id}) {$a->fullname} 無法備份或存檔。';
$string['errorbackup'] = '備份失敗。';
$string['errordeletingcourse'] = '課程：({$a->id}) {$a->fullname} 無法刪除。';
$string['erroremptysearch'] = '沒有給出搜尋條件。';
$string['errorhidingcourse'] = '課程：({$a->id}) {$a->fullname} 無法隱藏。';
$string['errorinsufficientdata'] = '資訊不足，無法執行此操作';
$string['errormissingcourses'] = '電子郵件範本中缺少 %courses 變數。這是課程列表。';
$string['errormissingto'] = '電子郵件範本中缺少 %to 變數。這是收件人的姓名。';
$string['errornoform'] = '未給出表格。';
$string['errornonnumericid'] = '課程 ID 必須是數字';
$string['errornonnumerictimestamp'] = '時間戳記必須是數字（UNIX 時間戳記）';
$string['erroroptoutcourse'] = '課程：({$a->id}) {$a->fullname} 無法選擇退出。';
$string['errors'] = '錯誤';
$string['errors_count'] = '錯誤：{$a}';
$string['errorsendingemail'] = '向 {$a->firstname} {$a->lastname} ({$a->email}) 發送電子郵件失敗。';
$string['errorvalidarchive'] = '不是有效的備份檔案。';
$string['hidden'] = '隱藏';
$string['hide'] = '隱藏課程';
$string['hideemail'] = '發送「要隱藏的課程」電子郵件';
$string['hidewarningemailsetting'] = '課程隱藏的預設電子郵件警告';
$string['hidewarningemailsetting_help'] = '這是一封電子郵件的內容，該電子郵件將發送給選擇隱藏的課程的所有教師。';
$string['hidewarningemailsettingdefault'] = '%to

我們想通知您，您教授的以下 Moodle 課程即將被隱藏。
這意味著仍在註冊該課程的學生將無法再訪問該課程。如果您想選擇退出以下課程之一的此流程，請點擊課程旁邊的連結。

%courses

謝謝。';
$string['hidewarningsubject'] = '注意：課程即將隱藏。';
