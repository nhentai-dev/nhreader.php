<?php
   $id= $_GET['g'];
   if (isset($_GET['g'])) {
   $url1 = "https://apis.nhent.ai/g/$id";
   $url2 = "https://nhent.ai/api/gallery/$id";
    } else {
        echo "";
    }
   $json = file_get_contents($url1);
   $json2 = file_get_contents($url2);
   $json_data2 = json_decode($json2, true);
   $json_data = json_decode($json, true);
   $json_count  = count($json_data);
   $download = $json_data["dlurl"];
   $size = $json_data["size"];
   $yummy = $json_data;
   ?>
<!DOCTYPE html>
<html lang="en" class=" theme-black">
  <head>
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://cdn.glitch.com/9cf1a9cd-4223-4d68-8e9d-188892573aae%2Fgo-nh.png?1547725929082">
      <title>Read and Download <?php echo $json_data2["title"]["pretty"];?> &raquo; nhentai: hentai doujinshi and manga</title>
      <meta charset="UTF-8">
      <meta itemprop="image" content="<?php echo $json_data["pages"][0];?>"/>
      <meta itemprop="name" content="<?php echo $json_data2["title"]["pretty"];?>" />
      <meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $json_data2["title"]["pretty"];?>" />
	<meta property="og:image" content="<?php echo $json_data["pages"][0];?>" />
	<meta name="description" content="Read and Download <?php echo $json_data2["title"]["pretty"];?>, a hentai doujinshi by <?php print $json_data["details"]["artists"][0];?> for free on nhentai." />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="<?php echo $json_data2["title"]["pretty"];?>" />
	<meta name="twitter:description" content="<?php $a = 0 ; $b = $json_data["details"]["tags"];while($b[$a]){echo $b[$a];$a ++;};?>" />
      <meta name="ROBOTS" content="NOINDEX, NOFOLLOW"/>
      <script type="text/javascript" src="https://reader.nhent.ai/js/ga.js"></script>
      <meta name="theme-color" content="#1f1f1f">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700">
      <link rel="stylesheet" href="https://static.nhent.ai/css/main_style.css">
      <script type="text/javascript" src="//code.jquery.com/jquery-latest.min.js"></script>
      <script type="text/javascript" src="//stuk.github.io/jszip/dist/jszip.min.js"></script>
      <script type="text/javascript" src="//stuk.github.io/jszip-utils/dist/jszip-utils.js"></script>
      <script type="text/javascript" src="//stuk.github.io/jszip/vendor/FileSaver.js"></script>
      <style>
         #thumbnail-container img {
				width: 100%;
				margin: 10px 0;
			}
			.text-jalan {
			    background: #000;
			    position: fixed;
			    bottom: 0;
			    width: 100%;
			    z-index: 999;
			}
      </style>
   </head>
   <body>
       <div class="text-jalan"><marquee behavior="scroll" direction="left">Peringatan!!! Download, Tags, Search, Login/Register, Home, dll belum tersedia atau sedang dalam perkembangan</marquee></div>
       <nav role="navigation"><a class="logo" href="/"><img src="https://cdn.glitch.com/9cf1a9cd-4223-4d68-8e9d-188892573aae%2Fgo-nh.png?1547725929082" alt="logo" width="46" height="30"></a><form role="search" action="/search/" class="search"><input type="search" name="q" value="" autocapitalize="none" required /><button type="submit" class="btn btn-primary btn-square"><i class="fa fa-search fa-lg"></i></button></form><button type="button" class="btn btn-secondary btn-square" id="hamburger"><span class="line"></span><span class="line"></span><span class="line"></span></button><div class="collapse"><ul class="menu left"><li class="desktop "><a href="/random/">Random</a></li><li class="desktop "><a href="/tags/">Tags</a></li><li class="desktop "><a href="/artists/">Artists</a></li><li class="desktop "><a href="/characters/">Characters</a></li><li class="desktop "><a href="/parodies/">Parodies</a></li><li class="desktop "><a href="/groups/">Groups</a></li><li class="desktop "><a href="/info/">Info</a></li><li class="dropdown"><button class="btn btn-secondary btn-square" type="button" id="dropdown"><i class="fa fa-chevron-down"></i></button><ul class="dropdown-menu"><li><a href="/random/">Random</a></li><li><a href="/tags/">Tags</a></li><li><a href="/artists/">Artists</a></li><li><a href="/characters/">Characters</a></li><li><a href="/parodies/">Parodies</a></li><li><a href="/groups/">Groups</a></li><li><a href="/info/">Info</a></li></ul></li></ul><ul class="menu right"><li><a href="/login/"><i class="fa fa-sign-in"></i> Sign in</a></li><li><a href="/register/"><i class="fa fa-pencil-square"></i> Register</a></li></ul></div></nav>
       <div id="content">
      <div class="container" id="bigcontainer">
          <div id="cover">
				<img is="lazyload-image" class="lazyload" width="350" height="497" data-src="<?php echo $json_data["pages"][0];?>" src="<?php echo $json_data["pages"][0];?>" /><noscript><img src="<?php echo $json_data["pages"][0];?>" width="350" height="497" /></noscript>
		</div>
         <div id="info-block">
			<div id="info">
                     <h1><?php echo $json_data2["title"]["english"];?></h1>
                     <h1><?php echo $json_data2["title"]["japanese"];?></h1>
                  <section id="tags">
					<div class="tag-container field-name ">
					    Tags:
						<span class="tags"><?php $a = 0 ; $b = $json_data["details"]["tags"];while($b[$a]){echo $b[$a];$a ++;};?></span>
					</div>
					<div class="tag-container field-name ">
						Artists:
						<span class="tags"><?php print $json_data["details"]["artists"][0];?></span>
                  </div>
                  <div class="tag-container field-name ">
						Groups:
                     <span class="tags"><?php print $json_data["details"]["groups"][0];?></span>
                  </div>
                  <div class="tag-container field-name ">
                      Languages:
                     <span class="tags"><?php $a = 0 ; $b = $json_data["details"]["languages"];while($b[$a]){echo $b[$a];$a ++;};?></span>
                  </div>
                  <div class="tag-container field-name ">
                      Categories:
                     <span class="tags"><?php print $json_data["details"]["categories"][0];?></span>
                  </div>
               </div>
               <div class="buttons">
                   <a href="#" id="download" onclick="downloads(urls,nama)" class="btn btn-secondary"><i class="fa fa-download"></i> Download</a>
               </div>
              </div> 
              </div>
            <div class="container" id="thumbnail-container">
            </div>
            <script>
