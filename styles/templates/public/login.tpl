{include 'overall/head.tpl'}


   {if isset($smarty.session.id_user)}
   <body class="four-zero-four">
       <div class="four-zero-four-container">
           <div class="error-code">;)</div>
           <br>
           <div class="error-message">Estas Logueado</div>
           <br>
           <div class="button-place">
             <button type="button" id="panel"class="btn btn-warning waves-effect">IR A PANEL DE CONTROL</button>

           </div>
       </div>
   {else}
   <body class="signup-page ls-closed bg-indigo">
     {include 'overall/login.tpl'}
   {/if}


    {include 'overall/js_footer.tpl'}

<script type="text/javascript">
window.onload=function(){
  document.getElementById('btn').onclick=function(){
    var connect,user,pass,session,form,result;
      user=document.getElementById('user').value;
      pass=document.getElementById('pass').value;

      form='user='+user+'&pass='+pass;

      connect = window.XMLHttpRequest ? new XMLHttpRequest() :  ActiveXObject('Microsoft.XMLHTTP');
      if (user!=''&&pass!='') {
        connect.onreadystatechange =function(){
          if (connect.readyState==4&&connect.status==200) {
<<<<<<< HEAD
          // alert(connect.responseText);
=======
          //  alert(connect.responseText);
>>>>>>> 476c4881ed012252a345357dae08e035f3de8bac
            if (parseInt(connect.responseText) ==1) {
                    result='<div class="alert alert-warning alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CONECTADO..</div>';

                    document.getElementById('_AJAX_').innerHTML=result;
                    location.href= '?view=admin';


            } else if(parseInt(connect.responseText)==0){
              result='<div class="alert bg-teal alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>CUENTA BLOQUEADA ..!</div>';
              document.getElementById('_AJAX_').innerHTML=result;

            }else {
              result='<div class="alert bg-pink alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>ERROR DE CUENTA . . !</div>';
              document.getElementById('_AJAX_').innerHTML=result;
            }

          } else if(connect.readyState!=4){
            result='<div class="alert bg-green alert-dismissible" role="alert">  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>PROCENSANDO--!</div>';
            document.getElementById('_AJAX_').innerHTML=result;
          }
        }
        connect.open('POST','?view=login',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);
      } else {
        result='<div class="alert bg-pink alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>FALTAN DATOS..! </div>';
        document.getElementById('_AJAX_').innerHTML=result;
      }




    }
  }
  document.getElementById('panel').onclick=function(){
  location.href= '?view=admin';
  }
</script>
</body>

</html>
