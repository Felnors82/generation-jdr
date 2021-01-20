<?php


//Function creer_menu () {
$Niveau = rand ( 1,6 ); // si on se base sur la qualité de l'auberge on veut des niveau de menu 1 3 5 donc  $Niveau = ($qualite *2) + 1 
// tableau repas auberge

// niveau 1 miserable
$tab_ing1_1 = array ( 
' soupe de navets',' soupe de navets',' soupe de navets',' soupe de navets',' soupe de navets',
' soupe de algues', ' soupe de algues',' soupe de algues',' soupe de algues',
' soupe de feuilles sauvages',' soupe de feuilles sauvages',
' soupe de rutabagas',
' soupe d\'orties',
' soupe de cresson',
' soupe de champignons',
' soupe de carottes',
' soupe de betteraves',
' soupe de panais',
' soupe d\'oignons',
' soupe d\'ail'
);

$tab_ing2_1 = array ( 
'','','','','','','','','','','','',
' et de queues de poisson',
' et de graisse de baleine',
' et de châtaignes',
' et de restes de lapin ou de lièvre',
' et de restes de grive ou de merle',
' et de restes de cerf ou de sanglier',
' et de restes d’oiseaux sauvages (bécasse, merle)',
' et de graisse de porc',
' et de lard rance',

);
$tab_acc_1 = array ( 

' accompagné de bouillie d’orge',	' accompagné de bouillie d’orge',	' accompagné de bouillie d’orge',
' accompagné de bouillie de seigle',	' accompagné de bouillie de seigle',	' accompagné de bouillie de seigle',
' accompagné de bouillie d’avoine',	' accompagné de bouillie d’avoine',	' accompagné de bouillie d’avoine',
' accompagné de bouillie de sarrasin',	' accompagné de bouillie de sarrasin',	' accompagné de bouillie de sarrasin',
' accompagné de pain de seigle rassis',	' accompagné de pain de seigle rassis',	
' accompagné de pain d’orge rassis',	' accompagné de pain d’orge rassis',	
' accompagné de pain d’avoine rassis',	' accompagné de pain d’avoine rassis',	
' accompagné de pain de sarrasin rassis',	' accompagné de pain de sarrasin rassis'	

);

$accompagne_1="et son pichet d’eau.";
// 1 repas = rand de tab_ing1_1+rand tab_ing2_1 + rand tab_acc_1 + accompagne_1

$repas1j1= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j2= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j3= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j4= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j5= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j6= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;
$repas1j7= $tab_ing1_1[rand(0,count($tab_ing1_1)-1)]. " " . $tab_ing2_1[rand(0,count($tab_ing2_1)-1)]. " </br>  ".$tab_acc_1[rand(0,count($tab_acc_1)-1)]. " " . $accompagne_1;

//-------------------
// niveau 2 Modeste
//-------------------
$tab_ing1_2 = array ( 

' bouillon de lentilles',
' bouillon de pois',
' bouillon de fèves',
' bouillon de pois-chiche',
' bouillon de navets',
' bouillon de champignons',
' bouillon de oignons',
' bouillon de céleris',
' bouillon de poireaux',
' bouillon de choux',
' bouillon de blettes',
' bouillon de cresson',
' bouillon de orties',
' bouillon de carottes',
' bouillon de betteraves',
' bouillon de salsifis',

);

$tab_ing2_2 = array ( 

' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',' avec des pommes de terres',
' avec la carcasse d un poulet',' avec la carcasse d un poulet',' avec la carcasse d un poulet',
' avec des oeuf',' avec des oeuf',
' avec du porc (lard, jambon)',' avec du porc (lard, jambon)',
' avec du poisson (hareng, anguille)',
' avec des mollusques (huîtres, palourdes, moules) en fonction des arrivés de la semaine',
' avec du lapin ou lièvre',
' avec un oiseau (pigeon, caille, bécasse,perdrix, grive, merle) en fonction des arrivés de la semaine',


);

