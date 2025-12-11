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
 * Strings for component 'wiki', language 'zh_tw', version '5.0'.
 *
 * @package     wiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = '新增評論';
$string['addedbegins'] = '已經加入開頭';
$string['addedends'] = '已經加入結尾';
$string['admin'] = '管理';
$string['adminmenu'] = '管理選單';
$string['attachmentattach'] = '新增附件';
$string['attachmentimage'] = '新增圖片';
$string['attachmentlink'] = '新增為連結';
$string['attachments'] = '附件';
$string['backcomments'] = '回到評論';
$string['backhistory'] = '回到歷史版次';
$string['backoldversion'] = '回到舊版次';
$string['backpage'] = '回到頁面';
$string['backtomapmenu'] = '回到地圖選單';
$string['cannotcomparenewerversion'] = '一個版本的頁面只能和它的較舊版本的頁面相比較';
$string['cannoteditpage'] = '你無法編輯此頁面';
$string['cannotmanagefiles'] = '你沒有權限管理wiki檔案。';
$string['cannotviewfiles'] = '你沒有權限檢視wiki檔案。';
$string['cannotviewpage'] = '你無法檢視此頁面';
$string['changerate'] = '確定要變更？';
$string['comments'] = '評論';
$string['commentscount'] = '評論（{$a}）';
$string['comparesel'] = '比較被選出的版本';
$string['comparewith'] = '比對版次 {$a->old}和版次 {$a->new}的差異';
$string['contributions'] = '貢獻';
$string['contributions_help'] = '你編輯過的頁面清單';
$string['createcomment'] = '新增評論';
$string['createddate'] = '由 {$a->username}在 {$a->date} 新增';
$string['createpage'] = '新增頁面';
$string['creating'] = '建立一個wiki頁面';
$string['creole'] = 'Creole';
$string['defaultformat'] = '預設格式';
$string['defaultformat_help'] = '用以設定在編輯wiki頁面時所用的預設格式。

* HTML格式--可以使用Moodle系統的HTML編輯器。
* 混合語格式--有小的編輯工具列可以使用。
* Nwiki格式--使用Mediawiki式的標籤語言。';
$string['deleteallpages'] = '刪除所有wiki頁面';
$string['deletecomment'] = '刪除評論';
$string['deletecommentcheck'] = '刪除評論';
$string['deletecommentcheckfull'] = '確定要刪除評論？';
$string['deletedbegins'] = '刪除起頭';
$string['deletedends'] = '刪除結尾';
$string['deleteupload'] = '刪除';
$string['deleteversions'] = '刪除頁面版次';
$string['diff'] = '差異';
$string['diff_help'] = '你可以在此頁面選取兩個不同的版次做比對，系統會自動列出兩個版次的差異';
$string['edit'] = '編輯';
$string['editblocks'] = '開啟編輯區塊';
$string['editcomment'] = '編輯評論';
$string['editfiles'] = '編輯wiki檔案';
$string['editing'] = '編輯wiki頁面';
$string['editingcomment'] = '編輯評論';
$string['editingpage'] = '編輯此頁"{$a}"';
$string['editsection'] = '編輯';
$string['eventdiffviewed'] = '檢視wiki頁面的差異';
$string['eventhistoryviewed'] = '檢視wiki編輯歷史';
$string['eventmapviewed'] = '檢視wiki頁面地圖';
$string['eventpagecreated'] = '建立wiki頁面';
$string['eventpagedeleted'] = '刪除wiki頁面';
$string['eventpagelocksdeleted'] = '刪除wiki頁面的鎖定';
$string['eventpageupdated'] = '更新wiki頁面';
$string['eventpageversiondeleted'] = '刪除wiki頁面版本';
$string['eventpageviewed'] = '檢視wiki頁面';
$string['eventversionrestored'] = '復原wiki頁面';
$string['eventversionviewed'] = '檢視wiki頁面版本';
$string['filenotuploadederror'] = '檔案"{$a}"無法正確上傳';
$string['files'] = '檔案';
$string['filtername'] = 'Wiki頁面自動連結';
$string['firstpagetitle'] = '首頁名稱';
$string['firstpagetitle_help'] = 'wiki的首頁標題';
$string['forceformat'] = '強制使用的格式';
$string['forceformat_help'] = '若強制使用此格式(勾選)，使用者在編輯wiki頁面時將無法自行選擇格式';
$string['format'] = '格式';
$string['format_help'] = '* HTML格式--可以使用Moodle系統的HTML編輯器。
* 混合語格式--有小的編輯工具列可以使用。
* Nwiki格式--使用Mediawiki式的標籤語言。';
$string['formatcreole'] = 'Creole格式';
$string['formatcreole_help'] = 'Creole是一個通用的wiki標記語言，你可以有一編輯工具列以便插入適當的標記語言。

