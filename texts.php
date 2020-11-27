<?php 

/*

(for chapters after first step)
	Manager panicking * 2
	unplanned created events
	created events
	call to mission again	/ restart mission again

adventureCall
question
for each (events => interjections + ponctuation + event)
hesitations * 2
interjection + ponctuation + chosen event
decidedAdventure * 2

** Teleportation
** temporal unit + random encounter during trip

decidedAdventure
q2000 askHelp askInfo
phrase de Q-2000: info about event
interjection + ponctuation
searching for a solution
finding 2 solutions
hesitations * 2
decidedSolution * 2
solution
job done

** Teleportation
** temporal unit + random encounter during trip

Manager welcome back
Manager report
solution text containing "Vous"
Agent 3000 thanking
solution text
Manager concludes with cliffhanger / suspense

*/

$adventureCall = array(
	"En avant pour une nouvelle aventure !",
	"Il faut encore changer le passé !",
	"Pour une fois, j'ai hâte de voyager à une autre époque !",
	"Il me faut partir en mission pour sauver l'humanité.",
	"Cette histoire est loin d'être résolue.",
	"Le devoir m'appelle !",
	"J'ai l'impression que ça va s'arranger.",
	"Il est temps de mettre un terme à cette mission !",
	"Je ne vais pas me laisser abattre !",
	"L'aventure m'appelle !",
	"C'est parti pour un nouveau voyage dans le temps !",
	"Vers l'infini des paradoxes temporels, et au delà !",
	"Je n'ai toujours pas d'indices sur comment mener à bien ma mission.",
	"Je suis pas prêt d'avoir fini cette corvée.",
	"J'ai des nouilles qui m'attendent à la maison et je dois repartir pour le boulot !",
	"J'ai beau faire de mon mieux, ça ne s'améliore pas.",
	"Et si je voyageais dans le futur ? Peut-être que ça aiderait ?",
	"Si seulement j'en voyais le bout !",
	"On est pas sortis de la taverne mon petit Q-2000.",
	"Je crois que j'ai égaré mon stylo dans le temps. Tant pis.",
	"Changeons le passé, protégeons l'avenir ! On dirait un slogan de pub.",
	"Quoi de mieux que l'aventure ? Un plaid et chocolat chaud, certes.",
	"J'ai comme l'impression d'avoir déjà vécu ça. Passons.",
	"Je me parle souvent à moi-même, je ne sais pas si les voyages temporels aident.",
	"Si j'avais gagné 1 murglok à chaque fois que je voyage dans le temps...",
	"Le mieux quand on voyage dans le temps, c'est d'écouter du rock progressif.",
	"Le tunnel du voyage temporel a des couleurs étranges parfois.",
	"Est-ce qu'on est pas déjà passés par là ?",
	"J'ai l'impression de tourner en rond, mais le temps n'est pas cyclique.",
	"J'ai même pas le temps de me reposer qu'il faut déjà repartir !",
	"Ce travail d'agent ne me permet vraiment aucun repos.",
	"Pff, 007 en vacances et moi je dois me farcir la corvée de sauver l'humanité.",
	"C'est toujours Bruce qui a les missions faciles comme sauver les banques, c'est injuste.",
	"C'est pas parce c'est une année bisextile qu'il faut que je fasse tout non plus hein.",
	"Et c'est parti pour la dernière ! Non, je rigole.",
	"Un dernier pour la route ? Ah, si seulement.",
	"Les autres agents se la coulent douce et c'est Agent 3000 qui doit encore bosser.",
	"Je ferai mieux de me téléporter dans le futur au moment de ma retraite. Ah mais non ça marcherait pas.",
	"Et si on allait faire un tour du côté de la Grande Dépression ? Ça tomberait à pic !",
	"Est-ce qu'on lui a demandé son avis à l'humanité avant de me demander d'aller la sauver ?",
	"Quand le danger est imminent, il suffit d'appeler Agent 3000 !",
	"L'aventure est sur le pas de la porte. Suffit juste qu'on trouve la clé.",
	"My name is 3000, Agent 3000.",
	"Et c'est reparti pour un tour !",
	"Un monde meilleur, mais à quel prix ?",
	"J'espère vraiment avoir une promotion pour cette mission.",
	"J'ai intérêt à être promu une fois que j'aurais fini ce travail.",
	"Mon bonus a intérêt à être plus conséquent que celui de Bruce Wayne parce que ça suffit hein.",
	"Je ne suis pas ici juste par devoir mais aussi parce que je suis le seul sur qui on peut compter.",
	"Ils ont tous confiance en moi, mais moi, bof.",
	"Je le sens pas trop sur ce coup-là.",
	"J'ai comme l'impression que tout ceci n'est que le fruit du hasard."
);

