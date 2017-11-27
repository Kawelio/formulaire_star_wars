<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="UTF-8" />
        <title> • Rejoins la force ! </title>
	<script language="JavaScript">
	<!--
	var txt=" • Rejoins la force ! ";
	var espera=300;
	var refresco=null;
	function rotulo_title() {
	document.title=txt;
	txt=txt.substring(1,txt.length)+txt.charAt(0);
	refresco=setTimeout("rotulo_title()",espera);}
	rotulo_title();
	// -->
	</script>
        <link rel="stylesheet" href="assets/style.css"/>
        <link rel="stylesheet" href="assets/laser.css"/>
        <style>

		.example-item {
			width: 25%;
		}

	</style>
        
    </head>
    
    <body>
        
    <center><h1>Rejoins la force !</h1></center><br/>
        
       <form method="post" action="" enctype="multipart/form-data"><br/>
           
            <div id="lol">
                Choisis tes Maîtres :
                <br/><br/>
                <section class="the-demo">
		<div class="example-item">
                    • Yoda
			<div class="lightsaber">
				<label for="yoda-example"></label>
                                <input value="Yoda" type="checkbox" id="yoda-example" name="radiousage[]">
				<div class="switch"></div>
				<div class="plasma yoda"></div>
			</div>
		</div>
                <br/>
		<div class="example-item">
                    • Vader
			<div class="lightsaber">
				<label for="darth-vader-example"></label>
				<input value="Vader" type="checkbox" id="darth-vader-example" name="radiousage[]">
				<div class="switch"></div>
				<div class="plasma vader"></div>
			</div>
		</div>
                <br/>
		<div class="example-item">
                    • Windu
			<div class="lightsaber">
				<label for="windu-example"></label>
				<input value="Windu" type="checkbox" id="windu-example" name="radiousage[]">
				<div class="switch"></div>
				<div class="plasma windu"></div>
			</div>
		</div>
                <br/>
		<div class="example-item clearfix">
                    • Obi
			<div class="lightsaber">
				<label for="obi-wan-example">Obi</label>
				<input value="Obi" type="checkbox" id="obi-wan-example" name="radiousage[]">
				<div class="switch"></div>
				<div class="plasma obi-wan"></div>
			</div>
		</div>

	</section>
                <center><font color="#A50909"><?php if(isset($erreurradio)) echo $erreurradio; ?></font></center>
            </div>
           
            <div id="lol">
                <label for="a6">Chevalier :</label>
                <select class="selection" id="a6" name="selectionne">
                    <option></option>
                    <?php
                    foreach($aselectionne as $key => $selectionne) {
                        if (isset($_POST['selectionne']) == true && $_POST['selectionne'] == $key) {
                            echo'<option value="' , $key , '" selected="selected">' , $selectionne , '</option>';
                        } else {
                            echo '<option value= "' ,$key,'">' . $selectionne . '</option>';
                        }
                    }
                    ?>
                </select>
                    <center><font color="#A50909"><?php if(isset($erreurselect)) echo $erreurselect; ?></font></center>
            </div>

            <div id="lol">
                <label for="a1">Prénom :</label>
                <input class="inputi" id="a1" type="text" name="per_pre" <?php restore('per_pre'); ?> /> 
                    <center><font color="#A50909"><?php if(isset($erreurpre)) echo $erreurpre; ?></font></center>
            </div>
            
            <div id="lol">
                <label for="a2">Nom :</label> 
                <input class="inputi" id="a2" type="text" name="per_nom" <?php restore('per_nom'); ?> /> 
                    <center><font color="#A50909"><?php if(isset($erreurnom)) echo $erreurnom; ?></font></center>
            </div>
           
           <div id="lol">
                <label for="mail1">Email :</label> 
                <input class="inputi" id="mail1" type="mail" name="per_email" <?php restore('per_email'); ?> /> 
                    <center><font color="#A50909"><?php if(isset($erreuremail)) echo $erreuremail; ?></font></center>
            </div>
            
            <div id="lol">
                <label for="a3">Mot de passe :</label>
                <input class="inputi" id="a3" type="password" name="per_pwd1" <?php restore('per_pwd1'); ?> /> 
                    <center><font color="#A50909"><?php if(isset($erreurpwd1)) echo $erreurpwd1; ?></font></center>
            </div>
            
            <div id="lol">
                <label for="a3_1">Confirmation :</label>
                <input class="inputi" id="a3_1" type="password" name="per_pwd2" <?php restore('per_pwd2'); ?> /> 
                    <center><font color="#A50909"><?php if(isset($erreurpwd2)) echo $erreurpwd2; ?></font></center>
            </div>
            
                        
            <div id="lol">
                <label for="a4">Photo :</label>
                <input class="photo" id="a4" type="file" name="per_photo" <?php restore('per_photo'); ?> />
                    <center><font color="#A50909"><?php if(isset($erreurphoto)) echo $erreurphoto; ?></font></center>
            </div>
            
            <div id="lol">
                Civilité :
                <input id="a5" type="radio" name="pre_civ" checked="checked" value="Femme" />
                <label for="a5">Femme</label>
                <input id="a5_1" type="radio" name="pre_civ" value="Homme" />
                <label for="a5_1">Homme</label>
                    <center><font color="#A50909"><?php if(isset($erreurciv)) echo $erreurciv; ?></font></center>
            </div>

            <div id="lol">
                <label for="a8">Info perso :</label><br/>
                <textarea class="inputext" id="a8" name="per_tixt" rows="5" <?php restore('per_tixt'); ?> /></textarea>
                <center><font color="#A50909"><?php if(isset($erreurtixt)) echo $erreurtixt; ?></font></center>
            </div>
            
            <div id="lol">
                <center>
                <input class="bouton" id="a11" type="submit" value="Envoyer" />
                <input class="bouton" id="a11_1" type="reset" value="Annuler" />
                </center>
            </div>
                
           <br/></form>
    <object type="application/x-shockwave-flash" data="assets/dewplayer.swf" width="200" height="20" id="dewplayer" name="dewplayer" style="left:-40px;top:-20px;"> <param name="wmode" value="transparent"><param name="movie" value="assets/dewplayer.swf"> <param name="flashvars" value="mp3=assets/intro.mp3&amp;autostart=1&amp;nopointer=1"> </object>
        
    </body>
    
</html>
