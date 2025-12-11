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
 * Strings for component 'qtype_calculatedmulti', language 'zh_tw', version '5.0'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = '答案的選項';
$string['answeroptions_help'] = '建議的答案計算公式是 ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = '選擇式計算題';
$string['pluginname_help'] = '計算的選擇題就像選擇題，其選項是數值經過公式計算的結果

例如，如果這試題是“長度{l}和寬度{w}的矩形面積為多少？” 那選項之一就要是 {= {l}*{w}} (其中*表示乘號)，錯誤的選項可以是{= {l}-{w}}或{= {l}/{w}}或{= {l}+{w}}。';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = '新增一選擇式計算題';
$string['pluginnameediting'] = '編輯一選擇式計算題';
$string['pluginnamesummary'] = '選擇式計算題就像選擇題，其選項是數值經過公式計算的結果。
而這些數值是在做測驗時，是由一資料集合中隨機挑選出來。';
