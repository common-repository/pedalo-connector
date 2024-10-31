<?php 
// To hide CTAs change $CTAsEnabled = "off"
$CTAsEnabled = "on";

$strPedaloContactFormURL = 'https://www.pedalo.co.uk/fix-my-site/';
$strSiteURL = $obj->Site;

// iss01 = Critical Security Issues
$strIssue01 = '&iss01=No';
if(!empty($strSecurityCriticalSeverityTotal)) {$strIssue01 = '&iss01=Yes';}

// iss02 = High Security Issues
$strIssue02 = '&iss02=No';
if(!empty($strSecurityHighSeverityTotal)) {$strIssue02 = '&iss02=Yes';}

// iss03 = Medium Security Issues
$strIssue03 = '&iss03=No';
if(!empty($strSecurityMediumSeverityTotal)) {$strIssue03 = '&iss03=Yes';}

// iss04 = Wordfence Scan Results
$strIssue04 = '&iss04=No';
$strWordFenceIssuesTotal = floatval($obj->Critial_Severity_Issues)+floatval($obj->High_Severity_Issues)+floatval($obj->Medium_Severity_Issues);
if($strWordFenceIssuesTotal > 0) {$strIssue04 = '&iss04=Yes';}

// iss05 = Pedalo Connector Information
$strPedaloConnectorIssuesTotal = floatval($obj->Inactive_Plugins)+floatval($obj->Available_Updates);
$strIssue05 = '&iss05=No';
if($strPedaloConnectorIssuesTotal > 0) {$strIssue05 = '&iss05=Yes';}

// iss06 = SSL certificate
$strIssue06 = '&iss06=No';
if($CertFailure === 1 || $CertFailure === 3) {$strIssue06 = '&iss06=Yes';}

// iss07 = PHP version
$strIssue07 = '&iss07=No';
if(($obj->PHP_Update) !== 0.0) {$strIssue07 = '&iss07=Yes';}

// iss08 = Core Web Vitals (desktop)
$strIssue08 = '&iss08=No';
if(!empty($strCoreWebVitalsDesktopTotal)) {$strIssue08 = '&iss08=Yes';}  

// iss09 = Core Web Vitals (mobile)
$strIssue09 = '&iss09=No';
if(!empty($strCoreWebVitalsMobileTotal)) {$strIssue09 = '&iss09=Yes';}   

// iss10 = Uptime Statistics
$strIssue10 = '&iss10=No';
if(!empty($strUptimeTotal)) {$strIssue10 = '&iss10=Yes';}       

// iss11 = Insights Scores for Desktop
$strIssue11 = '&iss11=No';
if(!empty($strInsightsDesktop)) {$strIssue11 = '&iss11=Yes';}   

// iss12 = Insights Scores for Mobile
$strIssue12 = '&iss12=No';
if(!empty($strInsightsMobile)) {$strIssue12 = '&iss12=Yes';}  

// iss13 = Identified content issues
$strIssue13 = '&iss13=No';
$strContentScanTotalCount = floatval($obj->Site_Crawl_Multiple_H1)+floatval($obj->Site_Crawl_Title_Long)+floatval($obj->Site_Crawl_Title_Short)+floatval($obj->Site_Crawl_Description_Long)+floatval($obj->Site_Crawl_Description_Short)+floatval($obj->Site_Crawl_Image_Size);
if($strContentScanTotalCount > 0) {$strIssue13 = '&iss13=Yes';} 

$strAllIssues = $strIssue01.$strIssue02.$strIssue03.$strIssue04.$strIssue05.$strIssue06.$strIssue07.$strIssue08.$strIssue09.$strIssue10.$strIssue11.$strIssue12.$strIssue13;



