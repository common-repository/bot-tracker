<?php
//----------------------------------------------------------------------
//  CrawlTrack 2.3.0
//----------------------------------------------------------------------
// Crawler Tracker for website
//----------------------------------------------------------------------
// Author: Jean-Denis Brun
//----------------------------------------------------------------------
// Website: www.crawltrack.fr
//----------------------------------------------------------------------
// That script is distributed under GNU GPL license
//----------------------------------------------------------------------
// file: englishiso.php
//----------------------------------------------------------------------
//installation
$language['install']="Installation";
$language['welcome_install'] ="Welcome on CrawlTrack, installation in three steps is easy .";
$language['menu_install_1']="1) Enter database connection datas.";
$language['menu_install_2']="2) Set-up websites.";
$language['menu_install_3']="3) Administrator account set-up.";
$language['go_install']="Install";
$language['step1_install'] ="Please enter in the following form information regarding database connection. Once the form validate, the tables and the connections files will be created.";
$language['step1_install_login_mysql']="User MySQL";
$language['step1_install_password_mysql']="Password MySQL";
$language['step1_install_host_mysql']="Host MySQL";
$language['step1_install_database_mysql']="Database MySQL";
$language['step1_install_ok'] ="Connection files OK.";
$language['step1_install_ok2'] ="Tables creation OK.";
$language['step1_install_no_ok'] ="Information are missing to create the tables and the files, please check the form content and revalidate after correction.";
$language['step1_install_no_ok2'] ="The files hasn't been created, check if the folder is CHMOD 777.";
$language['step1_install_no_ok3'] ="A problem appear during table creation, try again.";
$language['back_to_form'] ="Back to the form";
$language['retry'] ="Try again";
$language['step2_install_no_ok']="Connection to the database is not possible, please, check the connection datas.";
$language['step3_install_no_ok']="Database selection is not possible, please, check the connection datas.";
$language['step4_install']="Go";
//site creation
//modified in 1.5.0
$language['set_up_site']="Please enter below the website name and url, the name is the one that will be used in CrawlTrack. The url should be like this: www.example.com (without http:// at the beginning and / at the end)."; 
$language['site_name']="Website name:";
//modified in 2.0.0
$language['site_no_ok']="You have to enter a website name and url.";
$language['site_ok']="The website has been add to the database.";
$language['new_site']="Add a new website";
//tag creation
$language['tag']="Tag to insert in your pages";
//modified in 2.3.0
$language['create_tag']="<p><b>How to use that CrawlTrack tag:</b><br><ul id=\"listtag\">
<li>the CrawlTrack tag is a php file, you have to insert it in a .php page.</li>
<li>the CrawlTrack tag have to be between &#60;?php and ?&#62 tags, if there is not such tags on your page, you have to add them before and after the CrawlTrack tag.</li>
<li>if your site is not using .php pages, see documentation on www.crawltrack.fr.</li>
<li>the best for anti-hacking protection is to have the CrawlTrack tag being the first thing in your page just after &#60;?php.</li>
<li>if you are using a CMS or a forum script, have a look on www.crawltrack.fr/doccms.php to find the best solution to place the tag.</li>
<li>the CrawlTrack tag will give absolutly no output  visible on your pages (even in the source code).</li>
<li>if to support CrawlTrack you would like to see the logo with a link to www.crawltrack.fr, you will find below logo models that you can put at any place on your pages.</li>
<li>for any other questions, see the documentation on www.crawltrack.fr or use the support forum on the same site.</li></ul></p><br>" ;
$language['site_name2']="Website name";
//modified in 1.5.0
$language['local_tag']="Standard tag to be used for a site hosted on the same server than Crawltrack.";
$language['non_local_tag']="Tag to be used if the site is hosted on a different server than Crawltrack, in that case you need to have the fsockopen and fputs functions activated.";
//login set_up
$language['admin_creation']="Administrator account set-up";
$language['admin_setup']="Please enter below the administrator login and password.";
$language['user_creation']="User account set-up";
$language['user_setup']="Please enter below the user login and password.";
$language['user_site_creation']="User-website account set-up";
$language['user_site_setup']="Please enter below the user-website login and password.";
$language['admin_rights']="Administrator has access to all website stats and set-up";
$language['login']="Login";
$language['password']="Password";
$language['valid_password']="Enter a second time the password.";
$language['login_no_ok']="Datas are missing or the passwords are different, please check the form content and revalidate after correction.";
$language['login_ok']="Account is set-up.";
$language['login_no_ok2']="A problem appear during account set-up, try again.";
$language['login_user']="Create a user account";
$language['login_user_what']="User has access to all website stats";
$language['login_user_site']="Create a user-website account";
$language['login_user_site_what']="User-website has access to one website stats";
//modified in 1.5.0
$language['login_finish']="Installation is now finish. Don't forget to put the tag (available on tools page) on your site pages.";
//access
$language['restrited_access']="Restricted access.";
$language['enter_login']="Please, enter below your login and password.";
//display
$language['crawler_name']="Crawlers";
$language['nbr_visits']="Visits";
$language['nbr_pages']="Pages viewed";
$language['date_visits']="Last visit";
$language['display_period']="Studied period :";
$language['today']="Day";
$language['days']="Week";
//modified in 1.5.0
$language['month']="Month";
$language['one_year']="Year";
$language['no_visit']="There is no visit.";
$language['page']="Pages";
//modified in 1.5.0
$language['admin']="Tools";
$language['nbr_tot_visits']="Total visits";
$language['nbr_tot_pages']="Total pages viewed";
$language['nbr_tot_crawlers']="Nbre of crawlers";
$language['visit_per-crawler']="Visits details";
$language['100_visit_per-crawler']="Visits details (display limited to 100 lines).";
$language['user_agent']="User agent";
$language['Origin']="User";
$language['help']="Help";
//search
$language['search']="Search";
$language['search2']="Search";
$language['search_crawler']="a crawler";
$language['search_user_agent']="a user-agent";
$language['search_page']="a page";
$language['search_user']="a crawler user";
$language['go_search']="Search";
$language['result_crawler']="Here are the crawlers you are looking for.";
$language['result_ua']="Here are the user-agents you are looking for.";
$language['result_page']="Here are the pages you are looking for.";
$language['result_user']="Here are the crawler users you are looking for.";
$language['result_user_crawler']="Here are the crawlers of that user.";
$language['result_user_1']="User:&nbsp;";
$language['result_crawler_1']="Search keyword:&nbsp;";
$language['no_answer']="There is no answer.";
$language['to_many_answer']="There is more than 100 answers (display limited to 100 lines).";
//admin
$language['user_create']="Create a new user account.";
$language['user_site_create']="Create a new user-website account.";
$language['new_site']="Add a website.";
$language['see_tag']="Display tags to insert.";
$language['new_crawler']="Add a new crawler";
$language['crawler_creation']="Please complete the following form with the new crawler datas."; 
$language['crawler_name2']="Crawler name:";
$language['crawler_user_agent']="User agent:";
$language['crawler_user']="Crawler user:";
$language['crawler_url']="User url (like this: http://www.example.com)";
$language['crawler_url2']="User url:";
$language['crawler_ip']="IP:";
$language['crawler_no_ok']="Datas are missing, please check the form content and revalidate after correction.";
$language['exist']="That crawler is already in the database";
$language['exist_data']="Here are the datas concerning it in the database:";
$language['crawler_no_ok2']="A problem appear during crawler creation, try again.";
$language['crawler_ok']="The crawler has been added to the database.";
$language['user_suppress']="Suppress a user or a user-website account.";
$language['user_list']="List of users and user-websites logins";
$language['suppress_user']="Suppress that account";
$language['user_suppress_validation']="Are you sur that you want to suppress that account?";
$language['yes']="Yes";
$language['no']="No";
$language['user_suppress_ok']="The account has been successfully deleted.";
$language['user_suppress_no_ok']="A problem appear during account suppression, try again.";
$language['site_suppress']="Suppress a website.";
$language['site_list']="Websites list";
$language['suppress_site']="Suppress that website";
$language['site_suppress_validation']="Are you sur that you want to suppress that website?";
$language['site_suppress_ok']="The website has been successfully deleted.";
$language['site_suppress_no_ok']="A problem appear during website suppression, try again.";
$language['crawler_suppress']="Suppress a crawler.";
$language['crawler_list']="Crawler list";
$language['suppress_crawler']="Suppress that crawler";
$language['crawler_suppress_validation']="Are you sur that you want to suppress that crawler?";
$language['crawler_suppress_ok']="The crawler has been successfully deleted.";
$language['crawler_suppress_no_ok']="A problem appear during crawler suppression, try again.";
$language['crawler_test_creation']="Create a test crawler.";
$language['crawler_test_suppress']="Suppress the test crawler.";
$language['crawler_test_text']="Once the test crawler created, visit your site with the computer and the browser used to create the crawler."; 
$language['crawler_test_text2']="If everything is OK, your visit will be display in CrawlTrack as a Test-Crawltrack crawler visit. Don't forget after that to suppress the test crawler.";
$language['crawler_test_no_exist']="The test crawler didn't exist in the database.";
$language['exist_site']="That site is already in the database";
$language['exist_login']="That login is already in the database";
//1.2.0
$language['update_title']="Crawlers list update.";
$language['update_crawler']="Update the crawlers list.";
$language['list_up_to_date']="There is no updated list available actually.";
$language['update_ok']="Update successfull.";
$language['crawler_add']="crawlers have been added to the database";
$language['no_access']="Online update is not available.<br><br>To update, click on the link below to download the last crawlers list, upload the crawlerlist.php file in your CrawlTrack include folder and restart the update procedure.";
$language['no_access2']="Link with www.CrawlTrack.info failed, please try again later.";
$language['download_update']="If you have already upload on your site the new crawlers list, click on the button below to update your database.";
$language['download']="Download the crawlers list.";
$language['your_list']="The list you are using is:";
$language['crawltrack_list']="The list available on www.Crawltrack.fr is:";
$language['no_update']="Do not update the crawlers list.";
$language['no_crawler_list']="The file crawlerlist.php didn't exist in your include folder.";
//1.3.0
$language['use_user_agent']="Crawler detection is made by user agent or by IP. You have to complete one of these two informations.";
$language['user_agent_or_ip']="User agent or IP";
$language['crawler_ip']="IP:";
$language['table_mod_ok']="Crawlt_crawler table update OK.";
$language['files_mod_ok']="Configconnect.php and crawltrack.php files update OK.";
$language['update_crawltrack_ok']="CrawlTrack update is finish, you are now using version:";
$language['table_mod_no_ok']="Crawlt_crawler table update failed.";
$language['files_mod_no_ok']="A problem appear during configconnect.php and crawltrack.php update.";
$language['update_crawltrack_no_ok']="A problem appear during CrawlTrack update.";
$language['no_logo']="No logo.";
//modified in 1.5.0
$language['data_suppress_ok']="The datas have been successfully archived.";
$language['data_suppress_no_ok']="A problem appear during datas archiving, try again.";
$language['data_suppress_validation']="Are you sur you want to archive all &nbsp;";
$language['data_suppress']="Archive the oldest datas off the visits table.";
$language['data_suppress2']="Archive all";
$language['one_year_data']="datas more than one year old";
$language['six_months_data']="datas more than six months old";
$language['one_month_data']="datas more than one month old";
$language['oldest_data']="The oldest data dates from the &nbsp;";
$language['no_data']="There is no data in the visits table.";
//1.4.0
$language['time_set_up']="Time shift";
$language['server_time']="Server date and hour =";
$language['local_time']="Local date and hour=";
$language['time_difference']="Difference in hours between the server time and the local time=";
$language['time_server']="You use actually the server time, would you like to use the local time to display the datas ?";
$language['time_local']="You use actually the local time, would you like to use the server time to display the datas  ?";
$language['decal_ok']="CrawlTrack, will use now the local time; you can go back to server time at any time";
$language['nodecal_ok']="CrawlTrack, will use now the server time; you can go back to local time at any time";
$language['need_javascript']="You have to activate javascript to use this function.";
//1.5.0 
$language['origin']="Source";
$language['crawler_ip_used']="IP used";
$language['crawler_country']="Country of origine";
$language['other']="Others";
$language['pc-page-view']="Part of the site visited";
$language['pc-page-noview']="Part of the site not visited";
$language['print']="Print";
$language['ip_suppress_ok']="The visits have been successfully deleted.";
$language['ip_suppress_no_ok']="A problem appear during visits suppression, try again.";
$language['no_ip']="There is no IP record for that period.";
$language['ip_suppress_validation']="That IP has been used by different crawlers, so there is a doubt concerning the origin of these visits. Would you like to suppress from the visits table the visits coming from that IP?";
$language['ip_suppress_validation2']="Are you sur that you want to suppress the visits coming from that IP?";
$language['ip_suppress_validation3']="If you want to forbidden the access to your site from that IP, add the folowing line to your .htaccess file at your site root:";
$language['ip_suppress']="Suppress an IP";
$language['diff-day-before']="compare to the day before";
$language['daily-stats']="Daily statistics";
$language['top-crawler']="More active crawler:";
$language['stat-access']="See details statistics:";
$language['stat-crawltrack']="These datas have been collected with:";
$language['nbr-pages-top-crawler']="he visits";
$language['of-site']="of the site";
$language['mail']="Receive a daily summary by Email.";
$language['set_up_mail']="If you want to received a daily summary of your statistics by Email, enter below your Email address.";
$language['email-address']="Email address:";
$language['address_no_ok']="The address you enter is not correct.";
$language['set_up_mail2']="The daily summary mail is actually actived. Would you like to stopped it ?";
$language['update']="The modification is done.";
$language['search_ip']="Track an IP address";
$language['ip']="IP address";
$language['maxmind']="That track has been done using GeoLite database create by Maxmind available at the following address:";
$language['ip_no_ok']="The IP address you enter is not correct.";
$language['public']="Give free access to the statistics.";
$language['public-set-up2']="The acces to your statistics is actually free, would you like to protect it by a password?";
$language['public-set-up']="The acces to your statistics is protect by a password, would you like to make it free?";
$language['public2']="Only the tools page will remain protected";
$language['admin_protected']="The access to the tools page is protected.";
$language['no_data_to_suppress']="There is no data to archive in the requested period.";
$language['data_suppress3']="The datas archiving reduce the size of the database, but the corresponding datas are no more
available for the statistics display. Only a summary table of these datas will stay available (page Crawlers section Archives).
 So the best is to archive datas only if you really need to reduce the size of the database; details of the archives datas is irremediably loose .";