$question = array(
	"Qu'avons-nous à présent comme évènements que nous pourrions influencer ?",
	"Qu'est-ce qu'on va pouvoir modifier cette fois ?",
	"Voyons-voir où nous pourrions aller.",
	"Prochain stop ? Voyons voir.",
	"Je dois trouver un nouvel élément dans la timeline.",
	"Et maintenant, on va où et quand ?",
	"Je choisirai bien ma période préférée mais non, il faut quand même suivre la mission.",
	"Si je peux choisir, je ferai bien un tour par les années folles.",
	"Dommage que je sois en mission, sinon j'aurais bien rendu visite à Cléopâtre.",
	"Pourrais-je rester plus longtemps cette fois-ci ?",
	"Je vais essayer de choisir une époque avec un minimum d'hygiène.",
	"J'ai jamais vraiment le choix en réalité, je dois faire avec la liste qu'on a.",
	"Qu'est-ce qu'un choix finalement ? Si ce n'est renoncer ?",
	"Est-ce que je vais pouvoir mieux choisir cette fois ?",
	"Agent 3000, cette fois c'est la bonne !",
	"J'ai bon espoir de tomber sur l'exact évènement qu'il faut changer.",
	"C'est déjà mal parti vu la liste.",
	"Oups, je suis pas sûr que ces évènements soient très plaisants.",
	"Est-ce que je vais avoir le choix entre différentes guerres de religions ?",
	"Evitons de tomber en pleine invasion barbare.",
	"Je préfère retourner chez les chinois que chez les grecs, leur bouffe était meilleure.",
	"J'espère ne pas encore me faire recruter pour la guerre et finir en prison comme l'autre fois.",
	"Si j'ai le choix, j'irais bien au Moyen-Âge. C'est cool les châteaux forts.",
	"Il est évident que le choix ne dépend pas de moi mais de la mission.",
	"Ce n'est pas moi qui décide où aller, c'est la mission qui m'y force.",
	"Qui aurait cru que l'humanité serait sauvée en retournant à un de ces points ?",
	"J'irais bien faire un tour aux bains romains mais le travail n'attend pas !",
	"L'humanité dépend de moi et je pense à pêcher avec des enfants phéniciens.",
	"Gilgamesh était sympa, je lui ferait bien un petit coucou mais pas le temps.",
	"Un petit tour dans le Nil avec les crocodiles pour en finir ?",
	"Si je peux éviter les rois de France ça serait déjà pas mal, ils sont tous insupportables.",
	"Où est-ce qu'on va bien pouvoir aller cette fois ?",
	"Je vais aller dans le passé, mais quel passé ?",
	"Quel siècle cette fois ?",
	"Quel continent pour ce nouveau voyage ?",
	"Voyons quelles civilisations s'offrent à nous !",
	"On est sûrs de ces choix ?",
	"Qui a validé cette liste ?",
	"Ça serait cool d'avoir des évènements un peu intéressants cette fois.",
	"Un petit coucou à Genghis Khan ? Non ?"
);

$interjections = array(
	"Bon",
	"Bref",
	"Alors",
	"Ah",
	"D'accord",
	"Allez",
	"Euh",
	"Oh",
	"OK",
	"Bien",
	"Hm",
	"Super",
	"Top",
	"Tip top",
	"Intéressant",
	"Chouette",
	"Original",
	"Ah tiens",
	"Tiens tiens",
	"Etonnant",
	"D'acc",
	"Oups",
	"Mince",
	"Zut",
	"Noté",
	"Vu",
	"Cool"
);

$ponctuations = array(
	"...",
	" !",
	"."
);

$hesitations = array(
	"Que faire ? Que faire ?",
	"Je ne sais vraiment pas quoi choisir.",
	"Lalala, je ne sais pas quoi choisir.",
	"C'est vraiment compliqué de faire ce choix.",
	"Choisir c'est renoncer.",
	"Quel bordel, et pourtant faut bien se décider.",
	"Alors, la peste ou le choléra ?",
	"Je me retrouve entre Charybde et Scylla.",
	"C'est un vrai dilemme.",
	"C'est impossible de faire le bon choix.",
	"Suis ton jugement Agent 3000 ! Tu parles...",
	"Suivre son jugement c'est bien beau mais j'en ai pas moi !",
	"Faut que je suive mon bon sens mais encore faudrait-il que j'en aie un !",
	"Le bon sens est la chose la mieux partagée du monde, mais on m'en a pas filé beaucoup.",
	"J'hésite...",
	"Disons que...",
	"Aucune idée...",
	"C'est compliqué...",
	"C'est vraiment pas évident.",
	"Si seulement c'était plus simple !",
	"Les choix les plus simples sont ceux évidents !",
	"C'est plus compliqué que ça en a l'air...",
	"L'évidence devrait me frapper, et pourtant j'ai rien senti.",
	"Et maintenant, je fais quoi ?",
	"Et donc ?",
	"Et à présent ?",
	"Le choix que je vais faire aura une influence considérable sur la suite, super l'angoisse quoi.",
	"Déjà que je suis anxieux, il faut en plus que je fasse un choix pour sauver l'humanité, merci.",
	"Mon anxiété chronique ne me remerciera pas.",
	"Si quelqu'un est derrière ces choix, c'est un vrai sadique.",
	"Si Dieu existe, je tiens à l'avertir que je me plaindrai au service après-vente.",
	"C'est pas possible de se dire qu'il faut prendre un parti dans cette histoire.",
	"Elle est bien belle l'humanité, en attendant c'est moi qui suis embêté là.",
	"Quel merdier...",
	"Parfois, y a pas le choix que d'avoir le choix.",
	"Y a l'embarras du choix, et c'est bien ça le problème.",
	"Je peux pas faire marche arrière.",
	"Il faut bien que je me décide.",
	"Question subsidiaire: vais-je me décider ?",
	"Et si j'attends et que je refuse de choisir ? Ah merde, l'humanité, c'est vrai.",
	"J'aimerais... Ne pas choisir ! C'est possible ?",
	"Si seulement quelqu'un pouvait choisir pour moi.",
	"C'est pas le choix le problème, c'est porter la responsabilité derrière.",
	"Et pendant ce temps, 007 lui il choisit son prochain cocktail.",
	"Choisir, c'est une chose, assumer, c'en est une autre.",
	"Je pourrais choisir au hasard mais j'ai même pas de dé.",
	"Après ça, je change de job, et je choisis pas le prochain.",
	"J'ai l'impression d'être dans un rayon de supermarché.",
	"C'est comme choisir entre ses deux plats préférés mais on en mange aucun.",
	"C'est pas facile d'être le cul entre deux sièges.",
	"Une décision historique ! Haha...",
	"L'illusion du choix: je sais d'avance que ça ne mènera nulle part.",
	"Le moment décisif ! Quel suspense !",
	"J'ai beau essayer de la lancer au loin, la décision me revient.",
	"J'aimerais ne pas porter la responsabilité de cette décision, mais c'est pas comme si j'avais le choix.",
	"Je n'ai pas le choix. Enfin si. Enfin, faut que je choisisse quoi.",
	"Tout cela servira-t-il vraiment à quelque chose ?",
	"Je tourne en rond encore une fois.",
	"C'est comme le jeu du Tu préfères, sauf que je préfèrerais rentrer chez moi.",
	"Quand tout cela sera fini, je refuserai de choisir même quoi manger.",
	"C'est pas simple.",
	"Y a rien d'évident.",
	"Je suis bien embêté.",
	"Comment faire ?",
	"Comment choisir ?",
	"Je ne sais pas me décider.",
	"Tu parles d'un choix.",
	"C'est la merde.",
	"C'est la mouise Louise.",
	"Super comme situation, j'adore.",
	"J'en ai marre.",
	"Qu'on en finisse...",
	"J'en peux plus.",
	"Et si j'arrête là ?",
	"Est-ce que c'est si important que ça ?",
	"Est-ce qu'on peut tirer aux dés ?",
	"J'ai même pas une pièce pour faire pile ou face.",
	"J'aurais aimé laisser le hasard décider pour moi."
);

