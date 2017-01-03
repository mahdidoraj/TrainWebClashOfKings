@import "../css/font.css";
body {
	background: #CBCCD0;
	background-size: cover;
}
html,body,a,li,ul,font,p,h1,h2,h3,h4,h5,h6 {
	font-family: BYekan;
	margin: 0px;
	padding: 0px;
	list-style: none;
	text-decoration: none;
	color: black;
	direction: rtl;
	font-size: 14px;
}
#all {
	margin: auto;
	width: 1000px;
	height: auto;
	
}
.header {
	height: 410px;
	width: 100%;
}
#menuheader {
	width: 100%;
	height: 40px;
}
#menuheader ul {
	float: right;
}
#menuheader ul a li {
	display: inline;
	float: right;
	margin: 10px 17px 0px 0px;
	padding: 8px 15px 8px 15px;
	border: 2px solid transparent;
	border-radius: 5px;
	color: black;
}
#menuheader ul a li:hover {
	border: 2px solid #2F4666;
}
#menuheader ul a li:active,#menuheader ul li:focus {
	background: #2F4666;
	color: white;
}


#slideshowContainer {
	width: 632px;
	margin: 30px auto 0 auto;
	position:relative;
}
.slideshow {
	height: 332px;
}
.slideshow img {
	padding: 15px;
	border: 1px solid #ccc;
	background-color: #eee;
}
#nav {
	list-style-type:none;
	z-index:150;
}
#nav li a {
	display:block;
	width:58px;
	height:102px;
	text-indent:-9999px;
	outline:none;
}
#prev a {
	background:url(../image/left.png);
	width:58px;
	height:102px;
	position:absolute;
	top:120px;
	left:-70px;
}
#next a {
	background:url(../image/right.png);
	width:58px;
	height:102px;
	position:absolute;
	top:120px;
	right:-70px;
}
#next a:hover {
	background:url(../image/right_over.png);
}
#prev a:hover {
	background:url(../image/left_over.png);
}

#maincontent {
	
}
.post {
	width: 560px;
	height: auto;
	float: right;
}
.postbg {
	width: 100%;
	height: auto;
	float: right;
	border-radius:5px;
	margin: 10px 0px 10px 0px;
	background: #FFFFFF;
}
.contentheader {
	width: 530px;
	height: auto;
	padding: 15px;
	float: left;
	border-bottom: solid 0.5px black;
}


.navbarleft {
	width: 420px;
	height: auto;
	float: left;
}
.navbarleftbg {
	width: 100%;
	height: auto;
	float: right;
	border-radius:5px;
	margin: 10px 0px 10px 0px;
	background: #FFFFFF;
}
.contentmenuheader h2 {
	font-size: 12px;
}
.contentmenuheader {
	width: 380px;
	height: auto;
	padding: 20px 25px 0px 15px;
	border-bottom: solid 0.5px black;
}
.contentheader li {
	font-size: 8px;
}
.content {
	width: 93%;
	height: 93%;
	padding: 15px;
	float: right;
}
.footercontent {
	width: 97%;
	height: 40px;
	padding: 0px 10px 10px 10px;
	
	float: left;
}
.morecontent {
	padding: 10px;
	float: left;
	border: 1px #2F4666 solid;
	border-radius: 10px;
}
.morecontent:hover {
	background: #2F4666;
	color: white;
}


.footer {
	width: 100%;
	height: auto;
	float: left;
	border-radius: 20px 20px 0px 0px;
	background: #2F4666;
	margin: 10px 0 0 0;
}
#footerMain {
	float: left;
	width: 100%;
	height: auto;
}
#footerMain h1 {
	text-align: center;
}
.footerleft {
	width: 500px;
	height: auto;
	float: left;
}
.footerright {
	width: 400px;
	height: 100px;
	float: right;
	padding: 10px
}
.footerright h1 {
	color: white;
}
.footerleft h1,.footerleft li {
	color: white;
}
.appledownload {
	background: silver;
	background: url(../image/itunes-app.png);
	background-size: cover;
	width: 181px;
	height: 64px;
	float: left;
}
.androiddownload {
	background: silver;
	background: url(../image/Android-app-on-Google-play-logo-vector-2.png);
	background-size: cover;
	width: 181px;
	height: 64px;
	float: right;
}
