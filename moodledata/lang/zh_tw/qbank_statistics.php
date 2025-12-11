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
 * Strings for component 'qbank_statistics', language 'zh_tw', version '5.0'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = '需要檢查嗎?';
$string['discrimination_index_help'] = '根據試題統計資料，此試題可能需要檢查。例如，若學生在整體測驗中表現良好，但在此試題得分偏低，或相反情況，可能表示試題有問題，例如正確答案設定錯誤。不過統計資料並非絕對，僅作為是否需要檢查的參考。';
$string['discriminative_efficiency'] = '判別效益';
$string['discriminative_efficiency_help'] = '判別效益是用來估計試題評量學生表現能力的統計指標，值越高表示試題評量越有效。若指標特別低，可能表示試題存在問題。若試題過於簡單或困難（易讀度接近 0% 或 100%）也可能導致此指標偏低。';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = '易度指數';
$string['facility_index_help'] = '易度指數表示所有版本的試題在所有測驗中的平均得分（百分比）。數值越高通常代表試題越簡單。';
$string['likely'] = '可能';
$string['na'] = '不適用';
$string['pluginname'] = '試題統計';
$string['privacy:metadata'] = '試題統計題庫外掛不會儲存任何個人資料。';
$string['unlikely'] = '不太可能';
$string['verylikely'] = '很可能';