$decidedAdventure = array(
	"Ça y est !",
	"Faisons comme ça !",
	"C'est parti !",
	"On y va !",
	"Quand faut y aller, faut y aller !",
	"Plus le temps de niaiser !",
	"C'est parti mon kiki !",
	"Allons-y Alonso !",
	"Kawabunga !",
	"Wouhou !",
	"Allez !",
	"Youpi !",
	"Let's go !",
	"Go !",
	"Yallah !",
	"Chaud devant !",
	"Attention devant !",
	"Attention j'arrive !",
	"Prenez garde !",
	"En avant les pédales !",
	"A l'assaut !",
	"A l'abordage !",
	"Me voilà !",
	"Nous voilà !",
	"Ça chauffe !",
	"En garde !",
	"Gare à vous !",
	"Faites gaffe !",
	"Méfiez-vous !",
	"Halte là !",
	"Moussaillon !",
	"A la rescousse !",
	"A l'aventure !",
	"Vers l'infini et l'au delà !",
	"Bingo !",
	"Enfin !",
	"Adieu !",
	"Envoyez !",
	"Eurêka !",
	"Halleluja !",
	"Abracadabra !",
	"Hocus-pocus !",
	"Doux Jésus !",
	"Rebelotte !",
	"Tadam !",
	"Zou !",
	"C'est décidé !",
	"En marche !",
	"En avant !",
	"En avant marche !"
);

$decideSolution = array(
	"C'est parti !",
	"C'est décidé !",
	"Faisons comme ça !",
	"Quand faut y aller, faut y aller !",
	"Plus le temps de niaiser !",
	"C'est parti mon kiki !",
	"Allons-y Alonso !",
	"Allez !",
	"Let's go !",
	"Yallah !",
	"Ça chauffe !",
	"Bingo !",
	"Enfin !",
	"Envoyez !",
	"Eurêka !",
	"Halleluja !",
	"Abracadabra !",
	"Hocus-pocus !",
	"Tadam !",
	"Zou !",
	"Bon.",
	"Bref.",
	"Alors...",
	"Allez...",
	"Euh...",
	"Disons...",
	"OK.",
	"Bien.",
	"Super.",
	"Top !",
	"Tip top !",
	"Chouette !",
	"Noté.",
	"Vu.",
	"Vu !",
	"Cool.",
	"Cool !"
);

$q2000 = array(
	"Q-2000",
	"Chère boucle d'oreille intelligente",
	"Encyclopédie historique de l'humanité",
	"Ma petite boucle d'oreille préférée",
	"Descendant de Q-1999",
	"Héritier de P-2000",
	"Q-2000, mon meilleur allié",
	"L'ami Q-2000",
	"Q-2000, mon ami",
	"Q-2000, mon allié",
	"Q-2000, mon compagnon",
	"Cher compagnon de voyage",
	"Cher ami de longue date",
	"Petit bijou intelligent",
	"Mon petit bijou",
	"Intelligence artificielle... Pardon ! Q-2000",
	"Grand ornement ordinateur, Q-2000",
	"Q-2000, toi l'érudit",
	"Grand savant Q-2000",
	"Lanterne de mes voyages, Q-2000",
	"Q-2000, ma lumière dans les heures les plus sombres de l'histoire",
	"Q-2000, expert en temps et en lieu",
	"Puits de savoir électronique, Q-2000",
	"Q-2000, ma source encylopédique",
	"Q-2000, mon allié robotique",
	"Grand témoin de l'humanité, Q-2000",
	"Moussaillon Q-2000",
	"Sergent Q-2000"
);

