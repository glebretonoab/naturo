<?php include_once('menu.php'); ?>

<div class="content">
	<h1>Me contacter <br/><span>Voici où me trouver et me joindre</span></h1>

	<div id="map">
		<div class="top">
			<div class="coord">
				Cabinet Nadia LEBRETON <span>31 rue Crossardière 53000 LAVAL</span>
			</div>
			<div class="num">02 43 56 63 52</div>
			<div style="clear: left"></div>
		</div>

		<div class="google-map">
			<iframe width="730" height="308" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=13+Rue+Crossardi%C3%A8re,+Laval&amp;aq=0&amp;oq=13+rue+crossar&amp;sll=46.75984,1.738281&amp;sspn=12.601479,33.42041&amp;ie=UTF8&amp;hq=&amp;hnear=13+Rue+Crossardi%C3%A8re,+53000+Laval,+Mayenne,+Pays+de+la+Loire&amp;t=m&amp;z=14&amp;ll=48.073408,-0.76878&amp;output=embed"></iframe>
		</div>
	</div>

	<div id="contact-form">    
                                           
        <div id="contact-desc">                        
            <h2>Vous êtes interessé<br>par mes services ?<br>N'hésitez pas<br>à me contacter !</h2>                                
            <p>Je reprendrais contact<br/>avec vous dans les plus brefs<br/>délais afin de répondre<br/>au mieux à vos attentes</p>                             
            <a href="/" class="back">Retour Accueil</a>                    
        </div>             
                        
        <!-- AJAX CONTACT FORM -->
        <div id="contact-container">
                                  
            <!-- MESSAGE OK/ERROR PANEL -->
            <div id="contactErrorPanel" class="display-none">asd</div>                   
            
            <!-- NAME -->
            <span class="commonControlLabel">Votre nom:</span>&nbsp;
            <span class="commonControlLabelItalic">(obligatoire)</span>
            <span id="contactNameErrorMsg" class="commonControlErrorMsg"></span><br>
            <input class="commonInput" type="text" id="inputName"><br>
        
            <!-- EMAIL -->    
            <span class="commonControlLabel">Votre email:</span>&nbsp;
            <span class="commonControlLabelItalic">(obligatoire)</span>
            <span id="contactEmailErrorMsg" class="commonControlErrorMsg"></span><br>
            <input class="commonInput" type="text" id="inputEmail"><br>
        
            <!-- EMAIL SUBJECT -->            
            <span class="commonControlLabel">Le sujet:</span>&nbsp;
            <span class="commonControlLabelItalic">(obligatoire)</span>
            <span id="contactSubjectErrorMsg" class="commonControlErrorMsg"></span><br>
            <input class="commonInput" type="text" id="inputSubject"><br>
        
            <!-- MESSAGE -->    
            <span class="commonControlLabel">Votre message:</span>&nbsp;
            <span class="commonControlLabelItalic">(obligatoire)</span>
            <span id="contactMessageErrorMsg" class="commonControlErrorMsg"></span>
            <div class="clear-both"></div>
            <textarea class="commonTextarea" rows="20" cols="20" id="inputMessage"></textarea><br>
        
            <!-- PROTECTION -->    
            <span class="commonControlLabel">Pour finir, combien font 3 + 1?</span>&nbsp;
            <span class="commonControlLabelItalic">(obligatoire)</span>
            <span id="contactHumanErrorMsg" class="commonControlErrorMsg"></span><br>
            <input class="contactInputHuman" type="text" id="inputHuman"><br>
        
            <!-- SEND BUTTON -->    
            <a id="contactSendButton" class="arrow-spin-link">
            	<span class="arrow"></span>Envoyer
            </a>
        
        </div>  <!-- END contactContainer -->    

         <div style="clear: left"></div>             
    </div>
</div>	