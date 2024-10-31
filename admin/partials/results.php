<?php 

// Print out Insight Score graphs for Desktop and Mobile
$desktop_chart_data = [];
$mobile_chart_data = [];
foreach($obj->Insights_History_Data_for_Desktop as $key => $chart) {
	$chart_data_element = [];
	foreach($chart as $key => $chart_element) { 
		array_push($chart_data_element, $chart_element);
	}
		array_push($desktop_chart_data, $chart_data_element);
	} 
	foreach($obj->Insights_History_Data_for_Mobile as $key => $chart) {
		$chart_data_element = [];
		foreach($chart as $key => $chart_element) { 
			array_push($chart_data_element, $chart_element);
		}
	array_push($mobile_chart_data, $chart_data_element);
} 

$strScoreStart = '<span class="individual-score">';
$strScoreEnd = '</span>';
$strTitleStart = '<span class="score">';
$strTitleEnd = '</span>';
$strDescriptionStart = '<span class="score-description">';
$strDescriptionEnd = '</span>';
$strTooltipStart = '<span class="tooltip-icon"><span>';
$strTooltipEnd = '</span></span>';
// Test for "Fail" values on all summary results by setting "$strTestValues to "on"
$strTestValues = "off";

// ******* Critial_Severity_Issues
if ($obj->Critial_Severity_Issues > 0) 
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Critial_Severity_Issuestitle)) {if (!empty($obj->Critial_Severity_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->Critial_Severity_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Critial_Severity_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->Critial_Severity_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Critial_Severity_Issues_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Critial_Severity_Issuestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Critial_Severity_Issues_score = $strScoreStart.$obj->Critial_Severity_Issues.$strScoreEnd;} if (!empty($obj->Critial_Severity_Issuestitle)) {$Critial_Severity_Issues = '<li>'.$Critial_Severity_Issues_title.$Critial_Severity_Issues_score.'</li>';}

// ******* Security_Related_Plugin_Issues
if ($obj->Security_Related_Plugin_Issues > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityCriticalSeverityTotal = $strSecurityCriticalSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Security_Related_Plugin_Issuestitle)) {if (!empty($obj->Security_Related_Plugin_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->Security_Related_Plugin_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Security_Related_Plugin_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->Security_Related_Plugin_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Security_Related_Plugin_Issues_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Security_Related_Plugin_Issuestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Security_Related_Plugin_Issues_score = $strScoreStart.$obj->Security_Related_Plugin_Issues.$strScoreEnd;} if (!empty($obj->Security_Related_Plugin_Issuestitle)) {$Security_Related_Plugin_Issues = '<li>'.$Security_Related_Plugin_Issues_title.$Security_Related_Plugin_Issues_score.'</li>';}

// ******* Unpatched_Security_Vulnerability_Issues
if ($obj->Unpatched_Security_Vulnerability_Issues > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityCriticalSeverityTotal = $strSecurityCriticalSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Unpatched_Security_Vulnerability_Issuestitle)) {if (!empty($obj->Unpatched_Security_Vulnerability_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->Unpatched_Security_Vulnerability_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Unpatched_Security_Vulnerability_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->Unpatched_Security_Vulnerability_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Unpatched_Security_Vulnerability_Issues_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Unpatched_Security_Vulnerability_Issuestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Unpatched_Security_Vulnerability_Issues_score = $strScoreStart.$obj->Unpatched_Security_Vulnerability_Issues.$strScoreEnd;} if (!empty($obj->Unpatched_Security_Vulnerability_Issuestitle)) {$Unpatched_Security_Vulnerability_Issues = '<li>'.$Unpatched_Security_Vulnerability_Issues_title.$Unpatched_Security_Vulnerability_Issues_score.'</li>';}

// ******* Publicly_Accessible_Files
if ($obj->Publicly_Accessible_Files > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityCriticalSeverityTotal = $strSecurityCriticalSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Publicly_Accessible_Filestitle)) {if (!empty($obj->Publicly_Accessible_Filesdescription)) {$strDescription = $strDescriptionStart.$obj->Publicly_Accessible_Filesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Publicly_Accessible_Filestooltip)) {$strTooltip = $strTooltipStart.$obj->Publicly_Accessible_Filestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Publicly_Accessible_Files_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Publicly_Accessible_Filestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Publicly_Accessible_Files_score = $strScoreStart.$obj->Publicly_Accessible_Files.$strScoreEnd;} if (!empty($obj->Publicly_Accessible_Filestitle)) {$Publicly_Accessible_Files = '<li>'.$Publicly_Accessible_Files_title.$Publicly_Accessible_Files_score.'</li>';}

// ******* Removed_from_Wordpressorg
if ($obj->Removed_from_Wordpressorg > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityCriticalSeverityTotal = $strSecurityCriticalSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Removed_from_Wordpressorgtitle)) {if (!empty($obj->Removed_from_Wordpressorgdescription)) {$strDescription = $strDescriptionStart.$obj->Removed_from_Wordpressorgdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Removed_from_Wordpressorgtooltip)) {$strTooltip = $strTooltipStart.$obj->Removed_from_Wordpressorgtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Removed_from_Wordpressorg_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Removed_from_Wordpressorgtitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Removed_from_Wordpressorg_score = $strScoreStart.$obj->Removed_from_Wordpressorg.$strScoreEnd;} if (!empty($obj->Removed_from_Wordpressorgtitle)) {$Removed_from_Wordpressorg = '<li>'.$Removed_from_Wordpressorg_title.$Removed_from_Wordpressorg_score.'</li>';}

// ******* Files_Containing_Malicious_Code
if ($obj->Files_Containing_Malicious_Code > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityCriticalSeverityTotal = $strSecurityCriticalSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Files_Containing_Malicious_Codetitle)) {if (!empty($obj->Files_Containing_Malicious_Codedescription)) {$strDescription = $strDescriptionStart.$obj->Files_Containing_Malicious_Codedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Files_Containing_Malicious_Codetooltip)) {$strTooltip = $strTooltipStart.$obj->Files_Containing_Malicious_Codetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Files_Containing_Malicious_Code_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Files_Containing_Malicious_Codetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Files_Containing_Malicious_Code_score = $strScoreStart.$obj->Files_Containing_Malicious_Code.$strScoreEnd;} if (!empty($obj->Files_Containing_Malicious_Codetitle)) {$Files_Containing_Malicious_Code = '<li>'.$Files_Containing_Malicious_Code_title.$Files_Containing_Malicious_Code_score.'</li>';}

// ******* Wordpress_Core_Update_Notices
if ($obj->Wordpress_Core_Update_Notices > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityHighSeverityTotal = $strSecurityHighSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Wordpress_Core_Update_Noticestitle)) {if (!empty($obj->Wordpress_Core_Update_Noticesdescription)) {$strDescription = $strDescriptionStart.$obj->Wordpress_Core_Update_Noticesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Wordpress_Core_Update_Noticestooltip)) {$strTooltip = $strTooltipStart.$obj->Wordpress_Core_Update_Noticestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Wordpress_Core_Update_Notices_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Wordpress_Core_Update_Noticestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Wordpress_Core_Update_Notices_score = $strScoreStart.$obj->Wordpress_Core_Update_Notices.$strScoreEnd;} if (!empty($obj->Wordpress_Core_Update_Noticestitle)) {$Wordpress_Core_Update_Notices = '<li>'.$Wordpress_Core_Update_Notices_title.$Wordpress_Core_Update_Notices_score.'</li>';}

// ******* Admin_Created_Outside_WP
if ($obj->Admin_Created_Outside_WP > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityHighSeverityTotal = $strSecurityHighSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Admin_Created_Outside_WPtitle)) {if (!empty($obj->Admin_Created_Outside_WPdescription)) {$strDescription = $strDescriptionStart.$obj->Admin_Created_Outside_WPdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Admin_Created_Outside_WPtooltip)) {$strTooltip = $strTooltipStart.$obj->Admin_Created_Outside_WPtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Admin_Created_Outside_WP_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Admin_Created_Outside_WPtitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Admin_Created_Outside_WP_score = $strScoreStart.$obj->Admin_Created_Outside_WP.$strScoreEnd;} if (!empty($obj->Admin_Created_Outside_WPtitle)) {$Admin_Created_Outside_WP = '<li>'.$Admin_Created_Outside_WP_title.$Admin_Created_Outside_WP_score.'</li>';}

// ******* Unknown_Files_in_WP_Core
if ($obj->Unknown_Files_in_WP_Core > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityHighSeverityTotal = $strSecurityHighSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Unknown_Files_in_WP_Coretitle)) {if (!empty($obj->Unknown_Files_in_WP_Coredescription)) {$strDescription = $strDescriptionStart.$obj->Unknown_Files_in_WP_Coredescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Unknown_Files_in_WP_Coretooltip)) {$strTooltip = $strTooltipStart.$obj->Unknown_Files_in_WP_Coretooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Unknown_Files_in_WP_Core_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Unknown_Files_in_WP_Coretitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Unknown_Files_in_WP_Core_score = $strScoreStart.$obj->Unknown_Files_in_WP_Core.$strScoreEnd;} if (!empty($obj->Unknown_Files_in_WP_Coretitle)) {$Unknown_Files_in_WP_Core = '<li>'.$Unknown_Files_in_WP_Core_title.$Unknown_Files_in_WP_Core_score.'</li>';}

// ******* Users_with_Weak_Passwords
if ($obj->Users_with_Weak_Passwords > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityHighSeverityTotal = $strSecurityHighSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Users_with_Weak_Passwordstitle)) {if (!empty($obj->Users_with_Weak_Passwordsdescription)) {$strDescription = $strDescriptionStart.$obj->Users_with_Weak_Passwordsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Users_with_Weak_Passwordstooltip)) {$strTooltip = $strTooltipStart.$obj->Users_with_Weak_Passwordstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Users_with_Weak_Passwords_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Users_with_Weak_Passwordstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Users_with_Weak_Passwords_score = $strScoreStart.$obj->Users_with_Weak_Passwords.$strScoreEnd;} if (!empty($obj->Users_with_Weak_Passwordstitle)) {$Users_with_Weak_Passwords = '<li>'.$Users_with_Weak_Passwords_title.$Users_with_Weak_Passwords_score.'</li>';}

// ******* Plugins_Requiring_an_Update
if ($obj->Plugins_Requiring_an_Update > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityMediumSeverityTotal = $strSecurityMediumSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Plugins_Requiring_an_Updatetitle)) {if (!empty($obj->Plugins_Requiring_an_Updatedescription)) {$strDescription = $strDescriptionStart.$obj->Plugins_Requiring_an_Updatedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Plugins_Requiring_an_Updatetooltip)) {$strTooltip = $strTooltipStart.$obj->Plugins_Requiring_an_Updatetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Plugins_Requiring_an_Update_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Plugins_Requiring_an_Updatetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Plugins_Requiring_an_Update_score = $strScoreStart.$obj->Plugins_Requiring_an_Update.$strScoreEnd;} if (!empty($obj->Plugins_Requiring_an_Updatetitle)) {$Plugins_Requiring_an_Update = '<li>'.$Plugins_Requiring_an_Update_title.$Plugins_Requiring_an_Update_score.'</li>';}

