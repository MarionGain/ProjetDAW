SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Structure de la table `pw_ordinateur`
--

CREATE TABLE IF NOT EXISTS `pw_ordinateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `ram` int(11) NOT NULL,
  `dd` int(11) NOT NULL,
  `proc` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `pw_ordinateur`
--

INSERT INTO `pw_ordinateur` (`id`, `nom`, `ip`, `ram`, `dd`, `proc`) VALUES
(1, 'Poste Enseignant', '192.168.10.10', 8, 500, 'Intel Core i7'),
(2, 'Poste Elève 1', '192.168.10.20', 6, 300, 'Intel Core i5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
