<div class = " border border-light">
<?php if(!isset($_GET['contact'])){ ?>
<div class = "text-light mb-5">
<form name="loginform" id="loginform" class = "mb-2" action="<?php echo home_url()?>/contact/?contact=true" method="POST" 
class = "text-light"
style="
    position: relative;
    left: 37%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
"><div class="login-username">

        
        <div class = "text-light  mt-5 d-inline-block title_regis ">
                   <u>Contact</u>

         </div>
    

            <div>
				<label for="user_login"  style = "font-weight:bold; font-size:1.5em">email</label>
            </div>

            <div>
				<input type="text" name="log" id="user_login" autocomplete="username" class="input" value="" size="20">
            </div>

</div>

<div>

<div>
    objet
</div>

<div>
    <input type = "text" name = "object_message">
</div>

</div>



            
            <div class="login-password">
                <div>
				<label for="user_pass" style = "font-weight:bold; font-size:1.5
                em">votre message</label>
                </div>

                <div>
			
                <textarea name = "message" cols="30" rows="5">
                </textarea>
                
                </div>
       </div>
            
            
            <div class="login-submit">
				<input type="submit"  id="wp-submit" class="button button-primary" value="Se connecter">
				
            </div>   
  </div>
        
        </form>
 
 </div>

 <?php }else{

echo "<pre>";

print_r($_POST);

echo "</pre>";

 }?>