$askHelp = array(
	"j'ai besoin de toi !",
	"à la rescousse !",
	"viens m'aider !",
	"à l'aide !",
	"renseigne moi !",
	"je te fais appel !",
	"je te sollicite !",
	"aide moi !",
	"au rapport !",
	"parle moi !",
	"viens me secourir !",
	"il me faut ton aide !",
	"il faut que tu me parles !",
	"il faut que tu me renseignes !",
	"assiste moi !",
	"collaborons !",
	"soutiens moi !",
	"il faut que tu me soutiennes !",
	"j'ai besoin de ton soutien !",
	"il faut que tu m'assistes !",
	"j'ai besoin de ton assistance !",
	"accompagne moi !",
	"seconde moi !",
	"au secours !",
	"prête moi main forte !",
	"guide moi !",
	"j'ai besoin de ton accompagnement !",
	"tu dois m'accompagner !",
	"j'ai besoin que tu me guides !",
	"j'ai besoin de ta contribution !",
	"j'ai besoin de ton renfort !",
	"j'ai besoin de tes services !",
	"il me faut tes services !",
	"j'ai besoin de tes savoirs !",
	"j'ai besoin de tes connaissances !",
	"il me faut tes connaissances !",
	"il me faut ton renfort !",
	"il me faut ta contribution !",
	"rends moi service !"
);

$askInfo = array(
	"Quelles informations as-tu sur cette époque et ce qu'il s'y passe ?",
	"Peux-tu me fournir les précieuses données sur l'endroit où nous sommes ?",
	"File moi les infos utiles !",
	"Que sais-tu sur ce lieu ?",
	"Que sais-tu sur cette époque ?",
	"Quelles données as-tu sur notre situation ?",
	"Que sais-tu sur cet évènement ?",
	"Qu'est-ce que cet évènement a de particulier ?",
	"Qu'est-ce que cette période a de spécial ?",
	"Qu'est-ce que cette époque a d'inédit ?",
	"Qu'est-ce que ce lieu a d'important ?",
	"Que s'est-il passé exactement ici ?",
	"Que s'est-il donc passé à ce moment là ?",
	"Pourquoi cet évènement est-il si important ?",
	"Pourquoi ce lieu est-il si décisif ?",
	"Pourquoi cette époque est-elle si particulière ?",
	"Pourquoi cette période est-elle si délicate ?",
	"Quelles infos as-tu sur les tenants et aboutissants de ce lieu ?",
	"Quelles infos as-tu sur les enjeux de cet endroit ?",
	"Quelles infos as-tu sur les moments décisifs de cette époque ?",
	"Quelles infos as-tu sur les instants importants de cette période ?",
	"Quelle est la nature de cet évènement ?",
	"Quelle est notre objectif ici ?",
	"Quelle est notre cible à cette époque ?",
	"Quelle est notre influence possible dans cette période ?",
	"Qu'est-ce qui se déroule sous nos yeux ?",
	"De quel théâtre sommes-nous les spectateurs et futurs acteurs ?",
	"Quelle est la mise en scène en cours ici ?",
	"Qu'est-ce qui se joue à cet endroit ?",
	"Qu'est-ce qui se joue à cette époque ?",
	"A quoi pouvons-nous nous intéresser ici ?",
	"A quoi pouvons-nous ajouter notre petit grain de sel dans cette période ?",
	"En quoi ce lieu est-il si remarquable ?",
	"En quoi cette période est-elle si exceptionnelle ?",
	"Comment ma mission peut-elle avoir un lien avec ce lieu ?",
	"Comment ma mission est-elle liée à cette époque ?",
	"Quel grand enjeu va se décider ici ?",
	"Quel grand moment décisif va-t-on observer à cette époque ?",
	"Quel instant important de l'histoire sommes-nous sur le point de transformer ?",
	"A quelle grande étape de l'humanité allons-nous toucher cette fois ?",
	"De quoi s'agit-il encore ?",
	"Dis-moi ce qu'il y a à savoir, je veux tout savoir.",
	"Quel grand destin va être bouleverser cette fois-ci ?",
	"Quel grand dessein va voir son sort modifié ici ?",
);

$searchingSolution = array(
	"J'analyse la situation.",
	"Analysons la situation.",
	"Thèse, antithèse, synthèse.",
	"Mode analytique ON.",
	"Investigons le cas spécifique.",
	"Typiquement un cas qui demande inspection.",
	"J'inspecte, puis j'agis.",
	"Réflexion, puis action.",
	"Action, mais d'abord réflexion.",
	"Décryptage en cours...",
	"Je réfléchis au cas particulier que nous avons.",
	"Considérons les choses avant d'agir.",
	"L'évaluation précède l'action.",
	"Evaluons la situation.",
	"Evaluation en cours...",
	"J'évalue, puis j'applique.",
	"L'application nécessite d'abord compréhension.",
	"Il faut d'abord que je comprenne.",
	"Phase de compréhension enclenchée.",
	"Décision nécessite compréhension.",
	"Il est sage de d'abord analyser les choses.",
	"Je recherche mes potentiels d'action.",
	"Mes recherches sont en cours...",
	"La recherche est importante pour bien juger.",
	"Mon jugement ne sera bon qu'après recherche et analyse.",
	"Rien ne sert de bon sens sans recherches préalables.",
	"Les analyses enrichiront mes réflexions d'action.",
	"J'agirai mieux une fois que j'en saurai plus.",
	"Je dois considérer toutes les éventualités.",
	"Toutes les possibilités doivent être évaluées.",
	"Il faut comprendre l'implication de chaque option.",
	"Les enjeux doivent être entièrement compris.",
	"Chaque option peut avoir de nombreuses implications.",
	"Chaque éventualité a ses ramifications propres.",
	"Le potentiel est très difficile à calculer.",
	"Il faut être stratégique et ne pas s'emballer.",
	"Pesons le pour et le contre de chaque possibilité.",
	"C'est un graphe de possibilités immense qui s'offre à moi.",
	"Je dois envisager le meilleur comme le pire.",
	"Hors de question de se presser et d'ignorer l'analyse.",
	"Inutile de s'exciter, réflechissons calmement.",
	"Je ne dois pas ignorer l'étape d'évaluation.",
	"Je dois bien faire attention à tout prendre en compte.",
	"Rien ne doit être laissé au hasard.",
	"Cette situation est très délicate et décisive.",
	"Il faut agir et donc réfléchir avec prudence.",
	"Prudence est mère de sureté.",
	"Mieux vaut être sûr de son coup que le rater."
);

