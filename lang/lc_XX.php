<?php

/**
 * LOLCAT language pack
 * @package sapphire
 * @subpackage i18n
 */

$en_US_exists = isset($lang['en_US']);
i18n::include_locale_file('sapphire', 'en_US', true);

global $lang;

if(array_key_exists('lc_XX', $lang) && is_array($lang['lc_XX'])) {
	$lang['lc_XX'] = array_merge($lang['en_US'], $lang['lc_XX']);
} else {
	$lang['lc_XX'] = $lang['en_US'];
}
if (!$en_US_exists) {
	unset($lang['en_US']);
}

$lang['lc_XX']['BasicAuth']['ENTERINFO'] = 'PLZ ENTR UR USERNAYM N A PASWORD.';
$lang['lc_XX']['BasicAuth']['ERRORNOTADMIN'] = 'DAT USR IZ NOT AN ADMINISTRATOR.';
$lang['lc_XX']['BasicAuth']['ERRORNOTREC'] = 'DAT USERNAYM / PASWORD ISNT RECOGNISD SUZ 2 HEAR';
$lang['lc_XX']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'U CHANGD UR PASWORD 4';
$lang['lc_XX']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'U CAN NAO USE TEH FOLLOWIN CREDENSHALS 2 LOG IN:';
$lang['lc_XX']['ChangePasswordEmail.ss']['HELLO'] = 'OHI! HOWRU2DAI?';
$lang['lc_XX']['ComplexTableField.ss']['ADDITEM'] = 'ADD';
$lang['lc_XX']['ComplexTableField.ss']['NOITEMSFOUND'] = 'I R FOUNDZ NO ITEMZ';
$lang['lc_XX']['ComplexTableField.ss']['SORTASC'] = 'SORT ASCENDIN';
$lang['lc_XX']['ComplexTableField.ss']['SORTDESC'] = 'SORT DESCENDIN';
$lang['lc_XX']['ComplexTableField_popup.ss']['NEXT'] = 'NEXT (GOGOGO)';
$lang['lc_XX']['ComplexTableField_popup.ss']['PREVIOUS'] = 'PREVIOUZ';
$lang['lc_XX']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'U MUST LOG IN WIF UR CMS PASWORD IN ORDR 2 VIEW TEH DRAFT OR ARCHIVD CONTENT. <a href="%s">CLICK HEAR 2 GO BAK 2 TEH PUBLISHD SIET.</a>';
$lang['lc_XX']['Controller']['FILE'] = 'FIEL';
$lang['lc_XX']['Controller']['IMAGE'] = 'PIKSHUR';
$lang['lc_XX']['Date']['DAY'] = 'DAI';
$lang['lc_XX']['Date']['DAYS'] = 'DAIZ';
$lang['lc_XX']['Date']['HOUR'] = 'HOUR';
$lang['lc_XX']['Date']['HOURS'] = 'HOURZ';
$lang['lc_XX']['Date']['MIN'] = 'MIN';
$lang['lc_XX']['Date']['MINS'] = 'MINZ';
$lang['lc_XX']['Date']['MONTH'] = 'MONTH';
$lang['lc_XX']['Date']['MONTHS'] = 'MONTHX';
$lang['lc_XX']['Date']['SEC'] = 'SEC';
$lang['lc_XX']['Date']['SECS'] = 'SECZ';
$lang['lc_XX']['Date']['YEAR'] = 'YEAR';
$lang['lc_XX']['Date']['YEARS'] = 'YEARZ';
$lang['lc_XX']['DateField']['VALIDDATEFORMAT'] = 'PLZ ENTR VALID DATE FORMAT (DD/MM/YYYY) DAT NOT VRY HARD I SWEAR!';
$lang['lc_XX']['DropdownField']['CHOOSE'] = '(pik)';
$lang['lc_XX']['EmailField']['VALIDATION'] = 'PLZ ENTR AN EMAIL ADDRES.';
$lang['lc_XX']['ErrorPage']['CODE'] = 'TEH ERRUR CODE';
$lang['lc_XX']['FileIFrameField']['NOTEADDFILES'] = 'YOO CAN ADD FILEZ ONCE U HAS SAVD 4 DA FURST TIEM.';
$lang['lc_XX']['Folder']['FILESTAB'] = 'FILEZ';
$lang['lc_XX']['Folder']['UNUSEDFILESTAB'] = 'UNUSD FILEZ';
$lang['lc_XX']['Folder']['UNUSEDFILESTITLE'] = 'UNUSD FILEZ';
$lang['lc_XX']['ForgotPasswordEmail.ss']['HELLO'] = 'OHI! HOWRU2DAI?';
$lang['lc_XX']['Form']['DATENOTSET'] = '(NO DATE SET)';
$lang['lc_XX']['Form']['FIELDISREQUIRED'] = '%s IS REQUIRED';
$lang['lc_XX']['Form']['LANGAOTHER'] = 'OTHR LANGUAGEZ';
$lang['lc_XX']['Form']['LANGAVAIL'] = 'AVAILABLE LANGUAGEZ';
$lang['lc_XX']['Form']['NOTSET'] = '(NOT SET)';
$lang['lc_XX']['Form']['VALIDATIONALLDATEVALUES'] = 'CUD U PLZ ENSURE DAT U R SER ALL TEH DATE VALUEZ ALL RITE? CUZ IF NOT U SHUD DO DAT RITE NOW.';
$lang['lc_XX']['Form']['VALIDATIONBANKACC'] = 'COULD U PLZ ENTER A VALID BANK NUMBER CUZ I RLY NED DAT 1! SRSLY!';
$lang['lc_XX']['Form']['VALIDATIONCREDITNUMBER'] = 'PLZ ENSURE U HAS ENTERD TEH %s CREDIT CARD NUMBR RITE CUZ WE NEED UR MONEY RITE NOW.';
$lang['lc_XX']['Form']['VALIDATIONFAILED'] = 'VALIDASHUN FAILD1!!1!!!!!!1 WAT NOW?';
$lang['lc_XX']['Form']['VALIDATIONNOTUNIQUE'] = 'TEH VALUE ENTERD R NOT UNIQUE';
$lang['lc_XX']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'SRY BOSS, PASWORDZ DOAN MATCH';
$lang['lc_XX']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'PASWORDZ CANT BE EMPTY DOOD';
$lang['lc_XX']['Form']['VALIDATIONSTRONGPASSWORD'] = 'PASWORDZ MUST HAS AT LEAST WAN DIGIT AN WAN ALFANUMERIC CHARACTR.';
$lang['lc_XX']['Form']['VALIDCURRENCY'] = 'PLZ ENTR VALID CURRENCY. CUD U?';
$lang['lc_XX']['GhostPage']['NOLINKED'] = 'DIS GHOST PAEG HAS NO LINKD PAEG.';
$lang['lc_XX']['GSTNumberField']['VALIDATION'] = 'PLZ ENTR VALID GST NUMBR';
$lang['lc_XX']['HtmlEditorField']['ALTTEXT'] = 'TEH DESCRIPSHUN';
$lang['lc_XX']['HtmlEditorField']['ANCHOR'] = 'INSERT/EDIT TEH ANCHOR';
$lang['lc_XX']['HtmlEditorField']['BULLETLIST'] = 'A LIST WIT SUM SERIOUS STUFF INDICATING TEH ELEMENTS';
$lang['lc_XX']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'ALIGN CENTERZ';
$lang['lc_XX']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'JUSTIFY';
$lang['lc_XX']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'ALIGN LEFT';
$lang['lc_XX']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'ALIGN RITE';
$lang['lc_XX']['HtmlEditorField']['BUTTONBOLD'] = 'BOLD (HIT TEH KEYZ: CONTROLZ+B)';
$lang['lc_XX']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'ADD SUM COOL FLASH STUFF';
$lang['lc_XX']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'INSERT PIKSHUR';
$lang['lc_XX']['HtmlEditorField']['BUTTONINSERTLINK'] = 'INSERT LINK';
$lang['lc_XX']['HtmlEditorField']['BUTTONITALIC'] = 'ITALIC (HIT TEH KEYZ: CONTROLZ+I)';
$lang['lc_XX']['HtmlEditorField']['BUTTONREMOVELINK'] = 'REMOOV LINK';
$lang['lc_XX']['HtmlEditorField']['BUTTONSTRIKE'] = 'STRIKEFRU';
$lang['lc_XX']['HtmlEditorField']['BUTTONUNDERLINE'] = 'UNDERLINEZ (HIT TEH KEYZ: CONTROLZ+U)';
$lang['lc_XX']['HtmlEditorField']['CHARMAP'] = 'INSERT TEH SYMBOL';
$lang['lc_XX']['HtmlEditorField']['COPY'] = 'COPY DAT 1 (HIT TEH KEYZ: CONTROLZ+C)';
$lang['lc_XX']['HtmlEditorField']['CREATEFOLDER'] = 'CREATE FOLDR';
$lang['lc_XX']['HtmlEditorField']['CSSCLASS'] = 'ALIGNMENT / STYLE';
$lang['lc_XX']['HtmlEditorField']['CSSCLASSCENTER'] = 'SENTERD, ON ITZ OWN.';
$lang['lc_XX']['HtmlEditorField']['CSSCLASSLEFT'] = 'ON TEH LEFT, WIF TEXT WRAPPIN AROUND.';
$lang['lc_XX']['HtmlEditorField']['CSSCLASSRIGHT'] = 'ON TEH RITE, WIF TEXT WRAPPIN AROUND.';
$lang['lc_XX']['HtmlEditorField']['CUT'] = 'CUT DAT PIECE (HIT TEH KEYZ: CONTROLZ+X)';
$lang['lc_XX']['HtmlEditorField']['DELETECOL'] = 'DELETE COLUMN';
$lang['lc_XX']['HtmlEditorField']['DELETEROW'] = 'DELETE ROW';
$lang['lc_XX']['HtmlEditorField']['EDITCODE'] = 'EDIT TEH HATAMAL KOD';
$lang['lc_XX']['HtmlEditorField']['EMAIL'] = 'EMAIL ADDRESZ';
$lang['lc_XX']['HtmlEditorField']['FILE'] = 'FIEL';
$lang['lc_XX']['HtmlEditorField']['FLASH'] = 'INSERT SUM SERIOUS FLASH STUFF';
$lang['lc_XX']['HtmlEditorField']['FOLDER'] = 'TEH FOLDER';
$lang['lc_XX']['HtmlEditorField']['FOLDERCANCEL'] = 'CANCEL';
$lang['lc_XX']['HtmlEditorField']['FORMATADDR'] = 'SUM ADDRESSZ';
$lang['lc_XX']['HtmlEditorField']['FORMATH1'] = 'HEADIN 1';
$lang['lc_XX']['HtmlEditorField']['FORMATH2'] = 'HEADIN 2';
$lang['lc_XX']['HtmlEditorField']['FORMATH3'] = 'HEADIN 3';
$lang['lc_XX']['HtmlEditorField']['FORMATH4'] = 'HEADIN 4';
$lang['lc_XX']['HtmlEditorField']['FORMATH5'] = 'HEADIN 5';
$lang['lc_XX']['HtmlEditorField']['FORMATH6'] = 'HEADIN 6';
$lang['lc_XX']['HtmlEditorField']['FORMATP'] = 'PARAGRAFFF';
$lang['lc_XX']['HtmlEditorField']['HR'] = 'INSERT TEH HORIZONTAL LINEZ';
$lang['lc_XX']['HtmlEditorField']['IMAGE'] = 'INSERT PIKSHUR';
$lang['lc_XX']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'DIMENSHUNZ';
$lang['lc_XX']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'HEIGHT';
$lang['lc_XX']['HtmlEditorField']['IMAGEWIDTHPX'] = 'WIDTH';
$lang['lc_XX']['HtmlEditorField']['INDENT'] = 'INCREASE INDENT';
$lang['lc_XX']['HtmlEditorField']['INSERTCOLAFTER'] = 'INSERT COLUMN AFTR DAT 1';
$lang['lc_XX']['HtmlEditorField']['INSERTCOLBEF'] = 'INSERT COLUMN BEFORE DAT 1';
$lang['lc_XX']['HtmlEditorField']['INSERTROWAFTER'] = 'INSERT ROW AFTR DAT 1';
$lang['lc_XX']['HtmlEditorField']['INSERTROWBEF'] = 'INSERT ROW BEFORE DAT 1';
$lang['lc_XX']['HtmlEditorField']['INSERTTABLE'] = 'INSERT TABLE';
$lang['lc_XX']['HtmlEditorField']['LINK'] = 'INSERT/EDIT LINK 4 HIGHLIGHTD TEXT';
$lang['lc_XX']['HtmlEditorField']['LINKDESCR'] = 'LINK DESCRIPSHUN';
$lang['lc_XX']['HtmlEditorField']['LINKEMAIL'] = 'EMAIL ADDRESZ';
$lang['lc_XX']['HtmlEditorField']['LINKEXTERNAL'] = 'ANODER WEBSIET';
$lang['lc_XX']['HtmlEditorField']['LINKFILE'] = 'DOWNLOAD FIEL';
$lang['lc_XX']['HtmlEditorField']['LINKINTERNAL'] = 'PAEG ON DIS SIET';
$lang['lc_XX']['HtmlEditorField']['LINKOPENNEWWIN'] = 'OPEN LINK IN NEW WINDOW?';
$lang['lc_XX']['HtmlEditorField']['LINKTO'] = 'LINK 2';
$lang['lc_XX']['HtmlEditorField']['OK'] = 'K!';
$lang['lc_XX']['HtmlEditorField']['OL'] = 'A LIST WIT NUMBERZ DAT HELP RLY MUCH';
$lang['lc_XX']['HtmlEditorField']['OUTDENT'] = 'DECREASE OUTDENT';
$lang['lc_XX']['HtmlEditorField']['PAGE'] = 'PAEG';
$lang['lc_XX']['HtmlEditorField']['PASTE'] = 'PASTE (HIT TEH KEYZ: CONTROLZ+V)';
$lang['lc_XX']['HtmlEditorField']['REDO'] = 'YA RLY I WANT IT AGAINZ (HIT TEH KEYZ: CONTROLZ+Y)';
$lang['lc_XX']['HtmlEditorField']['UNDO'] = 'I RLY APOLAGIZE N I WANT 2 UNDO I WONT DO DAT AGAIN SRSLY! (HIT TEH KEYZ: CONTROLZ+Z)';
$lang['lc_XX']['HtmlEditorField']['UNLINK'] = 'REMOOV LINK';
$lang['lc_XX']['HtmlEditorField']['UPLOAD'] = 'UPLOAD';
$lang['lc_XX']['HtmlEditorField']['URL'] = 'URL N STUFF';
$lang['lc_XX']['HtmlEditorField']['VISUALAID'] = 'SHOW/HIDE GUIDELINEZ';
$lang['lc_XX']['ImageField']['NOTEADDIMAGES'] = 'YOO CAN ADD IMUJZ ONCE U HAV SAVD 4 TEH 1ST TAYM.';
$lang['lc_XX']['ImageUplaoder']['ONEFROMFILESTORE'] = 'WIF WAN FRUM TEH FILE STORE';
$lang['lc_XX']['ImageUploader']['ATTACH'] = 'ATTACH TEH %s';
$lang['lc_XX']['ImageUploader']['DELETE'] = 'DELETE %s';
$lang['lc_XX']['ImageUploader']['FROMCOMPUTER'] = 'FRUM UR COMPUTR';
$lang['lc_XX']['ImageUploader']['FROMFILESTORE'] = 'FRUM TEH FILE STORE';
$lang['lc_XX']['ImageUploader']['ONEFROMCOMPUTER'] = 'WIF WAN FRUM UR COMPUTR';
$lang['lc_XX']['ImageUploader']['REALLYDELETE'] = 'DO U RLY WANTS 2 REMOOV DIS %s? RU U RLY SHUR?';
$lang['lc_XX']['ImageUploader']['REPLACE'] = 'REPLACE SUMTHIN LIEK %s';
$lang['lc_XX']['Image_iframe.ss']['TITLE'] = 'PIKSHUR UPLOADIN IFRAME';
$lang['lc_XX']['Member']['ADDRESS'] = 'ADDRESZ';
$lang['lc_XX']['Member']['BUTTONCHANGEPASSWORD'] = 'CHANGE PASWORD';
$lang['lc_XX']['Member']['BUTTONLOGIN'] = 'LOG IN';
$lang['lc_XX']['Member']['BUTTONLOGINOTHER'] = 'LOG IN AS SOMEONE ELSE';
$lang['lc_XX']['Member']['BUTTONLOSTPASSWORD'] = 'I HAS LOST MAH PASWORD';
$lang['lc_XX']['Member']['CONFIRMNEWPASSWORD'] = 'CUD U CONFIRM NEW PASWORD PLZ';
$lang['lc_XX']['Member']['CONFIRMPASSWORD'] = 'CONFIRM PASWORD';
$lang['lc_XX']['Member']['CONTACTINFO'] = 'SUM CONTACT STUFF';
$lang['lc_XX']['Member']['EMAIL'] = 'EMAIL';
$lang['lc_XX']['Member']['EMAILSIGNUPINTRO1'] = 'TEH LOLCAT SEZ OMG BIGTHX 2 U N U R A NEW MEMBR 4 NOW N UR DETAILZ R LISTD BELOW FOR THAT IF U WANTZ THEM IN SUM TIME';
$lang['lc_XX']['Member']['EMAILSIGNUPINTRO2'] = 'U CAN LOGIN TO TEH WEBSITE USINS TEH CREDENTIALZ LISTED BELOW';
$lang['lc_XX']['Member']['EMAILSIGNUPSUBJECT'] = 'TEH LOLCAT TANX U 4 SIGNINS UP';
$lang['lc_XX']['Member']['ERRORNEWPASSWORD'] = 'UR HAS ENTERD UR NEW PASWORD DIFFERENTLY, PLZ TRY AGAIN, K?';
$lang['lc_XX']['Member']['ERRORPASSWORDNOTMATCH'] = 'UR CURRENT PASWORD DOEZ NOT MATCH, PLZ TRY AGAIN, K?';
$lang['lc_XX']['Member']['ERRORWRONGCRED'] = 'DAT IS NOT SEEMZ 2 BE TEH RITE E-MAIL ADDRES OR PASWORD. PLZ TRY AGAIN, K?';
$lang['lc_XX']['Member']['FIRSTNAME'] = 'FURST NAYM';
$lang['lc_XX']['Member']['GREETING'] = 'WELKUM';
$lang['lc_XX']['Member']['INTERFACELANG'] = 'INTRFACELANGUEEG';
$lang['lc_XX']['Member']['LOGGEDINAS'] = 'URE LOGGD IN AS %s.';
$lang['lc_XX']['Member']['MOBILE'] = 'MOBAIL';
$lang['lc_XX']['Member']['NAME'] = 'NAYM';
$lang['lc_XX']['Member']['NEWPASSWORD'] = 'NEW PASWORD';
$lang['lc_XX']['Member']['PASSWORD'] = 'PASWORD';
$lang['lc_XX']['Member']['PASSWORDCHANGED'] = 'UR PASWORD HAS BEEN CHANGD, AN COPY EMAILD 2 U.';
$lang['lc_XX']['Member']['PERSONALDETAILS'] = 'SUM DETAILZ BOUT';
$lang['lc_XX']['Member']['PHONE'] = 'FONE';
$lang['lc_XX']['Member']['REMEMBERME'] = 'REMEMBR ME NEXT TIME, K?';
$lang['lc_XX']['Member']['SUBJECTPASSWORDCHANGED'] = 'UR PASWORD HAS BEEN CHANGD';
$lang['lc_XX']['Member']['SUBJECTPASSWORDRESET'] = 'YORE PASWORD RESET LINK';
$lang['lc_XX']['Member']['SURNAME'] = 'SHURNAYM';
$lang['lc_XX']['Member']['USERDETAILS'] = 'SUM DETAILZ BOUT TEH USER';
$lang['lc_XX']['Member']['VALIDATIONMEMBEREXISTS'] = 'THAR ALREADY EXISTZ MEMBR WIF DIS EMAILZ';
$lang['lc_XX']['Member']['WELCOMEBACK'] = 'WELCUM BACK, %s';
$lang['lc_XX']['Member']['YOUROLDPASSWORD'] = 'UR OLD PASWORD';
$lang['lc_XX']['MemberAuthenticator']['TITLE'] = 'E-MAIL N PASWORD';
$lang['lc_XX']['NumericField']['VALIDATION'] = '\'%s\' IZ NOT NUMBR, ONLY NUMBERS CAN BE ACCEPTD 4 DIS FIELD';
$lang['lc_XX']['PhoneNumberField']['VALIDATION'] = 'PLZ ENTR VALID FONE NUMBR WE WUNT DISTURB 2 MUCH JUS A BIT';
$lang['lc_XX']['RedirectorPage']['HASBEENSETUP'] = 'A REDIRECTOR PAEG HAS BEEN SET UP WITHOUT ANYWHERE 2 REDIRECT 2.';
$lang['lc_XX']['RedirectorPage']['HEADER'] = 'DIS PAEG WILL REDIRECT USERS 2 ANOTHR PAEG';
$lang['lc_XX']['RedirectorPage']['OTHERURL'] = 'UDDR WEBSITEZ URL';
$lang['lc_XX']['RedirectorPage']['REDIRECTTO'] = 'REDIRECT 2';
$lang['lc_XX']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'ANOTHR WEBSIET';
$lang['lc_XX']['RedirectorPage']['REDIRECTTOPAGE'] = 'A PAEG ON UR WEBSEIT';
$lang['lc_XX']['RedirectorPage']['YOURPAGE'] = 'PAEG ON UR WEBSEIT';
$lang['lc_XX']['Security']['ALREADYLOGGEDIN'] = 'U SHALL NOT PASS!! IF U HAS ANOTHR AKOWNT DAT CAN ACCES DAT PAEG, U CAN LOG IN BELOW.';
$lang['lc_XX']['Security']['BUTTONSEND'] = 'SEND ME TEH PASWORD RESETZ LINK';
$lang['lc_XX']['Security']['CHANGEPASSWORDBELOW'] = 'U CAN CHANGE UR PASWORD BELOW';
$lang['lc_XX']['Security']['CHANGEPASSWORDHEADER'] = 'CHANGE UR PASWORD';
$lang['lc_XX']['Security']['ENTERNEWPASSWORD'] = 'PLEEZ ENTR NEW PASSWORD.  KTHX.';
$lang['lc_XX']['Security']['ERRORPASSWORDPERMISSION'] = 'U MUST BE LOGGD IN IN ORDR 2 CHANGE UR PASWORD!';
$lang['lc_XX']['Security']['LOGGEDOUT'] = 'U HAS BEEN LOGGD OUT. IF U WUD LIEK 2 LOG IN AGAIN, ENTR UR CREDENTIALS BELOW.';
$lang['lc_XX']['Security']['LOSTPASSWORDHEADER'] = 'LUST PASWRD';
$lang['lc_XX']['Security']['NOTEPAGESECURED'] = 'TEH PAGE IZ SECURD. ENTR UR CREDENSHALS BELOW AN WE WILL SEND U RITE ALONG.';
$lang['lc_XX']['Security']['NOTERESETPASSWORD'] = 'ENTR UR E-MAIL ADDRES AN WE R GONA SEND U LINK WIF WHICH U CAN RESET UR PASWORD';
$lang['lc_XX']['Security']['PASSWORDSENTHEADER'] = 'I R SENT TEH PASWORD RESET LINK TO \'%s\'';
$lang['lc_XX']['Security']['PASSWORDSENTTEXT'] = 'THXALOT! I R SENT TEH PASWORD RESET LINK TO \'%s\'';
$lang['lc_XX']['SimpleImageField']['NOUPLOAD'] = 'DEREZ NO PIKSHUR UPLOADED';
$lang['lc_XX']['SiteTree']['ACCESSANYONE'] = 'ANY1';
$lang['lc_XX']['SiteTree']['ACCESSHEADER'] = 'WAT PEEPS CAN C DAT PAEG ON MY SITE?';
$lang['lc_XX']['SiteTree']['ACCESSLOGGEDIN'] = 'LOGGD-IN USERS';
$lang['lc_XX']['SiteTree']['ACCESSONLYTHESE'] = 'ONLY THEES PEEPS (CHOOSE FRUM LIST)';
$lang['lc_XX']['SiteTree']['ADDEDTODRAFT'] = 'ADDD 2 DRAFT SIET';
$lang['lc_XX']['SiteTree']['ALLOWCOMMENTS'] = 'ALLOW COMMENTZ ON DIS PAEG?';
$lang['lc_XX']['SiteTree']['APPEARSVIRTUALPAGES'] = 'DIS CONTENT ALSO APPEARz ON TEH VIRTUAL PAGEZ IN DA %s SECSHUNS.';
$lang['lc_XX']['SiteTree']['BUTTONCANCELDRAFT'] = 'CANCEL DRAFT CHANGEZ';
$lang['lc_XX']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'DELETE UR DRAFT AN REVERT 2 TEH CURRENTLY PUBLISHD PAEG';
$lang['lc_XX']['SiteTree']['BUTTONSAVEPUBLISH'] = 'SAV N PUBLISH';
$lang['lc_XX']['SiteTree']['BUTTONUNPUBLISH'] = 'UNPUBLISH';
$lang['lc_XX']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'REMOOV DIS PAEG FRUM TEH PUBLISHD SIET';
$lang['lc_XX']['SiteTree']['EDITANYONE'] = 'ANYONE HOO CAN LOG-IN 2 TEH CMS';
$lang['lc_XX']['SiteTree']['EDITHEADER'] = 'WAT PEEPS CAN EDIT DIS INSIDE TEH CMS?';
$lang['lc_XX']['SiteTree']['EDITONLYTHESE'] = 'ONLY THEEZ PEEPS (CHOOSE FRUM LIST)';
$lang['lc_XX']['SiteTree']['GROUP'] = 'GRUP';
$lang['lc_XX']['SiteTree']['HASBROKENLINKS'] = 'DIS PAEG HAS BROKD LINKZ.
';
$lang['lc_XX']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'DOMAJN(Z)';
$lang['lc_XX']['SiteTree']['HTMLEDITORTITLE'] = 'TEH CONTENT';
$lang['lc_XX']['SiteTree']['MENUTITLE'] = 'NAVIGASHUN LABEL';
$lang['lc_XX']['SiteTree']['METADESC'] = 'DESCRIPSHUN';
$lang['lc_XX']['SiteTree']['METAEXTRA'] = 'CUSTOM META TAGZ';
$lang['lc_XX']['SiteTree']['METAHEADER'] = 'SEARCH ENGINE META-TAGZ';
$lang['lc_XX']['SiteTree']['METAKEYWORDS'] = 'KEYWURDZ';
$lang['lc_XX']['SiteTree']['METATITLE'] = 'TITLE';
$lang['lc_XX']['SiteTree']['MODIFIEDONDRAFT'] = 'MODIFID ON DRAFT SIET';
$lang['lc_XX']['SiteTree']['NOBACKLINKS'] = 'DIS PAEG HASNT BEEN LINKD 2 FRUM ANY PAGEZ.';
$lang['lc_XX']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'USE DIS PAEG AS TEH HOME PAEG 4 DA FOLLOWIN DOMAINS:
(SEPARATE MULTIPLEZ DOMAINZ WIF COMMAS)';
$lang['lc_XX']['SiteTree']['PAGESLINKING'] = 'TEH FOLLOWIN PAGEZ LINK 2 DIS PAEG:';
$lang['lc_XX']['SiteTree']['PAGETITLE'] = 'NAYM OV TEH PAEG';
$lang['lc_XX']['SiteTree']['PAGETYPE'] = 'TYPE OV TEH PAEG';
$lang['lc_XX']['SiteTree']['REMOVEDFROMDRAFT'] = 'REMOVD FRUM DRAFT SIET';
$lang['lc_XX']['SiteTree']['SHOWINMENUS'] = 'SHOU IN MENUZ?';
$lang['lc_XX']['SiteTree']['SHOWINSEARCH'] = 'SHOU IN SEARCH?';
$lang['lc_XX']['SiteTree']['TABACCESS'] = 'ACCESZ';
$lang['lc_XX']['SiteTree']['TABBACKLINKS'] = 'BACKLINKZ';
$lang['lc_XX']['SiteTree']['TABBEHAVIOUR'] = 'BEHAVIOUR';
$lang['lc_XX']['SiteTree']['TABCONTENT'] = 'CONTENT';
$lang['lc_XX']['SiteTree']['TABMAIN'] = 'MAIN';
$lang['lc_XX']['SiteTree']['TABMETA'] = 'META-DATA';
$lang['lc_XX']['SiteTree']['TABREPORTS'] = 'REPORTZ';
$lang['lc_XX']['SiteTree']['TOPLEVEL'] = 'SIET CONTENT (TOP LEVEL)
';
$lang['lc_XX']['SiteTree']['URL'] = 'TEH URL';
$lang['lc_XX']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'ANOTHR PAEG IZ USIN DAT URL. URL MUST BE UNIQUE 4 EACH PAEG';
$lang['lc_XX']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URLZ CAN ONLY BE MADE UP OV LETTERz, DIGITZ N HYFENZ.';
$lang['lc_XX']['TableField']['ISREQUIRED'] = 'IN %s \'%s\' IS KINDA REQUIRED';
$lang['lc_XX']['TableField.ss']['CSVEXPORT'] = 'EXPORT 2 CSV';
$lang['lc_XX']['ToggleCompositeField.ss']['HIDE'] = 'HAYD';
$lang['lc_XX']['ToggleCompositeField.ss']['SHOW'] = 'SHOW';
$lang['lc_XX']['ToggleField']['LESS'] = 'lesz';
$lang['lc_XX']['ToggleField']['MORE'] = 'mur';
$lang['lc_XX']['TypeDropdown']['NONE'] = 'None. Kthx.';
$lang['lc_XX']['VirtualPage']['CHOOSE'] = 'CHOOSE PAEG 2 LINK 2';
$lang['lc_XX']['VirtualPage']['EDITCONTENT'] = 'kLICK HEER 2 EDIT TEH CONTENT';
$lang['lc_XX']['VirtualPage']['HEADER'] = 'DIS R A VIRTUAL PAEG';

?>