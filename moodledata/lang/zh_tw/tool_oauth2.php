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
 * Strings for component 'tool_oauth2', language 'zh_tw', version '5.0'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authconnected'] = '此系統帳號現在是以離線存取方式連結';
$string['authnotconnected'] = '此系統帳號不是以離線存取方式連結';
$string['configured'] = '已配置';
$string['configuredstatus'] = '已配置';
$string['connectsystemaccount'] = '連接到一系統帳號';
$string['createfromtemplate'] = '從一樣版建立一個客戶認證與授權(OAuth 2) 服務';
$string['createnewendpoint'] = '為發行人"{$a}"建立新的端點';
$string['editendpoints'] = '配置端點';
$string['editissuer'] = '編輯身份認證發行者：{$a}';
$string['edituserfieldmapping'] = '編輯對應到發行人{$a}的用戶欄位';
$string['edituserfieldmappings'] = '配置用戶欄位的對應';
$string['endpointdeleted'] = '已刪除端點';
$string['endpointname'] = '名稱';
$string['endpointsforissuer'] = '發行人的端點：{$a}';
$string['endpointurl'] = '網址';
$string['endpointurl_help'] = '端點的網址。必須使用 https://protocol';
$string['issueralloweddomains'] = '登入的網域';
$string['issueralloweddomains_help'] = '如果有設定，這設定必須是以逗點隔開的域名清單，它用來限制那些電腦能使用這一服務提供。';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = '服務的基本網址';
$string['issuerbaseurl_help'] = '用來存取這服務的基本網址';
$string['issuerclientid'] = '客戶編號';
$string['issuerclientid_help'] = '針對此發行人的 OAuth 客戶編號';
$string['issuerclientsecret'] = '客戶密碼';
$string['issuerclientsecret_help'] = '針對此發行人的 OAuth 客戶密碼';
$string['issuerdeleted'] = '身分發行人已刪除';
$string['issuerdisabled'] = '身分發行人已關閉';
$string['issuerenabled'] = '身分發行人已啟用';
$string['issuerimage'] = '商標網址';
$string['issuerimage_help'] = '一個圖像的網址，用來顯示這一發行者的商標。可被顯示在登入頁面上。';
$string['issuerloginparams'] = '在一個登入請求中包含附帶參數';
$string['issuerloginparams_help'] = '某些系統要求登入請求中需要有附帶參數，以便能讀取用戶的基本的個人資料。';
$string['issuerloginparamsoffline'] = '離線存區需要在一個登入請求中包含附帶參數';
$string['issuerloginparamsoffline_help'] = '每個OAuth系統定義一個不同方式來請求離線存取。比如，google需要有附帶參數：
"access_type=offline&prompt=consent"這些參數必須是網址請求參數格式';
$string['issuerloginscopes'] = '在登入請求中包含範圍';
$string['issuerloginscopes_help'] = '某些系統要求在登入請求中加上附帶範圍，以便能讀取用戶的基本個人資料。OpenID連結兼容系統的標準範圍是"openid profile email"';
$string['issuerloginscopesoffline'] = '離線存取需要在登入請求中包含範圍';
$string['issuerloginscopesoffline_help'] = '每個OAuth系統定義一個不同方式來請求離線存取。例如，Microsoft請求中藥有一附帶的範圍"offline_access"';
$string['issuername'] = '名稱';
$string['issuername_help'] = '身分發行人的名稱。可被顯示在登入頁面上。';
$string['issuerrequireconfirmation'] = '要求驗證電子郵件信箱';
$string['issuers'] = '發行人';
$string['issuersetup'] = '配置常用的 OAuth 2 服務的詳細說明';
$string['issuersetuptype'] = '設定{$a}服務提供者的詳細說明';
$string['issuershowonloginpage'] = '在登入頁面上顯示';
$string['issuershowonloginpage_help'] = '如果 OpenID 連結認證外掛程式已被啟用。這一登入發行人將會被列在登入頁面上，以允許用戶使用來自這發行人的帳號來登入。';
$string['loginissuer'] = '允許登入';
$string['notconfigured'] = '沒被配置';
$string['notdiscovered'] = '服務探尋並未成功';
$string['notloginissuer'] = '不允許登入';
$string['pluginname'] = 'OAuth 2 服務';
$string['savechanges'] = '儲存變更';
$string['serviceshelp'] = '服務提供者的設定說明';
$string['systemaccountconnected'] = '系統帳號已經連接上';
$string['systemaccountnotconnected'] = '系統帳號沒有連接上';
$string['systemauthstatus'] = '系統帳號連接狀態';
$string['userfieldexternalfield'] = '外部欄位名稱';
$string['userfieldexternalfield_help'] = '由外部 OAuth 系統提供的欄位名稱';
$string['userfieldinternalfield'] = '內部欄位名稱';
$string['userfieldinternalfield_help'] = 'Moodle用戶欄位的名稱，它應該與外部欄位相對應';
$string['userfieldmappingdeleted'] = '用戶欄位對應已被刪除';
$string['userfieldmappingsforissuer'] = '發行人的用戶欄位對應：{$a}';