// ******* Abandoned_Plugins
if ($obj->Abandoned_Plugins > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityMediumSeverityTotal = $strSecurityMediumSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Abandoned_Pluginstitle)) {if (!empty($obj->Abandoned_Pluginsdescription)) {$strDescription = $strDescriptionStart.$obj->Abandoned_Pluginsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Abandoned_Pluginstooltip)) {$strTooltip = $strTooltipStart.$obj->Abandoned_Pluginstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Abandoned_Plugins_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Abandoned_Pluginstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Abandoned_Plugins_score = $strScoreStart.$obj->Abandoned_Plugins.$strScoreEnd;} if (!empty($obj->Abandoned_Pluginstitle)) {$Abandoned_Plugins = '<li>'.$Abandoned_Plugins_title.$Abandoned_Plugins_score.'</li>';}

// ******* Modified_Plugin_Files
if ($obj->Modified_Plugin_Files > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityMediumSeverityTotal = $strSecurityMediumSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Modified_Plugin_Filestitle)) {if (!empty($obj->Modified_Plugin_Filesdescription)) {$strDescription = $strDescriptionStart.$obj->Modified_Plugin_Filesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Modified_Plugin_Filestooltip)) {$strTooltip = $strTooltipStart.$obj->Modified_Plugin_Filestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Modified_Plugin_Files_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Modified_Plugin_Filestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Modified_Plugin_Files_score = $strScoreStart.$obj->Modified_Plugin_Files.$strScoreEnd;} if (!empty($obj->Modified_Plugin_Filestitle)) {$Modified_Plugin_Files = '<li>'.$Modified_Plugin_Files_title.$Modified_Plugin_Files_score.'</li>';}

// ******* Modified_Theme_Files
if ($obj->Modified_Theme_Files > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strSecurityMediumSeverityTotal = $strSecurityMediumSeverityTotal + 1;} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Modified_Theme_Filestitle)) {if (!empty($obj->Modified_Theme_Filesdescription)) {$strDescription = $strDescriptionStart.$obj->Modified_Theme_Filesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Modified_Theme_Filestooltip)) {$strTooltip = $strTooltipStart.$obj->Modified_Theme_Filestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Modified_Theme_Files_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Modified_Theme_Filestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Modified_Theme_Files_score = $strScoreStart.$obj->Modified_Theme_Files.$strScoreEnd;} if (!empty($obj->Modified_Theme_Filestitle)) {$Modified_Theme_Files = '<li>'.$Modified_Theme_Files_title.$Modified_Theme_Files_score.'</li>';}

// ******* Plugin_Status
if ($obj->Plugin_Status > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Plugin_Statustitle)) {if (!empty($obj->Plugin_Statusdescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->Plugin_Statustooltip)) {$strTooltip = $strTooltipStart.$obj->Plugin_Statustooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Plugin_Status_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Plugin_Statustitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Plugin_Status_score = $strScoreStart.$obj->Plugin_Status.$strScoreEnd;} if (!empty($obj->Plugin_Statustitle)) {$Plugin_Status = '<li>'.$Plugin_Status_title.$Plugin_Status_score.'</li>';}

// ******* Total_Plugins
if ($obj->Total_Plugins > 0)
{$strScoreEnd = '';} else {$strScoreEnd = '';} if (!empty($obj->Total_Pluginstitle)) {if (!empty($obj->Total_Pluginsdescription)) {$strDescription = $strDescriptionStart.$obj->Total_Pluginsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Total_Pluginstooltip)) {$strTooltip = $strTooltipStart.$obj->Total_Pluginstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Total_Plugins_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Total_Pluginstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Total_Plugins_score = $strScoreStart.$obj->Total_Plugins.$strScoreEnd;} if (!empty($obj->Total_Pluginstitle)) {$Total_Plugins = '<li>'.$Total_Plugins_title.$Total_Plugins_score.'</li>';}

// ******* Active_Plugins
if ($obj->Active_Plugins > 0)
{$strScoreEnd = '';} else {$strScoreEnd = '';} if (!empty($obj->Active_Pluginstitle)) {if (!empty($obj->Active_Pluginsdescription)) {$strDescription = $strDescriptionStart.$obj->Active_Pluginsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Active_Pluginstooltip)) {$strTooltip = $strTooltipStart.$obj->Active_Pluginstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Active_Plugins_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Active_Pluginstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Active_Plugins_score = $strScoreStart.$obj->Active_Plugins.$strScoreEnd;} if (!empty($obj->Active_Pluginstitle)) {$Active_Plugins = '<li>'.$Active_Plugins_title.$Active_Plugins_score.'</li>';}

// ******* Inactive_Plugins
if ($obj->Inactive_Plugins > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';} else {$strScoreEnd = '';} if (!empty($obj->Inactive_Pluginstitle)) {if (!empty($obj->Inactive_Pluginsdescription)) {$strDescription = $strDescriptionStart.$obj->Inactive_Pluginsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Inactive_Pluginstooltip)) {$strTooltip = $strTooltipStart.$obj->Inactive_Pluginstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Inactive_Plugins_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Inactive_Pluginstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Inactive_Plugins_score = $strScoreStart.$obj->Inactive_Plugins.$strScoreEnd;} if (!empty($obj->Inactive_Pluginstitle)) {$Inactive_Plugins = '<li>'.$Inactive_Plugins_title.$Inactive_Plugins_score.'</li>';}

// ******* Available_Updates
if ($obj->Available_Updates > 0)
{$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';} else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} if (!empty($obj->Available_Updatestitle)) {if (!empty($obj->Available_Updatesdescription)) {$strDescription = $strDescriptionStart.$obj->Available_Updatesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Available_Updatestooltip)) {$strTooltip = $strTooltipStart.$obj->Available_Updatestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Available_Updates_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Available_Updatestitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Available_Updates_score = $strScoreStart.$obj->Available_Updates.$strScoreEnd;} if (!empty($obj->Available_Updatestitle)) {$Available_Updates = '<li>'.$Available_Updates_title.$Available_Updates_score.'</li>';}

// ******* Updates_Last_30_Days
if ($obj->Updates_Last_30_Days > 0)
{$strScoreEnd = '';} else {$strScoreEnd = '';} if (!empty($obj->Updates_Last_30_Daystitle)) {if (!empty($obj->Updates_Last_30_Daysdescription)) {$strDescription = $strDescriptionStart.$obj->Updates_Last_30_Daysdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Updates_Last_30_Daystooltip)) {$strTooltip = $strTooltipStart.$obj->Updates_Last_30_Daystooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Updates_Last_30_Days_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Updates_Last_30_Daystitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Updates_Last_30_Days_score = $strScoreStart.$obj->Updates_Last_30_Days.$strScoreEnd;} if (!empty($obj->Updates_Last_30_Daystitle)) {$Updates_Last_30_Days = '<li>'.$Updates_Last_30_Days_title.$Updates_Last_30_Days_score.'</li>';}

// ******* Updates_Last_7_Days
if ($obj->Updates_Last_7_Days > 0)
{$strScoreEnd = '';} else {$strScoreEnd = '';} if (!empty($obj->Updates_Last_7_Daystitle)) {if (!empty($obj->Updates_Last_7_Daysdescription)) {$strDescription = $strDescriptionStart.$obj->Updates_Last_7_Daysdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Updates_Last_7_Daystooltip)) {$strTooltip = $strTooltipStart.$obj->Updates_Last_7_Daystooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Updates_Last_7_Days_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Updates_Last_7_Daystitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Updates_Last_7_Days_score = $strScoreStart.$obj->Updates_Last_7_Days.$strScoreEnd;} if (!empty($obj->Updates_Last_7_Daystitle)) {$Updates_Last_7_Days = '<li>'.$Updates_Last_7_Days_title.$Updates_Last_7_Days_score.'</li>';}

// ******* Updates_Today
if ($obj->Updates_Today > 0)
{$strScoreEnd = '';} else {$strScoreEnd = '';} 
if (!empty($obj->Updates_Todaytitle)) {if (!empty($obj->Updates_Todaydescription)) {$strDescription = $strDescriptionStart.$obj->Updates_Todaydescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Updates_Todaytooltip)) {$strTooltip = $strTooltipStart.$obj->Updates_Todaytooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Updates_Today_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Updates_Todaytitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Updates_Today_score = $strScoreStart.$obj->Updates_Today.$strScoreEnd;} if (!empty($obj->Updates_Todaytitle)) {$Updates_Today = '<li>'.$Updates_Today_title.$Updates_Today_score.'</li>';}

// ******* Uptime_Last_30_Days
if ($obj->Uptime_Last_30_Days >= 99.9) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';}
elseif ($obj->Uptime_Last_30_Days < 99.9 && $obj->Uptime_Last_30_Days >= 99) {$strScoreEnd = '<span class="blue" data-title="May&nbsp;require investigation">!</span></span>';} 
elseif ($obj->Uptime_Last_30_Days < 99) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strUptimeTotal = $strUptimeTotal + 1;} 
if (!empty($obj->Uptime_Last_30_Daystitle)) {if (!empty($obj->Uptime_Last_30_Daysdescription)) {$strDescription = $strDescriptionStart.$obj->Uptime_Last_30_Daysdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Uptime_Last_30_Daystooltip)) {$strTooltip = $strTooltipStart.$obj->Uptime_Last_30_Daystooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Uptime_Last_30_Days_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Uptime_Last_30_Daystitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Uptime_Last_30_Days_score = $strScoreStart.$obj->Uptime_Last_30_Days.'%'.$strScoreEnd;} if (!empty($obj->Uptime_Last_30_Daystitle)) {$Uptime_Last_30_Days = '<li>'.$Uptime_Last_30_Days_title.$Uptime_Last_30_Days_score.'</li>';}

// ******* Uptime_Last_7_Days
if ($obj->Uptime_Last_7_Days >= 99.9) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';}
elseif ($obj->Uptime_Last_7_Days < 99.9 && $obj->Uptime_Last_7_Days >= 99) {$strScoreEnd = '<span class="blue" data-title="May&nbsp;require investigation">!</span></span>';} 
elseif ($obj->Uptime_Last_7_Days < 99) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strUptimeTotal = $strUptimeTotal + 1;}
if (!empty($obj->Uptime_Last_7_Daystitle)) {if (!empty($obj->Uptime_Last_7_Daysdescription)) {$strDescription = $strDescriptionStart.$obj->Uptime_Last_7_Daysdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Uptime_Last_7_Daystooltip)) {$strTooltip = $strTooltipStart.$obj->Uptime_Last_7_Daystooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Uptime_Last_7_Days_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Uptime_Last_7_Daystitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Uptime_Last_7_Days_score = $strScoreStart.$obj->Uptime_Last_7_Days.'%'.$strScoreEnd;} if (!empty($obj->Uptime_Last_7_Daystitle)) {$Uptime_Last_7_Days = '<li>'.$Uptime_Last_7_Days_title.$Uptime_Last_7_Days_score.'</li>';}

// ******* Uptime_Today
if ($obj->Uptime_Today >= 99.9) {$strScoreEnd = '<span  data-title="Pass">&#10003;</span></span>';}
elseif ($obj->Uptime_Today < 99.9 && $obj->Uptime_Today >= 99) {$strScoreEnd = '<span class="blue" data-title="May&nbsp;require investigation">!</span></span>';} 
elseif ($obj->Uptime_Today < 99) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strUptimeTotal = $strUptimeTotal + 1;} 
if (!empty($obj->Uptime_Todaytitle)) {if (!empty($obj->Uptime_Todaydescription)) {$strDescription = $strDescriptionStart.$obj->Uptime_Todaydescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Uptime_Todaytooltip)) {$strTooltip = $strTooltipStart.$obj->Uptime_Todaytooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Uptime_Today_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Uptime_Todaytitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Uptime_Today_score = $strScoreStart.$obj->Uptime_Today.'%'.$strScoreEnd;} if (!empty($obj->Uptime_Todaytitle)) {$Uptime_Today = '<li>'.$Uptime_Today_title.$Uptime_Today_score.'</li>';}

