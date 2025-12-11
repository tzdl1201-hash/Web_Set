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
 * Strings for component 'payment', language 'zh_tw', version '5.0'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = '已封存';
$string['accountconfignote'] = '此帳戶的金流通道將另外設定';
$string['accountdeleteconfirm'] = '若此帳戶有歷史交易，將會被封存；否則其設定資料將會被永久刪除。您確定要繼續嗎？';
$string['accountidnumber'] = '識別碼';
$string['accountidnumber_help'] = '此識別碼僅用於與外部系統比對，不會顯示在網站任何位置。若帳戶有正式的代碼，可以輸入；否則可留空。';
$string['accountname'] = '帳戶名稱';
$string['accountname_help'] = '說明此帳戶將如何被教師或管理者識別（例如在課程報名外掛中）。';
$string['accountnotavailable'] = '無法使用';
$string['createaccount'] = '建立付款帳戶';
$string['deleteorarchive'] = '刪除或封存';
$string['editpaymentaccount'] = '編輯付款帳戶';
$string['eventaccountcreated'] = '已建立付款帳戶';
$string['eventaccountdeleted'] = '已刪除付款帳戶';
$string['eventaccountupdated'] = '已更新付款帳戶';
$string['feeincludesurcharge'] = '{$a->fee}（已包含使用此付款方式的 {$a->surcharge}% 手續費）';
$string['gatewaycannotbeenabled'] = '無法啟用金流通道，設定不完整。';
$string['gatewaydisabled'] = '已停用';
$string['gatewayenabled'] = '已啟用';
$string['gatewaynotfound'] = '找不到金流通道';
$string['gotomanageplugins'] = '可透過{$a}啟用、停用金流通道並設定手續費。';
$string['gotopaymentaccounts'] = '您可以在{$a}頁面使用這些金流通道建立多個付款帳戶';
$string['hidearchived'] = '隱藏已封存';
$string['noaccountsavilable'] = '無可用的付款帳戶。';
$string['nocurrencysupported'] = '不支援任何貨幣付款。請確保至少啟用一個金流通道。';
$string['nogateway'] = '無可用的金流通道。';
$string['nogatewayselected'] = '請先選擇金流通道。';
$string['paymentaccount'] = '付款帳戶';
$string['paymentaccounts'] = '付款帳戶';
$string['paymentaccountsexplained'] = '為網站建立一或多個付款帳戶。每個帳戶包含可用金流通道的設定。網站付款設定者（例如課程報名付款）可以選擇可用的帳戶';
$string['payments'] = '付款';
$string['privacy:metadata:database:payments'] = '付款相關資訊';
$string['privacy:metadata:database:payments:amount'] = '付款金額';
$string['privacy:metadata:database:payments:currency'] = '付款貨幣';
$string['privacy:metadata:database:payments:gateway'] = '金流通道相關資訊';
$string['privacy:metadata:database:payments:timecreated'] = '付款創建的時間';
$string['privacy:metadata:database:payments:timemodified'] = '付款記錄最後更新的時間';
$string['privacy:metadata:database:payments:userid'] = '付款的用戶';
$string['restoreaccount'] = '還原';
$string['selectpaymenttype'] = '選擇付款方式';
$string['showarchived'] = '顯示已封存';
$string['supportedcurrencies'] = '支援的貨幣';
$string['surcharge'] = '手續費（百分比）';
$string['surcharge_desc'] = '手續費是向選擇使用此金流通道付款的使用者額外收取的百分比。';