$findingSolutions = array(
	"Voici donc les options que nous avons...",
	"J'ai donc le choix entre...",
	"Les possibilités se réduisent à...",
	"Mon potentiel d'action se réduit à...",
	"L'influence que je peux avoir peut s'appliquer de deux manières...",
	"Je dois donc me décider entre...",
	"Je peux donc exercer mon influence de ces deux façons...",
	"Ça se termine simplement avec deux possibilités...",
	"J'aboutit donc à deux finalités possibles...",
	"J'obtiens finalement deux options...",
	"Mon champ d'action est donc limité à ces deux options...",
	"Comme toujours, je n'ai pas qu'un seul résultat possible mais deux...",
	"Ça serait bien plus simple si je n'avais pas à choisir mais je dois.",
	"Il faut que j'agisse maintenant.",
	"J'ai trouvé les deux solutions possibles.",
	"J'ai enfin deux issues envisageables.",
	"Je peux modifier cet évènement de deux manières.",
	"Ma contribution à cette histoire peut prendre deux formes.",
	"Il y a deux méthodes pour approcher cette situation.",
	"Il n'y a pas mille issues possibles malheureusement. Enfin heureusement.",
	"Au moins, je n'ai pas le choix entre des dizaines d'options.",
	"Je devrais me réjouir qu'il n'y ai que deux possibilités ici.",
	"Je me retrouve face à cet embranchement, il faut choisir une voie.",
	"L'univers, enfin Monsieur Manager Ultime, m'a chargé de décider dans quelle direction aller dorénavant.",
	"Parfois le monde se réduit à un choix simple.",
	"C'est probablement le genre de décisions qui définissent l'identité d'un homme.",
	"Ça va être plus difficile que de choisir entre ses deux plats préférés...",
	"Face à un dilemme, la décision en dit long sur la personne.",
	"Indépendamment de mon jugement, je me retrouve avec cette situation.",
	"C'est là que les multivers se créent, lorsqu'on va dans une direction ou l'autre.",
	"L'histoire se divise donc en deux futurs potentiellement différents.",
	"Laquelle de ces deux possibilités pourra bien sauver l'humanité ?",
	"C'est le moment où je dois choisir quelle voie emprunter.",
	"Certains disent qu'il n'y a que deux types de personnes, probablement définies par ce choix.",
	"A l'image de la parité de nos nombreux organes, ici on a une paire d'options.",
	"Deux. C'est toujours deux le chiffre. Un ça serait plus simple mais non. Donc il faut choisir.",
	"Tous mes calculs se réduisent à un simple chiffre, deux. Deux options.",
	"Et dorénavant j'ai en face de moi comme des jumeaux. Et je dois choisir mon enfant préféré.",
	"Pourquoi les choses sont-elles toujours aussi binaires ? Ne peut-on pas avoir plus de complexité ?",
	"Comme toujours, les méchants, les gentils, le noir, le blanc, et maintenant ?",
	"Ces situations débouchent toujours sur une conclusion sans nuances, sans entre-deux, sans compromis.",
	"Il faut choisir son camp dans la vie. La neutralité, c'est la passivité, c'est l'inexistence. Or j'existe. Donc...",
	"Il vaut mieux être dans un camp bien défini qu'au milieu de la bataille prêt à se faire écraser des deux côtés.",
	"La nuance c'est pour les simples d'esprit. Ou bien l'inverse, je ne sais plus. Ici, il faut être clair.",
	"Le compromis n'est qu'une manière de retarder une échéance de toute évidence inévitable. Là on l'a en face.",
	"Je me retrouve devant deux portes, quasiment identiques, et il faut que j'en ouvre une sinon l'humanité va disparaître."
);

$solutionsTemplate = array(
	"Soit 1, soit 2.",
	"1 ou 2.",
	"1 ou bien 2.",
	"1, sinon 2.",
	"1 ou alors 2.",
	"D'un côté 1, de l'autre 2.",
	"1 d'un côté, 2 de l'autre.",
	"1. L'autre option étant 2.",
	"1... Sinon c'est 2.",
	"D'une part 1. D'autre part 2.",
	"Possiblement 1. Autrement 2.",
	"1, et sinon 2.",
	"Simplement 1 ou tout aussi simplement 2.",
	"Potentiellement 1. Ou bien 2.",
	"Idéalement 1. Enfin, pourquoi pas 2 ?",
	"La première, 1, la deuxième, 2.",
	"A ma droite, 1. A ma gauche, 2.",
	"Pile, 1. Face, 2."
);

