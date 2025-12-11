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
 * Strings for component 'tool_mobile', language 'zh_tw', version '5.0'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['androidappid'] = 'Android 應用程式唯一辨識器';
$string['androidappid_desc'] = '這一設定最好保持預設狀態，除非你有一個自訂的 Android 應用程式';
$string['autologinkeygenerationlockout'] = '自動登入鍵的產生已被封鎖，因為在一小時內有太多請求。';
$string['autologinnotallowedtoadmins'] = '為了網站管理不允許使用自動登入';
$string['cachedef_plugininfo'] = '這裡存放著行動裝置外掛的清單';
$string['clickheretolaunchtheapp'] = '若應用程式沒有自動開啟，請點選這裡';
$string['configmobilecssurl'] = '一個CSS檔案用來自訂您的流用應用程式APP介面。';
$string['customlangstrings'] = '自訂的語言字串';
$string['customlangstrings_desc'] = '在這應用程式上顯示的文字和片語，可以在此自行設定。請以下列格式，以一新行，輸入每一個自訂語言字串：字串辨識器，自訂語言字串，語言代碼。個部分以直線符號隔開。
例如：
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
要了解字串辨識器的完整資料，請參看Moodle文件。';
$string['custommenuitems'] = '自訂的選單項目';
$string['custommenuitems_desc'] = '您可以透過在此指定的方式，將額外的項目加入這應用程式的主要選單中。以新的一行，並採用下列格式：項目文字說明，連結網址，連結的開啟方式(在應用程式瀏覽器，瀏覽器，或鑲入)和語言代碼(選用的，為了這項目給使用特定語言的用戶)。各部分之間以直線符號|隔開。

例如：
<Pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
我的成績 | https://someurl.xyz/local/mygrades/index.php | embedded | zh
</pre>
*使用 inappbrowser，若您要在瀏覽器中開啟連結，但不要離開這應用程式。
*使用 browser， 若你要在這設備的預設瀏覽器中開啟連結。
*使用 embedded，若您要在讓連結的內容顯示在這應用程式的新頁面上。';
$string['disabledfeatures'] = '關閉的功能';
$string['disabledfeatures_desc'] = '當用戶以行動裝置應用程式進入你的網站時，你想要關閉那些功能。請注意，列在這裡的某些功能可能已經透過其他網站設定加以關閉了。選出之後，你必需在應用程式上先登出，再登入，才可看到變更。';
$string['downloadcourse'] = '下載課程';
$string['enablesmartappbanners'] = '啟用智慧應用程式橫幅';
$string['enablesmartappbanners_desc'] = '當有人以行動裝置的瀏覽器訪問這一網站時，這將會顯示一橫幅來促銷Moodle行動裝置應用程式';
$string['forcedurlscheme'] = '若你只願意讓你自訂品牌的應用程式經由一瀏覽器視窗開啟，那就在此指定它的網址，否則這欄位就保持空白';
$string['forcedurlscheme_key'] = '網址格式';
$string['forcelogout'] = '強制登出';
$string['forcelogout_desc'] = '若啟用，應用程式上的"變更網站"會被"登出"所取代。這會導致用戶被完全地登出，下次他們想要存取這一網站時，必須重新輸入密碼。';
$string['getmoodleonyourmobile'] = '取得行動應用程式';
$string['httpsrequired'] = '需要安全連線(HTTPS)';
$string['invalidprivatetoken'] = '無效的私人憑證。憑證不可以是空白或經由GET參數取得';
$string['iosappid'] = 'iOS 應用程式的獨一辨識器';
$string['iosappid_desc'] = '這一設定最好保持預設狀態，除非你有一個自訂的 iOS 應用程式';
$string['loginintheapp'] = '經由這應用程式';
$string['logininthebrowser'] = '經由瀏覽器視窗(供SSO外掛程式)';
$string['loginintheembeddedbrowser'] = '經由鑲嵌的瀏覽器(供SSO外掛程式)';
$string['mainmenu'] = '主選單';
$string['mobileapp'] = '行動';
$string['mobileappearance'] = '行動裝置外觀';
$string['mobileappenabled'] = '這個網站有行動裝置APP可以使用.<br /><a href="{$a}">下載行動APP</a>.';
$string['mobileauthentication'] = '行動裝置認證';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = '行動裝置功能';
$string['mobilesettings'] = '行動裝置設定';
$string['pluginname'] = 'Moodle APP工具';
$string['pluginnotenabledorconfigured'] = '外掛程式沒有被啟用或被配置';
$string['readingthisemailgettheapp'] = '在電子郵件中閱讀？ <a href="{$a}">下載APP並在您的行動裝置上接收通知</a>。';
$string['remoteaddons'] = '遠端外掛';
$string['smartappbanners'] = '智慧應用程式橫幅';
$string['switchaccount'] = '切換帳戶';
$string['typeoflogin'] = '登入類型';
$string['typeoflogin_desc'] = '如果這網站採用SSO認證方式，那麼請選用經由瀏覽器視窗或經由鑲嵌的瀏覽器。一個鑲嵌的瀏覽器會提供較佳的用戶經驗，雖然它不是在所有的SSO外掛上都有效。如果使用SSO，那訪客自動登入將會被關閉。';
