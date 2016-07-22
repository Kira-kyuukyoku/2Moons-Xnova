{block name="title" prepend}{$LNG.siteTitleRegister}{/block}
{block name="content"}
      <div class="loginHeader">
         <div class="loginHeaderContent">
            <div class="left">
               <img src="./styles/resource/images/login/login_image.png" alt="login image" />
            </div>
            <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
				<div class="right">
					<table>
						<tr>
							<td style="padding-right:20px">
								<label for="username">{$LNG.loginUsername}:</label>
							</td>
							<td>
								<input type="text" value="" name="username" id="username"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="password">{$LNG.loginPassword}:</label>
							</td>
							<td>
								<input type="password" id="password" value="" name="password"/>
							</td>
						</tr>
					</table>
				</div>
								<input class="sign_up" type="submit" value="{$LNG.loginButton}">
			</form>
            <div class="clear"></div>
         </div>
      </div>
      <div class="wrapper">
         <div class="mainBody">
            <div class="header">
               <div class="headerImage">
                  <img src="./styles/resource/images/login/header.png" alt="header image" />
               </div>
            </div>
            <div class="content">
               <div class="left">
                  <div class="mainMenu">
                     <ul>
                        <li>
                           <a href="index.php">
								{$LNG.menu_index}
							</a>
                        </li>
                        <li>
							<a href="#">
								{$LNG.forum}
							</a>
                        </li>
                        <li>
							<a href="index.php?page=rules">
								{$LNG.menu_rules}
							</a>
                        </li>
                        <li>
							<a href="index.php?page=battleHall">
								{$LNG.menu_battlehall}
							</a>
                        </li>
                        <li class="last">
							<a href="index.php?page=races">
								{$LNG.race}
							</a>
                        </li>
                     </ul>
                  </div>
                <div class="contentBlock">
                     <div class="innerContent" style="height:740px">
