<div class="info-block-grid-1">
  <div class="info-block" id="">
    <h3>Identified content issues</h3>
    <?php  // Pages with broken links
    if (($obj->Site_Crawl_Broken_Links > 0) && (!empty($obj->Site_Crawl_Broken_Linkstitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-broken-links-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Broken_Linkstooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-broken-links-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Broken_Linkstooltip; ?></span></span><?php echo $obj->Site_Crawl_Broken_Linkstitle; ?><span class="result"><?php echo $obj->Site_Crawl_Broken_Links; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Broken_Linksdescription)) {echo '<p>'.$obj->Site_Crawl_Broken_Linksdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-broken-links">
          <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 
            
            //choose link type to display
            if ($value->contenttype === 'html') {
              //choose the failure test
              if($value->available === 'false') {
              $i++;
                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                  switch (true) {

                  //select which criteria is to be displayed - e.g. h1
                  case ($key == "h1" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                  break; }
                } 
                  echo '</tr>';
              }
            }
            unset($array);
        } 
        ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Pages with multiple H1 tags
    if (($obj->Site_Crawl_Multiple_H1 > 0) && (!empty($obj->Site_Crawl_Multiple_H1title))) { ?>
      <div class="accordion-content">
        <span id="accordion-h1-tags-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Multiple_H1tooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-h1-tags-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Multiple_H1tooltip; ?></span></span><?php echo $obj->Site_Crawl_Multiple_H1title; ?><span class="result"><?php echo $obj->Site_Crawl_Multiple_H1; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Multiple_H1description)) {echo '<p>'.$obj->Site_Crawl_Multiple_H1description.'</p>';} ?></a>
        <div class="panel" id="accordion-h1-tags">
          <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th>URL</th>
              <th>Number of H1 tags</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $h1 = array_column($array, 'h1');
          array_multisort($h1, SORT_DESC, $array);
          $i = 0;
          foreach($array as $value) { 
            
            //choose link type to display
            if ($value->contenttype === 'html') {
              
              //choose the failure test
              if($value->h1 > 1) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. h1
                  case ($key == "h1" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "h1"): 
                      echo '<td>';
                      echo $value1.'</td>';
                    break; } 
                   break; }} 
                  echo '</tr>';
              }
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Long meta title tags
    if (($obj->Site_Crawl_Title_Long > 0) && (!empty($obj->Site_Crawl_Title_Longtitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-long-title-tags-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Title_Longtooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-long-title-tags-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Title_Longtooltip; ?></span></span><?php echo $obj->Site_Crawl_Title_Longtitle; ?><span class="result"><?php echo $obj->Site_Crawl_Title_Long; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Title_Longdescription)) {echo '<p>'.$obj->Site_Crawl_Title_Longdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-long-title-tags">
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th>URL</th>
              <th>Title tags</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 
            //choose link type to display
            if ($value->contenttype === 'html') {

              //choose the failure test
              if(strlen($value->title) > 60) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "title" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "title"): 
                      echo '<td>';
                      echo $value1.'</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Short meta title tags
    if (($obj->Site_Crawl_Title_Short > 0) && (!empty($obj->Site_Crawl_Title_Shorttitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-short-title-tags-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Title_Shorttooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-short-title-tags-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Title_Shorttooltip; ?></span></span><?php echo $obj->Site_Crawl_Title_Shorttitle; ?><span class="result"><?php echo $obj->Site_Crawl_Title_Short; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Title_Shortdescription)) {echo '<p>'.$obj->Site_Crawl_Title_Shortdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-short-title-tags">
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th>URL</th>
              <th>Title tags</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'html') {

              //choose the failure test
              if(strlen($value->title) < 30) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "title" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "title"): 
                      echo '<td>';
                      echo $value1.'</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Long meta description tags
    if (($obj->Site_Crawl_Description_Long > 0) && (!empty($obj->Site_Crawl_Description_Longtitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-long-description-tags-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Description_Longtooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-long-description-tags-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Description_Longtooltip; ?></span></span><?php echo $obj->Site_Crawl_Description_Longtitle; ?><span class="result"><?php echo $obj->Site_Crawl_Description_Long; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Description_Longdescription)) {echo '<p>'.$obj->Site_Crawl_Description_Longdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-long-description-tags">
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th>URL</th>
              <th>Description tags</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'html') {

              //choose the failure test
              if(strlen($value->description) > 155) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "description" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "description"): 
                      echo '<td>';
                      echo $value1.'</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Short meta description tags
    if (($obj->Site_Crawl_Description_Short > 0) && (!empty($obj->Site_Crawl_Description_Shorttitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-short-description-tags-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Description_Shorttooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-short-description-tags-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Description_Shorttooltip; ?></span></span><?php echo $obj->Site_Crawl_Description_Shorttitle; ?><span class="result"><?php echo $obj->Site_Crawl_Description_Short; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Description_Shortdescription)) {echo '<p>'.$obj->Site_Crawl_Description_Shortdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-short-description-tags">
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th>URL</th>
              <th>Description tags</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'html') {

              //choose the failure test
              if(strlen($value->description) < 70) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "description" || $key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 
                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "description"): 
                      echo '<td>';
                      echo $value1.'</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
    <?php } ?>
    <?php // Overly large images
    if (($obj->Site_Crawl_Image_Size > 0) && (!empty($obj->Site_Crawl_Image_Sizetitle))) { ?>
      <div class="accordion-content">
        <span id="accordion-large-images-anchor"></span>
        <?php if(empty($obj->Site_Crawl_Image_Sizetooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-large-images-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Image_Sizetooltip; ?></span></span><?php echo $obj->Site_Crawl_Image_Sizetitle; ?><span class="result"><?php echo $obj->Site_Crawl_Image_Size; ?><span class="individual-score"><span class="red" data-title="Fail">✕</span></span></span><?php if(!empty($obj->Site_Crawl_Image_Sizedescription)) {echo '<p>'.$obj->Site_Crawl_Image_Sizedescription.'</p>';} ?></a>
        <div class="panel" id="accordion-large-images">
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:83%;">URL</th>
              <th style="width:15%;text-align: right;">Image size in KB</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $imagesize = array_column($array, 'imgsize');
          array_multisort($imagesize, SORT_DESC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'img') {

              //choose the failure test
              if($value->imgsize > 100) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "imgsize" || $key == "link" || ($key == "contenttype" && $value1 = 'img')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}                        
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "imgsize"): 
                      echo '<td style="text-align:right;">';
                      echo $value1.' KB</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        </div>
      </div>
      <?php echo $strContentScanResult; ?>
    <?php } ?>
  </div>
</div>
<?php









// All content and site assets
?>
<div class="info-block-grid-1">
  <div class="info-block" id="">
    <h3>All content and site assets</h3>
    <?php // Pages ?>
      <div class="accordion-content">
        <span id="accordion-all-pages-anchor"></span><?php if(empty($obj->Site_Crawl_Links_Htmltooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-all-pages-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Htmltooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Htmltitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Html; ?></span><?php if(!empty($obj->Site_Crawl_Links_Htmldescription)) {echo '<p>'.$obj->Site_Crawl_Links_Htmldescription.'</p>';} ?></a>
        <div class="panel" id="accordion-all-pages">
        <?php if(empty($obj->Site_Crawl_Links_Html)) {
            echo '<span class="no-results">No Pages were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'html') {

              //choose the failure test
              if($value->contenttype === 'html') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {

                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'html')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
    <?php // Images ?>
      <div class="accordion-content">
        <span id="accordion-all-images-anchor"></span></span><?php if(empty($obj->Site_Crawl_Links_Imagetooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-all-images-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Imagetooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Imagetitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Image; ?></span><?php if(!empty($obj->Site_Crawl_Links_Imagedescription)) {echo '<p>'.$obj->Site_Crawl_Links_Imagedescription.'</p>';} ?></a>
        <div class="panel" id="accordion-all-images">
        <?php if(empty($obj->Site_Crawl_Links_Image)) {
            echo '<span class="no-results">No Images were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:83%;">URL</th>
              <th style="width:15%;text-align: right;">Image size in KB</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'img') {

              //choose the failure test
              if($value->imgsize >= 0) {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "imgsize" || $key == "link" || ($key == "contenttype" && $value1 = 'img')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                  switch (true) {
                    case ($key == "imgsize"): 
                      echo '<td style="text-align:right;">';
                      echo $value1.' KB</td>';
                    break; } 
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
    <?php // Documents ?>
      <div class="accordion-content">
        <span id="accordion-document-files-anchor"></span><?php if(empty($obj->Site_Crawl_Links_Doctooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-script-files-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Doctooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Doctitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Doc; ?></span><?php if(!empty($obj->Site_Crawl_Links_Docdescription)) {echo '<p>'.$obj->Site_Crawl_Links_Docdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-script-files">
        <?php if(empty($obj->Site_Crawl_Links_Doc)) {
          echo '<span class="no-results">No Documents were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'doc') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'document')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
      <?php } ?>
        </div>
      </div>
    <?php // IFrames ?>
      <div class="accordion-content">
        <span id="accordion-iframes-anchor"></span><?php if(empty($obj->Site_Crawl_Links_Iframetooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-iframes-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Iframetooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Iframetitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Iframe; ?></span><?php if(!empty($obj->Site_Crawl_Links_Iframedescription)) {echo '<p>'.$obj->Site_Crawl_Links_Iframedescription.'</p>';} ?></a>
        <div class="panel" id="accordion-iframes">
        <?php if(empty($obj->Site_Crawl_Links_Iframe)) {
          echo '<span class="no-results">No IFrames were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'iframe') {

              //choose the failure test
              if($value->contenttype === 'iframe') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {

                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'xml')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
    <?php // CSS files ?>
      <div class="accordion-content">
        <span id="accordion-css-files-anchor"></span></span><?php if(empty($obj->Site_Crawl_Links_Csstooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-css-files-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Csstooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Csstitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Css; ?></span><?php if(!empty($obj->Site_Crawl_Links_Cssdescription)) {echo '<p>'.$obj->Site_Crawl_Links_Cssdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-css-files">
        <?php if(empty($obj->Site_Crawl_Links_Css)) {
          echo '<span class="no-results">No CSS files were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'css') {

              //choose the failure test
              if($value->contenttype === 'css') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {

                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'xml')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
    <?php // Script files ?>
      <div class="accordion-content">
        <span id="accordion-script-files-anchor"></span><?php if(empty($obj->Site_Crawl_Links_Scripttooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-script-files-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Scripttooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Scripttitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Script; ?></span><?php if(!empty($obj->Site_Crawl_Links_Scriptdescription)) {echo '<p>'.$obj->Site_Crawl_Links_Scriptdescription.'</p>';} ?></a>
        <div class="panel" id="accordion-script-files">
        <?php if(empty($obj->Site_Crawl_Links_Script)) {
          echo '<span class="no-results">No Script files were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'script') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {
                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'img')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 80, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
    <?php // XML files ?>
      <div class="accordion-content">
        <span id="accordion-xml-files-anchor"></span><?php if(empty($obj->Site_Crawl_Links_Xmltooltip)) {
          $strNoTooltip = ' no-tooltip';
          } else {
            $strNoTooltip = '';
          }
        ?>
        <a class="accordion<?php echo $strNoTooltip; ?>" id="accordion-xml-files-butt">
          <span class="tooltip-icon<?php echo $strNoTooltip; ?>"><span><?php echo $obj->Site_Crawl_Links_Xmltooltip; ?></span></span><?php echo $obj->Site_Crawl_Links_Xmltitle; ?><span class="total"><?php echo $obj->Site_Crawl_Links_Xml; ?></span><?php if(!empty($obj->Site_Crawl_Links_Xmldescription)) {echo '<p>'.$obj->Site_Crawl_Links_Xmldescription.'</p>';} ?></a>
        <div class="panel" id="accordion-xml-files">
        <?php if(empty($obj->Site_Crawl_Links_Xml)) {
          echo '<span class="no-results">No XML files were found during the latest content scan</span>';
        } else { ?>
        <table class="content-scan-data">
          <thead>
            <tr>
              <th>No.</th>
              <th style="width:98%;">URL</th>
            </tr>
          </thead>
        <tbody>
        <?php 
          $array = $obj->Site_Crawl;
          $link = array_column($array, 'link');
          array_multisort($link, SORT_ASC, $array);
          $i = 0;
          foreach($array as $value) { 

            //choose link type to display
            if ($value->contenttype === 'xml') {

              //choose the failure test
              if($value->contenttype === 'xml') {
              $i++;

                //create table rows
                echo '<tr>';
                $array1 = $value;
                foreach($array1 as $key => $value1) {

                switch (true) {

                  //select which criteria is to be displayed - e.g. title
                  case ($key == "link" || ($key == "contenttype" && $value1 = 'xml')):
                  switch (true) {
                    case ($key == "link"): 

                        $value2 = str_replace("https://www.".$obj->Site,"",$value1);
                        $value3 = str_replace("https://www.".$obj->Site,"",$value2);
                        if($value3 != '') {$value3 = $value3;} else {$value3 = '[ -- homepage without trailing slash - '.$obj->Site.' -- ]';}
                        echo '<td>'.$i.'</td><td><a href="'.$value1.'" target="_blank">'.mb_strimwidth($value3, 0, 160, '...').'</a></td>';
                    break; }
                   break; }
                  } 
                  echo '</tr>';
              }
              unset($array1);
            }
            unset($array);
        } ?>
          </tbody>
        </table>
        <?php } ?>
        </div>
      </div>
  </div>
</div>