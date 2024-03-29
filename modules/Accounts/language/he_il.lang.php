<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Accounts/language/en_us.lang.php,v 1.18 2005/03/19 08:59:20 rank Exp $
 * Description:  Defines the English language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MAILER_EXPORT_NOTCHECKED'=>'לא מסומן',
'LBL_MAILER_EXPORT_CHECKED'=>'מסומן',
'LBL_MAILER_EXPORT_IGNORE'=>'--התעלם--',
'LBL_EXPORT_RESULTS_GO'=>'יצוא',
'LBL_EXPORT_RESULTS_FULL'=>'LBL_EXPORT_RESULTS_FULL',
'LBL_EXPORT_RESULTS_EMAIL_CORP'=>'LBL_EXPORT_RESULTS_EMAIL_CORP',
'LBL_EXPORT_RESULTS_EMAIL'=>'יצוא נתוני תוכנית דיוור',
'LBL_MAILER_EXPORT_RESULTS_DESCR'=>'הנתונים יאספו מלקוחות ואנשי הקשר שלהם אשר הוחזרו מן החיפוש הקודם',
'LBL_MAILER_EXPORT_RESULTS_TYPE'=>'בחר סוג יצוא:',
'LBL_MAILER_EXPORT_CONTACTS_DESCR'=>'ניתן לבחור אנשי קשר גם דרך &quot;שדות מותאמים אישית&quot; וכמה שדות סטנדרטיים',
'LBL_MAILER_EXPORT_CONTACTS_TYPE'=>'בחר אנשי קשר:',
'LBL_MAILER_EXPORT'=>'יצוא רשימת דיוור',
'LBL_ACCOUNT_EXIST'=>'חשבון כבר קיים',
'LBL_MODULE_NAME'=>'לקוחות',
'LBL_MODULE_TITLE'=>'לקוחות: בית',
'LBL_SEARCH_FORM_TITLE'=>'חיפוש לקוח',
'LBL_LIST_FORM_TITLE'=>'רשימת לקוחות',
'LBL_NEW_FORM_TITLE'=>'לקוח חדש',
'LBL_MEMBER_ORG_FORM_TITLE'=>'ארגונים חברים',
// Label for Top Accounts in Home Page, added for 4.2 GA
'LBL_TOP_ACCOUNTS'=>'הלקוחות המובילים שלי', 
'LBL_TOP_AMOUNT'=>'סכום',
'LBL_LIST_ACCOUNT_NAME'=>'שם הלקוח',
'LBL_LIST_CITY'=>'עיר',
'LBL_LIST_WEBSITE'=>'אתר',
'LBL_LIST_STATE'=>'מדינה',
'LBL_LIST_PHONE'=>'טלפון',
'LBL_LIST_EMAIL_ADDRESS'=>'כתובת דוא&quot;ל',
'LBL_LIST_CONTACT_NAME'=>'שם איש קשר',
'LBL_LIST_AMOUNT' => 'סך ההזדמנויות',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'לקוח:',
'LBL_ACCOUNT_NAME'=>'שם לקוח:',
'LBL_PHONE'=>'טלפון:',
'LBL_WEBSITE'=>'אתר:',
'LBL_FAX'=>'פקס:',
'LBL_TICKER_SYMBOL'=>'סמל מנייה:',
'LBL_OTHER_PHONE'=>'טלפון אחר:',
'LBL_ANY_PHONE'=>'כל טלפון:',
'LBL_MEMBER_OF'=>'חבר ב:',
'LBL_EMAIL'=>'דוא&quot;ל:',
'LBL_EMPLOYEES'=>'מועסקים:',
'LBL_OTHER_EMAIL_ADDRESS'=>'דוא&quot;ל אחר:',
'LBL_ANY_EMAIL'=>'כל דוא&quot;ל:',
'LBL_OWNERSHIP'=>'בעלות:',
'LBL_RATING'=>'דירוג:',
'LBL_INDUSTRY'=>'תעשייה:',
'LBL_SIC_CODE'=>'SIC Code:',
'LBL_TYPE'=>'סוג:',
'LBL_ANNUAL_REVENUE'=>'מחזור שנתי:',
'LBL_ADDRESS_INFORMATION'=>'כתובת',
'LBL_ACCOUNT_INFORMATION'=>'פרטי לקוח',
'LBL_CUSTOM_INFORMATION'=>'מידע מותאם אישית',
'LBL_BILLING_ADDRESS'=>'מידע כתובת לחיוב:',
'LBL_SHIPPING_ADDRESS'=>'כתובת למשלוח:',
'LBL_ANY_ADDRESS'=>'כל כתובת:',
'LBL_CITY'=>'עיר:',
'LBL_STATE'=>'State:',
'LBL_POSTAL_CODE'=>'מיקוד:',
'LBL_COUNTRY'=>'מדינה:',
'LBL_DESCRIPTION_INFORMATION'=>'תיאור נוסף',
'LBL_DESCRIPTION'=>'תיאור:',
'NTC_COPY_BILLING_ADDRESS'=>'העתקת הכתובת לחיוב מהכתובת למשלוח',
'NTC_COPY_SHIPPING_ADDRESS'=>'העתקת הכתובת למשלוח מהכתובת לחיוב',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'האם להסיר רשומה זו בתור ארגון חבר?',
'LBL_DUPLICATE'=>'ייתכן ויש לקוח כפול',
'MSG_DUPLICATE' => 'Creating this vtiger_account may vtiger_potentialy create a duplicate vtiger_account. You may either select an vtiger_account from the list below or you may click on Create New Account to continue creating a new vtiger_account with the previously entered data.',

