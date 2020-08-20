-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 20 Août 2020 à 07:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tourisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE IF NOT EXISTS `activites` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `region` varchar(20) DEFAULT NULL,
  `commentaires` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nom` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(16) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `candidature`
--

CREATE TABLE IF NOT EXISTS `candidature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service` varchar(20) NOT NULL,
  `denomination` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `localisation` varchar(50) NOT NULL,
  `standing` varchar(20) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `candidature`
--

INSERT INTO `candidature` (`id`, `service`, `denomination`, `ville`, `region`, `email`, `telephone`, `login`, `pass`, `localisation`, `standing`, `image`) VALUES
(1, 'transports', 'touristique', 'mvan', 'yaounde', 'centre', 'touristiqu', '689523148', 'touristique', 'touristique', 'route', 'image/1550316026_718_66-meilleurs-formulaires-d39inscription-Bootstrap-gratuits-pour-tous-les-sites.jpg'),
(2, 'transports', 'touristique', 'mvan', 'yaounde', 'centre', 'touristiqu', '689523148', 'touristique', 'touristiquer', 'route', 'image/1550316026_718_66-meilleurs-formulaires-d39inscription-Bootstrap-gratuits-pour-tous-les-sites.jpg'),
(3, 'transports', 'touristique', 'mvan', 'yaounde', 'centre', 'touristiqu', '689523148', 'touristique', 'tour', 'route', 'image/1550316026_718_66-meilleurs-formulaires-d39inscription-Bootstrap-gratuits-pour-tous-les-sites.jpg'),
(4, 'transports', 'touristique', 'mvan', 'yaounde', 'centre', 'touristiqu', '689523148', 'touristique', 'tour', 'route', 'image/1550316026_718_66-meilleurs-formulaires-d39inscription-Bootstrap-gratuits-pour-tous-les-sites.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(50) NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `region` varchar(20) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `telephone` varchar(9) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `localisation` varchar(256) DEFAULT NULL,
  `standing` int(11) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `denomination` (`denomination`),
  UNIQUE KEY `denomination_2` (`denomination`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `hotels`
--

INSERT INTO `hotels` (`id`, `denomination`, `ville`, `region`, `email`, `telephone`, `login`, `pass`, `localisation`, `standing`, `image`) VALUES
(1, 'hilton', 'yaounde', 'centre', '@hiltonhotel.com', '658974128', 'hilton', 'hotel', 'boulevard du 20 mai', 5, 'images/3.jpg'),
(2, 'doussi', 'douala', 'littoral', '@doussi.com', '65489315', 'douss', 'douceur', 'cite verte', 3, 'images/2.jpg'),
(9, 'yaaHot hotel', 'yaounde', 'centre', '@yaahot2.com', '658974123', 'yaahot', 'yaahot', 'rue djoungolo', 3, 'images/yaahhot.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `loisirs`
--

CREATE TABLE IF NOT EXISTS `loisirs` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `region` varchar(20) NOT NULL,
  `commentaires` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offres_hotels`
--

CREATE TABLE IF NOT EXISTS `offres_hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `denomination` varchar(50) NOT NULL,
  `qualite` varchar(30) NOT NULL,
  `supplement` varchar(50) NOT NULL,
  `commentaire1` varchar(100) NOT NULL,
  `commentaire2` varchar(100) NOT NULL,
  `commentaire3` varchar(100) NOT NULL,
  `conditions` varchar(50) NOT NULL,
  `jour` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `offres_hotels`
--

INSERT INTO `offres_hotels` (`id`, `nom`, `prix`, `image`, `denomination`, `qualite`, `supplement`, `commentaire1`, `commentaire2`, `commentaire3`, `conditions`, `jour`) VALUES
(3, 'piscine exterieure', 15000, 'image/piscine.jpg', 'yaaHot hotel', 'tres bon', 'serviette offerte', 'eau potable', 'ouverte 24/24', '', '', '2020-06-10'),
(4, 'chambre double', 25000, 'image/hotel1.jpg', 'Yaahot hotel', 'excellent service', 'parking offert', '', '', '', 'payez Ã  l''entree', '2020-06-10'),
(5, 'salle de fete', 40000, 'image/salledefete.jpg', 'Yaahot hotel', 'excellent', 'RAS', '', '', '', 'RAS', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `offres_transports`
--

CREATE TABLE IF NOT EXISTS `offres_transports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `villedepart` varchar(50) NOT NULL,
  `villearrive` varchar(50) NOT NULL,
  `depart` datetime NOT NULL,
  `duree` time NOT NULL,
  `cloture` datetime DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `denomination` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `offres_transports`