$jobDone = array(
	"Hop, ça c'est fait ! On peut rentrer à la maison.",
	"Mission accomplie, rentrons chez nous.",
	"Tip top, now on to the next stop !",
	"Done. Allons voir ce que ça va donner.",
	"Et encore une modification d'effectuée !",
	"Une mission en plus de remplie !",
	"Je peux enfin cocher celle-ci.",
	"Je raye cette étape de la liste.",
	"On s'en lasse pas de réussir une tâche !",
	"Ça fait du bien d'arriver à bout d'un objectif.",
	"Je me sens mieux maintenant que c'est fait.",
	"Je peux enfin aller me reposer un peu.",
	"J'espère que ça va régler cette histoire.",
	"J'ai bon espoir que mon manager sera ravi !",
	"C'est une affaire rondement menée !",
	"Et encore réussite !",
	"Il est temps de rentrer maintenant.",
	"J'espère que c'était la bonne.",
	"On verra bien ce que ça donne.",
	"J'étais pas trop sûr pour ce coup là, m'enfin.",
	"Je peux pas être sûr de mon coup à chaque fois non plus.",
	"J'ai vraiment hâte de voir la suite !",
	"Je me réjouis de savoir comment ça va influencer l'avenir !",
	"Fini. Au suivant !",
	"J'en ai terminé avec celle-ci.",
	"Et une de plus !",
	"Il faut se réjouir de chaque petite étape franchie.",
	"L'humanité me redevra bien ça.",
	"Et une pièce de moins dans ce puzzle ! Une !",
	"Une de finie, dix de retrouvées ?",
	"Et un problème de moins !",
	"J'ai l'impression de m'être retiré une épine du pied.",
	"Pfiou, c'était pas facile.",
	"Je suis soulagé d'en avoir fini.",
	"C'était pas évident mais au moins c'est fait.",
	"Plus jamais ça. Si seulement...",
	"Vivement la suite, mais surtout la fin !",
	"Quel soulagement ! Et tant pis pour le reste.",
	"Je me rapproche un peu plus de mon cocktail et de mon bonus.",
	"Je devrais être payé plus pour ça.",
	"Et encore une victoire pour l'Agent 3000 !",
	"Je commence à m'y habituer en fait."
);

$welcomeBack = array(
	"Bienvenue de retour parmi nous Agent 3000.",
	"Vous revoilà enfin !",
	"Welcome back Agent 3000 !",
	"Ah ! Agent 3000 !",
	"J'avais hâte de vous revoir Agent 3000 !",
	"Je vous cherchais Agent 3000 !",
	"C'est pas trop tôt Agent 3000 !",
	"J'espère que le voyage s'est bien passé Agent 3000.",
	"Ravi de vous revoir Agent 3000.",
	"Bonsoir Agent 3000.",
	"Agent 3000, bienvenue.",
	"Agent 3000, voyons comment avance votre mission.",
	"Agent 3000, je vous attendais.",
	"Bienvenue Agent 3000.",
	"Agent 3000, bonsoir.",
	"Je commençais à m'inquiéter Agent 3000.",
	"Agent 3000, enfin !",
	"Bien, vous voilà Agent 3000.",
	"Vous êtes là Agent 3000 !",
	"Enfin de retour Agent 3000 !",
);

$missionReport = array(
	"Regardons les résultats de votre dernière action.",
	"Voyons voir le rapport d'avancement de votre mission.",
	"Observons les résultats de votre voyage.",
	"Regardons ce que vous nous avez amené cette fois-ci.",
	"J'ai là le rapport de votre dernière visite temporelle.",
	"Je tiens dans mes mains votre rapport de mission.",
	"Lisons ensemble votre rapport d'action.",
	"Quel exploit avez-vous effectué cette fois ?",
	"Discutons de vos derniers résultats ensemble.",
	"Prenons quelques minutes pour discuter de votre voyage.",
	"J'ai ici avec moi votre rapport.",
	"On m'a déjà transmis le rapport de votre dernière incursion temporelle.",
	"Vous avez accompli un travail remarquable.",
	"Bravo pour votre dernière réalisation.",
	"Je vous félicite pour votre dernier succès.",
	"Vous avez les félicitations de l'équipe pour votre dernier exploit.",
	"Je vous transmets les chaleureux compliments de la hiérarchie.",
	"Votre dernier voyage s'avère être un succès.",
	"Votre modification temporelle a très bien fonctionné.",
	"Je suis fier de vous, votre mission avance bien.",
	"Beau travail, il nous faut plus d'agents comme vous.",
	"Votre rapport fait état d'une mission remplie à merveille.",
	"Votre voyage dans le temps a des résultats remarquables.",
	"Votre talent et vos jugements pour l'influence temporelle sont sans faille.",
	"Tenez, j'ai avec moi le dernier rapport de votre voyage.",
	"Votre étape temporelle a modifié l'histoire de manière significative.",
	"Je suis impressionné par les résultats de votre dernière mission.",
	"Vous êtes un expert de l'influence temporelle et ça se voit.",
	"Vos résultats sont irréprochables, continuez comme ça.",
	"Je suis très content de vous avoir fait confiance pour cette mission.",
	"Vos supérieurs sont satisfaits de vos résultats, ne l'oubliez pas.",
	"Je me félicite de vous avoir choisi pour cette tâche.",
	"L'humanité sera fière de vous avec un tel travail.",
	"C'est une fierté de vous avoir dans l'équipe !",
	"Vous faites honneur au métier !",
	"Si seulement plus d'agents faisaient un aussi bon travail que le votre !"
);

$thanking = array(
	"Merci Monsieur Manager Supérieur.",
	"Merci chef !",
	"Je vous remercie Monsieur Manager Supérieur.",
	"Merci.",
	"Je vous remercie.",
	"Merci beaucoup !",
	"Mes remerciements.",
	"Mes remerciements Monsieur Manager Supérieur.",
	"Mes remerciements chef.",
	"Veuillez accepter l'expression de mes sentiments les plus distingués Monsieur Manager Supérieur."
);

