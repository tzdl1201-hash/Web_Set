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
 * Strings for component 'qformat_wordtable', language 'zh_tw', version '5.0'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = '無法開啟臨時檔案<b>{$a}</b>';
$string['cannotreadzippedfile'] = '無法閱讀壓縮檔案<b>{$a}</b>';
$string['cannotwritetotempfile'] = '無法寫入臨時檔案<b>{$a}</b>';
$string['cloze_distractor_column_label'] = '誘答';
$string['cloze_feedback_column_label'] = '誘答的回饋';
$string['cloze_instructions'] = '使用 <strong>粗體字</strong>作為下拉選單的項目，而<em>斜體字</em>作為文字欄位的項目。';
$string['cloze_mcformat_label'] = '方向（D =下拉選單；V =垂直，H =水平單選按鈕）';
$string['description_instructions'] = '這實際上不是一個試題，它只是用來在測驗中加上作答說明、評分規程或其他閱讀材料的方法。它類似標籤可以用來添加內容到課程頁面上。';
$string['docnotsupported'] = '不支援 Word 2003格式的檔案：<b>{$a}</b>，請改用Moodle2Word 3.x 。';
$string['essay_instructions'] = '允許以幾個句子或幾段文字作為答案。這必須在考試後以手工計分。';
$string['htmldocnotsupported'] = '不正確的Word格式：請使用<i>檔案>另存檔案...</i> 來儲存<b>{$a}</b>來儲存成原有的Word 2010 (.docx)格式，然後再匯入一次。';
$string['htmlnotsupported'] = '不支援HTML格式的檔案：<b>{$a}</b>';
$string['interface_language_mismatch'] = '沒有試題被匯入，因為在這Word檔案上的標籤所用的語言，與你當前的Moodle介面語言不相符。';
$string['multichoice_instructions'] = '允許從一個事先界定的清單中選擇單一或多個選項。';
$string['noquestions'] = '沒有試題可以匯出';
$string['pluginname'] = '微軟的Word 2010表格格式（wordtable）';
$string['pluginname_help'] = '這是用來將 Microsoft Word 2010檔案轉換成Moodle試題XML格式，以便匯入題庫。而且它可以把Moodle試題XML轉換成適合在Microsoft Word上編輯的格式。';
$string['pluginname_link'] = 'qformat/wordtable';
$string['preview_question_not_found'] = '沒有找到可預覽的試題，名稱/課程編號：{$a}';
$string['stylesheetunavailable'] = 'XSLT 的樣式表<b>{$a}</b> 無法使用';
$string['transformationfailed'] = 'XSLT 轉換失敗(<b>{$a} </b>)';
$string['truefalse_instructions'] = '把正確答案設為\'100\'';
$string['unsupported_instructions'] = '不支援正在匯入的題型';
$string['word_about_moodle2word'] = '關於Moodle2Word';
$string['word_about_moodle2word_screentip'] = '關於 Moodle2Word 的 Word 樣板和 Moodle 外掛程式';
$string['word_addcategory_supertip'] = '類目名稱使用標題1格式';
$string['word_currentquestion'] = '(目前試題)';
$string['word_multiple_answer'] = '複選題';
$string['word_new_question_file'] = '新試題檔案';
$string['word_new_question_file_screentip'] = '試題必須以 Word 2010(.docx)格式儲存';
$string['word_new_question_file_supertip'] = '每一 Word 檔可能包含多個類目';
$string['word_setunset_assessment_view'] = '設定/取消設定 測驗檢視';
$string['word_showhide_assessment_screentip'] = '顯示試題後設資料來進行編輯，隱藏後設資料來檢視可列印的測驗';
$string['word_showhide_assessment_supertip'] = '顯示或隱藏文字';
$string['word_showhide_assessment_view'] = '顯示/隱藏 測驗檢視';
$string['word_shuffle_screentip'] = '隨機排列 選擇題/是非題/配合題 的選項';
$string['word_shuffle_supertip'] = '少許的隨機排列會比1好';
$string['word_view'] = '檢視';
$string['wordtable'] = '微軟 Word 2010 表格格式 (wordtable)';
$string['wordtable_help'] = '這是一個前端工具，用來把 Microsoft Word 2010 檔案轉換成為Moodle Question XML格式，以便匯入Moodle的測驗模組中。它也可將Moodle Question XML格式轉換成一個增強的XHTML格式，以便匯出供Microsoft Word編輯。';
$string['xmlnotsupported'] = '不支援XML格式的檔案：<b>{$a}</b>';
$string['xsltunavailable'] = '你需要在 PHP 安裝 XSLT 程式庫，才可以儲存這一Word檔案';