--

INSERT INTO `offres_transports` (`id`, `villedepart`, `villearrive`, `depart`, `duree`, `cloture`, `prix`, `denomination`) VALUES
(1, 'yaounde', 'douala', '0000-00-00 00:00:00', '03:30:00', '2020-03-13 06:00:00', 5000, 'finex');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id`, `nom`, `description`, `image`) VALUES
(1, 'l''extreme-nord', 'Considere comme la plus belle region touristique du pays, cette region tire sa celebrite du parc de waza qui est le plus visité du camroun. Située en zone zone sahelienne, son relief est domminé par la steppe et la savane separées par des massifs aux formes tourmentes et etrangement captivantes.ici vous  retrouverez  les paysages semblables aux plus celebres  film africain', 'region\\extreme_nord.gif'),
(2, 'le nord', 'Avec les parc nationnaux de la benoue , de Bouba Njiddah et du faro qui totalise à eux trois unr-e superficie de plus de 730 mille hectares, la region du nord est la zone de concentration des especes les plus representative de la faune africaine; mamiferes, primates, reptiles ou oiseaux, il y en a pour tout les gouts.\ntourisme de visionou, chasse sportive, peche sportive tout y passe dans des zones specialement ammenagee pour offrir une experience optimale au visiteurs ', 'region/nord.gif'),
(3, 'le centre', 'la region du centre est remarquable par son climat humide, savegetation luxuriante, son folklore, ses moeurs, et les coutumes de ses habitants\nc''est une region accidentee, et domaine de la foret et quatriale et des grands fleuves du pays. elle se prete parfaitement aux excursion, à de la randonnée, à l''ecotourisme, à l''agrotourisme, au tourisme d''affaire et à toute sorte d''aventure.\nne manquer pas yaounde la cite capitale rebatisée la ville au sept colinnes et son infrastructures hotelieres de classe internationale. ', 'region/centre.gif'),
(4, 'l''adamaoua', 'avec une superficie de plus de 700km² surplombe par les 1100 metres du mont Ngaoundere, elle se caracterise par la falaise qui la traverse d''est en ouest, vous l''aurez surement compris la region fait scission entre le nord et le sud du pays\r\nla principale activites pratiquer est l''elevage des bovins et des caprins. vous y suivrez des betes mangez de l''herbes fraiche sur des paturages de plusieurs centaines de m² ', 'region/adamaoua.jpg'),
(5, 'le littoral', 'Zone cotiere propice au tourisme balneaire presente des baiespittoresque, de belles plagesde sable fin qui s''etendent à perte de vu. visitez yoko et manoka ', 'region/littoral.gif'),
(6, 'l''ouest', 'merveilleusement dotée par la nature, la region de l''ouest est semblable à l''auvergne en france\r\nc''est une region de vallée traversée par de belles rivieres entrecoupes de superbes chutes d''eau donnant naissance à un spectacle magnifique.\r\nelle presente des montagne arrondies, lègue direct d''ancien volcans.le climat y est tempere avec des moyennes de 20 degres par ans dans plusieurs localites\r\npartez à la rencontre d''hommes tres attachés à leurs traditin et rappelez-vous des votres ', 'region/ouest.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `responsables`
--

CREATE TABLE IF NOT EXISTS `responsables` (
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `datenais` date DEFAULT NULL,
  `telephone` varchar(9) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `denomination` varchar(50) NOT NULL,
  PRIMARY KEY (`denomination`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `responsables`
--

INSERT INTO `responsables` (`nom`, `prenom`, `datenais`, `telephone`, `email`, `denomination`) VALUES
('chargeur', 'bus', '1986-05-04', '659842174', '@chargeur.com', 'buca voyage'),
('soh', 'joel', '1990-02-03', '694812556', '@joel.com', 'doussi'),
('toto2', 'lui', '2005-06-01', '632154895', 'toto@gmail.com', 'doussie'),
('kabe', 'alex', '1995-05-25', '623547891', '@kabe.com', 'finex'),
('tsafack2', 'pierre', '0000-00-00', '665234558', '@pierre.com', 'hilton'),
('respofinex', 'finexe', '1986-12-23', '698742513', '@finexe2.com', 'newfinex'),
('steve', 'maeva', '1998-03-22', '652147890', '@steve.com', 'restau2'),
('njiogo', 'maeva', '1999-11-22', '69584215', '@maeva2.com', 'steve'),
('fils', 'aime', '1994-05-31', '623541892', 'fils@gmail.com', 'test'),
('voiture', 'vehicule', '1995-04-25', '698542138', 'voiture@gmail.com', 'test2'),
('toto', 'luimeme', '2013-06-04', '632514982', 'toto@gmail.com', 'touristique'),
('toto', 'luimeme', '2013-06-04', '632514982', 'toto@gmail.com', 'touristique2'),
('yaya', 'hotio', '1998-02-14', '666254897', '@yaya.com', 'yaaHot hotel');

-- --------------------------------------------------------

--
-- Structure de la table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(50) NOT NULL,
  `localisation` varchar(256) NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `region` varchar(50) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `telephone` varchar(9) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `pass` (`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `restaurants`
