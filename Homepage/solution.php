<?php 
    $img_url = "http://127.0.0.1/bikonnect-website/frontend/dist/";
    $front_url = "http://127.0.0.1/bikonnect-website/Homepage/"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bikonnect</title>
    <meta name="KeyWords" content="bikonnect">
    <meta name="Description" content="Bikonnect Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="<?= $img_url."styles/main.css" ?>">
  </head>
  <body><!--[if lt IE 10]>
    <div class="old_browser">
      <div class="old_browser_inner">
        <div class="oops">OOPS!</div>
        <div class="oops_title">您的瀏覽器版本太舊了！</div>
        <p>請更新至 Internet Explorer 10 以上版本或選用更現代化的瀏覽器，<br><br>使用老舊版本的瀏覽器瀏覽本網站將可能有無法預測的錯誤，請儘快更新。<br><br>微軟已於2016年起停止IE8 (含)以下版本之Windows安全更新（<a href="http://windows.microsoft.com/zh-tw/windows/end-support-help" target="_blank">微軟 終止支援公告</a>），<br>為了您的個資安全、瀏覽流暢度與享受更多網站互動體驗，建議您立即升級瀏覽器。</p>
        <table>
          <caption>&gt;&gt; 建議您更新或使用以下瀏覽器</caption>
          <tr>
            <td><a href="http://windows.microsoft.com/zh-tw/internet-explorer/download-ie" target="_blank"><img src="images/browser/ie.png" alt="IE"><span>IE</span></a></td>
            <td><a href="http://www.google.com/chrome/" target="_blank"><img src="images/browser/chrome.png" alt="Chrome"><span>Chrome</span></a></td>
            <td><a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank"><img src="images/browser/firefox.png" alt="Firefox"><span>Firefox</span></a></td>
            <td><a href="https://www.opera.com/zh-tw/download?os=windows" target="_blank"><img src="images/browser/opera.png" alt="Opera"><span>Opera</span></a></td>
          </tr>
        </table>
        <p>2019 ALL RIGHTS RESERVED. <a href="javascript:;">Privacy &nbsp;| &nbsp;Polity</a>.</p>
      </div>
    </div><![endif]-->
    <div id="wrapper">
      <header id="header">
        <div class="header_inner"><a class="header_logo" href="<?= $front_url."index.php" ?>"><img class="retina" src="<?= $img_url."images/logo.png" ?>" alt="Bikonnect"></a>
          <nav class="header_nav">
            <ul>
              <li><a href="<?= $front_url."solution.php" ?>">Solution</a></li>
              <li><a href="javascript:;">Products</a>
                <ul>
                  <li><a href="<?= $front_url."product01.php" ?>">Cyling Data Platform</a></li>
                  <li><a href="<?= $front_url."product02.php" ?>">E-Bike App</a></li>
                  <li><a href="<?= $front_url."product03.php" ?>">Smart Lock for E-Bike</a></li>
                  <li><a href="<?= $front_url."product04.php" ?>">E-Bike store management system</a></li>
                  <li><a href="<?= $front_url."product05.php" ?>">E-Bike computer</a></li>
                </ul>
              </li>
              <li><a href="<?= $front_url."about.php" ?>">About Us</a></li>
              <li><a href="#contact">Contact</a></li>
              <li><a href="javascript:;">Blog</a></li>
            </ul>
            <div class="dropdown language">
              <div class="dropdown_head">ENGLISH</div>
              <div class="dropdown_list">
                <div class="item"><a class="active" href="javascript:;">English</a></div>
                <div class="item"><a href="javascript:;">中文</a></div>
              </div>
            </div>
          </nav><a id="btn_menu" href="javascript:;"><span></span></a>
        </div>
      </header>
      <main id="main">
        <div class="page_banner page_block in_solution">
          <div class="block_inner">
            <h1 class="block_title">E-Bike Data Service Solution</h1>
          </div>
        </div>
        <div class="solution_introduction page_block">
          <div class="block_inner">
            <div class="image_video">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/QOKVoRQH9hk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text">
              <p>The “E-Bike Data Service Solution” provided by Microprogram enhance E-Bike cyclist experience and bike brand service value with IoT and Big Data to make smart technologies improve global competition for E-Bike. Compared to regular bicycles, E-Bike offers the advantage of power supply, and E-Bike data service has combined E-Bike Computer and E-Bike App, which could provide cyclists' real-time dynamic cycling data to the cycling data platform to bike brands or component manufacturers.</p>
              <p>Through cyclists' data to assist the brand’s business decision-making, the E-Bike digital upgrades practically to create more added value for brand owners. For cyclists, a series of smart bike products, including E-Bike Computer and E-Bike App, make the cyclists’ experience more intelligent, reaching a win-win situation for cyclists, bike brands, dealers and component manufacturers.</p>
            </div>
          </div>
        </div>
        <div class="divide_line"><img src="<?= $img_url."images/bg_line.png" ?>" alt=""></div>
        <div class="solution_help page_block">
          <div class="block_inner">
            <h2 class="block_subtitle">We Can Help You</h2>
            <div class="pic_text">
              <div class="pic"><img src="<?= $img_url."images/img_solution_help.jpg" ?>" alt="We can help you"></div>
              <div class="text">
                <ul class="common_list">
                  <li>E-Bike digital upgrade, system integration of offline products and online services</li>
                  <li>Dealer after-sales service management (maintenance history, repair and maintenance online appointment)</li>
                  <li>Member cycling data collection and analysis</li>
                  <li>E-Bike OTA version update</li>
                  <li>E-Bike anti-theft</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="solution_keyAdvantages page_block">
          <div class="block_inner">
            <h2 class="block_subtitle">Key Advantages</h2>
            <div class="pic_text">
              <div class="pic"><img src="<?= $img_url."images/img_solution_keyAdvantages.jpg" ?>" alt="Key Advantages"></div>
              <div class="text">
                <ul class="common_list">
                  <li>Analyze cycling and E-Bike data to provide brands with future market trends</li>
                  <li>Online E-Bike App integrates Offline E-Bike computer</li>
                  <li>Classable authorizations to members’data management for management platform</li>
                  <li>User data collection</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="solution_application page_block">
          <div class="block_inner">
            <h2 class="block_subtitle">Application Range</h2>
            <div class="application_items">
              <div class="item"><img src="<?= $img_url."images/icon_app01.png" ?>" alt="Application Range 01"><span>E-Bike brand<br>operators</span></div>
              <div class="item"><img src="<?= $img_url."images/icon_app02.png" ?>" alt="Application Range 02"><span>Bike brands<br>operators</span></div>
              <div class="item"><img src="<?= $img_url."images/icon_app03.png" ?>" alt="Application Range 03"><span>Bike brands</span></div>
              <div class="item"><img src="<?= $img_url."images/icon_app04.png" ?>" alt="Application Range 04"><span>Bike stores/<br>dealers</span></div>
              <div class="item"><img src="<?= $img_url."images/icon_app05.png" ?>" alt="Application Range 05"><span>Bike parts<br>operators</span></div>
            </div>
          </div>
        </div>
        <div class="solution_cyclists_operators page_block">
          <div class="block_inner">
            <div class="content_block cyclists">
              <h2 class="block_subtitle">Cyclists</h2>
              <div class="table">
                <div class="tr">
                  <div class="th">Cycling aspect:</div>
                  <div class="td">E-Bike computer, cycling record with E-Bike APP, devices connection by Bluetooth ,personal riding route track</div>
                </div>
                <div class="tr">
                  <div class="th">Repair aspect:</div>
                  <div class="td">repair and maintenance appointment, appointment reminder, maintenance history</div>
                </div>
              </div>
            </div>
            <div class="content_block operators">
              <h2 class="block_subtitle">Operators</h2>
              <div class="table">
                <div class="tr">
                  <div class="th">Sales aspect:</div>
                  <div class="td">members’data collection, customers preference inquiry, notifications of preferential activities, service-related history</div>
                </div>
                <div class="tr">
                  <div class="th">Market aspect:</div>
                  <div class="td">business decisions, Big Data analysis, optimization upgrade</div>
                </div>
                <div class="tr">
                  <div class="th">Brand aspect:</div>
                  <div class="td">master comprehensive information, improve user satisfaction</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="solution_keyFeatures page_block">
          <div class="block_inner">
            <div class="content_block">
              <h2 class="block_subtitle">Key Features</h2>
              <div class="keyFeature_slider">
                <div class="slide">
                  <div class="pic_text">
                    <div class="pic">
                      <div class="img" style="background-image: url(<?= $img_url."images/img_solution_keyFeatures01.jpg" ?>);" alt="Key Features 01"></div>
                    </div>
                    <div class="text">
                      <h3>E-Bike APP</h3>
                      <p>connected cycling data, cycling record, bike maintenance reminder, one-click diagnosis, route navigation, comprehensive after-sales service offering users a better experience.</p>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="pic_text">
                    <div class="pic">
                      <div class="img" style="background-image: url(<?= $img_url."images/img_solution_keyFeatures01.jpg" ?>);" alt="Key Features 02"></div>
                    </div>
                    <div class="text">
                      <h3>E-Bike computer</h3>
                      <p>displays the demand of important information for E-Bike commuter and leisure users, which pair with E-Bike APP by Bluetooth to achieve the collection and recording of personal cycling data and extend more personalized function services.</p>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="pic_text">
                    <div class="pic">
                      <div class="img" style="background-image: url(<?= $img_url."images/img_solution_keyFeatures01.jpg" ?>);" alt="Key Features 03"></div>
                    </div>
                    <div class="text">
                      <h3>Store management system</h3>
                      <p>maintenance and repair online appointment, consumer bike situation feedback, maintenance history, members management, and simple operation but enhanced management efficiency and service quality of store management system.</p>
                    </div>
                  </div>
                </div>
                <div class="slide">
                  <div class="pic_text">
                    <div class="pic">
                      <div class="img" style="background-image: url(<?= $img_url."images/img_solution_keyFeatures01.jpg" ?>);" alt="Key Features 04"></div>
                    </div>
                    <div class="text">
                      <h3>Cycling data platform</h3>
                      <p>Collect the cyclists’cycling data, user behavior, consumption information and others data; and through categorized users, Big Data analysis, cycling heat map, and bicycle accident location statistics, quantified data as precision marketing, strategy planning, decision-making judgment indicators for enterprises to provide customers with the most accurate service and create the corporate value promotion.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact page_block" data-anchor="contact">
          <div class="block_inner">
            <div class="contact_info">
              <div class="contact_logo"><img class="retina" src="<?= $img_url."images/logo_big.png" ?>" alt="Bikonnect"></div>
              <h2>Let's get<br>
                <big>Connect</big>
              </h2>
              <div class="follow_us"><span>follow us!</span>
                <div class="social_links"><a href="javascript:;" target="_blank"><i class="icon_facebook"></i></a><a href="javascript:;" target="_blank"><i class="icon_twitter"></i></a><a href="javascript:;" target="_blank"><i class="icon_instagram"></i></a></div>
              </div>
              <div class="info_list">
                <div class="item"><i class="icon_location"></i><a href="https://goo.gl/maps/djPnGB4bzScakSzS9" target="_blank">7F, No.402, Shizheng Rd, Xitun Dist., Taichung City 407.,Taiwan</a></div>
                <div class="item"><i class="icon_mail"></i><a href="mailto:smart_ebike@program.com.tw">smart_ebike@program.com.tw</a></div>
                <div class="item"><i class="icon_tel"></i><a href="tel:+886-4-2369-2699">+886-4-2369-2699</a></div>
                <div class="item"><i class="icon_fax"></i><span>+886-4-2258-8577</span></div>
              </div>
            </div>
            <div class="contact_form">
              <form action="<?= $front_url."solution.php" ?>" method="post">
                <!--↓ 輸入有誤時 controls 的 class 加 'error' 即可顯示 error_text, 並在 error_text 顯示錯誤訊息 ↓-->
                <div class="controls_group">
                  <label>Name</label>
                  <div class="controls">
                    <input type="text" name="name">
                    <div class="error_text">Error!</div>
                  </div>
                </div>
                <div class="controls_group">
                  <label>Phone</label>
                  <div class="controls">
                    <input type="text" name="phone">
                    <div class="error_text">Error!</div>
                  </div>
                </div>
                <div class="controls_group">
                  <label>E-mail</label>
                  <div class="controls">
                    <input type="email" name="email">
                    <div class="error_text">Error!</div>
                  </div>
                </div>
                <div class="controls_group">
                  <label>Message</label>
                  <div class="controls">
                    <textarea name="message"></textarea>
                    <div class="error_text">Error!</div>
                  </div>
                </div>
                <!--↑ 輸入有誤時 controls 的 class 加 'error' 即可顯示 error_text, 並在 error_text 顯示錯誤訊息 ↑-->
                <div class="call_action">
                  <!-- <div class="captcha">
                    <div class="captcha_inner">
                      <div class="g-recaptcha" data-sitekey="6LcHGhITAAAAABIgEAplK2EWsVFkaE5o0DWUpsIs"></div>
                    </div>s
                  </div> -->
                  <button class="btn_submit" type="submit">Send</button>              
                </div>
              </form>
              <?php if($_POST){
                  require_once("./PHPMailer-5.2.9/PHPMailerAutoload.php");

                  $mail = new PHPMailer();
                  $mail->IsSMTP();
                  $mail->Host = 'smtp.sendgrid.net';
                  $mail->SMTPAuth = true;
                  $mail->Username = "azure_9131e480018e796d9d0b46988542082b@azure.com";
                  $mail->Password = "test#12ab";    
                  $mail->Port = 587;
                  $mail->setFrom('azure_9131e480018e796d9d0b46988542082b@azure.com','test');
                  $mail->AddAddress('smart_ebike@program.com.tw', 'test');
                  $mail->IsHTML(true);
                  $mail->Subject = 'bikonnect_mail';
                  $content = '姓名:'.$_POST['name'].',信箱:'.$_POST['email'].',連絡電話:'.$_POST['phone'].',內容'.$_POST['message'];
                  $mail->Body = $content;
              
                  if($mail->Send()){
                      return true;
                  }else{
                      echo $mail->ErrorInfo;
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </main>
      <footer id="footer">
        <div class="copyright">2019 ALL RIGHTS RESERVED. &nbsp;<a href="<?= $front_url."privacy_polity.php" ?>">Privacy &nbsp;| &nbsp;Polity</a>.
          
        </div>
      </footer>
    </div>
    <div id="sidebar">
      <div class="sidebar_logo"><a href="<?= $front_url."index.php" ?>"><img src="<?= $img_url."images/logo.png" ?>" alt="Bikonnect"></a></div>
      <nav class="sidebar_menu">
        <ul>
          <li><a href="<?= $front_url."solution.php" ?>">Solution</a></li>
          <li><a href="javascript:;">Products</a>
            <ul>
              <li><a href="<?= $front_url."product01.php" ?>">Cyling Data Platform</a></li>
              <li><a href="<?= $front_url."product02.php" ?>">E-Bike App</a></li>
              <li><a href="<?= $front_url."product03.php" ?>">Smart Lock for E-Bike</a></li>
              <li><a href="<?= $front_url."product04.php" ?>">E-Bike store management system</a></li>
              <li><a href="<?= $front_url."product05.php" ?>">E-Bike computer</a></li>
            </ul>
          </li>
          <li><a href="<?= $front_url."about.php" ?>">About Us</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="javascript:;">Blog</a></li>
        </ul>
        <div class="dropdown language">
          <div class="dropdown_head">ENGLISH</div>
          <div class="dropdown_list">
            <div class="item"><a class="active" href="javascript:;">English</a></div>
            <div class="item"><a href="javascript:;">中文</a></div>
          </div>
        </div>
      </nav>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="<?= $img_url."scripts/vendor.js" ?>"></script>
    <script src="<?= $img_url."scripts/plugins.js" ?>"></script>
    <script src="<?= $img_url."scripts/main.js" ?>"></script>
  </body>
</html>