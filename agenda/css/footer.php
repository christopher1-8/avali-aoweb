 <link rel="stylesheet" href="css/estilo.css">

       
    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">
                   

                    <h1>Criado pelo melhor Aluno </h1>
                    <h1>Christopher dos Santos Mariano</h1>
                  

                </div>

                <div class="colum2">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="img/icon/facebook.png">
                        <label > <a href="https://www.facebook.com/chris.santo.980">Facebook</a></label>
                    
                    </div>
                    <div class="row">
                        <img src="img/icon/twitter.png">
                        <label > <a href="https://twitter.com/kcgame21">twitter</a></label>
                    </div>
                    <div class="row">
                        <img src="img/icon/instagram.png">
                        <label><a href="https://www.instagram.com/kcgame_1/">instagram</a></label>
                    </div>
                   


                </div>

               

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2021 Todos los Derechos Reservados | <a href="">Magtimus</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>


      <!--JavaScript at end of body for optimized loading-->
      
   <style>
     


footer{
    width: 100%;
    background:rgb(90, 10, 114);
    color: white;   
    
}

.container-footer-all{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 40px;
}

.container-body{
    display: flex;
    justify-content: space-between;
}

.colum1{
    max-width: 400px;
}

.colum1 h1{
    font-size: 22px;
}

.colum1 p{
    font-size: 14px;
    color: #C7C7C7;
    margin-top: 20px;
}

.colum2{
    max-width: 400px;
    
}

.colum2 h1{
    font-size: 22px;
}

.row{
    margin-top: 20px;
    display: flex;
}

.row img{
    width: 36px;
    height: 36px;
}

.row label{
    margin-top: 10px;
    margin-left: 20px;
    color: #C7C7C7;
}

.colum3{
    max-width: 400px;
}

.colum3 h1{
    font-size: 22px;
}

.row2{
    margin-top: 20px;
    display: flex;
}

.row2 img{
    width: 36px;
    height: 36px;
}

.row2 label{
    margin-top: 10px;
    margin-left: 20px;
    max-width: 140px;
}

.container-footer{
    width: 100%;  
    background: #101010;
}

.footer{
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;  
    padding: 20px;
}

.copyright{
    color: #C7C7C7;
}

.copyright a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.information a{
    text-decoration: none;
    color: #C7C7C7;
}


@media screen and (max-width: 1100px){
    
    .container-body{
        flex-wrap: wrap;
    }
    
    .colum1{
        max-width: 100%;
    }
    
    .colum2,
    .colum3{
        margin-top: 40px;
    }
}
   </style>

      
    </body>
  </html>