<div id="registerFormWrapper">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="{$externalAuth.account}" name="externalAuth[account]">
<input type="hidden" value="{$externalAuth.method}" name="externalAuth[method]">
<input type="hidden" value="{$referralData.id}" name="referralID">
	<div class="rowForm">
		<label for="universe">{$LNG.universe}</label>
		<select name="uni" id="universe" class="changeAction">{html_options options=$universeSelect selected=$UNI}</select>
		{if !empty($error.uni)}<span class="error errorUni"></span>{/if}
	</div>
	{if !empty($externalAuth.account)}
	{if $facebookEnable}
	<div class="rowForm">
		<label>{$LNG.registerFacebookAccount}</label>
		<span class="text fbname">{$accountName}</span>
	</div>
	{/if}
	{elseif empty($referralData.id)}
	{if $facebookEnable}
	<div class="rowForm">
		<label>{$LNG.registerFacebookAccount}</label>
		<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a>
	</div>
	{/if}
	{/if}
	<div class="rowForm">
		<label for="username">{$LNG.registerUsername}</label>
		<input type="text" class="input" name="username" id="username" maxlenght="32">
		{if !empty($error.username)}<span class="error errorUsername"></span>{/if}
		<span class="inputDesc">{$LNG.registerUsernameDesc}</span>
	</div>
	<div class="rowForm">
		<label for="password">{$LNG.registerPassword}</label>
		<input type="password" class="input" name="password" id="password">
		{if !empty($error.password)}<span class="error errorPassword"></span>{/if}
		<span class="inputDesc">{$LNG.registerPasswordDesc}</span>
	</div>
	<div class="rowForm">
		<label for="passwordReplay">{$LNG.registerPasswordReplay}</label>
		<input type="password" class="input" name="passwordReplay" id="passwordReplay">
		{if !empty($error.passwordReplay)}<span class="error errorPasswordReplay"></span>{/if}
		<span class="inputDesc">{$LNG.registerPasswordReplayDesc}</span>
	</div>
	<div class="rowForm">
		<label for="email">{$LNG.registerEmail}</label>
		<input type="email" class="input" name="email" id="email">
		{if !empty($error.email)}<span class="error errorEmail"></span>{/if}
		<span class="inputDesc">{$LNG.registerEmailDesc}</span>
	</div>
	<div class="rowForm">
		<label for="emailReplay">{$LNG.registerEmailReplay}</label>
		<input type="email" class="input" name="emailReplay" id="emailReplay">
		{if !empty($error.emailReplay)}<span class="error errorEmailReplay"></span>{/if}
		<span class="inputDesc">{$LNG.registerEmailReplayDesc}</span>
	</div>
	{if count($raceSelect) > 1}        
		<div class="rowForm">		
			<label for="race">{$LNG.registerRace}</label>		
			<select name="race" id="race">{html_options options=$raceSelect}</select>		
			{if !empty($error.race)}<span class="error errorRace"></span>{/if}		
			<div class="clear"></div>	
		</div>        
	{/if}
	{if count($languages) > 1}
	<div class="rowForm">
		<label for="language">{$LNG.registerLanguage}</label>
		<select name="lang" id="language">{html_options options=$languages selected=$lang}</select>
		{if !empty($error.language)}<span class="error errorLanguage"></span>{/if}
		<div class="clear"></div>
	</div>
	{/if}
	{if !empty($referralData.name)}
	<div class="rowForm">
		<label for="language">{$LNG.registerReferral}</label>
		<span class="text">{$referralData.name}</span>
		{if !empty($error.language)}<span class="error errorLanguage"></span>{/if}
		<div class="clear"></div>
	</div>
	{/if}
	{if $recaptchaEnable}
	<div class="rowForm" id="captchaRow">
		<div id="recaptcha_widget">
			<label for="recaptcha_response_field">{$LNG.registerCaptcha}<p class="captchaButtons"><a href="javascript:Recaptcha.reload()">{$LNG.registerCaptchaReload}</a></p></label>
			<span class="inputDesc">{$LNG.registerCaptchaDesc}</span>
			<div id="recaptcha_image"></div>			
			<div id="recaptcha_input_wrap"><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="input"></div>
		</div>
		<div class="clear"></div>
	</div>
	{/if}
	<div class="rowForm">
		<label for="rules">{$LNG.registerRules}</label>
		<input type="checkbox" name="rules" id="rules" value="1">
		{if !empty($error.rules)}<span class="error errorRules"></span>{/if}
		<span class="inputDesc">{$registerRulesDesc}</span>
	</div>
	<div class="rowForm">
		<input type="submit" class="submitButton" value="{$LNG.buttonRegister}">
	</div>
</form>
</div>
</div></div></div>
               <div class="right">
                  <div class="contentBlock">
                     <div class="innerContent" style="height: 495px;">
                       <div class="login_page">
							<div>
								<a href="index.php?page=register">
										<span class="register_button"/></span>
								</a>
							</div>
					   </div>
                     </div>
                  </div>
                  <div class="contentBlock">
                     <div class="innerContent" style="height:262px"> 
                       <table border="1">
							<tr>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Momentan Online: 
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Registrierte Spieler:
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Zuletzt Registriert: 
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Besiedelte Planeten: 
								</td>
							</tr>
			<tr>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$online}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$user}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$last}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$planet}</td>
                      
			</tr>
	</table>
                     </div>
                  </div>
				  
               </div>
               <div class="clear"></div>
            </div>
            <div class="footer">
               <span>
                  Kontakt Person <a href="mailto:flocke_dittrich@gmx.de">Bijuu</a><br />
               </span>
            </div>
         </div>
      </div>
{/block}
{block name="script" append}
<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v={$REV}">
{if $recaptchaEnable}
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
<script type="text/javascript">
var RecaptchaOptions = {
	lang : '{$lang}',
};

var recaptchaPublicKey = "{$recaptchaPublicKey}";

Recaptcha.create(recaptchaPublicKey, 'display_captcha', {
	theme: 'custom',
	tabindex: '6',
	custom_theme_widget: 'display_captcha'
});
</script>
{/if}
<script type="text/javascript" src="scripts/login/register.js"></script>
<script></script>
{/block}