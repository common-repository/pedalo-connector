//Open and close accordions
function AccordionBrokenLinks() {
  document.getElementById("accordion-broken-links").classList.add("show");
  document.getElementById("accordion-broken-links-butt").classList.add("active");
}
function AccordionH1Tags() {
  document.getElementById("accordion-h1-tags").classList.add("show");
  document.getElementById("accordion-h1-tags-butt").classList.add("active");
}
function AccordionLongTitleTags() {
  document.getElementById("accordion-long-title-tags").classList.add("show");
  document.getElementById("accordion-long-title-tags-butt").classList.add("active");
}
function AccordionShortTitleTags() {
  document.getElementById("accordion-short-title-tags").classList.add("show");
  document.getElementById("accordion-short-title-tags-butt").classList.add("active");
}
function AccordionLongDescriptionTags() {
  document.getElementById("accordion-long-description-tags").classList.add("show");
  document.getElementById("accordion-long-description-tags-butt").classList.add("active");
}
function AccordionShortDescriptionTags() {
  document.getElementById("accordion-short-description-tags").classList.add("show");
  document.getElementById("accordion-short-description-tags-butt").classList.add("active");
}
function AccordionLargeImages() {
  document.getElementById("accordion-large-images").classList.add("show");
  document.getElementById("accordion-large-images-butt").classList.add("active");
}
function AccordionAllPages() {
  document.getElementById("accordion-all-pages").classList.add("show");
  document.getElementById("accordion-all-pages-butt").classList.add("active");
}
function AccordionAllImages() {
  document.getElementById("accordion-all-images").classList.add("show");
  document.getElementById("accordion-all-images-butt").classList.add("active");
}
function AccordionScriptFiles() {
  document.getElementById("accordion-script-files").classList.add("show");
  document.getElementById("accordion-script-files-butt").classList.add("active");
}
function AccordionCSSFiles() {
  document.getElementById("accordion-css-files").classList.add("show");
  document.getElementById("accordion-css-files-butt").classList.add("active");
}
function AccordionIFrames() {
  document.getElementById("accordion-iframes").classList.add("show");
  document.getElementById("accordion-iframes-butt").classList.add("active");
}
function AccordionXMLFiles() {
  document.getElementById("accordion-xml-files").classList.add("show");
  document.getElementById("accordion-xml-files-butt").classList.add("active");
}

