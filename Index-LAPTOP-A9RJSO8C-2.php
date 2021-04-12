<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- introdução de bibliotecas css-->
        
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="resources/icons">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/nav.css">
        <link rel="stylesheet" href="resources/smartmenus/css/sm-core-css.css">
        <link rel="stylesheet" href="resources/smartmenus/css/sm-mint/sm-mint.css">
        <!-- introdução de bibliotecas JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script  src = "/resources/smartmenus/jquery.smartmenus.min.js"> </script>
        
    </head>
    <body>
    <nav class="main-nav" role="navigation">

  <!-- Mobile menu toggle button (hamburger/x icon) -->
  <input id="main-menu-state" type="checkbox" />
  <label class="main-menu-btn" for="main-menu-state">
    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
  </label>

  <h2 class="nav-brand"><a href="#">MegaOS</a></h2>

  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-mint">
    <li><a href="#">Página Inicial</a></li>
    <li><a href="#">Usuários</a>
      <ul>
        <li><a href="#"><img src="resources/icons/add-group.png" width="15px" height="15px"> Incluir Usuários</a></li>
        <li><a href="#"><img src="resources/icons/loupe.png" width="15px" height="15px"> Listar usuários</a></li>
      </ul>
    </li>
    <li><a href="#">Chamados</a>
      <ul>
        <li><a href="#"><img src="resources/icons/add.png" width="15px" height="15px"> Incluir Chamados</a></li>
        <li><a href="#"><img src="resources/icons/loupe.png" width="15px" height="15px"> Listar Chamados</a></li>
      </ul>
    </li>
    <li><a href="#">Suporte</a>
      <ul>
        <li><a href="#">Algo</a></li>
        <li><a href="#">Forums</a></li>
      </ul>
    </li>
    
    
    <li><a href="http://www.smartmenus.org/contact/">Contato</a></li>
  </ul>
</nav>

<div class="demo-text">
  <p></p>
</div>
    </body>
    <script>
        
    $(function() {
  $('#main-menu').smartmenus({
    subMenusSubOffsetX: 6,
    subMenusSubOffsetY: -8
  });
});

// SmartMenus mobile menu toggle button
$(function() {
  var $mainMenuState = $('#main-menu-state');
  if ($mainMenuState.length) {
    // animate mobile menu
    $mainMenuState.change(function(e) {
      var $menu = $('#main-menu');
      if (this.checked) {
        $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
      } else {
        $menu.show().slideUp(250, function() { $menu.css('display', ''); });
      }
    });
    // hide mobile menu beforeunload
    $(window).bind('beforeunload unload', function() {
      if ($mainMenuState[0].checked) {
        $mainMenuState[0].click();
      }
    });
  }
});
</script>

</html>