$tab_acc_2 = array ( 

' accompagné de bouillie d’orge',
' accompagné de bouillie de seigle',
' accompagné de bouille de sarrasin',
' accompagné de bouillie de millet',
' accompagné de bouillie d’avoine',
' accompagné de pain de seigle',' accompagné de pain de seigle',' accompagné de pain de seigle',' accompagné de pain de seigle',' accompagné de pain de seigle',
' accompagné de pain d’orge',' accompagné de pain d’orge',' accompagné de pain d’orge',
' accompagné de pain de sarrasin',' accompagné de pain de sarrasin',
' accompagné de pain d’avoine',' accompagné de pain d’avoine',
' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',

);
$accompagne_2="et son pichet d’eau ou de vin coupé à l’eau." . '</br>'. "Les ingrédients peuvent ne pas être frais et le pain peut être rassis.";
// 1 repas = rand de tab_ing1_2 +rand tab_ing2_2 + rand tab_acc_2

$repas1jfete= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j1= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j2= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j3= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j4= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j5= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j6= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;
$repas2j7= $tab_ing1_2[rand(0,count($tab_ing1_2)-1)]. " " . $tab_ing2_2[rand(0,count($tab_ing2_2)-1)]. " </br>  ".$tab_acc_2[rand(0,count($tab_acc_2)-1)]. " " . $accompagne_2;

//-------------------
// niveau 3 moyen
//-------------------

$tab_ing1_3 = array ( 

' potée de lentilles',
' potée de pois',
' potée de fèves',
' potée de pois-chiche',
' potée de oignons',
' potée de poireaux',' potée de poireaux',
' potée de choux',' potée de choux',
' potée de blettes',' potée de blettes',
' potée de cresson',
' potée de orties',
' potée de salsifis',
' potée de champignons',


);

$tab_ing2_3 = array ( 

'avec un peu de fromage','avec un peu de fromage','avec un peu de fromage','avec un peu de fromage','avec un peu de fromage',
'avec un peu de beurre','avec un peu de beurre','avec un peu de beurre',
'avec un peu de oeuf','avec un peu de oeuf','avec un peu de oeuf',
'avec un peu de porc (lard, jambon)','avec un peu de porc (lard, jambon)','avec un peu de porc (lard, jambon)','avec un peu de porc (lard, jambon)',
'avec un peu de poulet','avec un peu de poulet',
'avec un oiseau (pigeon, caille, bécasse, perdrix, grive, merle)',
'avec un peu de poisson (hareng, anguille)',
'avec quelques mollusques (huître, palourde,moule, écrevisse)',
'avec un peu de lapin ou lièvre',


);

$tab_acc_3 = array ( 

' accompagné de pain de seigle',' accompagné de pain de seigle',' accompagné de pain de seigle',
' accompagné de pain d’orge',' accompagné de pain d’orge',' accompagné de pain d’orge',
' accompagné de pain de sarrasin',' accompagné de pain de sarrasin',' accompagné de pain de sarrasin',
' accompagné de pain d’avoine',' accompagné de pain d’avoine',' accompagné de pain d’avoine',
' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)',' accompagné de pain de froment (blé)'




);
$accompagne_3="et son pichet de vin coupé à l’eau ou de bière.";
// 1 repas = rand de tab_ing1_ +rand tab_ing2_ + rand tab_acc_3

$repas2jfete= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j1= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j2= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j3= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j4= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j5= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j6= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;
$repas3j7= $tab_ing1_3[rand(0,count($tab_ing1_3)-1)]. " " . $tab_ing2_3[rand(0,count($tab_ing2_3)-1)]. " </br>  ".$tab_acc_3[rand(0,count($tab_acc_3)-1)]. " " . $accompagne_3;

//-------------------
// niveau 4 moyen superieur
//-------------------
$tab_ing1_4 = array (

' Plat principal: cochon rôti',
' Plat principal: poulet rôti',
' Plat principal: perdrix rôtie',
' Plat principal: omelette au lard',
' Plat principal: tourte de veau',
' Plat principal: gigot de mouton',
' Plat principal: cabris rôti',
' Plat principal: sanglier bouilli',
' Plat principal: boeuf bouilli',
' Plat principal: saucisses de porc',
' Plat principal: anguille rôtie',
' Plat principal: tripes de brochet',
' Plat principal: carpe',
' Plat principal: sardines grillées',
' Plat principal: tourte de crabe',
' Plat principal: hareng grillé',
' Plat principal: brochettes de poulpe',
' Plat principal: gratin de morue',
' Plat principal: gratin de maquereau',
' Plat principal: esturgeon',

 
);

