<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESELAS</title>
    <?php 
        Controllers::includeCss(["bootstrap.min","all","indexView"]);
    ?>
</head>
<body>
    
    <header>
      <a href="#" class="header__logo">Logo</a>
      <nav class="menu">
        <a href="#menu1">Menu1</a>
        <a href="#menu2">Menu2</a>
        <a href="#menu3">Menu3</a>
        <a href="#menu4">Menu4</a>
      </nav> 
    </header>
    <div class="container-fluid" id="page-top" style=" padding-top: 10px;">
            <div id="monCarousel" class="carousel slide" data-ride="carousel" style="height:500px;">
                <ol class="carousel-indicators">
                    <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#monCarousel" data-slide-to="1"></li>
                    <li data-target="#monCarousel" data-slide-to="2"></li>
                    <li data-target="#monCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Publics/images/CA-wp1" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE1</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp2" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE2</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp3" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE3</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp4" alt="" style="width:100%;height:500px;">
                        <div class="carousel-caption">
                            <h4>IMAGE4</h4>
                        </div>
                    </div>

                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" ></span>
                    </a>

                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" ></span>
                    </a>
                </div>
            </div>
    </div>
    <div class="site-content">
        <div class="container">
        
        </div>
    </div>


    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","indexView"]);
    ?>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>