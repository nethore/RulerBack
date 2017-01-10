<body ng-app="ruler" ng-cloak>
  <div id="menu">
    <a class="close">
      <i class="icon-close"></i>
    </a>
    <ul>
      <li><a href="#/">Accueil</a></li>
      <li><a href="#/list">Liste des personnalités</a></li>
      <li><a href="#/about">A propos</a></li>
      <li><a href="/admin"><i class="fa fa-tachometer" style="margin-right:10px" aria-hidden="true"></i>
 Admin</a></li>
    </ul>
 </div>
 <div id="help">
   <a class="close-help">
     <i class="icon-close"></i>
   </a>
  <div class="help">
    <h3>Qu'est-ce que Ruler ?</h3>
    <p>
      Ruler est un outil graphique permettant de comparer la taille de célébrités et d'inconnus.
    </p>
    <p>
      Notre base compte actuellement plus de {{ persos.length }} célébrités et d'autre sont continuellement ajoutés.
    </p>
    <p>
      N'hésitez pas à nous soumettre vos demandes si votre star favorite est absente du site.
    </p>
    <h3>Pourquoi Ruler ?</h3>
    <p>
      D'abord pour se marrer. Ensuite comme un exercice technique. Et enfin pour rendre service à ceux qui l'utiliseront.
    </p>
  </div>
</div>

  <header>
    <div class="menu">
      <a href="javascript:;" class="menu_btn"><i class="icon-menu"></i></a>
    </div>
    <div class="logo">
      <i class="icon-ruler"></i>
      <h3>Ruler</h3>
    </div>
    <div class="help">
      <a  href="javascript:;" class="help_btn"><i class="icon-help"></i></a>
    </div>
  </header>

  <div class="main-route" ng-view>
  </div>

  <footer>
    <p>
      Copyright 2017 Ruler -  Nikolas Ethoré
    </p>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</body>