// Apply flashing red border on accordions when anchor link clicked
// brokenlinks
$(function () { $('#brokenlinks').on("click", function () {$('#accordion-broken-links-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#accordion-broken-links-butt').removeClass(" animateaccordion"); }});
// h1tags
$(function () { $('#h1tags').on("click", function () {$('#accordion-h1-tags-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#accordion-h1-tags-butt').removeClass(" animateaccordion"); }});
// longtitletags
$(function () { $('#longtitletags').on("click", function () {$('#accordion-long-title-tags-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#accordion-long-title-tags-butt').removeClass(" animateaccordion");}});
// shorttitletags
$(function () { $('#shorttitletags').on("click", function () {$('#accordion-short-title-tags-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-short-title-tags-butt').removeClass(" animateaccordion");}});
// longdescription
$(function () { $('#longdescription').on("click", function () {$('#accordion-long-description-tags-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-long-description-tags-butt').removeClass(" animateaccordion");}});
// shortdescription
$(function () { $('#shortdescription').on("click", function () {$('#accordion-short-description-tags-butt').addClass(" animateaccordion");setTimeout(RemoveClass, 6000);
  });
  function RemoveClass() {$('#accordion-short-description-tags-butt').removeClass(" animateaccordion");}});
// largeimages
$(function () { $('#largeimages').on("click", function () {$('#accordion-large-images-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-large-images-butt').removeClass(" animateaccordion");}});
// allpages
$(function () { $('#allpages').on("click", function () {$('#accordion-all-pages-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-all-pages-butt').removeClass(" animateaccordion");}});
// allimages
$(function () { $('#allimages').on("click", function () {$('#accordion-all-images-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-all-images-butt').removeClass(" animateaccordion");}});
// scriptfiles
$(function () { $('#scriptfiles').on("click", function () {$('#accordion-script-files-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-script-files-butt').removeClass(" animateaccordion");}});
// scriptfiles
$(function () { $('#cssfiles').on("click", function () {$('#accordion-css-files-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-css-files-butt').removeClass(" animateaccordion");}});
// scriptfiles
$(function () { $('#iframes').on("click", function () {$('#accordion-iframes-files-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-iframes-butt').removeClass(" animateaccordion");}});
$(function () { $('#iframes').on("click", function () {$('#accordion-iframes-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-iframes-butt').removeClass(" animateaccordion");}});
// xmlfiles
$(function () { $('#xmlfiles').on("click", function () {$('#accordion-xml-files-butt').addClass(" animateaccordion");
    setTimeout(RemoveClass, 6000);});
  function RemoveClass() {$('#accordion-xml-files-butt').removeClass(" animateaccordion");}});

// Apply flashing red border on non-accordion blocks when anchor link clicked
// corewebvitalsfidd
$(function () { $('#corewebvitalsfidd').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// corewebvitalsfidm
$(function () { $('#corewebvitalsfidm').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// corewebvitalslcpd
$(function () { $('#corewebvitalslcpd').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// corewebvitalslcpm
$(function () { $('#corewebvitalslcpm').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// corewebvitalsclsd
$(function () { $('#corewebvitalsclsd').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// corewebvitalsclsm
$(function () { $('#corewebvitalsclsm').on("click", function () {$('#core-web-vitals-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#core-web-vitals-statistics').removeClass(" animate"); }});
// uptimestatistics
$(function () { $('#uptimestatistics').on("click", function () {$('#uptime-statistics').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#uptime-statistics').removeClass(" animate"); }});
// insightsscoresdesktop
$(function () { $('#insightsscoresdesktop').on("click", function () {$('#desktop-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#desktop-insights-scores').removeClass(" animate"); }});
// insightsscoresmobile
$(function () { $('#insightsscoresmobile').on("click", function () {$('#mobile-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#mobile-insights-scores').removeClass(" animate"); }});
// criticalserverityissues
$(function () { $('#criticalserverityissues').on("click", function () {$('#critical-issues').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#critical-issues').removeClass(" animate"); }});
// highserverityissues
$(function () { $('#highserverityissues').on("click", function () {$('#high-severity-issues').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#high-severity-issues').removeClass(" animate"); }});
// mediumserverityissues
$(function () { $('#mediumserverityissues').on("click", function () {$('#medium-severity-issues').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#medium-severity-issues').removeClass(" animate"); }});
// wordfencescanresults
$(function () { $('#wordfencescanresults').on("click", function () {$('#wordfence-scan-results').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#wordfence-scan-results').removeClass(" animate"); }});
// pedaloconnector
$(function () { $('#pedaloconnector').on("click", function () {$('#pedalo-connector').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#pedalo-connector').removeClass(" animate"); }});
// sslcertificateperformance
$(function () { $('#sslcertificateperformance').on("click", function () {$('#ssl-certificate').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#ssl-certificate').removeClass(" animate"); }});
// sslcertificatesecurity
$(function () { $('#sslcertificatesecurity').on("click", function () {$('#ssl-certificate').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#ssl-certificate').removeClass(" animate"); }});
// phpversionperformance
$(function () { $('#phpversionperformance').on("click", function () {$('#php-version').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#php-version').removeClass(" animate"); }});
// phpversionsecurity
$(function () { $('#phpversionsecurity').on("click", function () {$('#php-version').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#php-version').removeClass(" animate"); }});
// inactiveplugins
$(function () { $('#inactiveplugins').on("click", function () {$('#pedalo-connector').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#pedalo-connector').removeClass(" animate"); }});
// availableupdates
$(function () { $('#availableupdates').on("click", function () {$('#pedalo-connector').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#pedalo-connector').removeClass(" animate"); }});
// accessibilitydesktop
$(function () { $('#accessibilitydesktop').on("click", function () {$('#desktop-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#desktop-insights-scores').removeClass(" animate"); }});
// accessibilitymobile
$(function () { $('#accessibilitymobile').on("click", function () {$('#mobile-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#mobile-insights-scores').removeClass(" animate"); }});
// bestpracticedesktop
$(function () { $('#bestpracticedesktop').on("click", function () {$('#desktop-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#desktop-insights-scores').removeClass(" animate"); }});
// bestpracticemobile
$(function () { $('#bestpracticemobile').on("click", function () {$('#mobile-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#mobile-insights-scores').removeClass(" animate"); }});
// seodesktop
$(function () { $('#seodesktop').on("click", function () {$('#desktop-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#desktop-insights-scores').removeClass(" animate"); }});
// seomobile
$(function () { $('#seomobile').on("click", function () {$('#mobile-insights-scores').addClass(" animate");
    setTimeout(RemoveClass, 6000); });
  function RemoveClass() {$('#mobile-insights-scores').removeClass(" animate"); }});

// Back to top button
$(window).scroll(function() { 
    if($(this).scrollTop() > 600) { 
        $('#back-to-top').fadeIn('fast'); 
    } else { // else
        $('#back-to-top').fadeOut('fast'); 
    }
});







// handle links with @href started with '#' only
$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $id.offset().top;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos},1000);
});