// ******* Cumulative_Layout_Shift_CLS_Mobile
if ($obj->Cumulative_Layout_Shift_CLS_Mobile > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;}
elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile >= 2.5 && $obj->Cumulative_Layout_Shift_CLS_Mobile <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile >= 0.01 && $obj->Cumulative_Layout_Shift_CLS_Mobile < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletitle)) {if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Cumulative_Layout_Shift_CLS_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Cumulative_Layout_Shift_CLS_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Cumulative_Layout_Shift_CLS_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Cumulative_Layout_Shift_CLS_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Cumulative_Layout_Shift_CLS_Mobile_score = $strScoreStart.$obj->Cumulative_Layout_Shift_CLS_Mobile.$strScoreEnd;} if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletitle)) {$Cumulative_Layout_Shift_CLS_Mobile = '<li>'.$Cumulative_Layout_Shift_CLS_Mobile_title.$Cumulative_Layout_Shift_CLS_Mobile_score.'</li>';}

// ******* Largest_Contentful_Paint_LCP_Mobile
if ($obj->Largest_Contentful_Paint_LCP_Mobile > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;}
elseif ($obj->Largest_Contentful_Paint_LCP_Mobile >= 2.5 && $obj->Largest_Contentful_Paint_LCP_Mobile <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
elseif ($obj->Largest_Contentful_Paint_LCP_Mobile >= 0.01 && $obj->Largest_Contentful_Paint_LCP_Mobile < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Largest_Contentful_Paint_LCP_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletitle)) {if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Largest_Contentful_Paint_LCP_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Largest_Contentful_Paint_LCP_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Largest_Contentful_Paint_LCP_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Largest_Contentful_Paint_LCP_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Largest_Contentful_Paint_LCP_Mobile_score = $strScoreStart.$obj->Largest_Contentful_Paint_LCP_Mobile.$strScoreEnd;} if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletitle)) {$Largest_Contentful_Paint_LCP_Mobile = '<li>'.$Largest_Contentful_Paint_LCP_Mobile_title.$Largest_Contentful_Paint_LCP_Mobile_score.'</li>';}

// ******* First_Input_Delay_FID_Mobile
if ($obj->First_Input_Delay_FID_Mobile > 300) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;}
elseif ($obj->First_Input_Delay_FID_Mobile >= 100 && $obj->First_Input_Delay_FID_Mobile <= 300) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
elseif ($obj->First_Input_Delay_FID_Mobile >= 0.01 && $obj->First_Input_Delay_FID_Mobile < 100) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->First_Input_Delay_FID_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsMobileTotal = $strCoreWebVitalsMobileTotal + 1;} 
if (!empty($obj->First_Input_Delay_FID_Mobiletitle)) {if (!empty($obj->First_Input_Delay_FID_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->First_Input_Delay_FID_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->First_Input_Delay_FID_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->First_Input_Delay_FID_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $First_Input_Delay_FID_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->First_Input_Delay_FID_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $First_Input_Delay_FID_Mobile_score = $strScoreStart.$obj->First_Input_Delay_FID_Mobile.$strScoreEnd;} if (!empty($obj->First_Input_Delay_FID_Mobiletitle)) {$First_Input_Delay_FID_Mobile = '<li>'.$First_Input_Delay_FID_Mobile_title.$First_Input_Delay_FID_Mobile_score.'</li>';}

// ******* Cumulative_Layout_Shift_CLS_Desktop
if ($obj->Cumulative_Layout_Shift_CLS_Desktop > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;}
elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop >= 2.5 && $obj->Cumulative_Layout_Shift_CLS_Desktop <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop >= 0.01 && $obj->Cumulative_Layout_Shift_CLS_Desktop < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptitle)) {if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Cumulative_Layout_Shift_CLS_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Cumulative_Layout_Shift_CLS_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Cumulative_Layout_Shift_CLS_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Cumulative_Layout_Shift_CLS_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Cumulative_Layout_Shift_CLS_Desktop_score = $strScoreStart.$obj->Cumulative_Layout_Shift_CLS_Desktop.$strScoreEnd;} if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptitle)) {$Cumulative_Layout_Shift_CLS_Desktop = '<li>'.$Cumulative_Layout_Shift_CLS_Desktop_title.$Cumulative_Layout_Shift_CLS_Desktop_score.'</li>';}

// ******* Largest_Contentful_Paint_LCP_Desktop
if ($obj->Largest_Contentful_Paint_LCP_Desktop > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;}
elseif ($obj->Largest_Contentful_Paint_LCP_Desktop >= 2.5 && $obj->Largest_Contentful_Paint_LCP_Desktop <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
elseif ($obj->Largest_Contentful_Paint_LCP_Desktop >= 0.01 && $obj->Largest_Contentful_Paint_LCP_Desktop < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Largest_Contentful_Paint_LCP_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptitle)) {if (!empty($obj->Largest_Contentful_Paint_LCP_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Largest_Contentful_Paint_LCP_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Largest_Contentful_Paint_LCP_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Largest_Contentful_Paint_LCP_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Largest_Contentful_Paint_LCP_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Largest_Contentful_Paint_LCP_Desktop_score = $strScoreStart.$obj->Largest_Contentful_Paint_LCP_Desktop.$strScoreEnd;} if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptitle)) {$Largest_Contentful_Paint_LCP_Desktop = '<li>'.$Largest_Contentful_Paint_LCP_Desktop_title.$Largest_Contentful_Paint_LCP_Desktop_score.'</li>';}