// strSecurityCriticalSeverityTotal
if(empty($strSecurityCriticalSeverityTotal)) {
	$strSecurityCriticalSeverityResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Critial_Severity_Issuestitle.'</em></span>';
} else {
	if($CTAsEnabled === "on") {
  		$strSecurityCriticalSeverityResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Critial_Severity_Issuestitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$obj->Critial_Severity_Issues.' issue';
  		if($obj->Critial_Severity_Issues>1){$strSecurityCriticalSeverityResult.'s';}
  		$strSecurityCriticalSeverityResult = $strSecurityCriticalSeverityResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
}

// strSecurityHighSeverityTotal
if(empty($strSecurityHighSeverityTotal)) {
	$strSecurityHighSeverityResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->High_Severity_Issuestitle.'</em></span>';
} else {
	if($CTAsEnabled === "on") {
  		$strSecurityHighSeverityResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->High_Severity_Issuestitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$obj->High_Severity_Issues.' issue';
  		if($obj->High_Severity_Issues>1){$strSecurityHighSeverityResult.'s';}
  		$strSecurityHighSeverityResult = $strSecurityHighSeverityResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
}

// strSecurityMediumSeverityTotal
if(empty($strSecurityMediumSeverityTotal)) {
	$strSecurityMediumSeverityResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Medium_Severity_Issuestitle.'</em></span>';
} else {
	if($CTAsEnabled === "on") {
  		$strSecurityMediumSeverityResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Medium_Severity_Issuestitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$obj->Medium_Severity_Issues.' issue';
  		if($obj->Medium_Severity_Issues>1){$strSecurityMediumSeverityResult.'s';}
  		$strSecurityMediumSeverityResult = $strSecurityMediumSeverityResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
}

// strWordFenceIssuesTotal
$strWordFenceIssuesTotal = floatval($obj->Critial_Severity_Issues)+floatval($obj->High_Severity_Issues)+floatval($obj->Medium_Severity_Issues);
if($strWordFenceIssuesTotal = 0) {
	$strWordFenceIssuesResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>Wordfence scan issues</em></span>';
} else {
  	if($CTAsEnabled === "on") {
		$strWordFenceIssuesTotal = floatval($obj->Critial_Severity_Issues)+floatval($obj->High_Severity_Issues)+floatval($obj->Medium_Severity_Issues);
		$strWordFenceIssuesResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Security_Summarytitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strWordFenceIssuesTotal.' issue';
		if($strWordFenceIssuesTotal>1){$strWordFenceIssuesResult.'s';}
		$strWordFenceIssuesResult = $strWordFenceIssuesResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
} 
		
// strPedaloConnectorIssuesTotal
$strPedaloConnectorIssuesTotal = floatval($obj->Inactive_Plugins)+floatval($obj->Available_Updates);
if($strPedaloConnectorIssuesTotal = 0) {
  	$strPedaloConnectorIssuesResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>Pedalo Connector issues</em></span>';
} else {
  	if($CTAsEnabled === "on") {
		$strPedaloConnectorIssuesTotal = floatval($obj->Inactive_Plugins)+floatval($obj->Available_Updates);
		$strPedaloConnectorIssuesResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue=Pedalo Connector Information&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strPedaloConnectorIssuesTotal.' issue';
		if($strPedaloConnectorIssuesTotal>1){$strPedaloConnectorIssuesResult.'s';}
		$strPedaloConnectorIssuesResult = $strPedaloConnectorIssuesResult .' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
}		
			
// strSSLCertificate
if($CertFailure === 1 || $CertFailure === 3) {
	if($CTAsEnabled === "on") {
  		$strSSLCertificateResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue=SSL certificate&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>Issues found!</strong><br>Contact Pedalo to resolve now.</a>';
		}
} else {
	$strSSLCertificateResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has a valid <em>SSL certificate</em></span>';                    
} 
				
// strPHPversion
if(($obj->PHP_Update) !== 0.0) {
	if($CTAsEnabled === "on") {
		$strPHPversionResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->PHP_Versiontitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>Issues found!</strong><br>Contact Pedalo to resolve now.</a>';
		}
} else {
	$strPHPversionResult =  '<span class="congratulations"><strong>Congratulations!</strong><br>Your version of <em>PHP</em> is supported</span>';
} 
               
// strCoreWebVitalsDesktopTotal         
if(empty($strCoreWebVitalsDesktopTotal)) {
	$strCoreWebVitalsDesktopResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Core_Web_Vitals_Desktoptitle.'</em></span>';
} else {
	if($CTAsEnabled === "on") {
		$strCoreWebVitalsDesktopResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Core_Web_Vitals_Desktoptitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strCoreWebVitalsDesktopTotal.' issue';
	if($strCoreWebVitalsDesktopTotal>1){$strCoreWebVitalsDesktopResult.'s';}
		$strCoreWebVitalsDesktopResult = $strCoreWebVitalsDesktopResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
  }
} 
			
// strCoreWebVitalsMobileTotal         
if(empty($strCoreWebVitalsMobileTotal)) {
	$strCoreWebVitalsMobileResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Core_Web_Vitals_Mobiletitle.'</em></span>';
} else {
	if($CTAsEnabled === "on") {
		$strCoreWebVitalsMobileResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Core_Web_Vitals_Mobiletitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strCoreWebVitalsMobileTotal.' issue';
	if($strCoreWebVitalsMobileTotal>1){$strCoreWebVitalsMobileResult.'s';}
		$strCoreWebVitalsMobileResult = $strCoreWebVitalsMobileResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
  }
}             

// strUptimeTotal                   
if(empty($strUptimeTotal)) {
	$strUptimeResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Uptime_Statisticstitle.'</em> issues</span>';
} else {
	if($CTAsEnabled === "on") {
	$strUptimeResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Uptime_Statisticstitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strUptimeTotal.' issue';
	if($strUptimeTotal>1){$strUptimeResult.'s';}
	$strUptimeResult = $strUptimeResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
} 
			         
// strInsightsDesktop        
if(empty($strInsightsDesktop)) {
	$strInsightsDesktopResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Insights_History_Data_for_Desktoptitle.'</em> issues</span>';
} else {
	if($CTAsEnabled === "on") {
	$strInsightsDesktopResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Insights_History_Data_for_Desktoptitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strInsightsDesktop.' issue';
	if($strInsightsDesktop>1){$strInsightsDesktopResult.'s';}
	$strInsightsDesktopResult = $strInsightsDesktopResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
} 
          
// strInsightsMobile        
if(empty($strInsightsMobile)) {
	$strInsightsMobileResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>'.$obj->Insights_History_Data_for_Mobiletitle.'</em> issues</span>';
} else {
	if($CTAsEnabled === "on") {
	$strInsightsMobileResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue='.$obj->Insights_History_Data_for_Mobiletitle.'&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strInsightsMobile.' issue';
	if($strInsightsMobile>1){$strInsightsMobileResult.'s';}
	$strInsightsMobileResult = $strInsightsMobileResult.' found!</strong><br>Contact Pedalo to resolve now.</a>';
	}
} 
          
// $strContentScanTotal
$strContentScanTotalCount = floatval($obj->Site_Crawl_Multiple_H1)+floatval($obj->Site_Crawl_Title_Long)+floatval($obj->Site_Crawl_Title_Short)+floatval($obj->Site_Crawl_Description_Long)+floatval($obj->Site_Crawl_Description_Short)+floatval($obj->Site_Crawl_Image_Size);
if($strContentScanTotalCount > 0) {
	if($CTAsEnabled === "on") {
	$strContentScanResult = '<a href="'.$strPedaloContactFormURL.'?primaryissue=Identified content issues&site='.$strSiteURL.$strAllIssues.'" class="fixrequest" target="_blank"><strong>'.$strContentScanTotalCount.' issue';
	if($strContentScanTotalCount>1){$strContentScanResult.'s';}
	$strContentScanResult = $strContentScanResult." found!</strong><br>You can fix most content issues yourself by making changes to the content within the admin area, but if you'd like support resolving any please contact Pedalo.</a>";
	}
} else {
	$strContentScanResult = '<span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em>Content</em> issues</span>';
} 

?>