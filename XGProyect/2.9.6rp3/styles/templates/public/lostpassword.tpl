<style type="text/css">
#main {
    background-image: url(styles/images/tlo{background}.jpg);
}
</style>
<form action="" name="lstpass_form" method="post">
    <div id="main">
        <div id="mainmenu" style="margin-top: 20px;">
            <a href="index.php">{index}</a>
            <a href="reg.php">{register}</a>
            <a href="{forum_url}" target="_blank">{forum}</a>
        </div>
        <div id="rightmenu" class="rightmenu">
            <div id="title">{lost_pass_title}</div>
            <div id="content" style="margin-top:-50px;">
                <center>
                    <div id="text1">
						<div align="justify">
                        	{lost_pass_text}
                        </div>
                    </div>
            		<div id="register" class="bigbutton" onclick="document.lstpass_form.submit();">{retrieve_pass}</div>
                    <div id="text2">
                        <div id="text3">
                            <center><b>{email}: <input type="text" name="email" /></b></center>
                        </div>
                    </div>
                </center>
			</div>
		</div>
	</div>
</form>