$cliffhanger = array(
	"Mais ne vous reposez pas trop sur vos lauriers !",
	"Nous devons encore nous assurer que l'avenir n'est pas corrompu !",
	"Vérifions tout de même que les choses n'ont pas empiré.",
	"Voyons voir néanmoins ce que l'avenir nous réserve...",
	"Il ne faudrait pas se réjouir trop vite non plus !",
	"Votre mission n'est pour autant pas terminée !",
	"Mais ce n'est pas tout, il faut rester vigilant !",
	"Restons alerte, la bataille n'est pas la guerre !",
	"Ce n'est pas fini tout de même, au boulot !",
	"Ne nous réjouissons pas trop vite !",
	"Il faut prudence garder, la mission n'est pas finie.",
	"L'humanité n'est pour autant pas saine et sauve !",
	"Prenons garde mon cher, ce n'est pas terminé.",
	"Ne vendons pas la peau de l'ours avant de l'avoir tué !",
	"Ce n'est qu'une petite victoire cependant, il faut continuer.",
	"Vous devriez rester sur vos gardes, vous allez y retourner !",
	"Ce ne sera sûrement pas votre dernier voyage, préparez vous !",
	"Restez disponibles, je sens que nous aurons encore besoin de vous !",
	"Ne vous réjouissez pas trop, je pense que vous allez devoir repartir sur le terrain.",
	"Le terrain n'a pas dit son dernier mot, vous devrez probablement y retourner.",
	"Attention, il nous faut être certains avant de crier victoire !",
	"Nous ne pouvons être sûrs de rien, mais battons le fer tant qu'il est chaud !",
	"L'incertitude plane encore, vos efforts devront se poursuivre !",
	"Si vous pensiez que c'est terminé, détrompez-vous mon cher !",
	"Ce n'est pas aussi facile que vous le croyez, il y a encore du boulot !",
	"Pas le temps de se reposer, préparons la suite !",
	"Il faut garder un coup d'avance, préparez vous à repartir.",
	"Tant que l'objectif n'est pas atteint, il vous faudra continuer !",
	"Vous avez encore beaucoup à faire pour arriver à bout de cette menace !",
	"Une bonne chose de faite mais ne vous attardez pas trop car la suite va arriver.",
	"Les réjouissances seront bien courtes malheureusement, d'autres voyages vous attendent !",
	"Vous pouvez fêter, mais ne trainez pas trop car l'humanité vous attend.",
	"Le temps n'attend pas, attendez vous à repartir quand le temps sera venu !",
	"Le temps presse tout de même, il n'y a pas matière à se réjouir.",
	"La suite est incertaine, mais c'est aussi ce qu'il y a d'excitant !",
	"Je sais que vous avez hâte de repartir en mission et ne vous inquiétez pas, ça va venir.",
	"Je suis sûr que vous n'attendez que ça de repartir sur le terrain !",
	"Vous pourriez faire ça à longueur de journée j'imagine ! Bientôt vous y retournerez !"
);

$panicking = array(
	"Alerte",
	"Urgence",
	"Mon Dieu",
	"Saperlipopette",
	"Catastrophe",
	"Nom d'une chouette empaillée",
	"C'est la merde",
	"C'est la cata",
	"C'est la mouise Louise",
	"C'est la panique",
	"Paniquez",
	"Au secours",
	"Nom d'une pipe",
	"Nom d'un chien",
	"C'est pas vrai",
	"J'y crois pas",
	"Non",
	"C'est pas possible",
	"C'est inimaginable",
	"On se fiche de moi",
	"Scandale",
	"Scandaleux",
	"Tragédie",
	"C'est incroyable",
	"Quelle indignité",
	"Branle-bas de combat",
	"A vos postes",
	"Honte à vous",
	"N'importe quoi",
	"J'en crois pas mes yeux",
	"Non mais je rêve",
	"Mais",
	"Impossible",
	"Je refuse d'y croire",
	"Je suis sans voix",
	"Non mais sans blague"
);

