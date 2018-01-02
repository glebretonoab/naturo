/***************************************
    SETUP CONTACT FORM
****************************************/

function setupContactInputControls()
{
    // change border color wehen controls take focus
    jQuery(".commonInput, .commonTextarea, .contactInputHuman").focus(
        function()
        {
            jQuery(this).css("border", "1px solid #99b32b");
        }
    );
    
    // restore border color wehen controls lost focus
    jQuery(".commonInput, .commonTextarea, .contactInputHuman").blur(
        function()
        {
            jQuery(this).css("border", "1px solid rgba(0, 0, 0, 0.1)");
            //jQuery(this).css("border-right", "1px solid #eee");
            //jQuery(this).css("border-bottom", "1px solid #eee");
        }
    );
    
    // when input name lost focus, validate the value
    jQuery("#inputName").blur(
        function()
        {
            if(jQuery(this).val() != "")
            {
                jQuery("#contactNameErrorMsg").css("visibility", "hidden"); 
            } else
            {
                jQuery(this).css("border", "1px solid #EE6644");
                jQuery("#contactNameErrorMsg").html("&nbsp;Merci d'indiquer votre nom").css("visibility", "visible");            
            }
        }
    );
    
    // when input email lost focus validate the value 
    jQuery("#inputEmail").blur(
        function()
        {
            
            if(jQuery(this).val() != "")
            {
                // create regular expression object
                var regExp = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9]([-a-z0-9_]?[a-z0-9])*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z]{2})|([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3})(:[0-9]{1,5})?$/i);
                // check email address, if result is null the email string dont match to pattern
                var resultExp = regExp.exec(jQuery(this).val());
                if(resultExp == null) 
                {
                    jQuery(this).css("border", "1px solid #EE6644");
                    jQuery("#contactEmailErrorMsg").html("&nbsp;Le format de votre email est incorrect").css("visibility", "visible");
                } else
                {
                    jQuery("#contactEmailErrorMsg").css("visibility", "hidden");
                }
                
            } else
            {
                jQuery(this).css("border", "1px solid #EE6644");
                jQuery("#contactEmailErrorMsg").html("&nbsp;Merci d'indiquer votre email").css("visibility", "visible"); 
            }
        }
    );
    
    // when input subject lost focus validate the value 
    jQuery("#inputSubject").blur(
        function()
        {
            if(jQuery(this).val() != "")
            {
                jQuery("#contactSubjectErrorMsg").css("visibility", "hidden"); 
            } else
            {
                jQuery(this).css("border", "1px solid #EE6644");
                jQuery("#contactSubjectErrorMsg").html("&nbsp;Merci d'indiquer le sujet de votre message").css("visibility", "visible");            
            }
        }
    );    

    // when input message lost focus validate the value 
    jQuery("#inputMessage").blur(
        function()
        {
            if(jQuery(this).val() != "")
            {
                jQuery("#contactMessageErrorMsg").css("visibility", "hidden"); 
            } else
            {
                jQuery(this).css("border", "1px solid #EE6644");
                jQuery("#contactMessageErrorMsg").html("&nbsp;Merci d'indiquer votre message").css("visibility", "visible");            
            }
        }
    );
    
    // when input human lost focus validate the value 
    jQuery("#inputHuman").blur(
        function()
        {
            if(parseInt(jQuery(this).val(), 10) == 4)
            {
                jQuery("#contactHumanErrorMsg").css("visibility", "hidden"); 
            } else
            {
                jQuery(this).css("border", "1px solid #EE6644");
                jQuery("#contactHumanErrorMsg").html("&nbsp;Tu ne connais vraiment pas la réponse ?").css("visibility", "visible");            
            }
        }
    );         
    
} // end of function setupContactInputControls
    
