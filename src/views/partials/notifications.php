<div class="notifications" id ="notifications">
    <!--Notificação de Sucesso -->
        <?php 
            if(isset($_SESSION['msg_success'])){
        ?>
            <div id="alert-success" class="alert alert-success" role="alert">
        <?php
                echo $_SESSION['msg_success'];
        ?>
            </div>
        <?php
            unset($_SESSION['msg_success']);
            }
        ?>

  <!--Notificação de Info-->

    <?php 
            if(isset($_SESSION['msg_alert'])){
        ?>
            <div id="alert-success" class="alert alert-warning" role="alert">
        <?php
                echo $_SESSION['msg_alert'];
        ?>
            </div>
        <?php
          
            unset($_SESSION['msg_elert']);
            }
        ?>

  <!-- Notificação de info blue-->
  <?php 
            if(isset($_SESSION['msg_info'])){
        ?>
            <div id="alert-success" class="alert alert-info" role="alert">
        <?php
                echo $_SESSION['msg_info'];
        ?>
            </div>
        <?php
            unset($_SESSION['msg_info']);
            }
        ?>
   

  <!-- Notificação de Erro-->
        <?php 
            if(isset($_SESSION['msg_error'])){
        ?>
            <div id="alert-success" class="alert alert-danger" role="alert">
        <?php
                echo $_SESSION['msg_error'];
        ?>
            </div>
        <?php
            unset($_SESSION['msg_error']);
            }
        ?>
    </div>
