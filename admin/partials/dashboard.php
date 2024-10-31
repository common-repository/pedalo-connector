<span id="top"></span>
<a id="back-to-top" href="#health-check-anchor"><span>Back to top</span></a>
<?php

/**

 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.pedalo.co.uk
 * @since      1.0.0
 *
 * @package    Pedalo_connector
 * @subpackage Pedalo_connector/admin/partials
 */

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Site:  ".str_replace("www.","",$_SERVER['HTTP_HOST'])
    ]
];
$context = stream_context_create($opts);

$json = file_get_contents("http://pedalo-support.discovertheweb.co.uk/plugindashboard", false, $context);
$obj = json_decode($json); ?> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/pedalo-connector/admin/js/health-check.js"></script>
<link rel="stylesheet" href="/wp-content/plugins/pedalo-connector/admin/css/dashboard-styles.css">
<script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js"></script>
<script type = "text/javascript">
   google.charts.load('current', {packages: ['corechart','line']});  
</script>
<?php include 'results.php'; ?>
<?php include 'ctas.php'; ?>
<?php // Show Site Health Check if activated - START
if(strtolower($obj->Status) == 'active') { ?>
<div class="health-check">
  <span id="health-check-anchor"></span>
  <div class="health-check-intro">
    <h1>Site Health Check</h1>
    <ul class="intro-bullets">
      <li>Reporting on <?php echo $obj->Site ?> for <?php echo $obj->Customer; ?></li>
      <li>Your account is <?php echo strtolower($obj->Status); ?></li>
    </ul>
    <?php if(!empty($obj->Generaldescription)) {
      echo '<p>'.$obj->Generaldescription.'</p>'; } ?>
  </div>
  <div class="health-check-overview">
    <span id="scan-overview-anchor"></span>
    <h2>Scan overview</h2>
    <?php if(!empty($obj->Statusdescription)) {
      echo '<p>'.$obj->Statusdescription.'</p>'; } ?>
    <div class="dashboard-intro-grid-1-1-1">
     <?php if (!empty($obj->Securitytitle)) { ?>
      <div class="dashboard-intro security">
        <?php switch($obj->Security):
         case floatval($obj->Security) == 100: ?>
          <div class="greenoveriew"><span class="intro-header-link">
            <h3><?php echo $obj->Securitytitle; ?></h3><span class="scoreoverview"><?php echo (ceil($obj->Security)) ?><span class="percent">%</span></span>
          </span></div>
        <?php break; ?>
        <?php case floatval($obj->Security) >= 66: ?>
          <div class="amberoveriew"><span class="intro-header-link">
            <h3>Security</h3><span class="scoreoverview"><?php echo (ceil($obj->Security)) ?><span class="percent">%</span></span>
          </span></div>
        <?php break; ?>
        <?php case floatval($obj->Security) < 66: ?>
          <div class="redoverview"><span class="intro-header-link">
            <h3>Security</h3><span class="scoreoverview"><?php echo (ceil($obj->Security)) ?><span class="percent">%</span></span>
          </span></div>
        <?php break; ?>
        <?php endswitch; ?>
        <div class="results">
          <?php if(floatval($obj->Security) == 100) { ?>
            <span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em><?php echo $obj->Securitytitle; ?> issues</em></span>
          <?php } else { ?>
            <div class="intro-text">Resolve issues in the following areas to improve your <strong><em><?php echo $obj->Securitytitle; ?></em></strong> score:</div>
            <div class="headings"><span class="issues">Identified issues</span><span class="scores">No. issues</span></div>
            <ul>
              <?php echo $Critial_Severity_Issues_overview; ?>
              <?php echo $High_Severity_Issues_overview; ?>
              <?php echo $Medium_Severity_Issues_overview; ?>
              <?php echo $Certificate_security_overview; ?>
              <?php echo $PHP_Version_security_overview; ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
    <?php if (!empty($obj->Performancetitle)) { ?>
      <div class="dashboard-intro performance">
        <?php switch($obj->Performance): 
          case floatval($obj->Performance) == 100: ?>
          <div class="greenoveriew"><span class="intro-header-link">
              <h3><?php echo $obj->Performancetitle; ?></h3><span class="scoreoverview"><?php echo (ceil($obj->Performance)) ?><span class="percent">%</span></span>
          </span></div>
          <?php break; ?>
          <?php case floatval($obj->Performance) >= 66: ?>
            <div class="amberoveriew"><span class="intro-header-link">
                <h3>Performance</h3><span class="scoreoverview"><?php echo (ceil($obj->Performance)) ?><span class="percent">%</span></span>
          </span></div>
          <?php break; ?>
          <?php case floatval($obj->Performance) < 66: ?>
            <div class="redoverview"><span class="intro-header-link">
                <h3>Performance</h3><span class="scoreoverview"><?php echo (ceil($obj->Performance)) ?><span class="percent">%</span></span>
          </span></div>
          <?php break; ?>
        <?php endswitch; ?>
        <div class="results">
          <?php if(floatval($obj->Security) == 100) { ?>
            <span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em><?php echo $obj->Performancetitle; ?> issues</em></span>
          <?php } else { ?>
            <div class="intro-text">Resolve issues in the following areas to improve your <strong><em><?php echo $obj->Performancetitle; ?></em></strong> score:</div>
            <div class="headings"><span class="issues">Identified issues</span><span class="scores">Scores</span></div>
            <ul>
              <?php echo $First_Input_Delay_FID_Desktop_overview; ?>
              <?php echo $Largest_Contentful_Paint_LCP_Desktop_overview; ?>
              <?php echo $Cumulative_Layout_Shift_CLS_Desktop_overview; ?>
              <?php echo $First_Input_Delay_FID_Mobile_overview; ?>
              <?php echo $Largest_Contentful_Paint_LCP_Mobile_overview; ?>
              <?php echo $Cumulative_Layout_Shift_CLS_Mobile_overview; ?>
              <?php echo $Performance_Desktop_overview; ?>
              <?php echo $Performance_Mobile_overview; ?>
              <?php echo $PHP_Version_performance_overview; ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
    <?php if (!empty($obj->Structuretitle)) { ?>
      <div class="dashboard-intro structure">
        <?php switch($obj->Structure): 
          case floatval($obj->Structure) == 100: ?>
          <div class="greenoveriew"><span class="intro-header-link">
            <h3><?php echo $obj->Structuretitle; ?></h3><span class="scoreoverview"><?php echo (ceil($obj->Structure)) ?><span class="percent">%</span></span>
          </span></div>
          <?php break; ?>
          <?php case floatval($obj->Structure) >= 66: ?>
            <div class="amberoveriew"><span class="intro-header-link">
              <h3>Structure</h3><span class="scoreoverview"><?php echo (ceil($obj->Structure)) ?><span class="percent">%</span></span>
            </span></div>
          <?php break; ?>
          <?php case floatval($obj->Structure) < 66: ?>
            <div class="redoverview"><span class="intro-header-link">
              <h3>Structure</h3><span class="scoreoverview"><?php echo (ceil($obj->Structure)) ?><span class="percent">%</span></span>
            </span></div>
          <?php break; ?>
        <?php endswitch; ?>
        <div class="results">
          <?php if(floatval($obj->Security) == 100) { ?>
            <span class="congratulations"><strong>Congratulations!</strong><br>Your site has no <em><?php echo $obj->Structuretitle; ?> issues</em></span>
          <?php } else { ?>
            <div class="intro-text">Resolve issues in the following areas to improve your <strong><em><?php echo $obj->Structuretitle; ?></em></strong> score:</div>
            <div class="headings"><span class="issues">Identified issues</span><span class="scores">No. issues</span></div>
            <ul>
              <?php echo $Inactive_Plugins_overview; ?>
              <?php echo $Available_Updates_overview; ?>
              <?php echo $Site_Crawl_Broken_Links_overview; ?>
              <?php echo $Site_Crawl_Multiple_H1_overview; ?>
              <?php echo $Site_Crawl_Title_Long_overview; ?>
              <?php echo $Site_Crawl_Title_Short_overview; ?>
              <?php echo $Site_Crawl_Description_Long_overview; ?>
              <?php echo $Site_Crawl_Description_Short_overview; ?>
              <?php echo $Site_Crawl_Image_Size_overview; ?>
              <?php echo $Accessibility_Desktop_overview; ?>
              <?php echo $Accessibility_Mobile_overview; ?>
              <?php echo $Best_Practice_Desktop_overview; ?>
              <?php echo $Best_Practice_Mobile_overview; ?>
              <?php echo $SEO_Desktop_overview; ?>
              <?php echo $SEO_Mobile_overview; ?>
            </ul>
          <?php } ?>      
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
  <h2 class="heading">Scan detail</h2>
  <div class="info-container">
    <div class="info-block-grid-1-1-1">
      <div class="info-block" id="critical-issues">
        <div class="top">
          <span id="critical-issues-anchor"></span>
          <h3><?php echo $obj->Critial_Severity_Issuestitle; ?></h3>
         <?php if(!empty($obj->Critial_Severity_Issuesdescription)) {
          echo '<p>'.$obj->Critial_Severity_Issuesdescription.'</p>';
         } ?>
          <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
          <ul>
            <?php echo $Security_Related_Plugin_Issues; ?>
            <?php echo $Unpatched_Security_Vulnerability_Issues; ?>
            <?php echo $Publicly_Accessible_Files; ?>
            <?php echo $Removed_from_Wordpressorg; ?>
            <?php echo $Files_Containing_Malicious_Code; ?>
          </ul>
          <?php echo $strSecurityCriticalSeverityResult; ?>
        </div>
      </div>
      <div class="info-block" id="high-severity-issues">
        <div class="top">
          <span id="high-severity-issues-anchor"></span>
          <h3><?php echo $obj->High_Severity_Issuestitle; ?></h3>
         <?php if(!empty($obj->High_Severity_Issuesdescription)) {
          echo '<p>'.$obj->High_Severity_Issuesdescription.'</p>';
         } ?>
          <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
          <ul>
            <?php echo $Wordpress_Core_Update_Notices; ?>
            <?php echo $Admin_Created_Outside_WP; ?>
            <?php echo $Unknown_Files_in_WP_Core; ?>
            <?php echo $Users_with_Weak_Passwords; ?>
          </ul>
        <?php echo $strSecurityHighSeverityResult; ?>
        </div>

      </div>
      <div class="info-block" id="medium-severity-issues">
        <div class="top">
          <span id="medium-severity-issues-anchor"></span>
          <h3><?php echo $obj->Medium_Severity_Issuestitle; ?></h3>
         <?php if(!empty($obj->Medium_Severity_Issuesdescription)) {
          echo '<p>'.$obj->Medium_Severity_Issuesdescription.'</p>';
         } ?>        
            <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
            <ul>
              <?php echo $Plugins_Requiring_an_Update; ?>
              <?php echo $Abandoned_Plugins; ?>
              <?php echo $Modified_Plugin_Files; ?>
              <?php echo $Modified_Theme_Files; ?>
            </ul>
          <?php echo $strSecurityMediumSeverityResult; ?>
        </div>
      </div>
    </div>
    <div class="info-block-grid-1-1-1">
      <div class="info-block cleanWordFence" id="wordfence-scan-results">
        <div class="top">
          <span id="wordfence-anchor"></span>
          <h3><?php echo $obj->Security_Summarytitle; ?></h3>
          <p><?php echo $obj->Security_Summarydescription; ?></p>
          <div class="cleaned">
            <span class="hover">
              <?php echo $strWordFenceCleaned; ?>
            </span>
          </div> 
          <?php echo $strWordFenceIssuesResult; ?>  
        </div>
      </div>
      <div class="info-block" id="pedalo-connector">
        <div class="top">
          <span id="pedalo-connector-anchor"></span>
          <h3>Pedalo Connector Information</h3>
             <?php if (!empty($obj->Plugin_Statusdescription)) { 
                echo '<p>'.$obj->Plugin_Statusdescription.'</p>';
              } ?>             
          <ul>
            <?php echo $Plugin_Status; ?>
            <?php echo $Total_Plugins; ?>
            <?php echo $Active_Plugins; ?>
            <?php echo $Inactive_Plugins; ?>
            <?php echo $Available_Updates; ?>
            <?php echo $Updates_Last_30_Days; ?>
            <?php echo $Updates_Last_7_Days; ?>
            <?php echo $Updates_Today; ?>
          </ul>
          <?php echo $strPedaloConnectorIssuesResult; ?> 
        </div>
      </div>
      <div class="info-block-grid-vertical-1-1">
        <div class="info-block" id="ssl-certificate">
          <div class="top">
            <span id="ssl-certificate-anchor"></span>
            <h3>SSL certificate</h3>
              <?php if (!empty($obj->Certificatedescription)) { 
                echo '<p>'.$obj->Certificatedescription.'</p>';
              } ?>
              <ul>
                <?php echo $Certificate; ?>
              </ul>
              <?php echo $strSSLCertificateResult; ?>
          </div>
        </div>
        <div class="info-block" id="php-version">
          <div class="top">
            <span id="php-version-anchor"></span>
            <h3>PHP version</h3>
              <?php if (!empty($obj->PHP_Versiondescription)) { 
                echo '<p>'.$obj->PHP_Versiondescription.'</p>';
              } ?>
              <ul>
                <?php echo $PHP_Version; ?>
              </ul>
              <?php echo $strPHPversionResult; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="info-block-grid-2-1">
      <div class="info-block" id="core-web-vitals-statistics">
        <div class="info-block-half" id="core-web-vitals-desktop">
          <div class="top">
            <span id="core-web-vitals-statistics-anchor"></span>
            <span id="core-web-vitals-desktop-anchor"></span>
            <h3><?php echo $obj->Core_Web_Vitals_Desktoptitle; ?></h3>
             <?php if(!empty($obj->Core_Web_Vitals_Desktopdescription)) {
              echo '<p>'.$obj->Core_Web_Vitals_Desktopdescription.'</p>';
             } ?>
            <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
            <ul>
              <?php echo $First_Input_Delay_FID_Desktop; ?>
              <?php echo $Largest_Contentful_Paint_LCP_Desktop; ?>
              <?php echo $Cumulative_Layout_Shift_CLS_Desktop; ?>
            </ul>
            <?php echo $strCoreWebVitalsDesktopResult; ?>
          </div>
        </div>
        <div class="info-block-half" id="core-web-vitals-mobile">
          <div class="top">
            <span id="core-web-vitals-mobile-anchor"></span>
            <h3><?php echo $obj->Core_Web_Vitals_Mobiletitle; ?></h3>
             <?php if(!empty($obj->Core_Web_Vitals_Mobiledescription)) {
              echo '<p>'.$obj->Core_Web_Vitals_Mobiledescription.'</p>';
             } ?>
            <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
            <ul>
              <?php echo $First_Input_Delay_FID_Mobile; ?>
              <?php echo $Largest_Contentful_Paint_LCP_Mobile; ?>
              <?php echo $Cumulative_Layout_Shift_CLS_Mobile; ?>
            </ul>
            <?php echo $strCoreWebVitalsMobileResult; ?> 
          </div>
        </div>
      </div>
      <div class="info-block" id="uptime-statistics">
        <div class="top">
          <span id="uptime-statistics-anchor"></span>
          <h3><?php echo $obj->Uptime_Statisticstitle; ?></h3>
           <?php if(!empty($obj->Uptime_Statisticsdescription)) {
            echo '<p>'.$obj->Uptime_Statisticsdescription.'</p>';
           } ?>
          <div class="headings"><span class="issues">Test type</span><span class="scores">Result</span></div>
          <ul>
            <?php echo $Uptime_Last_30_Days; ?>
            <?php echo $Uptime_Last_7_Days; ?>
            <?php echo $Uptime_Today; ?>
          </ul>
            <?php echo $strUptimeResult; ?>
        </div>
      </div>
    </div>
    <div class="info-block-grid-1-2-no-gap" id="desktop-insights-scores">
      <div class="info-block" id="insights-scores-desktop">
        <div class="top">
          <span id="desktop-insights-scores-anchor"></span>
          <span id="insights-scores-desktop-anchor"></span>
          <h3><?php echo $obj->Insights_History_Data_for_Desktoptitle; ?></h3>
         <?php if(!empty($obj->Insights_History_Data_for_Desktopdescription)) {
          echo '<p>'.$obj->Insights_History_Data_for_Desktopdescription.'</p>';
         } ?>
          <div class="headings"><span class="key">Key</span><span class="issues">Test type</span><span class="scores">Result</span></div>
          <ul>
            <?php echo $Performance_Desktop; ?>
            <?php echo $Accessibility_Desktop; ?>
            <?php echo $Best_Practice_Desktop; ?>
            <?php echo $SEO_Desktop; ?>
          </ul>
          <?php echo $strInsightsDesktopResult; ?>          
        </div>
      </div>
      <div class="info-block" id="insights-scores-graph-desktop">
        <span id="insights-scores-graph-desktop-anchor"></span>
        <div class="insights-history-desktop-container">
          <div id="insights-history-desktop"><script language = "JavaScript">
             function drawChart() {
                // Define the chart to be drawn.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Date');
                data.addColumn('number', 'Performance');
                data.addColumn('number', 'Accessibility');
                data.addColumn('number', 'Best Practice');
                data.addColumn('number', 'Search Engine Optimisation');
                data.addRows(<?php echo json_encode($desktop_chart_data) ;?>);
                // Set chart options
                var options = {
                   chart: {
                      title: '',
                   },   
                   chartArea: {
                    backgroundColor: {
                      fill: 'none',
                    }, 
                   },
                   backgroundColor: {
                     fill: 'none',
                   },
                   legend: {
                      position: 'none',
                   },
                   hAxis: {
                      title: '',         
                   },    
                };
                // Instantiate and draw the chart.
                var chart = new google.charts.Line(document.getElementById('insights-history-desktop'));
                chart.draw(data, google.charts.Line.convertOptions(options));
             }
             google.charts.setOnLoadCallback(drawChart);
            </script></div>
        </div>
      </div>
    </div>
    <div class="info-block-grid-1-2-no-gap" id="mobile-insights-scores">
      <div class="info-block" id="insights-scores-mobile">
        <div class="top">
          <span id="mobile-insights-scores-anchor"></span>
          <span id="insights-scores-mobile-anchor"></span>
         <h3><?php echo $obj->Insights_History_Data_for_Mobiletitle; ?></h3>
         <?php if(!empty($obj->Insights_History_Data_for_Mobiledescription)) {
          echo '<p>'.$obj->Insights_History_Data_for_Mobiledescription.'</p>';
         } ?>
          <div class="headings"><span class="key">Key</span><span class="issues">Test type</span><span class="scores">Result</span></div>
          <ul>
            <?php echo $Performance_Mobile; ?>
            <?php echo $Accessibility_Mobile; ?>
            <?php echo $Best_Practice_Mobile; ?>
            <?php echo $SEO_Mobile; ?>
          </ul>
          <?php echo $strInsightsMobileResult; ?>              
        </div>
      </div>
      <div class="info-block" id="insights-scores-graph-mobile">
        <span id="insights-scores-graph-mobile-anchor"></span>
        <div class="insights-history-mobile-container">
          <div id="insights-history-mobile"><script language = "JavaScript">
               function drawChart() {
                // Define the chart to be drawn.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Date');
                data.addColumn('number', 'Performance');
                data.addColumn('number', 'Accessibility');
                data.addColumn('number', 'Best Practice');
                data.addColumn('number', 'SEO');
                data.addRows(<?php echo json_encode($mobile_chart_data) ;?>);
                // Set chart options
                var options = {
                chart: {
                title: '',
                },   
                chartArea: {
                backgroundColor: {
                fill: 'none',
                }, 
                },
                backgroundColor: {
                fill: 'none',
                },
                legend: {
                position: 'none',
                },
                hAxis: {
                title: '',         
                },    
                };
                // Instantiate and draw the chart.
                var chart = new google.charts.Line(document.getElementById('insights-history-mobile'));
                chart.draw(data, google.charts.Line.convertOptions(options));
                }
                google.charts.setOnLoadCallback(drawChart);
            </script></div>
        </div>
      </div>
    </div>
    <?php include 'results-content-scan.php'; ?>
  </div>
</div>
<?php // Show Site Health Check if activated - END
} else { ?>
<div class="health-check">
  <span id="health-check-anchor"></span>
  <div class="health-check-intro">
    <h1>Site Health Check</h1>
    <p>Pedalo's WordPress <strong>Site Health Check</strong> tool is not currently active on your site.</p>
    <p>If activated the tool will regularly scan your site and check for issues with security, performance, and content structures, enabling you and your team to keep an eye on your site across a range of metrics and manage any problems swiftly.</p>
    <p>
      <a href="<?php echo $strPedaloContactFormURL; ?>?primaryissue=Please activate the Health Check Tool on my site now&site=<?php echo $strSiteURL.$strAllIssues; ?>" class="fixrequest" target="_blank"><strong>Contact Pedalo now to activate your Site Health Check tool</strong></a>
    </p>

  </div>
</div>
<?php } ?>
<script>
var acc = document.getElementsByClassName("accordion");
var panel = document.getElementsByClassName('panel');

for (var i = 0; i < acc.length; i++) {
    acc[i].onclick = function() {
      var setClasses = !this.classList.contains('active');
        setClass(acc, 'active', 'remove');
        setClass(panel, 'show', 'remove');
        
        if (setClasses) {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        }
    }
}
function setClass(els, className, fnName) {
    for (var i = 0; i < els.length; i++) {
        els[i].classList[fnName](className);
    }
}
</script>
</body>