var prefix='https://i.bakaa.me/galleries/<?php echo $json_data2["media_id"];?>/';var $container=document.getElementById('thumbnail-container');var pageIndex=0;const PAGE_SIZE=2;const TIMEOUT=3*60*1000;loadPage();async function loadPage(){await Promise.race([getSuccessPromise(),getErrorPromise()]);pageIndex+=1;loadPage()}function getSuccessPromise(){var numberList=Array.from(Array(PAGE_SIZE),(a,b)=>b);var promiseList=numberList.map(number=>{var index=PAGE_SIZE*pageIndex+number+1;return new Promise(async resolve=>{await loadImg(index);resolve()})});var successPromise=Promise.all(promiseList);return successPromise}function getErrorPromise(){return new Promise(resolve=>{setTimeout(()=>{resolve()},TIMEOUT)})}async function loadImg(index){return new Promise(resolve=>{var img=createImg(index);img.onload=function(){resolve()};$container.appendChild(img)})}function createImg(index){var img=document.createElement('img');img.onerror=loadPngAfterJpgError.bind(undefined,img,index);var src=prefix+index+'.jpg';img.src=src;return img}function loadPngAfterJpgError(img,index){var src=prefix+index+'.png';img.src=src;img.onerror=function(a,b,c){console.log('png'+index+'----',a,b,c)}}$(document)['ready'](function(){$('#hamburger')['on']('click',function(_0xab55x4){$('.collapse')['toggleClass']('open')})});$(document)['ready'](function(){$('#dropdown')['on']('click',function(_0xab55x4){$('.dropdown-menu')['toggleClass']('open')})})
            </script>
            <!-- API HERE -->
            <script>
var gallery = new nhtai.gallery(<?php print json_encode($json_data2);?>);gallery.init();
            </script>
            <!-- END of API -->
            <script>
var urls=<?php print json_encode($json_data["pages"]);?>;var nama="<?php echo $json_data2['title']['japanese'];?> ♥ nHentai";function downloads(urls,nama){var zip=new JSZip();var count=0;var name=nama+".zip";urls.forEach(function(url){JSZipUtils.getBinaryContent(url,function(err,data){if(err){throw err}var filename=url.replace(/.*\//g,'');var img=zip.folder("<?php echo $json_data2['title']['pretty'];?>");img.file("info.txt","Download from https://reader.nhent.ai/g/<?php echo $json_data2['id'];?> \n Dont Forget to join discord: https://discord.gg/y6kurbu").file(filename,data,{binary:true});count+=1;if(count==urls.length){zip.generateAsync({type:'blob'}).then(function(content){saveAs(content,name)})}})})}
            </script>
            <script>
                function setCookie(cname, cvalue, ex) {
    var d = new Date();
    d.setTime(d.getTime() + (ex*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
            </script>
   </body>
</html>