'LBL_INVITEE'=>'אנשי קשר',
'ERR_DELETE_RECORD'=>"A record number must be specified to delete the vtiger_account.",

'LBL_SELECT_ACCOUNT'=>'בחירת לקוח',
'LBL_GENERAL_INFORMATION'=>'מידע כללי',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'הזדמנות חדשה',
'LBL_POTENTIAL_TITLE'=>'הזדמנויות',

'LBL_NEW_TASK'=>'משימה חדשה',
'LBL_TASK_TITLE'=>'משימות',
'LBL_NEW_CALL'=>'שיחת טלפון חדשה',
'LBL_CALL_TITLE'=>'שיחות טלפון',
'LBL_NEW_MEETING'=>'פגישה חדשה',
'LBL_MEETING_TITLE'=>'פגישות',
'LBL_NEW_EMAIL'=>'דוא&quot;ל חדש',
'LBL_EMAIL_TITLE'=>'דוא&quot;ל',
'LBL_NEW_CONTACT'=>'איש קשר חדש',
'LBL_CONTACT_TITLE'=>'אנשי קשר',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'הכל',
'LBL_PROSPECT'=>'בתהליך',
'LBL_INVESTOR'=>'משקיע',
'LBL_RESELLER'=>'משווק',
'LBL_PARTNER'=>'שותף',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'כלי חשבון',
//Added for 4GA
'Account Name'=>'שם לקוח',
'Phone'=>'טלפון',
'Website'=>'אתר',
'Fax'=>'פקס',
'Ticker Symbol'=>'סמל מניה',
'Other Phone'=>'טלפון אחר',
'Member Of'=>'חבר ב',
'Email'=>'דוא&quot;ל',
'Employees'=>'מועסקים',
'Other Email'=>'דוא&quot;ל אחר',
'Ownership'=>'בעלות',
'Rating'=>'דירוג',
'industry'=>'תעשייה',
'SIC Code'=>'SIC Code',
'Type'=>'סוג',
'Annual Revenue'=>'מחזור שנתי',
'Assigned To'=>'מצוות אל',
'Billing Address'=>'כתובת לחיוב',
'Shipping Address'=>'כתובת למשלוח',
'Billing City'=>'עיר',
'Shipping City'=>'עיר',
'Billing State'=>'ארץ',
'Shipping State'=>'ארץ',
'Billing Code'=>'מיקוד',
'Shipping Code'=>'מיקוד',
'Billing Country'=>'מחוז',
'Shipping Country'=>'מחוז',
'Created Time'=>'זמן יצירה',
'Modified Time'=>'זמן שינוי',
'Description'=>'תיאור',
'Shipping Po Box'=>'תא דואר',
'Billing Po Box'=>'תא דואר',

//Added after 4.2 patch 2
'Email Opt Out'=>'לא לשלוח דוא&quot;ל',
'LBL_EMAIL_OPT_OUT'=>'לא לשלוח דוא&quot;ל:',

//Added after 5Alpha5
'Notify Owner'=>'להודיע לבעלים',

//Added for existing picklist entries

'--None--'=>'--ללא--',

'Acquired'=>'הושג',
'Active'=>'פעיל',
'Market Failed'=>'השוק נכשל',
'Project Cancelled'=>'פרויקט בוטל',
'Shutdown'=>'סגירה',

'Apparel'=>'אופנה',
'Banking'=>'בנקאות',
'Biotechnology'=>'ביוטכנולוגיה',
'Chemicals'=>'כימיכלים',
'Communications'=>'אמצעי תקשורת',
'Construction'=>'בנייה',
'Consulting'=>'ייעוץ',
'Education'=>'חינוך',
'Electronics'=>'אלקטרוניקה',
'Energy'=>'אנרגיה',
'Engineering'=>'הנדסה',
'Entertainment'=>'בידור',
'Environmental'=>'איכות הסביבה',
'Finance'=>'כלכלה',
'Food & Beverage'=>'מזון ומשקאות',
'Government'=>'ממשל',
'Healthcare'=>'בריאות',
'Hospitality'=>'אירוח',
'Insurance'=>'ביטוח',
'Machinery'=>'מכונות',
'Manufacturing'=>'ייצור',
'Media'=>'התקשורת',
'Not For Profit'=>'לא למטרות רווח',
'Recreation'=>'פנאי',
'Retail'=>'קמעונאות',
'Shipping'=>'ימאות',
'Technology'=>'טכנולוגיה',
'Telecommunications'=>'טלקומוניקציה',
'Transportation'=>'תחבורה',
'Utilities'=>'כלים',
'Other'=>'אחר',

'Analyst'=>'אנליסט',
'Competitor'=>'מתחרה',
'Customer'=>'לקוח',
'Integrator'=>'אינטגרטור',
'Investor'=>'משקיע',
'Partner'=>'שותף',
'Press'=>'עיתונות',
'Prospect'=>'בתהליך',
'Reseller'=>'משווק',
'LBL_START_DATE' => 'תאריך התחלה',
'LBL_END_DATE' => 'תאריך סיום',

// Account Hierarchy
'LBL_SHOW_ACCOUNT_HIERARCHY' => 'הצג היררכיית לקוח', 

//Module Sequence Numbering
'Account No'=>'מספר הלקוח',
// END


);

?>
