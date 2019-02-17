<?php include_once("employeeComman/head.php")?>
<?php include_once("employeeComman/header.php")?>
<?php include_once("employeeComman/slider.php")?>
<?php include_once("employeeComman/script.php")?>
<?php include("employeeComman/connection.php") ?>
<!---->
<?php
    $current_user = "erandishanu@gmail.com";
    $sql = "SELECT * FROM employee WHERE email='$current_user'";
    $row = $conn->query($sql)->fetch_array();

?>
<style type="text/css">
* {
    font-family: Arial, sans;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}

h1 {
    margin: 1em 0;
    text-align: center;
}

#container {
    padding-top:5em;
    padding-left:5em;
    margin:top 40em;
    float: left;
    width: 85%;  /* Ancho del contenedor */
}

#container input {
    height: 2.5em;
    visibility: hidden;
}

#container label {
    background: #f9f9f9;  /* Fondo de las pestañas */
    border-radius: .25em .25em 0 0;
    color: #888;  /* Color del texto de las pestañas */
    cursor: pointer;
    display: block;
    float: left;
    font-size: 1em;  /* Tamaño del texto de las pestañas */
    height: 2.5em;
    line-height: 2.5em;
    margin-right: .25em;
    margin-top: .30em;
    padding: 0 1.5em;
    text-align: center;
}

#container input:hover + label {
    background: #ddd;  /* Fondo de las pestañas al pasar el cursor por encima */
    color: #666;  /* Color del texto de las pestañas al pasar el cursor por encima */
}

#container input:checked + label {
    background: #f1f1f1;  /* Fondo de las pestañas al presionar */
    color: #444; /* Color de las pestañas al presionar */
    position: relative;
    z-index: 6;
    /*
    -webkit-transition: .1s;
    -moz-transition: .1s;
    -o-transition: .1s;
    -ms-transition: .1s;
    */
}

#content {
    background: #f1f1f1;  /* Fondo del contenido */
    border-radius: 0 .25em .25em .25em;
    min-height: 20em;  /* Alto del contenido */
    position: relative;
    width: 100%;
    z-index: 5;
}

#content div {
    opacity: 0;
    padding: 1.5em;
    position: absolute;
    z-index: -100;
    /*
    transition: all linear 0.1s;
    */
}

#content-1 p {
    clear: both;
    margin-bottom: 1em;
}
#content-1 p.left img {
    float: left;
    margin-right: 1em;
}
#content-1 p.last {
    margin-bottom: 0;
}

#content-2 p {
    float: left;
    width: 48.5%;
}
#content-2 p.column-right {
    margin-left: 3%;
}
#content-2 p img {
    display: block;
    margin: 0 auto 1em auto;
}
#content-3 p,
#content-3 ul {
    margin-bottom: 1em;
}
#content-3 ul {
    margin-left: 2em;
}

#container input#tab-1:checked ~ #content #content-1,
#container input#tab-2:checked ~ #content #content-2,
#container input#tab-3:checked ~ #content #content-3 {
    opacity: 1;
    z-index: 100;
}

input.visible {
  visibility: visible !important;
}

#image {
    padding-top: 5px;
    float-left:2px;
    width: 100px;
    height: 120px;
    margin: 5px;
}
#details {
    padding-top: 25px;
    float-left:20px;
    width: 250px;
    height: 120px;
    margin: 1px;
}
</style>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Employee Details</h3>
                        </div>
                        <form role="form" action="" method="">
                            <div class="box-body">
                                <div class="row">
                                    <div class="row">
                                    <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                       
                                        
                                            <img src="employeeComman/upload/1.jpg" id="image" alt="User Image">
                                       
                                        
                                        </div>
                                        <div class="col-md-6"id="details">
                                        
                                                <div class="">
                                                        <label id="fnamelabel">
                                                            <?php  echo $row['fname']." ".$row['lname']; ?>
                                                        </label>
                                                </div>
                                                <div class="">
                                                        <label id="emaillabel">
                                                            <?php  echo $row['email']?>
                                                        </label>
                                                </div>
                                                <div class="">
                                                        <label id="departmentlabel">
                                                            <?php  echo $row['department']?>
                                                        </label>
                                                </div>
                                                 <div class="">
                                                        <label id="phonelabel">
                                                            <?php  echo $row['phone']; ?>
                                                        </label>
                                                </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                   <div id="container">
        <!--Pestaña 1 activa por defecto-->
        <input id="tab-1" type="radio" name="tab-group" checked="checked" />
        <label for="tab-1">Genenral Info</label>
        <!--Pestaña 2 inactiva por defecto-->
        <input id="tab-2" type="radio" name="tab-group" />
        <label for="tab-2">leave</label>
        <!--Pestaña 3 inactiva por defecto-->
        <input id="tab-3" type="radio" name="tab-group" />
        <label for="tab-3">Attendence</label>
         <input id="tab-4" type="radio" name="tab-group" />
        <label for="tab-4">Emergency Info</label>
         <input id="tab-5" type="radio" name="tab-group" />
        <label for="tab-5">Edit</label>
        <!--Contenido a mostrar/ocultar-->
        <div id="content">
            <!--Contenido de la Pestaña 1-->
            <div id="content-1">
                <p class="column-left"><img src="http://ximg.es/200x150" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, est, nisi enim voluptates dicta quibusdam recusandae eveniet provident non at nostrum nesciunt laudantium omnis aliquam debitis magni expedita cumque tempore.</p>
            </div>
            <!--Contenido de la Pestaña 2-->
            <div id="content-2">
                <p class="column-left"><img src="http://ximg.es/200x150" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, est, nisi enim voluptates dicta quibusdam recusandae eveniet provident non at nostrum nesciunt laudantium omnis aliquam debitis magni expedita cumque tempore.</p>
                <p class="column-right"><img src="http://ximg.es/200x150" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, molestiae, officia repellendus quasi cumque dolor eius deserunt possimus aliquid neque nam assumenda veniam soluta enim commodi aperiam reprehenderit quia incidunt.</p>
            </div>
            <!--Contenido de la Pestaña 3-->
            <div id="content-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, aperiam, enim odit placeat minus ab vero molestiae ad fugit maiores eaque saepe debitis assumenda ut ipsam eius sit repellendus dolore.</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, in magni illo dolore dicta vero.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, minus, aspernatur voluptatem doloribus labore modi.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, exercitationem quia id accusamus beatae sunt? Dolorum mollitia sint debitis delectus.</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, accusantium, provident ab quo sed blanditiis perspiciatis distinctio aut voluptatibus cum odio quaerat iure vel dolorum fugit explicabo suscipit tenetur. Sed!</p>
            </div>
        </div>
    </div>

                    
                                    </div>
                
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">

                            </div>
                        </form>
                    </div>

            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<?php include_once("employeeComman/footer.php")?>
