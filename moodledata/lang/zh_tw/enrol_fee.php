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
 * Strings for component 'enrol_fee', language 'zh_tw', version '5.0'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '指派角色';
$string['cost'] = '報名費';
$string['costerror'] = '報名費必須為數值。';
$string['currency'] = '貨幣';
$string['defaultrole'] = '預設角色';
$string['defaultrole_desc'] = '選擇付款後要指派給使用者的角色。';
$string['enrolenddate'] = '結束日期';
$string['enrolenddate_help'] = '若啟用，使用者僅能在此日期前報名。';
$string['enrolenddaterror'] = '報名結束日期不能早於開始日期。';
$string['enrolperiod'] = '報名期間';
$string['enrolperiod_desc'] = '預設報名有效的時間長度。若設為零，報名期間將預設為無限制。';
$string['enrolperiod_help'] = '報名從使用者報名的當下開始計算的有效時間。若停用，報名期間將不受限制。';
$string['enrolstartdate'] = '開始日期';
$string['enrolstartdate_help'] = '若啟用，使用者僅能從此日期開始報名。';
$string['expiredaction'] = '報名到期處理';
$string['expiredaction_help'] = '選擇使用者報名到期時要執行的動作。請注意，使用者被取消報名時，部分使用者資料和設定將會被刪除。';
$string['fee:config'] = '設定付費報名實例';
$string['fee:manage'] = '管理已報名使用者';
$string['fee:unenrol'] = '取消使用者課程報名';
$string['fee:unenrolself'] = '自行取消課程報名';
$string['nocost'] = '此課程報名免費！';
$string['paymentaccount'] = '付款帳戶';
$string['paymentaccount_help'] = '報名費將支付至此帳戶。';
$string['pluginname'] = '付費報名';
$string['pluginname_desc'] = '付費報名方式讓您可以設定需要付款的課程。若任何課程的費用設為零，學生將不需要支付入場費。網站有全站預設費用，您可以為整個網站設定，並可以為每個課程個別設定課程費用。課程費用將覆蓋網站預設費用。';
$string['privacy:metadata'] = '付費報名外掛程式不儲存任何個人資料。';
$string['purchasedescription'] = '報名課程 {$a}';
$string['sendpaymentbutton'] = '選擇付款方式';
$string['status'] = '允許付費報名';
$string['status_desc'] = '預設允許使用者支付費用報名課程。';