--

INSERT INTO `restaurants` (`id`, `denomination`, `localisation`, `ville`, `region`, `email`, `telephone`, `login`, `pass`) VALUES
(1, 'restau2', 'akwa', 'douala', 'littoral', '@restau2.com', '658974135', 'restau2', 'restau2');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` varchar(5) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `region` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(256) NOT NULL,
  `commantaire` text,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `image1` varchar(256) DEFAULT NULL,
  `image2` varchar(256) DEFAULT NULL,
  `image3` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id`, `nom`, `region`, `type`, `commantaire`, `latitude`, `longitude`, `image1`, `image2`, `image3`) VALUES
('001', 'la chefferie badjoun', 'ouest', 'culturelle', 'chef d''ouvre d''architecture bamileke', '', '', 'images_sites\\bandjoun1.jpg', 'images_sites\\bandjoun2.jpg', 'images_sites\\bandjoun3.jpg'),
('002', 'les chutes d''ekom', 'littoral', 'ecologique', 'Les chutes d''Ekom Nkam sont les plus belles chutes du Cameroun. Elles se caract?risent par 2 chutes, une m?le aliment?e en permanence quelle que soit la saison et une femelle uniquement en saison des pluies. Pour la petite histoire, c?est sur ce site qu?ont ?t? tourn?es quelques sc?nes du film Greystoke avec Christophe Lambert.', '', '', 'images_sites\\ekom1.jpg', 'images_sites\\ekom2.jpg', 'images_sites\\ekom3.jpg'),
('003', 'parc de la lobé', 'ouest', 'ecologique', 'en gros c''est un super parc on peut y faire plein de choses', '', '', 'images_sites\\lobe1.jpg', 'images_sites\\lobe2.jpg', 'images_siteslobe3.jpg'),
('004', 'mont mbapit', 'ouest', 'ecologique', 'Le massif du Mbapit est accessible ? pied pour des randonn?es dont la plus spectaculaire nous am?ne au lac de crat?re Mfou (ou Nfou) entour? de falaises ? pic. Personne ne peut descendre s?y baigner, dit la l?gende.\nC''est par une petite promenade paisible, permettant de profiter du paysage verdoyant, que l?on rejoint les escaliers install?s ici pour grimper la pente raide qui monte au rebord du lac de crat?re. L?, une vue majestueuse s?offre ? vous.', '', '', 'images_sites\\mbapit1.jpg', 'images_sites\\mbapit2.jpg', 'images_sitesmbapit3.jpg'),
('005', 'paysages lunaires de kapsiki', 'extreme-nord', 'ecologique', 'Encore une region avec un paysage remarquable ! cette terre de l''extreme nord du Cameroun tient sa particularite des monts volcaniques en forme d?aiguilles, donnant un aspect geographique irreel rappelant des images de creation de notre planete.', '', '', 'images_sites\\kapsiki1.jpg', 'images_sites\\kapsiki2.jpg', 'images_siteskapsiki3.jfif'),
('006', 'parc de korup', 'sud-ouest', 'ecologique', 'Le parc est unique en son genre. Il couvre 1260 km? et est consid?r? comme l?une des plus belles et plus vieilles for?ts tropicales humides du monde. La richesse de sa faune et de sa flore r?side dans le fait qu?il a surv?cu ? l??ge glaciaire et aujourd?hui il ressemble ? un mus?e de plus de 60 millions d?ann?es. Plus de 400 essences d?arbres et de nombreuses plantes m?dicinales y ont ?t? identifi?es. On y a notamment d?couvert une liane (Aucistraladus korupensis) qui aurait des effets positifs dans le traitement contre certains cancers et contre le VIH.', '', '', 'images_sites\\korup1.jpg', 'images_sites\\korup2.jpg', ''),
('007', 'cathedrale notre-dame-des-victoires', 'centre', 'culturelle', 'et maintenant place a une eglise gigantesque meme. ces catholique ont trop d''argent', '3.863445', '11.521051', 'images_sites\\notredame1.jpg', 'images_sites\\notrdame2.jpg', 'images_sites/notredame3.jpg'),
('009', 'mont manengouba', 'adamaoua', 'ecologique', 'la montagne qui domine l''adamaoua. elle a fier allure n''est ce pas?', '', '', 'images_sites\\manengouba1.jpg', 'images_sites\\manengouba2.jpg', 'images_sitesmanengouba3.jpg'),
('010', 'chutes de tello', 'adamaoua', 'ecologique', 'Les chutes de Tello sont l?une des principales curiosit?s naturelles de la r?gion de l?Adamaoua. Diff?rentes de celles d?Ekom Nkam ou de la Lob?, elles sont aussi embl?matiques et m?ritent v?ritablement le d?tour. Leur particularit? r?side dans la table rocheuse interrompant brutalement la tranquille rivi?re Tello qui se retrouve pr?cipit?e entre environ 45 m?tres plus bas. Cette originalit? g?ologique est assez remarquable car elle a cr?e une caverne naturelle d?un volume impressionnant ? l''arri?re des chutes.', '', '', 'images_sites\\tello1.jpg', 'images_sites\\tello2.jpg', 'images_sites/tello3.jpg'),
('011', 'monument de la reunification', 'centre', 'culturelle', 'Principal monument de Yaounde, c''est une oeuvre composite qui symbolise toute l''histoire de la formation du Cameroun, en particulier la reunification du Southern Cameroon et du Cameroun oriental en 1961, puis l''unification des republiques federees du Cameroun dans la republique unie du Cameroun en 1972.', '3.852560', '11.513299', 'images_sites\\reuni1.jpg', 'images_sites\\reuni2.jpg', 'images_sites\\reuni3.jpg'),
('012', 'parc de campo-ma''an', 'sud', 'ecologique', 'Situe a l''extreme sud du Cameroun, le long de la frontiere avec la Guinee equatoriale, et bordes a l''ouest par l''ocean Atlantique, le parc national de Campo-Ma''an et sa zone peripherique couvrent une superficie d''environ 700.000 hectares (264.064 ha pour le seul parc). Il a ete cree en 2000 dans la foulee du Sommet de Yaounde sur la protection des forets d''Afrique centrale. Il abrite de nombreuses especes d''animaux menaces comme l''elephant, le gorille, le mandrill ou le chimpanze, ainsi que des plantes qu''on ne trouve nulle part ailleurs.', '', '', 'images_sites\\campo1.jpg', 'images_sites\\campo2.jpg', 'images_sites/campo3.jpg'),
('013', 'parc de la mefou', 'centre', 'ecologique', 'Le parc national de la Mefou a ete cree en 1999 dans le cadre d''un partenariat entre le MINFOF (Ministere des Forets et de la Faune) et l''ONG CWAF (Cameroon Wildlife Aid Foundation). Sur une superficie d''environ 1050 hectares, il s''agit d''accueillir les primates recuperes lors des saisies des douanes ou retrouves mutiles au bord des routes ou des chantiers. Ce parc sert egalement de transition avant de reintroduire un animal ayant sejourne au zoo', '3.626108', '11.580892', 'images_sites\\pmefou1.jpg', 'images_sites\\campo2.jpg', 'images_sites/campo3.jpg'),
('014', 'parc de Mbouba Ndjida', 'nord', 'ecologique', 'Le Parc National de Boubandjida ?tait autrefois le territoire de chasse du Lamido Bouba N?Djidah, Sultan de Rey Bouba, dont il tire son nom. Le parc a conserv? une faune d?une richesse et d?une diversit? remarquables. Il abrite toutes les esp?ces propres ? l?Afrique Centrale, notamment l?Eland de Derby, la plus grande, la plus majestueuse mais aussi la plus farouche des antilopes d?Afrique', '', '', 'images_sites\\bouba1.jpg', 'images_sites\\bouba2.jpg', 'images_sites/bouba3.jpg'),
('015', 'parc de la Benoué', 'nord', 'ecologique', 'Ancien domaine prive de chasse du Lamido de Rey Bouba, le parc de la Benoue devient reserve de faune en 1932, avant d''etre transforme en parc national en 1968. D''une superficie de 180.000 hectares, il est actuellement gerer par un conservateur assiste par des gardes chasses. On trouve assez facilement des cobs de Buffon, des cobs defassa, des bubales, des hypotragues, des girafes, des cephalophes, des hippopotames et de nombreux singes . Avec de la chance on peut voir des lions, des buffles, des elephants, des elands de Derby. On y trouve egalement 300 especes d''oiseaux et 75 especes de poissons.', '', '', 'images_sites\\pbenoue1.jpg', 'images_sites/pbenoue2.jpg', 'images_sites/pbenoue3.jpg'),
('016', 'chutes de Mouankeu', 'ouest', 'ecologique', 'La chute de la Mouankeu est alimentee par deux cours d''eaux qui se joignent et se deversent dans un ravin long de plus d?une quarantaine de metres. Elle fait environ 20 metres de haut et ressemble en miniature aux chutes d''Ekom Nkam.', '', '', 'images_sites\\mouankeu1.jpg', 'images_sites/mouankeu2.jpg', 'images_sites/mouankeu3.jpg'),
('017', 'jardin botanique de Limbe', 'sud-ouest', 'ecologique culturelle', 'Le Jardin botanique de Limbe a ete cree par un horticulteur allemand en 1892 sur une superficie de 52 ha comme jardin d''essai, pour acclimater au Cameroun les plantes comme la quinine, l''hevea, le cafe, le cacao et le bananier. Il a egalement servi de centre de formation pour les Camerounais, dans les domaines de l''agriculture, de l''horticulture et de la foresterie.', '', '', 'images_sites\\jardinbotanique1.jpg', 'images_sites/jardinbotanique2.jpg', 'images_sites/jardinbotanique3.jpg'),
('018', 'Blactitude Museum', 'centre', 'culturelle', 'Depuis le 23 octobre 2008, la ville de Yaounde accueille un nouveau mus?e que sa fondatrice, egalement vice presidente de l''ICOM (International Council or Museum) Cameroun, Sa Majeste Fo Nab Ngo I Nana Sunjio Agnes, a baptise Musee La Blackitude. Membre de la famille royale Bahouoc, elle a herite des collections d''objets d''art de son pere et des rois d''autres chefferies du plateau bamileke.', '3.864214', '11.518387', 'images_sites\\blacktitude1.jpg', 'images_sites/blacktitude2.jpg', 'images_sites/blactitude3.jpg'),
('019', 'centre de Nkolandom', 'sud', 'ecologique culturelle', 'A 18 km d''Ebolowa se trouve le Centre Touristique de Nkolandom, qui signifie Mont de l''elegance en langue boulou. Centre tres agreable par sa proprete, son accueil symbolise par la statue d''Adeline, la verseuse d''eau. Vous serez surpris de decouvrir, au milieu d''une nature luxuriante, de nombreux rochers, grottes ou statues qu''un guide vous fera visiter.', '', '', 'images_sites\\nkolandom1.jpg', 'images_sites\\nkolandom2.jpg', 'images_sites\\nkolandom3.jpg'),
('020', 'lac Nyos', 'nord-ouest', 'ecologique', 'Le 21 aout 1986, dans la soiree, le lac Nyos, au nord-ouest du Cameroun, a explose et libere environ un kilometre cube de dioxyde de carbone (CO2). En effet, le lac Nyos est un lac de crature. De ce fait, le gaz carbonique s''accumule au fond du lac. On a estime a 300 millions de m3 le volume du gaz carbonique contenu dans le lac. cathedrale notre-dame-des-victoires: cathedrale\nPendant la seconde guerre mondiale, Monseigneur Francois-Xavier Vogt exprime le desir de construire au coeur de Yaounde un sanctuaire dedie a Notre-Dame. Il decede en fevrier 1943 sans avoir pu realiser ce projet. Monseigneur Rene Graffin, premier archeveque de Yaounde, posera la premiere pierre de cet edifice le 3 mars 1952. La Cathedrale Notre-Dame des Victoires est situee pres du rond-point de la poste centrale, au debut du boulevard du 20 mai. Avec ses 78 metres de long, 32 m de large au niveau de la nef, 45 m au niveau du transept et 25 m de hauteur, elle a une capacite d''accueil de 5000 personnes.\n', '', '', 'images_sites\\nyos1.jpg', 'images_sites\\nyos2.jpg', 'images_sites\\nyos3.jpg'),
('021', 'reserve de faune de Douala-Edea', 'littoral', 'ecologique', 'La reserve de faune de Douala-Edea est situee dans la province du Littoral, departement de la Sanaga maritime, sur une superficie d''environ 1,600 km. Elle s''etend de la cite atlantique sur une distance interieure maximale de 35 km, sa limite orientale suivant la riviere Dipombe.\nLa reserve est entierement situee dans une plaine sedimentaire tres basse, de 0 a 50 m d''altitude, parcourue de cours d''eau, avec de nombreux marecages. La plus grande surface en eau est le lac de Tissongo. Une grande partie de la reserve est recouverte de mangroves, qui constituent la limite sud de la grande zone de mangroves de l''estuaire du Wouri. Au nord du Nyong, pres de son embouchure, se trouve une foret inondable.', '', '', 'images_sites\\douala-edea1.jpg', 'images_sites\\douala-edea2.jpg', 'images_sites\\douala-edea3.jpg'),
('022', 'cathedrale saint-pierre-et-saint-paul', 'centre', 'culturelle religieux', 'Situee au coeur de la ville, a l''extremite de l''avenue de la Liberte, la cath?drale Saint-Pierre-et-Saint-Paul a ete batie en 1936 par les Peres spiritains francais. Elle se trouve presque sur les ruines de la premiere eglise catholique de Douala construite en 1898 par les Freres Pallotins venus d''Allemagne et qui sont restes a Douala jusqu''en 1916. Il ne reste aujourd''hui aucune trace de cette premiere eglise.', '', '', 'images_sites\\stpierre1.jpg', 'images_sites\\stpierre2.jpg', 'images_sites\\stpierre3.jpg'),
('023', 'palais des sultants bamouns', 'ouest', 'culturelle', 'indiquer l''emplacement du palais est derisoire, tant les rabatteurs et autres guides occasionnels alpaguent les touristes pour leur proposer sa visite. Service bien inutile, puisque le palais dispose de son propre guide. Face au marche, une grande arche ouvre sur la cour  une statue du roi Njoya, batisseur du palais, salue les visiteurs. Dans cette cour a survecu un vieux mur les administrateurs coloniaux (allemands puis francais) successifs sont recenses.', '', '', 'images_sites\\palaisbamoun1.jpg', 'images_sites\\palaisbamoun1.jpg', 'images_sites\\palaisbamoun1.jpg'),
('024', 'lacTisson', 'adamaoua', 'ecologique', 'A 10 km du centre de Ngaoundere, sur la route de Meiganga, se trouve une oasis de quietude et de fraicheur : le lac Tison. Ce lac de cratere de 300 metres de diametre environ est borde d''arbres de multiples essences, ce qui explique sans doute les variations de couleurs de ses eaux. Le site est amenage pour permettre une promenade tout autour du lac, moment privilegie de calme vous pourrez profiter pleinement de la faune et de la flore avant de vous desalterer au petit bar du site. Visite a faire si vous avez du temps a perdre a Ngaoundere ou a l''occasion d''un pique nique. Vous avez une belle vue panoramique sur la ville de Ngaoundere.', '', '', 'images_sites\\tisson1.jpg', 'images_sites\\tisson1.jpg', 'images_sites\\tisson1.jpg'),
('025', 'lac Barombi', 'sud-ouest', 'ecologique', 'Le lac Barombi forme, avec trois autres lacs de crature de la province camerounaise du sud-Ouest, ce que l''on appelle corgion afrotropicale camerounaise des lacs de crature, celebre aupres des biologistes pour la presence des especes de poissons endemiques. Le lac Barombi Mbo est egalement important en raison de la presence d''especes d''eponges d''eau douce.', '', '', 'images_sites\\barombi1.jpg', 'images_sites\\barombi2.jpg', 'images_sites\\barombi3.jpg'),
('026', 'Pa Pagode', 'littoral', 'batiment culture', 'Le palais des rois Manga Bell, surnomme La Pagode en raison de son architecture, est une des figures emblematiques de Douala. Il est situe dans le quartier administratif de Bonanjo, a l''angle de la place du Gouvernement. Le surnom de Pagode vient de l''ecrivain francais Louis Ferdinand Destouches, plus connu sous le nom de Celine, qui a sejourne a Douala de 1916 a 1917 et qui le designe ainsi dans son roman Voyage au bout de la nuit.', '', '', 'images_sites\\pagode1.jpg', 'images_sites\\pagode2.jpg', 'images_sites\\pagode3.jpg'),
('027', 'cases obus', 'nord', 'culture', 'Les villages de Pouss et de Mourla, sont renommes pour les cases obus, construites par la tribu des Mousgoum. Ces magnifiques constructions doivent leur nom a leur forme conique en forme d''obus, striee de nombreuses cannelures qui servent a la fois d''echafaudage pendant la construction, de contreforts et de systemes ingenieux d''evacuation des eaux. Ce qui est remarquable dans ce type d''habitat typique de la tribu Mousgoum, est l''absence de fondation ou d''armature pour soutenir cette enorme masse faite d''un melange de terre.', '', '', 'images_sites\\obus1.jpg', 'images_sites\\obus2.jpg', 'images_sites\\obus3.jpg'),
('028', 'Ring-Road', 'nord-ouest', 'nature culture', 'Bamenda est le point de depart de la Ring Road, une route circulaire d''environ 400km dans la province du Nord Ouest. Magique et mystique, la Ring Road vous conduit dans l''intimite spirituelle des villages parsemes. Les principales villes traverses par la Ring Road sont Bambui, Ndop, Jakiri, Kumbo, Nkambe, We, Wum. Le circuit est a eviter en saison des pluies, certaines pistes devenant impraticables.', '', '', 'images_sites\\ringroad1.jpg', 'images_sites\\ringroad1.jpg', 'images_sites\\ringroad1.jpg'),
('029', 'parc de waza', 'extreme-nord', 'parc safari animaux', 'Le parc de Waza a initialement ete cree en 1934 avant de devenir officiellement un parc national a la fin des annees soixante. Grand de 170.000 ha, c''est la plus celebre reserve animaliere du Cameroun. Le parc abrite un grand nombre d''especes : elephants, lions, girafes, cobs de buffon, gazelles, hippopotames... et de nombreux oiseaux : autruches, pelicans, herons, marabouts... Le parc dispose de pistes convenablement entrenues, un vehicule 4x4 est cependant recommande.', '', '', 'images_sites\\waza1.jpg', 'images_sites\\waza2.jpg', 'images_sites\\waza3.jpg'),
('030', 'parc Lobeke', 'centre', 'parc animaux foret', 'Le parc National de Lobeke, qui fait partie du bassin du Congo, est situe a l''extreme Sud-est du Cameroun. Il couvre une superficie de 217.854 ha. Cree le 19 mars 2001, la gestion du Parc s''inscrit dans le cadre de l''initiative de conservation transfrontaliere, connue sous le nom de Tri-national de la Sangha (TNS). C''est un paysage prioritaire de conservation de la biodiversite qui regroupe, en plus du Parc National de Lobeke, les aires protegees de Dzangha-Sangha (RCA) et Nouabale-Nkoki (Congo Brazzaville). Lobeke dispose d''un reseau de clairieres marecageuses en particulier sur le flanc oriental du parc.', '2.270854', '15.592327', 'images_sites\\lobeke1.jpg', 'images_sites\\lobeke2.jpg', 'images_sites\\lobeke3.jpg'),
('031', 'Chutes de la Lobé', 'sud', 'chute', 'La Lobe se caracterise par un ensemble de petits bras qui progressent en petites cascades sur une distance d''un kilometre avant de se jeter directement dans l''ocean en plusieurs chutes dont la plus haute mesure pres de 15 m. C''est un phenomene unique au monde que de voir une ligne des cascades qui s''etend sur pres de 100 m de large se jeter directement dans l''Ocean.', '', '', 'images_sites\\clobe1.jpg', 'images_sites\\clobe2.jpg', 'images_sites\\clobe3.jpg'),
('032', 'Muse National', 'centre', 'batiment culture', 'Situee dans l''ancien palais presidentielle, c''est l''un des rares musee du cameroun. Apres 6 ans de traveaux pour renovation il a retrouve en 2015 sa lustre d''antan. sur 5000m2 et en 30 salles, vous pourrez decouvrir tous les aspects historiques et politiques du pays. Tout y est: les dix regions et leurs coutumes, la musique et ses instruments traditionnels, des artefacts, des archives photo retrayant l''histoire du pays, des pieces uniques ayant appartenu a des chefs traditionnelss, des objet charges de magie et de croyance... Bref l''histoire y est partout.', '3.860619', '11.515940', 'images_sites\\museenational1.jpg', 'images_sites\\museenational2.jpg', 'images_sites\\museenational3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `transports`
--

CREATE TABLE IF NOT EXISTS `transports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denomination` varchar(50) NOT NULL,
  `localisation` varchar(256) NOT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `voie` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `telephone` varchar(9) DEFAULT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `pass` (`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `transports`
--

INSERT INTO `transports` (`id`, `denomination`, `localisation`, `ville`, `voie`, `region`, `email`, `telephone`, `login`, `pass`, `image`) VALUES
(1, 'finex', 'mvan', 'yaounde', 'route', 'centre', 'finex@gmail.com', '659874123', 'finex', 'finex', 'images/fond-finexs.jpg'),
(5, 'touristique2', 'mvan', 'yaounde', 'route', 'centre', 'touristique@gmail.com', '689523148', 'touristique', 'tour', 'images/22.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `typetourisme`
--

CREATE TABLE IF NOT EXISTS `typetourisme` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `description` text,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typetourisme`
--

INSERT INTO `typetourisme` (`id`, `titre`, `description`, `image`) VALUES
(1, 'culturel', 'La population du Cameroun est une mosaique de pres de 250 groupes ethniques aux coutumes et traditions variees, qui se refletent dans leurs modes de vie.Le tourisme culturel tire sa richesse de la diversite que l''on retrouve dans l''art de vivre, l''architecture traditionnelle, le folklore, la cuisine. Ceci pourrait egalement se justifier par un riche patrimoine colonial, constitue de monuments et autres vestiges, auxquels il faut ajouter le bilinguisme institutionnel (francais et anglais).', 'region\\culturelle.png'),
(2, 'ecotourisme', 'Le Cameroun compte plusieurs parcs nationaux. Ces parcs possedent la quasi-totalite de la faune (elephants, lions, panthere, buffles, antilopes, hippopotames, hyenes, gorilles, damalisques, guepards, etc)et de la flore  africaine', 'images/1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