$unplanned = array(
	"Votre dernière escapade a complètement déréglé l'histoire de l'humanité !",
	"Ce que vous avez fait a eu des répercussions catastrophiques !",
	"L'impact de vos dernières aventures est incontrôlé !",
	"Votre modification a eu une influence hors de contrôle !",
	"A la suite de votre dernier voyage, l'humanité a totalement dévié de sa trajectoire !",
	"Vous avez créé une nouvelle temporalité qui n'a rien à voir avec votre mission !",
	"L'influence de votre dernière décision est inconcevable !",
	"C'est un désastre, vous avez foutu le bordel dans l'histoire de l'humanité.",
	"Par votre faute, des évènements sortis de nulle part dévient le sens de l'histoire !",
	"C'est le chaos dans la ligne temporelle de l'humanité à cause de vous !",
	"Vous avez merdé avec votre dernière modification, regardez le résultat !",
	"Regardez votre exploit, vous avez tout dérangé dans le passé !",
	"Qui sait ce que va devenir l'avenir de l'humanité avec un tel passé ?",
	"Vous vous rendez compte de la gravité ? Tenez, jetez un oeil.",
	"Nos autres agents nous reportent de nombreuses anomalies dans les lignes temporelles !",
	"J'ai obtenu des rapports du passé indiquant un nombre inquiétant d'anomalies temporelles !",
	"Des anomalies sont apparues sur la ligne temporelle de l'humanité !",
	"De nombreux évènements sont sortis de nulle part et affectent l'histoire !",
	"C'est de pire en pire, vos modifications sont tout sauf discrètes !",
	"C'est très mal parti pour votre mission vu le bordel que vous a mis dans le passé !",
	"Vous avez mis en danger l'humanité entière à nouveau par vos modifications incensées !",
	"De nouveaux évènements absurdes ont vu le jour dans le passé par votre faute !",
	"Vos modifications n'ont pas été sans impact, c'est le chaos total dans l'histoire !",
	"Le passé a été complètement altéré par vos jugements hâtifs !",
	"Vous êtes irresponsables d'avoir pu laisser passer de telles conséquences !",
	"Vous avez gravement manqué de vigilance sur l'influence de vos actions dans le passé !",
	"On ne peut pas jouer avec le temps impunément, voilà le résultat de vos bêtises !",
	"L'histoire n'est pas immuable mais elle doit être préservée et vous avez fait tout le contraire !",
	"Je ne crois pas qu'il aurait pu arriver quelque chose de pire que ces évènements créé de toute pièce !",
	"Il n'y a pas pire que de voir tous nos efforts anéantis par une erreur de jugement comme la votre !",
	"Vous n'avez pas seulement déçu, vous avez aussi foutu la merde dans tout le travail de l'agence !",
	"J'aimerais vous qualifier d'incapable mais malheureusement vous êtes bien forts pour faire n'importe quoi !",
	"Vous vous êtes surpassé pour faire n'importe quoi dans l'histoire de l'humanité !",
	"J'aurais préféré ne pas vous charger de cette mission, c'est devenu un vrai foutoir !",
	"C'est l'avenir de l'humanité, pire, la réputation de l'agence qui est en jeu et regardez ce que vous avez fait !",
	"Peut-être qu'il vous faut retourner en école de formation parce que là votre travail est entièrement bâclé !",
	"C'est du travail de cochon, tout à fait indigne de votre niveau, regardez moi ça.",
	"Je n'arrive pas à croire que vous ayez pu mettre le chaos à ce point seul !",
	"Vous m'étonnez par votre puissance à faire n'importe quoi n'importe quand !",
	"Il faut croire que vous êtes doué d'un talent rare pour détruire totalement la cohérence du passé !",
	"Je vous ai demandé de régler un problème, pas d'en créer de nouveaux !",
	"L'humanité est toujours en danger et vous vous amusez à m'inventer de nouveaux évènements ?",
	"Le danger auquel l'humanité fait face n'a pas disparu, mais vous en avez ajouté !",
	"Vous n'avez aucune conscience de la teneur des enjeux en modifiant ainsi l'histoire de l'humanité ?"
);

$goAgain = array(
	"Pas une seconde de plus, vous y retournez !",
	"Filez me réparer ça au plus vite !",
	"Je ne veux pas vous voir tant que vous n'avez pas corrigé ce bordel !",
	"Du balais ! Remettez moi de l'ordre là-dedans !",
	"Vous n'avez pas intérêt à revenir tant que ce n'est pas corrigé !",
	"Je pourrais vous licencier, mais pas question que vous nous abandonniez votre bordel !",
	"Corrigez moi ça immédiatement !",
	"Je ne veux rien savoir, vous partez tout de suite pour régler ça !",
	"Annulez tout ! Je veux vous voir sur le terrain activement en train de régler ça !",
	"Au boulot ! Hors de question que ça reste comme ça une seconde de plus !",
	"Retournez immédiatement sur le terrain et réglez moi ça !",
	"Je veux de l'ordre, et vite !",
	"Ce chaos est inacceptable, faites quelque chose tout de suite !",
	"Je ne veux pas savoir comment mais corrigez moi vos bêtises au plus vite !",
	"Ne revenez pas de votre voyage sans avoir réglé tout ça !",
	"Repartez mettre de l'ordre !",
	"Réorganisez moi ce chaos !",
	"Ne me parlez pas tant que ce n'est pas remis en place !",
	"Il faut corriger ça tout de suite !",
	"Dégagez dans le passé pour nettoyer ce bordel !",
	"Du vent ! Vous avez une histoire à remettre en place !",
	"Partez ! Partez tout de suite régler ça !",
	"L'humanité porte encore ses espoirs en vous, allez faire quelque chose pour elle !",
	"L'histoire mérite mieux que ça, allez la rendre fière !",
	"Le passé n'est pas un jouet, allez ranger tout ça !",
	"On ne dérègle pas le passé impunément ! Filez corriger vos bêtises !",
	"Je veux voir le passé tel qui le devrait être, remettez ça en place !",
	"Remettez de l'ordre avant que ça dégénère !",
	"Vous ajoutez des embûches dans votre mission mais vous devrez aussi les enlever !",
	"Vous avez détruit tout, maintenant il faut reconstruire !",
	"Il faut que vous retourniez corriger cette ligne temporelle !",
	"Vous ne pouvez pas laisser ces choses là hors de contrôle, mettez-y un terme !",
	"Repartez en mission et cette fois revenez avec des améliorations !",
	"Retournez sur le terrain et revenez avec moins de problèmes et plus de solutions !",
	"Vous aimez vous compliquer le boulot ? Vous en avez deux fois plus maintenant !",
	"Vous pensiez que ça passerait ? Vous allez vous y coller à nouveau.",
	"Vous devriez revoir votre jugement, sinon c'est vous qui serez jugé !",
	"Remettez vos rêves pour plus tard, vous avez un beau foutoir à ranger !",
	"Vous pouvez oublier vos jours de repos, cette situation ne peut pas attendre !",
	"Le terrain vous attend à nouveau, et cette fois tâchez de revenir avec de bonnes nouvelles !",
	"Nous avons placé une confiance en vous, tâchez de vous montrer à la hauteur et rendez nous fiers !",
	"Vous avez brisé notre confiance en vous, regagnez là en nous montrant de quoi vous êtes réellement capable !"
);

?>