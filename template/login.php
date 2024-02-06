 <div class = " border border-light">

<div class = "text-light mb-5">
<form name="loginform" id="loginform" class = "mb-2" action="<?php echo home_url()?>/wp-login.php" method="post" 
class = "text-light"
style="
    position: relative;
    left: 37%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
"><div class="login-username">

        
        <div class = "text-light  mt-5 d-inline-block title_regis ">
                   <u>connection</u>

         </div>
    

            <div>
				<label for="user_login"  style = "font-weight:bold; font-size:1.5em">login ou email</label>
            </div>

            <div>
				<input type="text" name="log" id="user_login" autocomplete="username" class="input" value="" size="20">
            </div>

</div>

			</p>
            
            <div class="login-password">
                <div>
				<label for="user_pass" style = "font-weight:bold; font-size:1.5
                em">mot de passe</label>
                </div>

                <div>
				<input type="password" name="pwd" id="user_pass" autocomplete="current-password" spellcheck="false" class="input" value="" size="20">
                </div>
       </div>
            
            <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> 
            se souvenir de moi</label>
             </p>
            
            <div class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Se connecter">
				<input type="hidden" name="redirect_to" value="http://wordpress.localhost">
            </div>   
  </div>
        
        </form>
 
 </div>