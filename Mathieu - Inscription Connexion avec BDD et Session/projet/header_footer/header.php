<header>
  HEADER
  <?php if(isset($_SESSION) && isset($_SESSION['Login']) )
        {?>
        <div style="position: relative; float: right; margin-right:100px">
          <button class="button_header" type="button" name="button"  onclick="window.location.href = '/projet/log_in_ou_up.php';">Déconnexion</button>
        </div>
      <?php echo $_SESSION['Login']; }
        else
        {?>
          <div style="position: relative; float: right; margin-right:100px">
            <button type="button" class="button_header" name="button"  onclick="window.location.href = '/projet/CONTROLEUR/log.php?action=connexion';">Se connecter</button>
          </div>
        <?php
        }
        ?>
</header>