$tab_ing2_4 = array ( 
' accompagné de champignons',
' accompagné d\'oignons',
' accompagné de lentilles',
' accompagné de purée de céleri',
' accompagné de pois chiches',
' accompagné de purée de navet',
' accompagné de purée de pois',
' accompagné d\'épinards',
' accompagné de poireaux',
' accompagné de carottes bouillies',
' accompagné de fèves',
' accompagné de choux braisés',
' accompagné de pomme de terre et sa ompoté d\'échalotes',
' accompagné de cresson',
' accompagné de panais',
' accompagné de betteraves bouillies',
' accompagné de topinambour',
' accompagné de choux-fleurs',
' accompagné de artichauts',
' accompagné de salsifis',
 
);

$accompagne_4=' avec du pain, du  fromage et du beurre, et comme boisson du  vin ou de la bière.'
;

// 1 repas = rand de tab_ing1_ + rand tab_ing2_ + rand tab_acc_

$repas3jfete= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j1= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j2= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j3= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j4= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j5= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j6= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;
$repas4j7= $tab_ing1_4[rand(0,count($tab_ing1_4)-1)]. " " . $tab_ing2_4[rand(0,count($tab_ing2_4)-1)]. " </br>  " . $accompagne_4 ;

//-------------------
// niveau 5  bourgeois
//-------------------

$tab_ing1_5 = array (

' Viande : cochon rôti',
' Viande : cuisse de veau farcie',
' Viande : ragoût de porc',
' Viande : omelette de lard fumé',
' Viande : poulet rôti',
' Viande : faisan rôti',
' Viande : perdrix rôtie',
' Viande : bécasse rôtie',
' Viande : pigeon rôti',
' Viande : porcelet farci',
' Viande : mouton rôti',
' Viande : cabris rôti',
' Viande : sanglier rôti',
' Viande : cerf rôti',
' Viande : tourte de veau',
' Viande : quartier de boeuf rôti',
' Viande : chevreuil farci',
' Viande : oie farcie',
' Viande : lapin',
' Viande : canard confit',
 
);

// OU

$tab_ing2_5 = array (

' poisson : brochet mijoté',
' poisson : brochet',
' poisson : tripes de brochet',
' poisson : hachis de carpe',
' poisson : saucisse d’esturgeon',
' poisson : pâté d’huîtres en croûte',
' poisson : pâté d’esturgeon',
' poisson : crabe en potée',
' poisson : hareng',
' poisson : homard bouilli',
' poisson : langouste flambées',
' poisson : anguilles frites',
' poisson : Saumon grillé',
' poisson : truite',
' poisson : turbot',
' poisson : sole panée',
' poisson : morue gratinée',
' poisson : maquereau',
' poisson : ragoût de poulpe',
' poisson : lotte rissolée',
 
);

$tab_acc = array ( 

' accompagné de ses légumes et de sa sauce au vin blanc et à l’orange',
' accompagné de ses légumes et de sa sauce au vin rouge et aux prunes',
' accompagné de ses légumes et de sa sauce aux truffes',
' accompagné de ses légumes et de sa sauce au miel et amandes',
' accompagné de ses légumes et de sa sauce au beurre persillé',
' accompagné de ses légumes et de sa sauce moutarde et coriandre',
' accompagné de ses légumes et de sa sauce citron et gingembre',
' accompagné de ses légumes et de sa sauce safran et cannelle',
' accompagné de ses légumes et de sa sauce à la crème et à la ciboulette',
' accompagné de blettes au beurre',
' accompagné de lardons et échalotes confites',
' accompagné d`\'olives, persil et marjolaine',
' accompagné d\'oignons gratinés',
' accompagné de purée de pois frite au lard',
' accompagné de poireaux au beurre',
' accompagné de trompettes de la mort',
' accompagné de châtaignes et morilles',
' accompagné de cèpes à la crème',
' accompagné de crème de salsifis',
' accompagné de fèves rissolées au romarin',

);

