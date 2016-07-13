<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Naročanje pacientov</title>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src='fullcalendar/lib/moment.min.js'></script>
        <script src='fullcalendar/fullcalendar.js'></script>
        <script src="js/app.js"></script>
    </head>

    <body>
        
        <div class="container">
            
            <div class="row forma-pacient">
                
                <div class="levi-del-pacient col-xs-6" style="text-align: center;">
                    
                    <div class="btn-group" >
                	  <h3>ZDRAVSTVENA USTANOVA</h3>
                      <button type="button" class="btn">Izberite zdravstveni dom</button>
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">ZD Ljubljana - enota Bežigrad</a></li>
                        <li><a href="#">ZD Ljubljana - enota Moste-Polje</a></li>
                      </ul>
                    </div>
                    
                    <br/>
                      
                    <div class="btn-group">
                      <h3>ZDRAVNIK</h3>
                      <button type="button" class="btn">Izberite zdravnika</button>
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Mojca</a></li>
                        <li><a href="#">Ana</a></li>
                      </ul>
                    </div>
                    
                    <h3>IZBIRA TERMINA</h3>
                    <h4>Razpoložljivi termini</h4>
                    <div id="razpolozljivi-termini">
                        <div class="termini"></div> 
                        <div class="termini"></div>
                        <div class="termini"></div>
                    </div> 
                    <h4>Želena ura pregleda</h4>
                    <div class="checkbox">
                        <label><input type="checkbox"> 7:00 - 10:59</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox"> 11:00 - 14:59</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox"> 15:00 - 19:00</label>
                      </div>
                    <h4>Željen datum</h4>
                     <form>
                      <input type="radio" name="gender" value="čimprej" checked> Male<br>
                      <input type="radio" name="gender" value="čez 1 teden"> Female<br>
                      <input type="radio" name="gender" value="čez 1 mesec"> Other
                    </form> 
    	            
                </div>
                
                <div class="desni-del-pacient col-xs-6">
                    
                    <p>Izbrani termini:</p>
    	
                	<p>Opišite problem:</p>
                	<input type="text" name="opis-problema">
                	
                	<p>Podatki:</p>
                	<input type="text" name="mail">
                	<input type="text" name="telefon">
                	<input type="text" name="zdr-kartica">
                    
                </div>
                
            </div>
            
        </div>
    	

    </body>

</html>