要建立一新頁面，請打入一個新頁面的名稱，並用兩層的中括弧包起來，例如，[[第二章]]。';
$string['formatcreole_link'] = 'mod/wiki/creole';
$string['formathtml'] = 'HTML格式';
$string['formathtml_help'] = '可以使用HTML編輯器來格式化內容。

要建立一新頁面，請輸入新頁面的名稱，並用兩層的中括弧包起來，例如，[[第二章]]。';
$string['formatnwiki'] = 'NWiki格式';
$string['formatnwiki_help'] = 'Nwiki是採用Mediawiki式的標記語言(即維基開放百科全書Wikipedia所用的)。

要建立一新頁面，請打入一個新頁面的名稱，並用兩層的中括弧包起來，例如，[[第二章]]。';
$string['formatnwiki_link'] = 'mod/wiki/nwiki';
$string['history'] = '歷史版次';
$string['history_help'] = '這個歷史版次清單會連結到此頁的所有舊版次';
$string['html'] = 'HTML';
$string['incorrectdeleteversions'] = '指定要刪除的頁面版次不正確';
$string['incorrectpageid'] = '頁面的ID不正確';
$string['incorrectsubwikiid'] = '下層wiki的ID不正確';
$string['incorrectwikiid'] = 'Wiki的ID不正確';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['individualpagedoesnotexist'] = '個別的wiki頁面不存在';
$string['insertcomment'] = '插入評論';
$string['insertimage'] = '插入圖片';
$string['insertimage_help'] = '這一下拉清單將會插入一張圖片到編輯器。若你需要添加更多的圖片到這wiki，請使用"檔案"分頁。';
$string['invalidlock'] = '此頁面已被其他使用者鎖定';
$string['invalidparameters'] = '被給予無效的參數';
$string['invalidsection'] = '無效的區域';
$string['invalidsesskey'] = '您的連線很有可能已逾時中斷。 請複製下您的編輯內容，然後再重新登入。';
$string['javascriptdisabledlocks'] = '在你瀏覽器上的Javascript是關閉的，且鎖定是無效的。擬作的修改可能無法正確儲存。';
$string['links'] = '連結';
$string['listall'] = '列出全部';
$string['listorphan'] = '列出孤兒頁面';
$string['lockingajaxtimeout'] = '編輯頁面鎖定的更新時間';
$string['lockingtimeout'] = '鎖定時間已過';
$string['map'] = '頁面地圖';
$string['mapmenu'] = '頁面地圖選單';
$string['migrationfinished'] = '整合成功';
$string['migrationfinishednowikis'] = '整合完成，沒有wiki被整合';
$string['missingpages'] = '頁面沒有內容';
$string['modified'] = '已修改';
$string['modulename'] = 'Wiki共筆';
$string['modulename_help'] = 'Wiki活動能夠讓參與者以很簡易的方式新增或編輯一堆網頁頁面。
Wiki可以是"合作性"的，也就是只有一個Wiki，但每個人都可以編輯它；或者是"個人化"的，也就是每個人有他自己的wiki，且只有他自己能編輯這一wiki。

在Wiki中的每一頁編輯的歷史版本資料會被保存著，並條列每一位參與者的編輯紀錄。

Wiki有許多的用法，例如：