// ******* First_Input_Delay_FID_Desktop
if ($obj->First_Input_Delay_FID_Desktop > 300) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;}
elseif ($obj->First_Input_Delay_FID_Desktop >= 100 && $obj->First_Input_Delay_FID_Desktop <= 300) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
elseif ($obj->First_Input_Delay_FID_Desktop >= 0.01 && $obj->First_Input_Delay_FID_Desktop < 100) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->First_Input_Delay_FID_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strCoreWebVitalsDesktopTotal = $strCoreWebVitalsDesktopTotal + 1;} 
if (!empty($obj->First_Input_Delay_FID_Desktoptitle)) {if (!empty($obj->First_Input_Delay_FID_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->First_Input_Delay_FID_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->First_Input_Delay_FID_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->First_Input_Delay_FID_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $First_Input_Delay_FID_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->First_Input_Delay_FID_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $First_Input_Delay_FID_Desktop_score = $strScoreStart.$obj->First_Input_Delay_FID_Desktop.$strScoreEnd;} if (!empty($obj->First_Input_Delay_FID_Desktoptitle)) {$First_Input_Delay_FID_Desktop = '<li>'.$First_Input_Delay_FID_Desktop_title.$First_Input_Delay_FID_Desktop_score.'</li>';}

// ******* Certificate[0]
$CertIssuer = $obj->Certificate[0]->issuer;
if(empty($CertIssuer)) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>'; $CertFailure = 3;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Certificatetitle)) {
	if (!empty($obj->Certificatedescription)) {
		$strDescription = '';} 
	else {$strDescription = '';} 
	if (!empty($obj->Certificatetooltip)) {
		$strTooltip = ''; 
		$strTitleMarginStart = '<span class="addmargin">'; 
		$strTitleMarginEnd = '</span>';} 
	else {
		$strTooltip = '';
		$strTitleMarginStart = '<span>';
		$strTitleMarginEnd = '</span>';} 
	if(!empty($CertIssuer)) {
		$Certificatetitle = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Certificatetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; 
		$Certificate_score = '<span class="individual-score" style="min-width:50%">'.$CertIssuer.$strScoreEnd;
		$CertValidFrom = '<li><span class="score">Valid from: </span><span class="individual-score" style="min-width:60%">'.$obj->Certificate[0]->from.'<span data-title="Pass">&#10003;</span></span></li>';
		$strTodayFinalFormatted = date("Y/m/d"); 
		$strExpires = date_create_from_format('d/m/Y', $obj->Certificate[0]->to);
		$strExpiresFinalFormatted = date_format($strExpires, 'Y/m/d'); 
		$strExpiresFinal = date_format($strExpires, 'd/m/Y'); 
		$date1=date_create($strTodayFinalFormatted);
		$date2=date_create($strExpiresFinalFormatted);
		$diff=date_diff($date1,$date2);
		$DaysUntilExpiry = $diff->format("%R%a");
		if ($DaysUntilExpiry > 30 && $CertFailure != 3) {
		  $strExpireScoreTitleData = '<span class="pass" data-title="'.str_replace("+","",$DaysUntilExpiry).'&nbsp;days remaining">&#10003;</span>';
		  	$CertFailure = 0;
		} elseif ($DaysUntilExpiry > 0 && $DaysUntilExpiry <= 30 && $CertFailure != 3) {
		  $strExpireScoreTitleData = '<span class="blue" data-title="'.str_replace("+","",$DaysUntilExpiry).'&nbsp;days&nbsp;remaining - expiring soon!">!</span>';
		  	$CertFailure = 2;
		} elseif ($DaysUntilExpiry <= 0 && $CertFailure != 3) {
		  $strExpireScoreTitleData = '<span class="red" data-title="Expired">&#10005;</span>';
		  $CertFailure = 1;
		}
		$CertValidTo = '<li><span class="score">Expires on:  </span><span class="individual-score" style="min-width:50%">'.$strExpiresFinal.$strExpireScoreTitleData.'</span></li>';
	} else {
		$Certificatetitle = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">No SSL certificate applied</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; 
		$Certificate_score = $strScoreStart.'Absent'.$strScoreEnd;
		$CertValidFrom = '';
		$CertValidTo = '';
		$CertFailure = 3;
	}
	if (!empty($obj->Certificatetitle)) {
		$Certificate = '<li>'.$Certificatetitle.$Certificate_score.'</li>'.$CertValidFrom.$CertValidTo;	
	}
}

// ******* Performance_Desktop
if ($obj->Performance_Desktop < 33 && $obj->Performance_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;}
elseif ($obj->Performance_Desktop >= 33 && $obj->Performance_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
elseif ($obj->Performance_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Performance_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
if (!empty($obj->Performance_Desktoptitle)) {if (!empty($obj->Performance_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Performance_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Performance_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Performance_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Performance_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Performance_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Performance_Desktop_score = $strScoreStart.$obj->Performance_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Performance_Desktoptitle)) {$Performance_Desktop = '<li><span class="key performance"></span>'.$Performance_Desktop_title.$Performance_Desktop_score.'</li>';}

// ******* Accessibility_Desktop
if ($obj->Accessibility_Desktop < 33 && $obj->Accessibility_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;}
elseif ($obj->Accessibility_Desktop >= 33 && $obj->Accessibility_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
elseif ($obj->Accessibility_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Accessibility_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
if (!empty($obj->Accessibility_Desktoptitle)) {if (!empty($obj->Accessibility_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Accessibility_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Accessibility_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Accessibility_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Accessibility_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Accessibility_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Accessibility_Desktop_score = $strScoreStart.$obj->Accessibility_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Accessibility_Desktoptitle)) {$Accessibility_Desktop = '<li><span class="key accessibility"></span>'.$Accessibility_Desktop_title.$Accessibility_Desktop_score.'</li>';}

// ******* Best_Practice_Desktop
if ($obj->Best_Practice_Desktop < 33 && $obj->Best_Practice_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;}
elseif ($obj->Best_Practice_Desktop >= 33 && $obj->Best_Practice_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
elseif ($obj->Best_Practice_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Best_Practice_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
if (!empty($obj->Best_Practice_Desktoptitle)) {if (!empty($obj->Best_Practice_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Best_Practice_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Best_Practice_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Best_Practice_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Best_Practice_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Best_Practice_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Best_Practice_Desktop_score = $strScoreStart.$obj->Best_Practice_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Best_Practice_Desktoptitle)) {$Best_Practice_Desktop = '<li><span class="key best-practice"></span>'.$Best_Practice_Desktop_title.$Best_Practice_Desktop_score.'</li>';}

// ******* SEO_Desktop
if ($obj->SEO_Desktop < 33 && $obj->SEO_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;}
elseif ($obj->SEO_Desktop >= 33 && $obj->SEO_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
elseif ($obj->SEO_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->SEO_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsDesktop = $strInsightsDesktop + 1;} 
if (!empty($obj->SEO_Desktoptitle)) {if (!empty($obj->SEO_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->SEO_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->SEO_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->SEO_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $SEO_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->SEO_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $SEO_Desktop_score = $strScoreStart.$obj->SEO_Desktop.'%'.$strScoreEnd;} if (!empty($obj->SEO_Desktoptitle)) {$SEO_Desktop = '<li><span class="key seo"></span>'.$SEO_Desktop_title.$SEO_Desktop_score.'</li>';}

// ******* Performance_Mobile
if ($obj->Performance_Mobile < 33 && $obj->Performance_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;}
elseif ($obj->Performance_Mobile >= 33 && $obj->Performance_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
elseif ($obj->Performance_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Performance_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
if (!empty($obj->Performance_Mobiletitle)) {if (!empty($obj->Performance_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Performance_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Performance_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Performance_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Performance_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Performance_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Performance_Mobile_score = $strScoreStart.$obj->Performance_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Performance_Mobiletitle)) {$Performance_Mobile = '<li><span class="key performance"></span>'.$Performance_Mobile_title.$Performance_Mobile_score.'</li>';}

// ******* Accessibility_Mobile
if ($obj->Accessibility_Mobile < 33 && $obj->Accessibility_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;}
elseif ($obj->Accessibility_Mobile >= 33 && $obj->Accessibility_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
elseif ($obj->Accessibility_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Accessibility_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
if (!empty($obj->Accessibility_Mobiletitle)) {if (!empty($obj->Accessibility_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Accessibility_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Accessibility_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Accessibility_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Accessibility_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Accessibility_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Accessibility_Mobile_score = $strScoreStart.$obj->Accessibility_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Accessibility_Mobiletitle)) {$Accessibility_Mobile = '<li><span class="key accessibility"></span>'.$Accessibility_Mobile_title.$Accessibility_Mobile_score.'</li>';}

// ******* Best_Practice_Mobile
if ($obj->Best_Practice_Mobile < 33 && $obj->Best_Practice_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;}
elseif ($obj->Best_Practice_Mobile >= 33 && $obj->Best_Practice_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
elseif ($obj->Best_Practice_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->Best_Practice_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
if (!empty($obj->Best_Practice_Mobiletitle)) {if (!empty($obj->Best_Practice_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Best_Practice_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Best_Practice_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Best_Practice_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Best_Practice_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Best_Practice_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Best_Practice_Mobile_score = $strScoreStart.$obj->Best_Practice_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Best_Practice_Mobiletitle)) {$Best_Practice_Mobile = '<li><span class="key best-practice"></span>'.$Best_Practice_Mobile_title.$Best_Practice_Mobile_score.'</li>';}

// ******* SEO_Mobile
if ($obj->SEO_Mobile < 33 && $obj->SEO_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;}
elseif ($obj->SEO_Mobile >= 33 && $obj->SEO_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
elseif ($obj->SEO_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
elseif ($obj->SEO_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';$strInsightsMobile = $strInsightsMobile + 1;} 
if (!empty($obj->SEO_Mobiletitle)) {if (!empty($obj->SEO_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->SEO_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->SEO_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->SEO_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $SEO_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->SEO_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $SEO_Mobile_score = $strScoreStart.$obj->SEO_Mobile.'%'.$strScoreEnd;} if (!empty($obj->SEO_Mobiletitle)) {$SEO_Mobile = '<li><span class="key seo"></span>'.$SEO_Mobile_title.$SEO_Mobile_score.'</li>';}

// // ******* PWA_Desktop
// if ($obj->PWA_Desktop < 33 && $obj->PWA_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
// elseif ($obj->PWA_Desktop >= 33 && $obj->PWA_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
// elseif ($obj->PWA_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
// elseif ($obj->PWA_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
// if (!empty($obj->PWA_Desktoptitle)) {if (!empty($obj->PWA_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->PWA_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->PWA_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->PWA_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $PWA_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->PWA_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $PWA_Desktop_score = $strScoreStart.$obj->PWA_Desktop.'%'.$strScoreEnd;} if (!empty($obj->PWA_Desktoptitle)) {$PWA_Desktop = '<li><span class="key pwa"></span>'.$PWA_Desktop_title.$PWA_Desktop_score.'</li>';}

// // ******* PWA_Mobile
// if ($obj->PWA_Mobile < 33 && $obj->PWA_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
// elseif ($obj->PWA_Mobile >= 33 && $obj->PWA_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
// elseif ($obj->PWA_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
// elseif ($obj->PWA_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
// if (!empty($obj->PWA_Mobiletitle)) {if (!empty($obj->PWA_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->PWA_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->PWA_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->PWA_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $PWA_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->PWA_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $PWA_Mobile_score = $strScoreStart.$obj->PWA_Mobile.'%'.$strScoreEnd;} if (!empty($obj->PWA_Mobiletitle)) {$PWA_Mobile = '<li><span class="key pwa"></span>'.$PWA_Mobile_title.$PWA_Mobile_score.'</li>';}

// // ******* Benchmark_Desktop
// $strScoreEnd = '</span>';
// if (!empty($obj->Benchmark_Desktoptitle)) {if (!empty($obj->Benchmark_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Benchmark_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Benchmark_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Benchmark_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Benchmark_Desktop_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Benchmark_Desktoptitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Benchmark_Desktop_score = $strScoreStart.$obj->Benchmark_Desktop.$strScoreEnd;} if (!empty($obj->Benchmark_Desktoptitle)) {$Benchmark_Desktop = '<li>'.$Benchmark_Desktop_title.$Benchmark_Desktop_score.'</li>';}

// // ******* Benchmark_Mobile
// $strScoreEnd = '</span>';
// if (!empty($obj->Benchmark_Mobiletitle)) {if (!empty($obj->Benchmark_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Benchmark_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Benchmark_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Benchmark_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Benchmark_Mobile_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Benchmark_Mobiletitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Benchmark_Mobile_score = $strScoreStart.$obj->Benchmark_Mobile.$strScoreEnd;} if (!empty($obj->Benchmark_Mobiletitle)) {$Benchmark_Mobile = '<li>'.$Benchmark_Mobile_title.$Benchmark_Mobile_score.'</li>';}

// ******* Site_Crawl_Links_Html
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Links_Htmltitle)) {if (!empty($obj->Site_Crawl_Links_Htmldescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Links_Htmldescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Links_Htmltooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Links_Htmltooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_Html_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Links_Htmltitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_Html_score = $strScoreStart.$obj->Site_Crawl_Links_Html.''.$strScoreEnd;} if (!empty($obj->Site_Crawl_Links_Htmltitle)) {$Site_Crawl_Links_Html = '<li>'.$Site_Crawl_Links_Html_title.$Site_Crawl_Links_Html_score.'</li>';}

// ******* Site_Crawl_Links
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Linkstitle)) {if (!empty($obj->Site_Crawl_Linksdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Linksdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Linkstooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Linkstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Linkstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_score = $strScoreStart.$obj->Site_Crawl_Links.$strScoreEnd;} if (!empty($obj->Site_Crawl_Linkstitle)) {$Site_Crawl_Links = '<li>'.$Site_Crawl_Links_title.$Site_Crawl_Links_score.'</li>';}

// ******* Site_Crawl_Broken_Links
if ($obj->Site_Crawl_Broken_Links > 0 ) {$strScoreEnd = '<span class="blue" data-title="Removal&nbsp;of&nbsp;broken links&nbsp;is&nbsp;recommended">!</span></span>';}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Broken_Linkstitle)) {if (!empty($obj->Site_Crawl_Broken_Linksdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Broken_Linksdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Broken_Linkstooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Broken_Linkstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Broken_Links_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Broken_Linkstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Broken_Links_score = $strScoreStart.$obj->Site_Crawl_Broken_Links.$strScoreEnd;} if (!empty($obj->Site_Crawl_Broken_Linkstitle)) {$Site_Crawl_Broken_Links = '<li>'.$Site_Crawl_Broken_Links_title.$Site_Crawl_Broken_Links_score.'</li>';}

// ******* Site_Crawl_Multiple_H1
if ($obj->Site_Crawl_Multiple_H1 > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Multiple_H1title)) {if (!empty($obj->Site_Crawl_Multiple_H1description)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Multiple_H1description.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Multiple_H1tooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Multiple_H1tooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Multiple_H1_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Multiple_H1title.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Multiple_H1_score = $strScoreStart.$obj->Site_Crawl_Multiple_H1.$strScoreEnd;} if (!empty($obj->Site_Crawl_Multiple_H1title)) {$Site_Crawl_Multiple_H1 = '<li>'.$Site_Crawl_Multiple_H1_title.$Site_Crawl_Multiple_H1_score.'</li>';}

// ******* Site_Crawl_Title_Long
if ($obj->Site_Crawl_Title_Long > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Title_Longtitle)) {if (!empty($obj->Site_Crawl_Title_Longdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Title_Longdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Title_Longtooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Title_Longtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Title_Long_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Title_Longtitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Title_Long_score = $strScoreStart.$obj->Site_Crawl_Title_Long.$strScoreEnd;} if (!empty($obj->Site_Crawl_Title_Longtitle)) {$Site_Crawl_Title_Long = '<li>'.$Site_Crawl_Title_Long_title.$Site_Crawl_Title_Long_score.'</li>';}

// ******* Site_Crawl_Title_Short
if ($obj->Site_Crawl_Title_Short > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Title_Shorttitle)) {if (!empty($obj->Site_Crawl_Title_Shortdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Title_Shortdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Title_Shorttooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Title_Shorttooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Title_Short_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Title_Shorttitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Title_Short_score = $strScoreStart.$obj->Site_Crawl_Title_Short.$strScoreEnd;} if (!empty($obj->Site_Crawl_Title_Shorttitle)) {$Site_Crawl_Title_Short = '<li>'.$Site_Crawl_Title_Short_title.$Site_Crawl_Title_Short_score.'</li>';}

// ******* Site_Crawl_Description_Long
if ($obj->Site_Crawl_Description_Long > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Description_Longtitle)) {if (!empty($obj->Site_Crawl_Description_Longdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Description_Longdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Description_Longtooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Description_Longtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Description_Long_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Description_Longtitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Description_Long_score = $strScoreStart.$obj->Site_Crawl_Description_Long.$strScoreEnd;} if (!empty($obj->Site_Crawl_Description_Longtitle)) {$Site_Crawl_Description_Long = '<li>'.$Site_Crawl_Description_Long_title.$Site_Crawl_Description_Long_score.'</li>';}

// ******* Site_Crawl_Description_Short
if ($obj->Site_Crawl_Description_Short > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Description_Shorttitle)) {if (!empty($obj->Site_Crawl_Description_Shortdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Description_Shortdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Description_Shorttooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Description_Shorttooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Description_Short_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Description_Shorttitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Description_Short_score = $strScoreStart.$obj->Site_Crawl_Description_Short.$strScoreEnd;} if (!empty($obj->Site_Crawl_Description_Shorttitle)) {$Site_Crawl_Description_Short = '<li>'.$Site_Crawl_Description_Short_title.$Site_Crawl_Description_Short_score.'</li>';}

// ******* Site_Crawl_Links_Image
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Links_Imagetitle)) {if (!empty($obj->Site_Crawl_Links_Imagedescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Links_Imagedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Links_Imagetooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Links_Imagetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_Image_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Links_Imagetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_Image_score = $strScoreStart.$obj->Site_Crawl_Links_Image.$strScoreEnd;} if (!empty($obj->Site_Crawl_Links_Imagetitle)) {$Site_Crawl_Links_Image = '<li>'.$Site_Crawl_Links_Image_title.$Site_Crawl_Links_Image_score.'</li>';}

// ******* Site_Crawl_Image_Size
if ($obj->Site_Crawl_Image_Size > 0 ) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';$strContentScanTotal = $strContentScanTotal + 1;}
else {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
if (!empty($obj->Site_Crawl_Image_Sizetitle)) {if (!empty($obj->Site_Crawl_Image_Sizedescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Image_Sizedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Image_Sizetooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Image_Sizetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Image_Size_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Image_Sizetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Image_Size_score = $strScoreStart.$obj->Site_Crawl_Image_Size.$strScoreEnd;} if (!empty($obj->Site_Crawl_Image_Sizetitle)) {$Site_Crawl_Image_Size = '<li>'.$Site_Crawl_Image_Size_title.$Site_Crawl_Image_Size_score.'</li>';}

// ******* Site_Crawl_Links_Css
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Links_Csstitle)) {if (!empty($obj->Site_Crawl_Links_Cssdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Links_Cssdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Links_Csstooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Links_Csstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_Css_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Links_Csstitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_Css_score = $strScoreStart.$obj->Site_Crawl_Links_Css.$strScoreEnd;} if (!empty($obj->Site_Crawl_Links_Csstitle)) {$Site_Crawl_Links_Css = '<li>'.$Site_Crawl_Links_Css_title.$Site_Crawl_Links_Css_score.'</li>';}

// ******* Site_Crawl_Links_Iframe
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Links_Iframetitle)) {if (!empty($obj->Site_Crawl_Links_Iframedescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Links_Iframedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Links_Iframetooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Links_Iframetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_Iframe_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Links_Iframetitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_Iframe_score = $strScoreStart.$obj->Site_Crawl_Links_Iframe.$strScoreEnd;} if (!empty($obj->Site_Crawl_Links_Iframetitle)) {$Site_Crawl_Links_Iframe = '<li>'.$Site_Crawl_Links_Iframe_title.$Site_Crawl_Links_Iframe_score.'</li>';}

// ******* Site_Crawl_Links_Xml
$strScoreEnd = '</span>';
if (!empty($obj->Site_Crawl_Links_Xmltitle)) {if (!empty($obj->Site_Crawl_Links_Xmldescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Links_Xmldescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Links_Xmltooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Links_Xmltooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Links_Xml_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->Site_Crawl_Links_Xmltitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Links_Xml_score = $strScoreStart.$obj->Site_Crawl_Links_Xml.$strScoreEnd;} if (!empty($obj->Site_Crawl_Links_Xmltitle)) {$Site_Crawl_Links_Xml = '<li>'.$Site_Crawl_Links_Xml_title.$Site_Crawl_Links_Xml_score.'</li>';}

// ******* PHP_Version
if (($obj->PHP_Update) !== 0.0 ) {
	$strScoreEnd = '<span class="red" data-title="Fail - the site is currently&nbsp;on&nbsp;an unsupported version&nbsp;of&nbsp;PHP">&#10005;</span></span>';}
	else {$strScoreEnd = '<span class="green" data-title="Pass">&#10003;</span></span>';}
if (!empty($obj->PHP_Versiontitle)) {if (!empty($obj->PHP_Versiondescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->PHP_Versiontooltip)) {$strTooltip = $strTooltipStart.$obj->PHP_Versiontooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $PHP_Version_title = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title">'.$obj->PHP_Versiontitle.'</span>'.$strDescriptionMarginStart.$strDescription.$strTitleMarginEnd.$strTitleEnd; $PHP_Version_score = $strScoreStart.$obj->PHP_Version.$strScoreEnd;} if (!empty($obj->PHP_Versiontitle)) {$PHP_Version = '<li>'.$PHP_Version_title.$PHP_Version_score.'</li>';}













// ******************************** OVERVIEW SECTION ******************************** 

// ******* PHP_Update_performance_overview
if ($strTestValues === "on") {$obj->PHP_Update = 0.1;}
if (($obj->PHP_Update) !== 0.0 ) {
	$strScoreEnd = '<span class="red" data-title="Fail - the site is currently&nbsp;on&nbsp;an unsupported version&nbsp;of&nbsp;PHP">&#10005;</span></span>';
	$strLinkID = 'phpversionperformance';
	$strLinkURL = '#php-version-anchor';
	if (!empty($obj->PHP_Versiontitle)) {if (!empty($obj->PHP_Versiondescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->PHP_Versiontooltip)) {$strTooltip = $strTooltipStart.$obj->PHP_Versiontooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $PHP_Version_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->PHP_Versiontitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $PHP_Version_score = $strScoreStart.$obj->PHP_Version.$strScoreEnd;} if (!empty($obj->PHP_Versiontitle)) {$PHP_Version_performance_overview = '<li>'.$PHP_Version_title_overview.$PHP_Version_score.'</li>';}
}

// ******* PHP_Update_security_overview
if ($strTestValues === "on") {$obj->PHP_Update = 0.1;}
if (($obj->PHP_Update) !== 0.0 ) {
	$strScoreEnd = '<span class="red" data-title="Fail - the site is currently&nbsp;on&nbsp;an unsupported version&nbsp;of&nbsp;PHP">&#10005;</span></span>';
	$strLinkID = 'phpversionsecurity';
	$strLinkURL = '#php-version-anchor';
	if (!empty($obj->PHP_Versiontitle)) {if (!empty($obj->PHP_Versiondescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->PHP_Versiontooltip)) {$strTooltip = $strTooltipStart.$obj->PHP_Versiontooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $PHP_Version_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->PHP_Versiontitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $PHP_Version_score = $strScoreStart.$obj->PHP_Version.$strScoreEnd;} if (!empty($obj->PHP_Versiontitle)) {$PHP_Version_security_overview = '<li>'.$PHP_Version_title_overview.$PHP_Version_score.'</li>';}
}

// ******* First_Input_Delay_FID_Desktop
if ($strTestValues === "on") {$obj->First_Input_Delay_FID_Desktop = 301;}
if (($obj->First_Input_Delay_FID_Desktop) >= 100) {
	if ($obj->First_Input_Delay_FID_Desktop > 300) {
		$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->First_Input_Delay_FID_Desktop >= 100 && $obj->First_Input_Delay_FID_Desktop <= 300) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';}
	$strLinkID = 'corewebvitalsfidd';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->First_Input_Delay_FID_Desktoptitle)) {if (!empty($obj->First_Input_Delay_FID_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->First_Input_Delay_FID_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->First_Input_Delay_FID_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->First_Input_Delay_FID_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $First_Input_Delay_FID_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->First_Input_Delay_FID_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $First_Input_Delay_FID_Desktop_score = $strScoreStart.$obj->First_Input_Delay_FID_Desktop.$strScoreEnd;} if (!empty($obj->First_Input_Delay_FID_Desktoptitle)) {$First_Input_Delay_FID_Desktop_overview = '<li>'.$First_Input_Delay_FID_Desktop_title_overview.$First_Input_Delay_FID_Desktop_score.'</li>';}
}

// ******* Largest_Contentful_Paint_LCP_Desktop
if ($strTestValues === "on") {$obj->Largest_Contentful_Paint_LCP_Desktop = 5;}
if (($obj->Largest_Contentful_Paint_LCP_Desktop) >= 2.5 || ($obj->Largest_Contentful_Paint_LCP_Desktop) == 0) {
	if ($obj->Largest_Contentful_Paint_LCP_Desktop > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Largest_Contentful_Paint_LCP_Desktop >= 2.5 && $obj->Largest_Contentful_Paint_LCP_Desktop <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Largest_Contentful_Paint_LCP_Desktop >= 0.01 && $obj->Largest_Contentful_Paint_LCP_Desktop < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Largest_Contentful_Paint_LCP_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'corewebvitalslcpd';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptitle)) {if (!empty($obj->Largest_Contentful_Paint_LCP_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Largest_Contentful_Paint_LCP_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Largest_Contentful_Paint_LCP_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Largest_Contentful_Paint_LCP_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Largest_Contentful_Paint_LCP_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Largest_Contentful_Paint_LCP_Desktop_score = $strScoreStart.$obj->Largest_Contentful_Paint_LCP_Desktop.$strScoreEnd;} if (!empty($obj->Largest_Contentful_Paint_LCP_Desktoptitle)) {$Largest_Contentful_Paint_LCP_Desktop_overview = '<li>'.$Largest_Contentful_Paint_LCP_Desktop_title_overview.$Largest_Contentful_Paint_LCP_Desktop_score.'</li>';}
}

// ******* Cumulative_Layout_Shift_CLS_Desktop
if ($strTestValues === "on") {$obj->Cumulative_Layout_Shift_CLS_Desktop = 5;}
if (($obj->Cumulative_Layout_Shift_CLS_Desktop)>= 2.5 || ($obj->Cumulative_Layout_Shift_CLS_Desktop) == 0) {
	if ($obj->Cumulative_Layout_Shift_CLS_Desktop > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop >= 2.5 && $obj->Cumulative_Layout_Shift_CLS_Desktop <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop >= 0.01 && $obj->Cumulative_Layout_Shift_CLS_Desktop < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Cumulative_Layout_Shift_CLS_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'corewebvitalsclsd';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptitle)) {if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Cumulative_Layout_Shift_CLS_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Cumulative_Layout_Shift_CLS_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Cumulative_Layout_Shift_CLS_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Cumulative_Layout_Shift_CLS_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Cumulative_Layout_Shift_CLS_Desktop_score = $strScoreStart.$obj->Cumulative_Layout_Shift_CLS_Desktop.$strScoreEnd;} if (!empty($obj->Cumulative_Layout_Shift_CLS_Desktoptitle)) {$Cumulative_Layout_Shift_CLS_Desktop_overview = '<li>'.$Cumulative_Layout_Shift_CLS_Desktop_title_overview.$Cumulative_Layout_Shift_CLS_Desktop_score.'</li>';}
}

// ******* First_Input_Delay_FID_Mobile
if ($strTestValues === "on") {$obj->First_Input_Delay_FID_Mobile = 301;}
if (($obj->First_Input_Delay_FID_Mobile) >= 100) {
	if ($obj->First_Input_Delay_FID_Mobile > 300) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->First_Input_Delay_FID_Mobile >= 100 && $obj->First_Input_Delay_FID_Mobile <= 300) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->First_Input_Delay_FID_Mobile >= 0.01 && $obj->First_Input_Delay_FID_Mobile < 100) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->First_Input_Delay_FID_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'corewebvitalsfidm';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->First_Input_Delay_FID_Mobiletitle)) {if (!empty($obj->First_Input_Delay_FID_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->First_Input_Delay_FID_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->First_Input_Delay_FID_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->First_Input_Delay_FID_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $First_Input_Delay_FID_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->First_Input_Delay_FID_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $First_Input_Delay_FID_Mobile_score = $strScoreStart.$obj->First_Input_Delay_FID_Mobile.$strScoreEnd;} if (!empty($obj->First_Input_Delay_FID_Mobiletitle)) {$First_Input_Delay_FID_Mobile_overview = '<li>'.$First_Input_Delay_FID_Mobile_title_overview.$First_Input_Delay_FID_Mobile_score.'</li>';}
}

// ******* Largest_Contentful_Paint_LCP_Mobile
if ($strTestValues === "on") {$obj->Largest_Contentful_Paint_LCP_Mobile = 5;}
if (($obj->Largest_Contentful_Paint_LCP_Mobile) >= 2.5 || ($obj->Largest_Contentful_Paint_LCP_Mobile) == 0) {
	if ($obj->Largest_Contentful_Paint_LCP_Mobile > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Largest_Contentful_Paint_LCP_Mobile >= 2.5 && $obj->Largest_Contentful_Paint_LCP_Mobile <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Largest_Contentful_Paint_LCP_Mobile >= 0.01 && $obj->Largest_Contentful_Paint_LCP_Mobile < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Largest_Contentful_Paint_LCP_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'corewebvitalslcpm';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletitle)) {if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Largest_Contentful_Paint_LCP_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Largest_Contentful_Paint_LCP_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Largest_Contentful_Paint_LCP_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Largest_Contentful_Paint_LCP_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Largest_Contentful_Paint_LCP_Mobile_score = $strScoreStart.$obj->Largest_Contentful_Paint_LCP_Mobile.$strScoreEnd;} if (!empty($obj->Largest_Contentful_Paint_LCP_Mobiletitle)) {$Largest_Contentful_Paint_LCP_Mobile_overview = '<li>'.$Largest_Contentful_Paint_LCP_Mobile_title_overview.$Largest_Contentful_Paint_LCP_Mobile_score.'</li>';}
}

// ******* Cumulative_Layout_Shift_CLS_Mobile
if ($strTestValues === "on") {$obj->Cumulative_Layout_Shift_CLS_Mobile = 5;}
if (($obj->Cumulative_Layout_Shift_CLS_Mobile)>= 2.5 || ($obj->Cumulative_Layout_Shift_CLS_Mobile) == 0) {
	if ($obj->Cumulative_Layout_Shift_CLS_Mobile > 4) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile >= 2.5 && $obj->Cumulative_Layout_Shift_CLS_Mobile <=4) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile >= 0.01 && $obj->Cumulative_Layout_Shift_CLS_Mobile < 2.5) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Cumulative_Layout_Shift_CLS_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'corewebvitalsclsm';
	$strLinkURL = '#core-web-vitals-statistics-anchor';
	if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletitle)) {if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Cumulative_Layout_Shift_CLS_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Cumulative_Layout_Shift_CLS_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Cumulative_Layout_Shift_CLS_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Cumulative_Layout_Shift_CLS_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Cumulative_Layout_Shift_CLS_Mobile_score = $strScoreStart.$obj->Cumulative_Layout_Shift_CLS_Mobile.$strScoreEnd;} if (!empty($obj->Cumulative_Layout_Shift_CLS_Mobiletitle)) {$Cumulative_Layout_Shift_CLS_Mobile_overview = '<li>'.$Cumulative_Layout_Shift_CLS_Mobile_title_overview.$Cumulative_Layout_Shift_CLS_Mobile_score.'</li>';}
}

// ******* Performance_Desktop
if ($strTestValues === "on") {$obj->Performance_Desktop = 32;}
if (($obj->Performance_Desktop) < 66 || ($obj->Performance_Desktop) == 0) {
	if ($obj->Performance_Desktop < 33 && $obj->Performance_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Performance_Desktop >= 33 && $obj->Performance_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Performance_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Performance_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'insightsscoresdesktop';
	$strLinkURL = '#insights-scores-desktop-anchor';
	if (!empty($obj->Performance_Desktoptitle)) {if (!empty($obj->Performance_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Performance_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Performance_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Performance_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Performance_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Performance_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Performance_Desktop_score = $strScoreStart.$obj->Performance_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Performance_Desktoptitle)) {$Performance_Desktop_overview = '<li>'.$Performance_Desktop_title_overview.$Performance_Desktop_score.'</li>';}
}

// ******* Performance_Mobile
if ($strTestValues === "on") {$obj->Performance_Mobile = 32;}
if (($obj->Performance_Mobile) < 66 || ($obj->Performance_Mobile) == 0) {
	if ($obj->Performance_Mobile < 33 && $obj->Performance_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Performance_Mobile >= 33 && $obj->Performance_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Performance_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Performance_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkOnClickTarget = '';
	$strLinkID = 'insightsscoresmobile';
	$strLinkURL = '#insights-scores-mobile-anchor';
	if (!empty($obj->Performance_Mobiletitle)) {if (!empty($obj->Performance_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Performance_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Performance_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Performance_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Performance_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Performance_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Performance_Mobile_score = $strScoreStart.$obj->Performance_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Performance_Mobiletitle)) {$Performance_Mobile_overview = '<li>'.$Performance_Mobile_title_overview.$Performance_Mobile_score.'</li>';}
}

// ******* SSL_Certificateperformance
if ($strTestValues === "on") {$CertFailure = 1;}
if ($CertFailure === 1 || $CertFailure === 2 || $CertFailure === 3) {
	if ($CertFailure === 1) {
		$strScoreEnd = 'Expired<span class="red" data-title="Fail">&#10005;</span></span>';
	} elseif ($CertFailure === 2) {
		$strScoreEnd = '<span class="blue" data-title="'.str_replace("+","",$DaysUntilExpiry).'&nbsp;days&nbsp;remaining - expiring soon!">!</span>';
	} elseif ($CertFailure === 3) {
		$strScoreEnd = 'Absent<span class="red" data-title="No&nbsp;certificate present!">&#10005;</span>';
	}
	$strLinkID = 'sslcertificateperformance';
	$strLinkURL = '#ssl-certificate-anchor';
	if (!empty($obj->Certificatetitle)) {if (!empty($obj->Certificatedescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->Certificatetooltip)) {$strTooltip = $strTooltipStart.$obj->Certificatetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Certificate_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">SSL Certificate</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Certificate_score = $strScoreStart.$strScoreEnd;} if (!empty($obj->Certificatetitle)) {$Certificate_performance_overview = '<li>'.$Certificate_title_overview.$Certificate_score.'</li>';}
}

// ******* SSL_Certificatesecurity
if ($strTestValues === "on") {$CertFailure = 1;}
if ($CertFailure === 1 || $CertFailure === 2 || $CertFailure === 3) {
	if ($CertFailure === 1) {
		$strScoreEnd = 'Expired<span class="red" data-title="Fail">&#10005;</span></span>';
	} elseif ($CertFailure === 2) {
		$strScoreEnd = '<span class="blue" data-title="'.str_replace("+","",$DaysUntilExpiry).'&nbsp;days&nbsp;remaining - expiring soon!">!</span>';
	} elseif ($CertFailure === 3) {
		$strScoreEnd = 'Absent<span class="red" data-title="No&nbsp;certificate present!">&#10005;</span>';
	}
	$strLinkID = 'sslcertificatesecurity';
	$strLinkURL = '#ssl-certificate-anchor';
	if (!empty($obj->Certificatetitle)) {if (!empty($obj->Certificatedescription)) {$strDescription = '';} else {$strDescription = '';} if (!empty($obj->Certificatetooltip)) {$strTooltip = $strTooltipStart.$obj->Certificatetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Certificate_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">SSL Certificate</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Certificate_score = $strScoreStart.$strScoreEnd;} if (!empty($obj->Certificatetitle)) {$Certificate_security_overview = '<li>'.$Certificate_title_overview.$Certificate_score.'</li>';}
}

// ******* Critial_Severity_Issues
if ($strTestValues === "on") {$obj->Critial_Severity_Issues = 1;}
if (($obj->Critial_Severity_Issues) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'criticalserverityissues';
	$strLinkURL = '#critical-issues-anchor';
	if (!empty($obj->Critial_Severity_Issuestitle)) {if (!empty($obj->Critial_Severity_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->Critial_Severity_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Critial_Severity_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->Critial_Severity_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Critial_Severity_Issues_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Critial_Severity_Issuestitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Critial_Severity_Issues_score = $strScoreStart.$obj->Critial_Severity_Issues.$strScoreEnd;} if (!empty($obj->Critial_Severity_Issuestitle)) {$Critial_Severity_Issues_overview = '<li>'.$Critial_Severity_Issues_title_overview.$Critial_Severity_Issues_score.'</li>';}
}

// ******* High_Severity_Issues
if ($strTestValues === "on") {$obj->High_Severity_Issues = 1;}
if (($obj->High_Severity_Issues) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'highserverityissues';
	$strLinkURL = '#high-severity-issues-anchor';
	if (!empty($obj->High_Severity_Issuestitle)) {if (!empty($obj->High_Severity_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->High_Severity_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->High_Severity_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->High_Severity_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $High_Severity_Issues_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->High_Severity_Issuestitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $High_Severity_Issues_score = $strScoreStart.$obj->High_Severity_Issues.$strScoreEnd;} if (!empty($obj->High_Severity_Issuestitle)) {$High_Severity_Issues_overview = '<li>'.$High_Severity_Issues_title_overview.$High_Severity_Issues_score.'</li>';}
}

// ******* Medium_Severity_Issues
if ($strTestValues === "on") {$obj->Medium_Severity_Issues = 1;}
if (($obj->Medium_Severity_Issues) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'mediumserverityissues';
	$strLinkURL = '#medium-severity-issues-anchor';
	if (!empty($obj->Medium_Severity_Issuestitle)) {if (!empty($obj->Medium_Severity_Issuesdescription)) {$strDescription = $strDescriptionStart.$obj->Medium_Severity_Issuesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Medium_Severity_Issuestooltip)) {$strTooltip = $strTooltipStart.$obj->Medium_Severity_Issuestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Medium_Severity_Issues_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Medium_Severity_Issuestitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Medium_Severity_Issues_score = $strScoreStart.$obj->Medium_Severity_Issues.$strScoreEnd;} if (!empty($obj->Medium_Severity_Issuestitle)) {$Medium_Severity_Issues_overview = '<li>'.$Medium_Severity_Issues_title_overview.$Medium_Severity_Issues_score.'</li>';}
}

// ******* Inactive_Plugins
if ($strTestValues === "on") {$obj->Inactive_Plugins = 1;}
if (($obj->Inactive_Plugins) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'inactiveplugins';
	$strLinkURL = '#pedalo-connector-anchor';
	if (!empty($obj->Inactive_Pluginstitle)) {if (!empty($obj->Inactive_Pluginsdescription)) {$strDescription = $strDescriptionStart.$obj->Inactive_Pluginsdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Inactive_Pluginstooltip)) {$strTooltip = $strTooltipStart.$obj->Inactive_Pluginstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Inactive_Plugins_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Inactive_Pluginstitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Inactive_Plugins_score = $strScoreStart.$obj->Inactive_Plugins.$strScoreEnd;} if (!empty($obj->Inactive_Pluginstitle)) {$Inactive_Plugins_overview = '<li>'.$Inactive_Plugins_title_overview.$Inactive_Plugins_score.'</li>';}
}

// ******* Available_Updates
if ($strTestValues === "on") {$obj->Available_Updates = 1;}
if (($obj->Available_Updates) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'availableupdates';
	$strLinkURL = '#pedalo-connector-anchor';
	if (!empty($obj->Available_Updatestitle)) {if (!empty($obj->Available_Updatesdescription)) {$strDescription = $strDescriptionStart.$obj->Available_Updatesdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Available_Updatestooltip)) {$strTooltip = $strTooltipStart.$obj->Available_Updatestooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Available_Updates_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Available_Updatestitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Available_Updates_score = $strScoreStart.$obj->Available_Updates.$strScoreEnd;} if (!empty($obj->Available_Updatestitle)) {$Available_Updates_overview = '<li>'.$Available_Updates_title_overview.$Available_Updates_score.'</li>';}
}

// ******* Site_Crawl_Broken_Links
if ($strTestValues === "on") {$obj->Site_Crawl_Broken_Links = 1;}
if (($obj->Site_Crawl_Broken_Links) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'brokenlinks';
	$strLinkOnClick = ' onclick="AccordionBrokenLinks()"';
	$strLinkURL = '#accordion-broken-links-anchor';
	if (!empty($obj->Site_Crawl_Broken_Linkstitle)) {if (!empty($obj->Site_Crawl_Broken_Linksdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Broken_Linksdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Broken_Linkstooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Broken_Linkstooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Broken_Links_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Broken_Linkstitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Broken_Links_score = $strScoreStart.$obj->Site_Crawl_Broken_Links.$strScoreEnd;} if (!empty($obj->Site_Crawl_Broken_Linkstitle)) {$Site_Crawl_Broken_Links_overview = '<li>'.$Site_Crawl_Broken_Links_title_overview.$Site_Crawl_Broken_Links_score.'</li>';}
}

// ******* Site_Crawl_Multiple_H1
if ($strTestValues === "on") {$obj->Site_Crawl_Multiple_H1 = 1;}
if (($obj->Site_Crawl_Multiple_H1) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'h1tags';
	$strLinkOnClick = ' onclick="AccordionH1Tags()"';
	$strLinkURL = '#accordion-h1-tags-anchor';
	if (!empty($obj->Site_Crawl_Multiple_H1title)) {if (!empty($obj->Site_Crawl_Multiple_H1description)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Multiple_H1description.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Multiple_H1tooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Multiple_H1tooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Multiple_H1_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Multiple_H1title.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Multiple_H1_score = $strScoreStart.$obj->Site_Crawl_Multiple_H1.$strScoreEnd;} if (!empty($obj->Site_Crawl_Multiple_H1title)) {$Site_Crawl_Multiple_H1_overview = '<li>'.$Site_Crawl_Multiple_H1_title_overview.$Site_Crawl_Multiple_H1_score.'</li>';}
}

// ******* Site_Crawl_Title_Long
if ($strTestValues === "on") {$obj->Site_Crawl_Title_Long = 1;}
if (($obj->Site_Crawl_Title_Long) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'longtitletags';
	$strLinkOnClick = ' onclick="AccordionLongTitleTags()"';
	$strLinkURL = '#accordion-long-title-tags-anchor';
	if (!empty($obj->Site_Crawl_Title_Longtitle)) {if (!empty($obj->Site_Crawl_Title_Longdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Title_Longdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Title_Longtooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Title_Longtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Title_Long_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Title_Longtitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Title_Long_score = $strScoreStart.$obj->Site_Crawl_Title_Long.$strScoreEnd;} if (!empty($obj->Site_Crawl_Title_Longtitle)) {$Site_Crawl_Title_Long_overview = '<li>'.$Site_Crawl_Title_Long_title_overview.$Site_Crawl_Title_Long_score.'</li>';}
}

// ******* Site_Crawl_Title_Short
if ($strTestValues === "on") {$obj->Site_Crawl_Title_Short = 1;}
if (($obj->Site_Crawl_Title_Short) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'shorttitletags';
	$strLinkOnClick = ' onclick="AccordionShortTitleTags()"';
	$strLinkURL = '#accordion-short-title-tags-anchor';
	if (!empty($obj->Site_Crawl_Title_Shorttitle)) {if (!empty($obj->Site_Crawl_Title_Shortdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Title_Shortdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Title_Shorttooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Title_Shorttooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Title_Short_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Title_Shorttitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Title_Short_score = $strScoreStart.$obj->Site_Crawl_Title_Short.$strScoreEnd;} if (!empty($obj->Site_Crawl_Title_Shorttitle)) {$Site_Crawl_Title_Short_overview = '<li>'.$Site_Crawl_Title_Short_title_overview.$Site_Crawl_Title_Short_score.'</li>';}
}

// ******* Site_Crawl_Description_Long
if ($strTestValues === "on") {$obj->Site_Crawl_Description_Long = 1;}
if (($obj->Site_Crawl_Description_Long) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'longdescription';
	$strLinkOnClick = ' onclick="AccordionLongDescriptionTags()"';
	$strLinkURL = '#accordion-long-description-tags-anchor';
	if (!empty($obj->Site_Crawl_Description_Longtitle)) {if (!empty($obj->Site_Crawl_Description_Longdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Description_Longdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Description_Longtooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Description_Longtooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Description_Long_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Description_Longtitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Description_Long_score = $strScoreStart.$obj->Site_Crawl_Description_Long.$strScoreEnd;} if (!empty($obj->Site_Crawl_Description_Longtitle)) {$Site_Crawl_Description_Long_overview = '<li>'.$Site_Crawl_Description_Long_title_overview.$Site_Crawl_Description_Long_score.'</li>';}
}

// ******* Site_Crawl_Description_Short
if ($strTestValues === "on") {$obj->Site_Crawl_Description_Short = 1;}
if (($obj->Site_Crawl_Description_Short) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'shortdescription';
	$strLinkOnClick = ' onclick="AccordionShortDescriptionTags()"';
	$strLinkURL = '#accordion-short-description-tags-anchor';
	if (!empty($obj->Site_Crawl_Description_Shorttitle)) {if (!empty($obj->Site_Crawl_Description_Shortdescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Description_Shortdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Description_Shorttooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Description_Shorttooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Description_Short_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Description_Shorttitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Description_Short_score = $strScoreStart.$obj->Site_Crawl_Description_Short.$strScoreEnd;} if (!empty($obj->Site_Crawl_Description_Shorttitle)) {$Site_Crawl_Description_Short_overview = '<li>'.$Site_Crawl_Description_Short_title_overview.$Site_Crawl_Description_Short_score.'</li>';}
}

// ******* Site_Crawl_Image_Size
if ($strTestValues === "on") {$obj->Site_Crawl_Image_Size = 1;}
if (($obj->Site_Crawl_Image_Size) > 0) {
	$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';
	$strLinkID = 'largeimages';
	$strLinkOnClick = ' onclick="AccordionLargeImages()"';
	$strLinkURL = '#accordion-large-images-anchor';
	if (!empty($obj->Site_Crawl_Image_Sizetitle)) {if (!empty($obj->Site_Crawl_Image_Sizedescription)) {$strDescription = $strDescriptionStart.$obj->Site_Crawl_Image_Sizedescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Site_Crawl_Image_Sizetooltip)) {$strTooltip = $strTooltipStart.$obj->Site_Crawl_Image_Sizetooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Site_Crawl_Image_Size_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'"'.$strLinkOnClick.'>'.$obj->Site_Crawl_Image_Sizetitle.'</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Site_Crawl_Image_Size_score = $strScoreStart.$obj->Site_Crawl_Image_Size.$strScoreEnd;} if (!empty($obj->Site_Crawl_Image_Sizetitle)) {$Site_Crawl_Image_Size_overview = '<li>'.$Site_Crawl_Image_Size_title_overview.$Site_Crawl_Image_Size_score.'</li>';}
}

// ******* Accessibility_Desktop
if ($strTestValues === "on") {$obj->Accessibility_Desktop = 32;}
if (($obj->Accessibility_Desktop) < 66 || ($obj->Accessibility_Desktop) == 0) {
	if ($obj->Accessibility_Desktop < 33 && $obj->Accessibility_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Accessibility_Desktop >= 33 && $obj->Accessibility_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Accessibility_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Accessibility_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'accessibilitydesktop';
	$strLinkURL = '#desktop-insights-scores-anchor';
	if (!empty($obj->Accessibility_Desktoptitle)) {if (!empty($obj->Accessibility_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Accessibility_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Accessibility_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Accessibility_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Accessibility_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Accessibility_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Accessibility_Desktop_score = $strScoreStart.$obj->Accessibility_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Accessibility_Desktoptitle)) {$Accessibility_Desktop_overview = '<li>'.$Accessibility_Desktop_title_overview.$Accessibility_Desktop_score.'</li>';}
}

// ******* Accessibility_Mobile
if ($strTestValues === "on") {$obj->Accessibility_Mobile = 32;}
if (($obj->Accessibility_Mobile) < 66 || ($obj->Accessibility_Mobile) == 0) {
	if ($obj->Accessibility_Mobile < 33 && $obj->Accessibility_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Accessibility_Mobile >= 33 && $obj->Accessibility_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Accessibility_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Accessibility_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'accessibilitymobile';
	$strLinkURL = '#mobile-insights-scores-anchor';
	if (!empty($obj->Accessibility_Mobiletitle)) {if (!empty($obj->Accessibility_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Accessibility_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Accessibility_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Accessibility_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Accessibility_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Accessibility_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Accessibility_Mobile_score = $strScoreStart.$obj->Accessibility_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Accessibility_Mobiletitle)) {$Accessibility_Mobile_overview = '<li>'.$Accessibility_Mobile_title_overview.$Accessibility_Mobile_score.'</li>';}
}

// ******* Best_Practice_Desktop
if ($strTestValues === "on") {$obj->Best_Practice_Desktop = 32;}
if (($obj->Best_Practice_Desktop) < 66 || ($obj->Best_Practice_Desktop) == 0) {
	if ($obj->Best_Practice_Desktop < 33 && $obj->Best_Practice_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Best_Practice_Desktop >= 33 && $obj->Best_Practice_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Best_Practice_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Best_Practice_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'bestpracticedesktop';
	$strLinkURL = '#desktop-insights-scores-anchor';
	if (!empty($obj->Best_Practice_Desktoptitle)) {if (!empty($obj->Best_Practice_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->Best_Practice_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Best_Practice_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->Best_Practice_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Best_Practice_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Best_Practice_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Best_Practice_Desktop_score = $strScoreStart.$obj->Best_Practice_Desktop.'%'.$strScoreEnd;} if (!empty($obj->Best_Practice_Desktoptitle)) {$Best_Practice_Desktop_overview = '<li>'.$Best_Practice_Desktop_title_overview.$Best_Practice_Desktop_score.'</li>';}
}

// ******* Best_Practice_Mobile
if ($strTestValues === "on") {$obj->Best_Practice_Mobile = 32;}
if (($obj->Best_Practice_Mobile) < 66 || ($obj->Best_Practice_Mobile) == 0) {
	if ($obj->Best_Practice_Mobile < 33 && $obj->Best_Practice_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->Best_Practice_Mobile >= 33 && $obj->Best_Practice_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->Best_Practice_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->Best_Practice_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'bestpracticemobile';
	$strLinkURL = '#mobile-insights-scores-anchor';
	if (!empty($obj->Best_Practice_Mobiletitle)) {if (!empty($obj->Best_Practice_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->Best_Practice_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->Best_Practice_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->Best_Practice_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $Best_Practice_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->Best_Practice_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $Best_Practice_Mobile_score = $strScoreStart.$obj->Best_Practice_Mobile.'%'.$strScoreEnd;} if (!empty($obj->Best_Practice_Mobiletitle)) {$Best_Practice_Mobile_overview = '<li>'.$Best_Practice_Mobile_title_overview.$Best_Practice_Mobile_score.'</li>';}
}

// ******* SEO_Desktop
if ($strTestValues === "on") {$obj->SEO_Desktop = 32;}
if (($obj->SEO_Desktop) < 66 || ($obj->SEO_Desktop) == 0) {
	if ($obj->SEO_Desktop < 33 && $obj->SEO_Desktop > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->SEO_Desktop >= 33 && $obj->SEO_Desktop < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->SEO_Desktop >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->SEO_Desktop == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'seodesktop';
	$strLinkURL = '#desktop-insights-scores-anchor';
	if (!empty($obj->SEO_Desktoptitle)) {if (!empty($obj->SEO_Desktopdescription)) {$strDescription = $strDescriptionStart.$obj->SEO_Desktopdescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->SEO_Desktoptooltip)) {$strTooltip = $strTooltipStart.$obj->SEO_Desktoptooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $SEO_Desktop_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->SEO_Desktoptitle.' (Desktop)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $SEO_Desktop_score = $strScoreStart.$obj->SEO_Desktop.'%'.$strScoreEnd;} if (!empty($obj->SEO_Desktoptitle)) {$SEO_Desktop_overview = '<li>'.$SEO_Desktop_title_overview.$SEO_Desktop_score.'</li>';}
}

// ******* SEO_Mobile
if ($strTestValues === "on") {$obj->SEO_Mobile = 32;}
if (($obj->SEO_Mobile) < 66 || ($obj->SEO_Mobile) == 0) {
	if ($obj->SEO_Mobile < 33 && $obj->SEO_Mobile > 0) {$strScoreEnd = '<span class="red" data-title="Fail">&#10005;</span></span>';}
	elseif ($obj->SEO_Mobile >= 33 && $obj->SEO_Mobile < 66) {$strScoreEnd = '<span class="amber" data-title="Fail">&#10005;</span></span>';} 
	elseif ($obj->SEO_Mobile >= 66) {$strScoreEnd = '<span data-title="Pass">&#10003;</span></span>';} 
	elseif ($obj->SEO_Mobile == 0) {$strScoreEnd = '<span class="red" data-title="Fail – a&nbsp;zero&nbsp;score potentially&nbsp;indicates a&nbsp;data&nbsp;error">&#10005;</span></span>';} 
	$strLinkID = 'seomobile';
	$strLinkURL = '#mobile-insights-scores-anchor';
	if (!empty($obj->SEO_Mobiletitle)) {if (!empty($obj->SEO_Mobiledescription)) {$strDescription = $strDescriptionStart.$obj->SEO_Mobiledescription.$strDescriptionEnd;} else {$strDescription = '';} if (!empty($obj->SEO_Mobiletooltip)) {$strTooltip = $strTooltipStart.$obj->SEO_Mobiletooltip.$strTooltipEnd; $strTitleMarginStart = '<span class="addmargin">'; $strTitleMarginEnd = '</span>';} else {$strTooltip = '';$strTitleMarginStart = '<span>';$strTitleMarginEnd = '</span>';} $SEO_Mobile_title_overview = $strTitleStart.$strTooltip.$strTitleMarginStart.'<span class="score-title"><a href="'.$strLinkURL.'" id="'.$strLinkID.'">'.$obj->SEO_Mobiletitle.' (Mobile)</a></span>'.$strDescriptionMarginStart.$strTitleMarginEnd.$strTitleEnd; $SEO_Mobile_score = $strScoreStart.$obj->SEO_Mobile.'%'.$strScoreEnd;} if (!empty($obj->SEO_Mobiletitle)) {$SEO_Mobile_overview = '<li>'.$SEO_Mobile_title_overview.$SEO_Mobile_score.'</li>';}
}

// ******* Wordfence report
$strWordFenceCleaned = str_replace('<http://wordpress.org|wordpress.org>','http://wordpress.org',$obj->Security_Summary);
$strWordFenceCleaned = str_replace('Wordfence Scan Results for','',$strWordFenceCleaned);
$strWordFenceCleaned = str_replace('Critical Problems:','</span><span><strong>Critical Severity Problems</strong>',$strWordFenceCleaned);
$strWordFenceCleaned = str_replace('High Severity Problems:','</span><span><strong>High Severity Problems</strong>',$strWordFenceCleaned);
$strWordFenceCleaned = str_replace('Medium Severity Problems:','</span><span><strong>Medium Severity Problems</strong>',$strWordFenceCleaned);
$strWordFenceCleaned = str_replace('*','',$strWordFenceCleaned);
$strWordFenceCleaned = str_replace('•','</span><span class="hover"><span class="wfarrow">></span><span class="individual-score"><span class="red" data-title="Fail">✕</span></span>',$strWordFenceCleaned);
?>