function setupContactSendButton()
{
    jQuery("#contactSendButton").click(
        function()
        {
            g_blockSendButton = true;
            
            // get all data from contact form and save it in local variables
            var inputName = jQuery("#inputName").val();
            var inputEmail = jQuery("#inputEmail").val();
            var inputSubject = jQuery("#inputSubject").val();
            var inputMessage = jQuery("#inputMessage").val();
            var inputHuman = jQuery("#inputHuman").val();
           
            // create regular expression object
            var regExp = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9]([-a-z0-9_]?[a-z0-9])*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z]{2})|([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})(\.([1]?\d{1,2}|2[0-4]{1}\d{1}|25[0-5]{1})){3})(:[0-9]{1,5})?$/i);
            // check email address, if result is null the email string dont match to pattern
            var resultExp = regExp.exec(inputEmail);
            // check user answer, resultHuman = true if ok, false if answer is bad
            var resultHuman = parseInt(inputHuman, 10) == 4;
            // check the error by logical sum
            var error = (resultHuman != true) || (resultExp == null) || (inputName == "") || (inputEmail == "") ||
                (inputSubject == "") || (inputMessage == "");

            // if there was an error we must display some informotion and mark
            // input cotrol with wrong data    
            if(error)
            {                
                jQuery("#contactNameErrorMsg").css("visibility", "hidden");
                jQuery("#contactEmailErrorMsg").css("visibility", "hidden");
                jQuery("#contactSubjectErrorMsg").css("visibility", "hidden");
                jQuery("#contactMessageErrorMsg").css("visibility", "hidden");
                jQuery("#contactHumanErrorMsg").css("visibility", "hidden");
                jQuery("#contactErrorPanel").slideUp(300);
                
                // errors processing
                if(inputName == "")
                {
                    jQuery("#inputName").css("border", "1px solid #EE6644");
                    jQuery("#contactNameErrorMsg").html("&nbsp;Merci d'indiquer votre nom").css("visibility", "visible");
                }
                if(inputEmail == "")
                {
                    jQuery("#inputEmail").css("border", "1px solid #EE6644");
                    jQuery("#contactEmailErrorMsg").html("&nbsp;Merci d'indiquer votre email").css("visibility", "visible"); 
                } else                
                if(resultExp == null) 
                {
                    jQuery("#inputEmail").css("border", "1px solid #EE6644");
                    jQuery("#contactEmailErrorMsg").html("&nbsp;Le format de votre email est incorrect").css("visibility", "visible");
                }
                if(inputSubject == "")
                {
                    jQuery("#inputSubject").css("border", "1px solid #EE6644");
                    jQuery("#contactSubjectErrorMsg").html("&nbsp;Merci d'indiquer le sujet de votre message").css("visibility", "visible"); 
                }
                if(inputMessage == "")
                {
                    jQuery("#inputMessage").css("border", "1px solid #EE6644");
                    jQuery("#contactMessageErrorMsg").html("&nbsp;Merci d'indiquer votre message").css("visibility", "visible");
                }
                if(resultHuman != true)
                {
                    jQuery("#inputHuman").css("border", "1px solid #EE6644");
                    jQuery("#contactHumanErrorMsg").html("&nbsp;Tu ne connais vraiment pas la réponse ?").css("visibility", "visible"); 
                }
                // unblock send button
                g_blockSendButton = false;                
            } else // if no error, if all data is set correctly
            {
                // let's define function called after ajax successfull call 
                function phpCallback(data)
                {   
                    // if success        
                    if(data == "ok")
                    {   
                        jQuery("#contactErrorPanel").text("");            
                        jQuery("#contactErrorPanel").css("background-color", "#99b32b");
                        jQuery("#contactErrorPanel").append("Votre message a été envoyé.");
                        jQuery("#contactErrorPanel").css("border", "1px solid #99b32b");
                        jQuery("#contactErrorPanel").slideDown(300, function(){  g_blockSendButton = false;});
                        
                        jQuery("#inputName").val("");
                        jQuery("#inputEmail").val("");
                        jQuery("#inputSubject").val("");
                        jQuery("#inputMessage").val("");
                        jQuery("#inputHuman").val(""); 
                    } else // if error/problem during email sending in php script
                    {
                        jQuery("#contactErrorPanel").text("");
                        jQuery("#contactErrorPanel").css("background-color", "#EE6644");
                        jQuery("#contactErrorPanel").css("border", "1px solid #EE6644");
                        jQuery("#contactErrorPanel").append("Une erreur est survenue. Votre message n'a pu être envoyé.");
                        jQuery("#contactErrorPanel").slideDown(300, function(){  g_blockSendButton = false;});               
                    }
                } // end of function phpCallback            
            
            
                // all data is correct so we can hide error/success panel
                jQuery("#contactErrorPanel").slideUp(300);
                
                // build data string for post call
                var data = "inputName="+inputName;
                data += "&"+"inputEmail="+inputEmail;
                data += "&"+"inputSubject="+inputSubject;
                data += "&"+"inputMessage="+inputMessage; 
                
                // try to send email via php script executed by server
                jQuery.post("../views/mail.php", data, phpCallback, "text");
                // unblock send button
            } // end else all dara
        }
    );
} // end of function setupContactSendButton



/***************************************************
  FUNCTIONS
****************************************************/

jQuery(document).ready(function($){

	//arrow-spin-link rotation
    $('.arrow-spin-link').hover(function(){
        $('a.arrow-spin-link span.arrow"').stop().rotate({animateTo:360},100);
    },function(){
        $('a.arrow-spin-link span.arrow"').stop().rotate({animateTo:0});
    });

    //menu-link rotation
    $('.link').hover(function(){
        jQuery(this).children("span:first").stop().rotate({animateTo:360});
    },function(){
        jQuery(this).children("span:first").stop().rotate({animateTo:0});
    });



    //ssmenu
    $('a[id^=menu]').hover(function() {

        $('.ssmenu').css('display', 'none');
        $('.link').removeClass('hover');

        var id = $(this).attr('id');

        $(this).addClass('hover');
        $('#ss_' + id).css('display', 'block');
    });

    $('ul[id^=ss_menu]').hover(function() {
    },function(){
        $(this).css('display', 'none');
    });

    // contact
    setupContactInputControls();
    setupContactSendButton();

});




