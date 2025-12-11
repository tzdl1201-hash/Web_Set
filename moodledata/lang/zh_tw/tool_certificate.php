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
 * Strings for component 'tool_certificate', language 'zh_tw', version '5.0'.
 *
 * @package     tool_certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = '新增頁面';
$string['addelement'] = '新增元素';
$string['aissueswerecreated'] = '{$a} 頒佈已經建立';
$string['aligncentre'] = '置中';
$string['alignleft'] = '左側';
$string['alignment'] = '文字對齊';
$string['alignment_help'] = '靠右對齊表示元素坐標（位置X和位置Y）將對齊文字框的右上角，中心對齊表示它們將對齊頂部中間，而靠左則是對齊到左上角。';
$string['alignright'] = '右側';
$string['certificate'] = '證書';
$string['certificate:issue'] = '為用戶頒發證書';
$string['certificate:manage'] = '管理證書';
$string['certificate:verify'] = '確認目前租戶中的任何證書';
$string['certificate:viewallcertificates'] = '查看目前租戶的所有證書模板以及發出的證書';
$string['certificateimages'] = '證書圖片';
$string['certificates'] = '證書';
$string['changeelementsequence'] = '前進或後退';
$string['code'] = '編碼';
$string['createtemplate'] = '新模板';
$string['deleteelement'] = '刪除元素';
$string['deleteelementconfirm'] = '您確定要刪除元素 \'{$a}\' 嗎？';
$string['deletepageconfirm'] = '您確定要刪除此證書頁嗎？';
$string['deletetemplateconfirm'] = '您確定要刪除證書模板 \'{$a}\' 和所有相關數據嗎？此操作無法撤銷。';
$string['duplicate'] = '複製';
$string['duplicatetemplateconfirm'] = '您確定要複製模板 \'{$a}\' 嗎？';
$string['editcertificate'] = '編修證書 \'{$a}\'';
$string['editelement'] = '編修 \'{$a}\'';
$string['editelementname'] = '編修元素名稱';
$string['editpage'] = '編修頁面 {$a}';
$string['edittemplatename'] = '編修模板名稱';
$string['elementname'] = '元素名稱';
$string['elementname_help'] = '這將是編修證書時用於標識此元素的名稱。請注意，這不會顯示在PDF上。';
$string['elementwidth'] = '寬度 (mm)';
$string['elementwidth_help'] = '指定元素的寬度。零(0) 表示沒有寬度限制。';
$string['entitycertificate'] = '證書';
$string['eventcertificateissued'] = '已頒發證書';
$string['eventcertificaterevoked'] = '已撤銷證書';
$string['eventcertificateverified'] = '已驗證證書';
$string['eventtemplatecreated'] = '已建立模板';
$string['eventtemplatedeleted'] = '已刪除模板';
$string['eventtemplateupdated'] = '已更新模板';
$string['expired'] = '過期';
$string['font'] = '字體';
$string['font_help'] = '生成此元素時使用的字體。';
$string['fontcolour'] = '顏色';
$string['fontcolour_help'] = '字體顏色。';
$string['fontsize'] = '大小 (pt)';
$string['fontsize_help'] = '以point(pt)為單位的字體大小。';
$string['hideshow'] = '隱藏/顯示';
$string['invalidcolour'] = '選擇了無效的顏色。請輸入有效的HTML顏色名稱，六位數或三位十六進制顏色。';
$string['invalidelementwidth'] = '請輸入正數。';
$string['invalidheight'] = '高度必須是大於0的有效數字。';
$string['invalidmargin'] = '邊距必須是大於0的有效數字。';
$string['invalidposition'] = '請為位置 {$a} 選擇一個正數。';
$string['invalidwidth'] = '寬度必須是大於0的有效數字。';
$string['issuecertificates'] = '頒發新證書';
$string['issuenewcertificate'] = '從此模板頒發新證書';
$string['issuenotallowed'] = '您不能從此模板頒發證書。';
$string['issueormangenotallowed'] = '您不能從此模板頒發證書或管理此模板。';
$string['leftmargin'] = '左邊距 (mm)';
$string['leftmargin_help'] = '這是證書PDF的左邊距，單位為mm。';
$string['manageelementplugins'] = '管理證書元素插件';
$string['managetemplates'] = '管理證書模板';
$string['mycertificates'] = '我的證書';
$string['mycertificatesdescription'] = '這些是您透過電子郵件或手動下載的證書。';
$string['name'] = '名稱';
$string['nametoolong'] = '您已超過名稱允許的最大長度';
$string['noimage'] = '沒有圖片';
$string['noissueswerecreated'] = '沒有創建任何頒佈';
$string['notverified'] = '未驗證';
$string['oneissuewascreated'] = '創建了一個發佈';
$string['page'] = '第 {$a} 頁';
$string['pageheight'] = '頁面高度 (mm)';
$string['pageheight_help'] = '這是證書PDF的高度，單位為mm。作為參考：A4紙高度為297mm，一封信高度為279mm。';
$string['pagewidth'] = '頁面寬度 (mm)';
$string['pagewidth_help'] = '這是證書PDF的寬度，單位為mm。作為參考：A4紙寬度為210mm，一封信寬度為216mm。';
$string['pluginname'] = '證書工具';
$string['posx'] = '位置X (mm)';
$string['posx_help'] = '這是從左上角開始的位置(mm)，您希望元素位於X方向的參考點。';
$string['posy'] = '位置Y (mm)';
$string['posy_help'] = '這是從左上角開始的位置(mm)，您希望元素位於Y方向的參考點。';
$string['privacy:metadata:tool_certificate:issues'] = '頒發的證書列表';
$string['privacy:metadata:tool_certificate_issues:code'] = '證書的編碼';
$string['privacy:metadata:tool_certificate_issues:expires'] = '證書過期時的時間戳。 0表示沒有期限。';
$string['privacy:metadata:tool_certificate_issues:templateid'] = '證書的ID';
$string['privacy:metadata:tool_certificate_issues:timecreated'] = '證書頒發的時間';
$string['privacy:metadata:tool_certificate_issues:userid'] = '頒發證書的用戶 ID';
$string['reg_wpcertificates'] = '證書 ({$a}) 數量';
$string['reg_wpcertificatesissues'] = '頒發的 ({$a}) 證書數量';
$string['revoke'] = '撤銷';
$string['revokecertificateconfirm'] = '您確定要從此用戶撤銷此頒佈的證書嗎？';
$string['rightmargin'] = '右邊距 (mm)';
$string['rightmargin_help'] = '這是證書PDF的右邊距，單位為mm。';
$string['selectuserstoissuecertificatefor'] = '選擇要為其頒發證書的用戶';
$string['shared'] = '租戶之間共享';
$string['subplugintype_certificateelement_plural'] = '元素插件';
$string['uploadimage'] = '上傳圖片';
$string['valid'] = '有效';
$string['verified'] = '已驗證';
$string['verify'] = '驗證';
$string['verifycertificates'] = '驗證證書';
$string['verifynotallowed'] = '您不能驗證證書。';
$string['viewcertificate'] = '查看證書';
