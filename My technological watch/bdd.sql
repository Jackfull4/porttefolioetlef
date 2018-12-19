-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 23 Mai 2018 à 21:57
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `veille_techno`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `ID` int(3) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Provenance` varchar(255) DEFAULT NULL,
  `idee_generale` varchar(500) DEFAULT NULL,
  `date_dajout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`ID`, `Titre`, `Date`, `Provenance`, `idee_generale`, `date_dajout`) VALUES
(1, 'Application Native, Hybride ou Web, comment faire son choix ?', '2017-04-04', 'https://fr.yeeply.com/blog/application-native-hybride-ou-web/', 'Comparaison entre les applications mobile de type web, native et hybride', '2017-09-09'),
(2, 'Développement d’applications mobiles : web, natif, hybrides', '2016-05-31', 'http://www.servicesmobiles.fr/developpementdapplications- mobiles-web-natif-hybrides- 32198/', 'Comparaison entre les applications mobile de\r\ntype web, native et hybride', '2017-08-31'),
(3, 'Applications mobiles – Titanium, PhoneGap, Xamarin : lequel choisir ? Lequel utiliser?', '2015-12-10', 'http://www.kanefx.com/2015/12/10/applicationsmobiles-titanium-phonegap-xamarin-lequelchoisir-lequel-utiliser/', 'Comparaison d’environnement de développement d’application hybride', '2017-08-17'),
(4, 'Applications mobiles – Titanium, PhoneGap, Xamarin : lequel choisir ? Lequel utiliser?', '2015-12-10', 'http://www.kanefx.com/2015/12/10/applicationsmobiles-titanium-phonegap-xamarin-lequelchoisir-lequel-utiliser/', 'Comparaison d’environnement de\r\ndéveloppement d’application hybride', '2017-08-17'),
(5, 'Ionic vs. PhoneGap vs. Xamarin', '0000-00-00', 'https://stackshare.io/stackups/ionic-vsphonegap-vs-xamarin', 'Comparaison d’environnement de développement d’application hybride', '2017-09-09'),
(6, 'Accelerate Cross-Platform Testing With New Xamarin.Forms And Electron Support In TestComplete By SmartBear', '2018-04-10', 'https://sdtimes.com/test/accelerate-cross-platform-testing-with-new-xamarin-forms-and-electron-support-in-testcomplete-by-smartbear/', 'Présentation de Xamarin.Forms qui est un support de test multiplateforme', '2018-04-14'),
(7, 'The future of Progressive Web Apps', '2018-03-21', 'https://appdevelopermagazine.com/5914/2018/3/21/the-future-of-progressive-web-apps/', 'Interview de Max Lynch, PDG et co-fondateur de Ionic. Explication de la tendance des PWA (Progressive Web Apps)', '2018-04-14'),
(8, 'Best platforms that let you build apps for more than one platform', '2018-04-05', 'https://www.techgenyz.com/2018/04/05/best-platforms-build-apps/', 'Comparatif de plateforme de développement d\'application hybride et native (PhoneGap, Appcelerator, NativeScript, Monocross, RhoMobile)', '2018-04-07'),
(9, 'Applications web : va-t-on vers un futur sans apps natives ?', '2018-02-22', 'http://www.frandroid.com/editoid/489914_applications-web-va-t-on-vers-un-futur-sans-apps-natives', 'L\'article pose la question : les PWA (Progressive Web App) remplacerons-t-elle les applications natives ? La tendance des PWA prennent le dessus sur le native', '2018-02-24'),
(10, 'Les Progressive Web Apps deviennent la norme du responsive design', '2017-10-21', 'https://www.thewebconsulting.com/media/item/597-les-progressive-web-apps-deviennent-la-norme-du-responsive-design', 'Introduction au PWA (Progressive Web App). Investissement de Google dans le domaine mobile', '2017-10-28'),
(11, 'Les apps natives défiées par les progressive web apps', '2017-06-27', 'https://www.lemondeinformatique.fr/actualites/lire-les-apps-natives-defiees-par-les-progressive-web-apps-68653.html', 'Investissement de Google et Mozilla dans les PWA. Utilisation de cette technologie par Twitter et Lyft. Croissance des PWA sur le native', '2017-09-09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;