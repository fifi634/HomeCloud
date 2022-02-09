<?php 
  function nav_item(string $lien, string $title, string $linkClass=''): string
  {
      $classe=$linkClass;
      $classe2 = 'aria-current=" page"';
      if ($_SERVER['SCRIPT_NAME'] === $lien) {
          $classe = $classe.' active"'.$classe2;
      } else { $classe = $classe.'" ';}
      return
      '<li class="nav-item">
          <a href="'.$lien.'" class= "'.$classe.'">'.$title.'</a> 
      </li>';
  }

  function nav_menu(string $linkClass=''):string
  {
    return
      nav_item('/index.php', "le Home Cloud", $linkClass)."\n". 
      nav_item('/cloud-def.php', " c'est quoi ", $linkClass)."\n".
      nav_item('/cloud-offre.php', " l'offre ", $linkClass)."\n". 
      nav_item('/cloud-materiel.php', "le matériel", $linkClass)."\n". 
      nav_item('/cloud-tuto.php',"l'installation", $linkClass)."\n";
  }
?>