$language['archive']="Archives";
$language['month2']="Month";
$language['top_visits']="Top 3 in number of visits";
$language['top_pages']="Top 3 in number of pages viewed";
$language['no-archive']="There is no archived datas.";
$language['use-archive']="As a part of the datas has been archived, these values are not complete.";
$language['url_update']="Update the site data";
$language['set_up_url']="Complete the following table with the sites url like: www.example.com (without http:// at the beginning and / at the end)."; 
$language['site_url']="Site url:";
//1.6.0
$language['page_cache']="Last calculation: ";
//1.7.0
$language['step1_install_no_ok4']="A problem appear during IP table filling, this could happen on some hosting as this table count more than 78 000 rows. You can either try again or continue without that table. In that case you will not have the display of the crawlers country of origin. On the 'Troubleshooting' page on the documention available on www.crawltrack.fr, you will find a procedure to fill manually that table.";
$language['show_all']="Show all lines";
$language['from']="from";
$language['to']="to";
$language['firstweekday-title']="Choice of the first day of the week";
$language['firstweekday-set-up2']="The first day of the week is actually the Monday, would you like to change for Sunday?";
$language['firstweekday-set-up']="The first day of the week is actually the Sunday, would you like to change for Monday?";
$language['01']="January";
$language['02']="February";
$language['03']="March";
$language['04']="April";
$language['05']="May";
$language['06']="June";
$language['07']="July";
$language['08']="August";
$language['09']="September";
$language['10']="October";
$language['11']="November";
$language['12']="December";
$language['day0']="Monday";
$language['day1']="Tuesday";
$language['day2']="Wednesday";
$language['day3']="Thursday";
$language['day4']="Friday";
$language['day5']="Saturday";
$language['day6']="Sunday";
//2.0.0
$language['ask']="Ask";
$language['google']="Google";
$language['msn']="Live Search";
$language['yahoo']="Yahoo";
$language['delicious']="Del.icio.us";
$language['index']="Indexation";
$language['keyword']="Keywords";
$language['entry-page']="Entry page";
$language['searchengine']="Search engines";
$language['social-bookmark']="Social bookmarks";
$language['tag']="Tags";
$language['nbr_tot_bookmark']="Bookmarks";
$language['nbr_tot_link']="Backlinks";
$language['nbr_tot_pages_index']="Indexed pages";
$language['nbr_visits_crawler']="Number of crawler visits";
$language['nbr_tot_visit_seo']="Visitors send to the site";
$language['100_lines']="Display limited to 100 lines.";
$language['8days']="Since 8 days";
$language['close']="Close";
$language['date']="Date";
$language['modif_site']="Modified the name or the url of one site.";
$language['site_url2']="Site url";
$language['modif_site2']="Modified that site datas.";
$language['no-info-day-before']="No information for the previous day";
$language['data_human_suppress_ok']="The datas have been successfully deleted.";
$language['data_human_suppress_no_ok']="A problem appear during datas suppression, try again.";
$language['data_human_suppress_validation']="Are you sur you want to suppress all &nbsp;";
$language['data_human_suppress']="Delete the oldest datas in the human visits table. (keywords and entry pages).";
$language['data_human_suppress2']="Suppress all";
$language['one_year_human_data']="datas more than one year old";
$language['six_months_human_data']="datas more than six months old";
$language['one_month_human_data']="datas more than one month old";
$language['data_human_suppress3']="The datas suppression reduce the size of the database, but the corresponding datas are no more
available for the statistics display. So the best is to suppress datas only if you really need to reduce the size of the database; suppress datas are irremediably loose .";
$language['no_data_human_to_suppress']="There is no data in the human visits table.";
$language['choose_language']="Choose your language.";
//2.1.0
$language['since_beginning']="Everything";
//2.2.0
$language['admin_database']="See the database size";
$language['table_name']="Table name";
$language['nbr_of_data']="Number of data";
$language['table_size']="Table size";
$language['database_size']="Database size";
$language['total']="Total:";
$language['mailsubject']="CrawlTrack daily summary";
$language['yesterday']="Yesterday";
$language['beginmonth']="Since the beginning of the month";
$language['evolution']="Change compare to";
$language['lastthreemonths']="3 last monthes";
$language['set_up_mail3']="You are actually using the following address:";
$language['set_up_mail4']="Add an addresse";
$language['set_up_mail5']="Enter below the new Email addresse.";
$language['set_up_mail6']="Delete one or more Email address";
$language['set_up_mail7']="Delete the selected address";
$language['chmod_no_ok']="The crawltrack.php file update has failed, CHMOD 777 your CrawlTrack folder and restart the update. Don't forget at the end of the update process to go back to CHMOD 711 for security reasons.";
$language['display_parameters']="Display parameters";
$language['ordertype']="Order:";
$language['orderbydate']="per date";
$language['orderbypagesview']="per number of pages viewed";
$language['orderbyvisites']="per number of visits";
$language['orderbyname']="per alphabetic order";
$language['numberrowdisplay']="Number of rows displayed:";
//2.2.1
$language['french']="French";
$language['english']="English";
$language['german']="German";
$language['spanish']="Spanish";
$language['turkish']="Turkish";
$language['dutch']="Dutch";
//2.3.0
$language['hacking']="Attacks";
$language['hacking2']="Hacking attempts";
$language['hacking3']="Code injection";
$language['hacking4']="SQL injection";
$language['no_hacking']="There is no attempts";
$language['attack_detail']="Attacks details";
$language['attack']="Parameters used for code injection attempts";
$language['attack_sql']="Parameters used for sql injection attempts";
$language['bad_site']="File/script the hacker attempted to inject";
$language['bad_sql']="SQL query the hacker attempted to inject";
$language['bad_url']="Url requested";
$language['hacker']="Attackers";
$language['date_hacking']="Time";
$language['unknown']="Unknown";
$language['danger']="You could be at risk if you run one of these scripts";
$language['attack_number_display']="Attacks details (display limited to %d attackers).";
$language['update_attack']="Update the attacks list.";
$language['no_update_attack']="Do not update the attacks list.";
$language['update_title_attack']="Attacks list update.";
$language['attack_type']="Type of attack";
$language['parameter']="Parameter";
$language['script']="Script";
$language['attack_add']="attacks have been added to the database";
$language['no_access_attack']="Online update is not available.<br><br>To update, click on the link below to download the last attacks list, upload the attacklist.php file in your CrawlTrack include folder and restart the update procedure.";
$language['download_update_attack']="If you have already upload on your site the new attacks list, click on the button below to update your database.";
$language['download_attack']="Download the attacks list.";
$language['no_attack_list']="The file attacklist.php didn't exist in your include folder.";
$language['change_password']="Change your password";
$language['old_password']="Actual password";
$language['new_password']="New password";
$language['valid_new_password']="Enter a second time the new password.";
$language['goodsite_update']="Update trust sites list";
$language['goodsite_list']="Trust sites";
$language['goodsite_list2']="A link to these sites present in an url is not count as an attack";
$language['goodsite_list3']="Actual list of trust sites";
$language['suppress_goodsite']="Suppress that site of the list.";
$language['goodsite_suppress_validation']="Are you sure that you want to suppress that site?";
$language['good_site']="Trust site";
$language['goodsite_suppress_ok']="The site has been successfully deleted.";
$language['goodsite_suppress_no_ok']="A problem appear during the site suppression, try again.";
$language['list_empty']="There is no trust site yet";
$language['add_goodsite']="Add a new trust site in the list";
$language['goodsite_no_ok']="You have to enter a website url.";
$language['attack-blocked']="All these attacks have been blocked by CrawlTrack as requested";
$language['attack-no-blocked']="Be carefull your CrawlTrack is not set-up to block attacks (see tools page)";
$language['attack_parameters']="Hacking protection parameters";
$language['attack_action']="Action when an attack is detected";
$language['attack_block']="Record it and block it";
$language['attack_no_block']="Just record it";
$language['attack_block_alert']="Before to block attacks, which is the best for your site safety, have a look on the documentation (on www.crawltrack.fr) to 
be sure that they will be no problem with your normal visitors.";
$language['crawltrack-backlink']="CrawlTrack is free, if you like it and want to share it why don't put a backlink on your page?<br>If you choose
the nologo option, this link will be invisible on your page. You will find below two options per logo, one for a php page and the second one for an html page. You can put that link in any position on your page.";
$language['session_id_parameters']="Session id treatment";
$language['remove_session_id']="Remove session id on pages url";
$language['session_id_alert']="To remove the session id on pages url will avoid to have multiple entry in the pages table if you use a script which had a session id in the url.";
$language['session_id_used']="Session id used";
//country code
$country = array(

    "ad" => "Andorra",
    "ae" => "United Arab Emirates",
    "af" => "Afghanistan",
    "ag" => "Antigua and Barbuda",
    "ai" => "Anguilla",
    "al" => "Albania",
    "am" => "Armenia",
    "an" => "Netherlands Antilles",
    "ao" => "Angola",
    "aq" => "Antarctica",
    "ar" => "Argentina",
    "as" => "American Samoa",
    "at" => "Austria",
    "au" => "Australia",
    "aw" => "Aruba",
    "az" => "Azerbaijan",
    "ba" => "Bosnia and Herzegovina",
    "bb" => "Barbados",
    "bd" => "Bangladesh",
    "be" => "Belgium",
    "bf" => "Burkina Faso",
    "bg" => "Bulgaria",
    "bh" => "Bahrain",
    "bi" => "Burundi",
    "bj" => "Benin",
    "bm" => "Bermuda",
    "bn" => "Bruneo",
    "bo" => "Bolivia",
    "br" => "Brazil",
    "bs" => "Bahamas",
    "bt" => "Bhutan",
    "bw" => "Botswana",
    "by" => "Belarus",
    "bz" => "Belize",
    "ca" => "Canada",
    "cd" => "The Democratic Republic of the Congo",
    "cf" => "Central African Republic",
    "cg" => "Congo",
    "ch" => "Switzerland",
    "ci" => "Cote D'Ivoire",
    "ck" => "Cook Islands",
    "cl" => "Chile",
    "cm" => "Cameroon",
    "cn" => "China",
    "co" => "Colombia",
    "cr" => "Costa Rica",
    "cs" => "Serbia and Montenegro",
    "cu" => "Cuba",
    "cv" => "Cape Verde",
    "cx" => "Christmas Island",
    "cy" => "Cyprus",
    "cz" => "Czech Republic",
    "de" => "Germany",
    "dj" => "Djibouti",
    "dk" => "Denmark",
    "dm" => "Dominica",
    "do" => "Dominican Republic",
    "dz" => "Algeria",
    "ec" => "Ecuador",
    "ee" => "Estonia",
    "eg" => "Egypt",
    "er" => "Eritrea",
    "es" => "Spain",
    "et" => "Ethiopia",
    "fi" => "Finland",
    "fj" => "Fiji",
    "fk" => "Falkland Islands (Malvinas)",
    "fm" => "Federated States of Micronesia ",
    "fo" => "Faroe Islands",
    "fr" => "France",
    "ga" => "Gabon",
    "gb" => "Great Britain",
    "gd" => "Grenada",
    "ge" => "Georgia",
    "gf" => "French Guyana",
    "gh" => "Ghana",
    "gi" => "Gibraltar",
    "gl" => "Greenland",
    "gm" => "Gambia",
    "gn" => "Guinea",
    "gp" => "Guadeloupe",
    "gq" => "Equatorial Guinea",
    "gr" => "Greece",
    "gs" => "South Georgia and the South Sandwich Islands",
    "gt" => "Guatemala",
    "gu" => "Guam",
    "gw" => "Guinea-Bissau",
    "gy" => "Guyana",
    "hk" => "Hong Kong",
    "hn" => "Honduras",
    "hr" => "Croatia",
    "ht" => "Haiti",
    "hu" => "Hungary",
    "id" => "Indonesia",
    "ie" => "Ireland",
    "il" => "Israel",
    "in" => "India",
    "io" => "British Indian Ocean Territory",
    "iq" => "Iraq",
    "ir" => "Iran",
    "is" => "Iceland",
    "it" => "Italy",
    "jm" => "Jamaica",
    "jo" => "Jordan",
    "jp" => "Japan",
    "ke" => "Kenya",
    "kg" => "Kyrgyzstan",
    "kh" => "Cambodia",
    "ki" => "Kiribati",
    "km" => "Comoros",
    "kn" => "Saint Kitts and Nevis",
    "kr" => "Republic of Korea",
    "kw" => "Kuwait",
    "ky" => "Cayman Islands",
    "kz" => "Kazakhstan",
    "la" => "Laos",
    "lb" => "Lebanon",
    "lc" => "Saint Lucia",
    "li" => "Liechtenstein",
    "lk" => "Sri Lanka",
    "lr" => "Liberia",
    "ls" => "Lesotho",
    "lt" => "Lithuania",
    "lu" => "Luxembourg",
    "lv" => "Latvia",
    "ly" => "Libya",
    "ma" => "Morocco",
    "mc" => "Monaco",
    "md" => "Moldova",
    "mg" => "Madagascar",
    "mh" => "Marshall Islands",
    "mk" => "Macedonia",
    "ml" => "Mali",
    "mm" => "Myanmar",
    "mn" => "Mongolia",
    "mo" => "Macau",
    "mp" => "Northern Mariana Islands",
    "mq" => "Martinique",
    "mr" => "Mauritania",
    "ms" => "Montserrat",
    "mt" => "Malta",
    "mu" => "Mauritius",
    "mv" => "Maldives",
    "mw" => "Malawi",
    "mx" => "Mexico",
    "my" => "Malaysia",
    "mz" => "Mozambique",
    "na" => "Namibia",
    "nc" => "New Caledonia",
    "ne" => "Niger",
    "nf" => "Norfolk Island",
    "ng" => "Nigeria",
    "ni" => "Nicaragua",
    "nl" => "Netherlands",
    "no" => "Norway",
    "np" => "Nepal",
    "nr" => "Nauru",
    "nu" => "Niue",
    "nz" => "New Zealand",
    "om" => "Oman",
    "pa" => "Panama",
    "pe" => "Peru",
    "pf" => "French Polynesia",
    "pg" => "Papua New Guinea",
    "ph" => "Philippines",
    "pk" => "Pakistan",
    "pl" => "Poland",
    "pr" => "Puerto Rico",
    "ps" => "Palestinian territory",
    "pt" => "Portugal",
    "pw" => "Palau",
    "py" => "Paraguay",
    "qa" => "Qatar",
    "re" => "Reunion Island",
    "ro" => "Romania",
    "ru" => "Russian Federation",
    "rs" => "Russia",
    "rw" => "Rwanda",
    "sa" => "Saudi Arabia",
    "sb" => "Solomon Islands",
    "sc" => "Seychelles",
    "sd" => "Sudan",
    "se" => "Sweden",
    "sg" => "Singapore",
    "sh" => "Saint Helena",
    "si" => "Slovenia",
    "sj" => "Svalbard",
    "sk" => "Slovakia",
    "sl" => "Sierra Leone",
    "sm" => "San Marino",
    "sn" => "Senegal",
    "so" => "Somalia",
    "sr" => "Suriname",
    "st" => "Sao Tome and Principe",
    "sv" => "El Salvador",
    "sy" => "Syrian Arab Republic",
    "sz" => "Switzerland",
    "td" => "Chad",
    "tf" => "French Southern Territories",
    "tg" => "Togo",
    "th" => "Thailand",
    "tj" => "Tajikistan",
    "tk" => "Tokelau",
    "tl" => "Timor Leste",
    "tm" => "Turkmenistan",
    "tn" => "Tunisia",
    "to" => "Tonga",
    "tr" => "Turkey",
    "tt" => "Trinidad and Tobago",
    "tv" => "Tuvalu",
    "tw" => "Taiwan",
    "tz" => "Tanzania",
    "ua" => "Ukraine",
    "ug" => "Uganda",
    "us" => "United States",
    "uy" => "Uruguay",
    "uz" => "Uzbekistan",
    "va" => "Vatican City",
    "vc" => "Saint Vincent and the Grenadines",
    "ve" => "Venezuela",
    "vg" => "Virgin Islands, British",
    "vi" => "Virgin Islands, U.S.",
    "vn" => "Vietnam",
    "vu" => "Vanuatu",
    "ws" => "Samoa",
    "ye" => "Yemen",
    "yt" => "Mayotte",
    "za" => "South Africa",
    "zm" => "Zambia",
    "zw" => "Zimbabwe",
    "xx" => "Unknown",
    "a2" => "Unknown",
    "eu" => "European Union",        
);

?>