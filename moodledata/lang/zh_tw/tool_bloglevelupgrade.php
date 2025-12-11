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
 * Strings for component 'tool_bloglevelupgrade', language 'zh_tw', version '5.0'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>這網站最近被升級到 Moodle 2.0.</p>
<p>部落格可見度在 2.0 已經被簡化，但你仍然使用舊的可見度類型的其中之一。</p>
<p>要保留這些以課程或群組設定可見度的部落格文章在你的網站上，你必須執行下列升級腳本，它將會在每一課程(其選課用戶有張貼部落格文章)建立一個特殊"部落格"型的討論區，並將拷貝這些以前張貼的部落格文章到這討論區。
</p>
<p>然後，部落格將在這網站層次完全關閉掉，在此過程中沒有部落格文章會被刪除掉。</p>
<p>若你要執行這腳本，請點選<a href="{$a->fixurl}">部落格可見度升級頁</a>.</p>';
$string['bloglevelupgradeinfo'] = '<p>部落格可見度在 2.0 已經被簡化，但你仍然使用舊的可見度類型的其中之一。</p>
<p>要保留這些以課程或群組設定可見度的部落格文章在你的網站上，你必須執行下列升級腳本，它將會在每一課程(其選課用戶有張貼部落格文章)建立一個特殊"部落格"型的討論區，並將拷貝這些以前張貼的部落格文章到這討論區。
</p>
<p>然後，部落格將在這網站層次完全關閉掉，在此過程中沒有部落格文章會被刪除掉。</p>
<p>若你要執行這腳本，請點選<a href="{$a->fixurl}">部落格可見度升級頁</a>。</p>';
$string['bloglevelupgradeprogress'] = '轉換進度：已經檢視過{$a->userscount} 個用戶，有 {$a->blogcount} 篇文章被轉換。';
$string['pluginname'] = '部落格可見度升級';
