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
 * Strings for component 'search_solr', language 'zh_tw', version '5.0'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = '這指定的Solr伺服器無法使用，或指定的索引不存在';
$string['connectionsettings'] = '連結的各項設定';
$string['fileindexing'] = '啟用建立檔案索引功能';
$string['fileindexsettings'] = '建立檔案索引的設定';
$string['maxindexfilekb'] = '要建立索引的最大檔案大小(Kb)';
$string['maxindexfilekb_help'] = '檔案若大於這一容量(k)，將不會包含在搜尋索引中。若設為 0，任何大小的檔案都會建立索引';
$string['minimumsolr4'] = 'Moodle至少需要solr 4.0以上版本';
$string['missingconfig'] = '在Moodle中，你的Apache Solr伺服器還沒有被配置';
$string['nodatafromserver'] = '伺服器沒有傳資料過來';
$string['pluginname'] = 'Solr';
$string['searchinfo'] = '搜索查詢';
$string['searchinfo_help'] = '在查詢條件欄位輸入的關鍵字前面可以加上  title:  或  content: 或 name:  或 intro: 來限定要搜尋的範圍。
例如，輸入查詢條件為[ title:新聞 ] 將會得到標題有 新聞 兩字的內容。
布林代數運算子  AND  或  OR  或 NOT  都可用於組合或排除關鍵字。
萬用字元 * 或 ？ 可用於表示要查詢的未知字元。

[請注意]以上 : * ? 都是英文字元';
$string['setupok'] = '這架構已經可以使用';
$string['solrauthpassword'] = 'HTTP驗證用戶密碼';
$string['solrauthuser'] = 'HTTP驗證用戶名稱';
$string['solrhttpconnectionport'] = '埠';
$string['solrhttpconnectiontimeout'] = '連接可用時間';
$string['solrhttpconnectiontimeout_desc'] = '這HTTP連接可用時間是允許HTTP進行資料轉移操作的最大時間(以秒計)';
$string['solrindexname'] = '索引的名稱';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr 引擎不是這配置的搜索引擎';
$string['solrsecuremode'] = '安全模式';
$string['solrserverhostname'] = '主機名稱';
$string['solrserverhostname_desc'] = 'Solr的伺服器的域名';
$string['solrsetting'] = 'Solr的設定';
$string['solrsslkey_desc'] = 'PEM格式的私鑰檔的檔名';
$string['solrsslkeypassword'] = 'SSL 鑰的密碼';
$string['solrsslkeypassword_desc'] = 'PEM格式的私鑰檔的密碼';