$tab_douceur = array ( 

' avec dessert : fruits confits',
' avec dessert : gâteau au miel',
' avec dessert : flan aux oeufs',
' avec dessert : poires rôties à la cannelle',
' avec dessert : beignets',
' avec dessert : tarte aux pommes et coings',
' avec dessert : gaufres au sucre et à la cannelle',
' avec dessert : tarte aux prunes',
' avec dessert : biscuits aux épices',
' avec dessert : gingembre confit',

);
// OU

$tab_fruit = array ( 

'Fruits  : poires',
'Fruits  : pommes',
'Fruits  : figues',
'Fruits  : cerises',
'Fruits  : raisins',
'Fruits  : abricots, pêches',
'Fruits  : grenades',
'Fruits  : framboises, mûres',
'Fruits  : myrtilles',
'Fruits  : melon',

);

$accompagne_5="Accompagné de pain, d'un assortiment de légumes de saisons de fromage et de beurre, ainsi que d’un bon vin ou d’une bonne bière.
Choisir viandes OU poisons.";

// 1 repas = rand de tab_ing1_5 ou rand tab_ing2_5 + rand tab_douceur ou rand tab_fruit + accompagne_5
$repas4jfete= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j1=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j2=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j3=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j4=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j5=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j6=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;
$repas5j7=  $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." ou " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " ou " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>' .$accompagne_5;

//-------------------
// niveau 6 Le repas d’un noble ou d’un très riche bourgeois.
//-------------------

$accompagne_6="  Les ingrédients et les boissons sont de la meilleure qualité, et les assaisonnements et les présentations les plus élaborés. Accompagné de pain, de fromage et de beurre, ainsi que de vin exelent ou de bières de garde.";
// 1 repas = rand de tab_ing1_5 +rand tab_ing2_5 + rand tab_douceur + rand tab_fruit + accompagne_6
 $repas5jfete= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6; 
 $repas6j1= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j2= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j3= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j4= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j5= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j6= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]." " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' ." et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " " . $tab_acc[rand(0,count($tab_acc)-1)] . '</br>' . " et  " . $tab_douceur[rand(0,count($tab_douceur)-1)] . " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. '</br>'." ".$accompagne_6;
 $repas6j7= $tab_ing1_5[rand(0,count($tab_ing1_5)-1)]. " et " . $tab_ing2_5[rand(0,count($tab_ing2_5)-1)]. " et  ".$tab_douceur[rand(0,count($tab_douceur)-1)]. " et " . $tab_fruit[rand(0,count($tab_fruit)-1)]. " ".$accompagne_6;
 $repas6jfete= " C est tous les jours la fête pas de repas particuliers pour les jours de fête. C est plus l 'ambiance qui vat être differente, il peut y avoir un concours de barde de force etc...."; 

	echo '<h1><center><strong> Qualité de l auberge '. $Niveau . '</strong></center></h1>';

echo '<center>';					
	
	echo '<strong>repas jour 1: </strong> </br>';
	$a= 'repas'.$Niveau.'j1';
	echo $$a;

	echo '<br> <br>'; 


	echo '<strong>repas jour 2: </strong> </br>';
	$b= 'repas'.$Niveau.'j2';
	echo $$b;

	echo '<br> <br>'; 
	echo '<strong>repas jour 3: </strong> </br>';
	$c= 'repas'.$Niveau.'j3';
	echo $$c;

	echo '<br> <br>'; 
	echo '<strong>repas jour 4: </strong> </br>';
	$d= 'repas'.$Niveau.'j4';
	echo $$d;

	echo '<br> <br>'; 
	echo '<strong>repas jour 5: </strong> </br>';
	$e= 'repas'.$Niveau.'j5';
	echo $$e;

	echo '<br> <br>'; 
	echo '<strong>repas jour 6: </strong> </br>';
	$f= 'repas'.$Niveau.'j6';
	echo $$f;

	echo '<br> <br>'; 
	echo '<strong>repas jour 7: </strong> </br>';
	$g= 'repas'.$Niveau.'j7';
	echo $$g;

	echo '<br> <br>'; 
	echo '<strong> repas jour de fête: </strong> </br>';
	$h= 'repas'.$Niveau.'jfete';
	echo $$h;
	echo '<br> <br>'; 
echo '</center>';	
?>