* 上課的共同筆記或講義
* 多位教職員共同撰寫工作計畫，或開會的議程
* 學生之間的合作共筆寫作(書籍、小組作業)
* 合作的故事接龍，或詩詞創作，讓每位參與者寫一行或一段
* 個人的日記，準備考試的筆記(用於個人的wiki)';
$string['modulename_link'] = 'mod/wiki/view';
$string['modulenameplural'] = 'Wiki共筆';
$string['navigation'] = '導覽';
$string['navigationfrom'] = '這一頁來自';
$string['navigationfrom_help'] = '連結到此頁的wiki頁';
$string['navigationto'] = '這一頁要往';
$string['navigationto_help'] = '包含在這一頁裡的連結';
$string['newpage'] = '新增';
$string['newpagehdr'] = '新增頁面';
$string['newpagetitle'] = '新頁面標題';
$string['noattachments'] = '<strong>沒有附加檔案</strong>';
$string['nocomments'] = '沒有評論';
$string['nocontent'] = '本頁尚無內容';
$string['nocontribs'] = '你在這wiki沒有貢獻';
$string['nocreatepermission'] = '需要有新增頁面的權限';
$string['noeditcommentpermission'] = '需要有編輯評論的權限';
$string['noeditpermission'] = '需要有編輯頁面的權限';
$string['nofrompages'] = '本頁沒有連結';
$string['nohistory'] = '本頁尚無歷史版次';
$string['nomanagecommentpermission'] = '需要管理評論的權限';
$string['nomanagewikipermission'] = '需要有管理wiki的權限';
$string['noorphanedpages'] = '沒有孤兒頁面';
$string['nooverridelockpermission'] = '需要有覆蓋鎖定的權限';
$string['norated'] = '本頁尚未被評分，你就搶頭香吧!';
$string['norating'] = '尚無評分';
$string['nosearchresults'] = '沒有結果';
$string['noteditblocks'] = '關閉編輯區塊';
$string['notingroup'] = '不在群體';
$string['notmigrated'] = '這wiki尚未被整併，請聯絡你的管理員。';
$string['notopages'] = '這一頁沒有連結到其他頁面';
$string['noupdatedpages'] = '沒有被更新的頁面';
$string['noviewcommentpermission'] = '需要有檢視評論的權限';
$string['noviewpagepermission'] = '需要有檢視頁面的權限';
$string['nwiki'] = 'NWiki';
$string['oldversion'] = '舊版次';
$string['orphaned'] = '孤兒頁面';
$string['orphaned_help'] = '清單上的所有頁面都沒有與其他頁面有鏈結';
$string['overridelocks'] = '解除頁面鎖定';
$string['overridinglocks'] = '解除頁面鎖定.....';
$string['page-mod-wiki-comments'] = 'Wiki共筆模組評論頁面';
$string['page-mod-wiki-history'] = 'wiki歷史版次頁面';
$string['page-mod-wiki-map'] = 'wiki地圖頁面';
$string['page-mod-wiki-view'] = '模組主要頁面';
$string['page-mod-wiki-x'] = '任何wiki模組頁面';
$string['pageexists'] = '這頁面已經存在。';
$string['pageindex'] = '頁面索引';
$string['pageindex_help'] = '這一wiki的頁面的樹狀結構';
$string['pageislocked'] = '有人正在編輯此頁面，請稍後再試!';
$string['pagelist'] = '頁面清單';
$string['pagelist_help'] = '頁面清單已依照英文字母排序';
$string['pagename'] = '頁面名稱';
$string['peerreview'] = '同儕審查';
$string['pluginadministration'] = 'Wiki共筆管理';
$string['pluginname'] = 'Wiki共筆';
$string['prettyprint'] = '友善列印';
$string['previewwarning'] = '預覽，變更尚未被儲存。';
$string['print'] = '列印';
$string['rated'] = '你對本頁面的評分為{$a}';
$string['rating'] = '評分';
$string['ratingmode'] = '評分模式';
$string['removeallwikitags'] = '移除所有wiki標籤';
$string['removepages'] = '移除頁面';
$string['reparsetimeout'] = '重新解析預設的逾時時間';
$string['repeatedsection'] = 'wiki錯誤：章節名稱不可重複"{$a}"';
$string['restore'] = '退回';
$string['restoreconfirm'] = '你確定你要退回到版次#{$a}？';
$string['restoreerror'] = '版次#{$a}無法退回';
$string['restorethis'] = '退回到這一版次';
$string['restoreversion'] = '退回到舊版次';
$string['restoring'] = '退回版次#{$a}';
$string['return'] = '上一步';
$string['save'] = '儲存';
$string['saving'] = '儲存wiki頁面';
$string['savingerror'] = '儲存錯誤';
$string['search:activity'] = 'wiki - 活動訊息';
$string['search:collaborative_page'] = 'Wiki - 合作撰寫頁面';
$string['searchcontent'] = '搜尋頁面內容';
$string['searchresult'] = '搜尋結果：';
$string['searchterms'] = '搜尋關鍵字';
$string['searchwikis'] = '搜尋wiki';
$string['special'] = '特殊';
$string['tableofcontents'] = '目錄';
$string['tagarea_wiki_pages'] = 'Wiki頁面';
$string['tagsdeleted'] = 'Wiki 標籤已刪除';
$string['teacherrating'] = '教師評分';
$string['timesrating'] = '這一頁面已經被評分 {$a->c}次，其平均數為 {$a->s}。';
$string['updatedpages'] = '更新的頁面';
$string['updatedpages_help'] = '最近更新的頁面';
$string['updatedwikipages'] = '更新的Wiki頁面';
$string['upload'] = '上傳和刪除';
$string['uploadactions'] = '動作';
$string['uploadfiletitle'] = '附件';
$string['uploadname'] = '檔案名稱';
$string['uploadtitle'] = '附加檔案';
$string['version'] = '版次';
$string['versionerror'] = '版次編號不存在';
$string['versionnum'] = '版次#{$a}';
$string['view'] = '檢視';
$string['viewallhistory'] = '檢視所有歷史版次';
$string['viewcurrent'] = '目前版次';
$string['viewperpage'] = '每一頁顯示{$a}個版次';
$string['viewversion'] = '檢視頁面版次#{$a}';
$string['wiki'] = 'Wiki共筆';
$string['wiki:addinstance'] = '新增 wiki';
$string['wiki:createpage'] = '新增 wiki 頁面';
$string['wiki:editcomment'] = '新增評論到頁面';
$string['wiki:editpage'] = '儲存 wiki 頁面';
$string['wiki:managecomment'] = '管理 wiki 評論';
$string['wiki:managefiles'] = '管理 wiki 檔案';
$string['wiki:managewiki'] = '管理 wiki 設定';
$string['wiki:overridelock'] = '覆蓋wiki的鎖定';
$string['wiki:viewcomment'] = '檢視頁面評論';
$string['wiki:viewpage'] = '檢視 wiki 頁面';
$string['wikiattachments'] = 'Wiki 附件';
$string['wikiboldtext'] = '粗體字';
$string['wikiexternalurl'] = '外部網址';
$string['wikifiles'] = 'Wiki 檔案';
$string['wikifiletable'] = '已上傳的檔案清單';
$string['wikiheader'] = '層級{$a}標題';
$string['wikihr'] = '水平線';
$string['wikiimage'] = '圖像';
$string['wikiinternalurl'] = '內部連結';
$string['wikiintro'] = '說明';
$string['wikiitalictext'] = '斜體字';
$string['wikilockingsettings'] = '鎖定和重新解析時間已過';
$string['wikimode'] = 'Wiki模式';
$string['wikimode_help'] = 'wiki有兩種模式，一種是"合作的wiki"，即每個人都可以編輯這一wiki的頁面。另一種是"個人的wiki"，即每一個人都有他們自己的wiki，且唯有他自己可以編輯(有點像部落格)。';
$string['wikimodecollaborative'] = 'Collaborative wiki';
$string['wikimodeindividual'] = '個別的 wiki';
$string['wikiname'] = '名稱';
$string['wikinowikitext'] = '沒有 wiki 文字';
$string['wikiorderedlist'] = '已排序的清單';
$string['wikipages'] = 'Wiki頁面';
$string['wikisettings'] = 'Wiki共筆設定';
$string['wikiunorderedlist'] = '未排序的清單';
$string['wrongversionlock'] = '當你在編輯此頁時，另一用戶已經編輯完這一頁，你的內容是過時的。';
$string['wrongversionsave'] = '當你在編輯此頁時，另一用戶已經建立了新版次，而你覆蓋了他的更改，請見此頁面的歷史版次。';
