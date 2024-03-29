/*********************************************************************************

** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

	
	var alert_arr = {       DELETE:'Are you sure you want to delete the selected ',
                                RECORDS:' records?',
                                SELECT:'Please select at least one entity',
                                DELETE_ACCOUNT:'Deleting this account(s) will remove its related Potentials & Quotes. Are you sure you want to delete the selected ',
                                DELETE_VENDOR:'Deleting this vendor(s) will remove its related Purchase Orders. Are you sure you want to delete the selected ',
                                SELECT_MAILID:'Please Select a mailid',
                                OVERWRITE_EXISTING_ACCOUNT1:'Overwrite the existing address with this selected account(',
                                OVERWRITE_EXISTING_ACCOUNT2:') address details?',
                                MISSING_FIELDS:'Missing required fields:',
                                NOT_ALLOWED_TO_EDIT:'you are not allowed to edit this field',
                                COLUMNS_CANNOT_BE_EMPTY:'Selected Columns cannot be empty',
                                CANNOT_BE_EMPTY:' cannot be empty',
                                CANNOT_BE_NONE:' cannot be none',
                                ENTER_VALID:'Please enter a valid ',
                                SHOULDBE_LESS:' should be less than ',
                                SHOULDBE_LESS_EQUAL:' should be less than or equal to ',
                                SHOULDBE_EQUAL:' should be equal to ',
                                SHOULDBE_GREATER:' should be greater than ',
                                SHOULDBE_GREATER_EQUAL:' should be greater than or equal to ',
                                INVALID:'Invalid ',
                                EXCEEDS_MAX:' exceeds the maximum limit ',
                                OUT_OF_RANGE:' is out of range',
                                SHOULDNOTBE_EQUAL:' should not be equal to ',
                                PORTAL_PROVIDE_EMAILID:'Portal user should provide email Id for portal login',
                                ADD_CONFIRMATION:'Are you sure you want to add the selected ',
                                ACCOUNTNAME_CANNOT_EMPTY:'AccountName Cannot be Empty',
                                CANT_SELECT_CONTACTS:"You can\'t select related contacts from Lead",
                                LBL_THIS:'This ',
                                DOESNOT_HAVE_MAILIDS:" doesn\'t have any mail ids",
                                ARE_YOU_SURE:'Are you sure?',
                                DOESNOT_HAVE_AN_MAILID:'" '+"doesn\'t have an Email Id",
                                MISSING_REQUIRED_FIELDS:'Missing required fields: ',
                                READONLY:"it\'s readonly",
				SELECT_ATLEAST_ONE_USER:'Please select at least one user',
                                DISABLE_SHARING_CONFIRMATION:'Are you sure you want to disable sharing for selected ',
                                USERS:' user(s) ?',
                                ENDTIME_GREATER_THAN_STARTTIME:'End Time should be greater than Start Time ',
                                FOLLOWUPTIME_GREATER_THAN_STARTTIME:'Followup Time should be greater than End Time ',
                                MISSING_EVENT_NAME:'Missing Event Name',
                                EVENT_TYPE_NOT_SELECTED:'Event Type is not selected',
                                OPPORTUNITYNAME_CANNOT_BE_EMPTY:'Opportunity Name field cannot be empty',
                                CLOSEDATE_CANNOT_BE_EMPTY:'Close Date field cannot be empty',
                                SITEURL_CANNOT_BE_EMPTY:'Site Url cannot be empty',
                                SITENAME_CANNOT_BE_EMPTY:'Site Name cannot be empty',
                                LISTPRICE_CANNOT_BE_EMPTY:'List Price cannot be empty',
                                INVALID_LIST_PRICE:'Invalid List Price',
                                PROBLEM_ACCESSSING_URL:'Problem accessing url: ',
                                CODE:' Code: ',
                                WISH_TO_QUALIFY_MAIL_AS_CONTACT:'Are you sure you wish to Qualify this Mail as Contact?',
                                SELECT_ATLEAST_ONEMSG_TO_DEL:'Please select at least one message to delete',
                                ERROR:'Error',
                                FIELD_TYPE_NOT_SELECTED:'Field Type is not selected',
                                SPECIAL_CHARACTERS_NOT_ALLOWED:'Special characters are not allowed in Label field',
                                PICKLIST_CANNOT_BE_EMPTY:'Picklist value cannot be empty',
                                DUPLICATE_VALUES_FOUND:'Duplicate Values found',
                                DUPLICATE_MAPPING_ACCOUNTS:'Duplicate mapping for accounts!!',
                                DUPLICATE_MAPPING_CONTACTS:'Duplicate mapping for Contacts!!',
                                DUPLICATE_MAPPING_POTENTIAL:'Duplicate mapping for Potential!!',
                                ERROR_WHILE_EDITING:'Error while Editing',
                                CURRENCY_CHANGE_INFO:'Currency Changes has been made Successfully',
                                CURRENCY_CONVERSION_INFO:'Are you using Dollar $ as Currency? \n Click OK to remain as $, Cancel to change the currency conversion rate.',
                                THE_EMAILID: "The email id \'",
                                EMAIL_FIELD_INVALID:"\' in the email field is invalid",
                                MISSING_REPORT_NAME:'Missing Report Name',
                                REPORT_NAME_EXISTS:'Report name already exists, try again...',
                                WANT_TO_CHANGE_CONTACT_ADDR:'Do you want to change the addresses of the Contacts related to this Account?',
                                SURE_TO_DELETE:'Are you sure you want to delete ?',
				NO_PRODUCT_SELECTED:'No product is selected. Select at least one Product',
                                VALID_FINAL_PERCENT:'Enter valid Final Discount Percentage',
                                VALID_FINAL_AMOUNT:'Enter valid Final Discount Amount',
                                VALID_SHIPPING_CHARGE:'Enter a valid Shipping & Handling charge',
                                VALID_ADJUSTMENT:'Enter a valid Adjustment',
                                WANT_TO_CONTINUE:'Do you want to Continue?',
                                ENTER_VALID_TAX:'Please enter Valid TAX value',
                                VALID_TAX_NAME:'Enter valid Tax Name',
                                CORRECT_TAX_VALUE:'Enter Correct Tax Value',
                                ENTER_POSITIVE_VALUE:'Please enter positive value',
                                LABEL_SHOULDNOT_EMPTY:'The tax label name should not be empty',
                                NOT_VALID_ENTRY:'is not a valid entry. Please enter correct value',
                                VALID_DISCOUNT_PERCENT:'Enter a valid Discount percentage',
                                VALID_DISCOUNT_AMOUNT:'Enter a valid Discount Amount',
                                SELECT_TEMPLATE_TO_MERGE:'Please select a template to merge',
				SELECTED_MORE_THAN_ONCE:'You have selected the following product(s) more than once.',
				YES:'yes',
                                NO:'no',
                                MAIL:'mail',
				EQUALS:'equals',
				NOT_EQUALS_TO:'not equal to',
				STARTS_WITH:'starts with',
				CONTAINS:'contains',	
				DOES_NOT_CONTAINS:'does not contains',
				LESS_THAN:'less than',
				GREATER_THAN:'greater than',
				LESS_OR_EQUALS:'less or equal',
				GREATER_OR_EQUALS:'greater or equal',

				NO_SPECIAL_CHARS:'Special Characters are not allowed in Invoice String',
				SHARED_EVENT_DEL_MSG:'The User does not have permission to Delete this record.',
				PLS_SELECT_VALID_FILE:'Please select a file with the following extension:\n',
                                NO_SPECIAL:'Special Characters are not allowed',
				IN_PROFILENAME:' in Profile Name',
				IN_GROUPNAME:' in Group Name',
				IN_ROLENAME:' in Role Name',
                                VALID_TAX_PERCENT:'Enter a valid Tax percentage',
                                VALID_SH_TAX:'Enter valid Taxes for shipping and handling ',
				ROLE_DRAG_ERR_MSG:'You cannot move a Parent Node under a Child Node',
				LBL_DEL:'del',
				VALID_DATA :' Enter Valid Data ,Please try again... ',
                                STDFILTER : 'Standard Filters',
                                STARTDATE : 'Start Date',
                                ENDDATE : 'End Date',
                                START_DATE_TIME : 'Start Date & Time',
                                START_TIME : 'Start Time',
                                DATE_SHOULDNOT_PAST :'Current date & time for Activities with status as Planned',
                                TIME_SHOULDNOT_PAST :'Current Time for Activities with status as Planned',
				LBL_AND : 'And',
				LBL_ENTER_VALID_PORT: 'Please enter valid port number',
				IN_USERNAME :' in Username ',
				LBL_ENTER_VALID_NO: 'Please enter valid number',
				LBL_PROVIDE_YES_NO: ' Invalid value.\n Please Provide Yes or No',
				LBL_SELECT_CRITERIA: ' Invalid criteria.\n Please select criteria',
				LBL_WRONG_IMAGE_TYPE: 'Allowed file types for Contacts - jpeg, png, jpg, pjpeg, x-png or gif'

                       };
