-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 07:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dulceria`
--

-- --------------------------------------------------------

--
-- Table structure for table `detventadulce`
--

CREATE TABLE IF NOT EXISTS `detventadulce` (
  `id_detventa` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `idventa` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detventadulce`
--

INSERT INTO `detventadulce` (`id_detventa`, `codigo`, `nombre`, `idventa`, `cantidad`, `precio`) VALUES
(25, 0, 'aae', 1, 1, 1),
(64, 0, '', 1, 1, 0),
(65, 0, '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dulces`
--

CREATE TABLE IF NOT EXISTS `dulces` (
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `precio` varchar(30) NOT NULL,
  `existencia` int(8) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dulces`
--

INSERT INTO `dulces` (`codigo`, `nombre`, `precio`, `existencia`, `imagen`) VALUES
('7502247423640', 'Kiubo Re-Mix', '36', 6, 'imagen.jpg'),
('643795546164', 'Cheto Totis Sal y Limon', '36', 9, 'imagen.jpg'),
('643795543439', 'Cheto Totis Chile y LimÃ³n', '36', 11, 'imagen.jpg'),
('7500366000094', 'Top-Tops Hot Chilis', '40', 1, 'imagen.jpg'),
('7500366001831', 'Top-Tops Salsa Negra', '40', 4, 'imagen.jpg'),
('7502247421783', 'KiKys Chechitos', '36', 4, 'imagen.jpg'),
('021424221000', 'Usher Yerbabuena', '29', 9, 'imagen.jpg'),
('02142422132', 'Usher Menta', '29', 6, 'imagen.jpg'),
('60889003047', 'Tamix', '23', 10, 'imagen.jpg'),
('7503004543281', 'Paleta Mango Supremo', '29', 6, 'imagen.jpg'),
('7501011183100', 'Tix-Tix', '25', 1, 'imagen.jpg'),
('766902011338', 'Paleta Escobon Azul', '28', 8, 'imagen.jpg'),
('724869001151', 'Cacahuate Japones Chico', '38', 6, 'imagen.jpg'),
('724869022293', 'Cacahuate Japones Normal', '38', 4, 'imagen.jpg'),
('759686641518', 'Paleta Vero Elote', '43', 5, 'imagen.jpg'),
('788843043070', 'Paleta Chuva', '31', 5, 'imagen.jpg'),
('725226002644', 'Paleta Acidulzada con Chile', '32', 1, 'imagen.jpg'),
('7503006185021', 'Paleta PirulÃ­', '39', 4, 'imagen.jpg'),
('725226000107', 'Paleta de la Rosa', '53', 7, 'imagen.jpg'),
('7501011135055', 'Paleta Rockaleta', '60', 5, 'imagen.jpg'),
('745403044083', 'Paleta Chupa-Tin', '66', 7, 'imagen.jpg'),
('60889002236', 'Best Pop', '38', 4, 'imagen.jpg'),
('78884303269', 'Pica Pepino', '32', 4, 'imagen.jpg'),
('018804053443', 'Paleta Tueni Pop', '34', 1, 'imagen.jpg'),
('78884303252', 'Paleta PiÃ±a Loca', '32', 5, 'imagen.jpg'),
('766902011161', 'Paleta Mara Sandia Con Chile', '28', 2, 'imagen.jpg'),
('76690201109', 'Paleta Mara Sandia Sin Chile', '28', 2, 'imagen.jpg'),
('766902011086', 'Paleta Mara Cola', '28', 7, 'imagen.jpg'),
('812999013271', 'Paleta LimÃ³n', '36', 7, 'imagen.jpg'),
('766902011420', 'Paleta Carambolazo', '47', 5, 'imagen.jpg'),
('99584000017', 'Paleta Vagabundo', '49', 5, 'imagen.jpg'),
('759686560505', 'Paleta Tarrito', '45', 3, 'imagen.jpg'),
('744911000611', 'Paleta Manzana', '38', 4, 'imagen.jpg'),
('766902011116', 'Paleta Paleamor Corazon', '28', 8, 'imagen.jpg'),
('7502250392278', 'Paleta Calcaloca', '39', 2, 'imagen.jpg'),
('75968656016', 'Paleta Manita', '46', 4, 'imagen.jpg'),
('75752801816', 'Paleta Chupadedo', '36', 3, 'imagen.jpg'),
('7501060401033', 'Globo #9', '56', 3, 'imagen.jpg'),
('7501060400463', 'Globo #7', '42', 7, 'imagen.jpg'),
('1', 'Confeti', '18', 8, 'imagen.jpg'),
('71925241400731', 'Tian Vasito de Tamarindo', '28', 2, 'imagen.jpg'),
('71925241400731', 'Tiam Vasito de Azucar', '31', 5, 'imagen.jpg'),
('7501607500304', 'Paleta Tama-Roca', '63', 3, 'imagen.jpg'),
('7502246440921', 'Vasito Karla', '65', 4, 'imagen.jpg'),
('1502246440938', 'Vaso Karla', '61', 3, 'imagen.jpg'),
('7502253945006', 'Lanza Hubin', '56', 4, 'imagen.jpg'),
('2', 'Latigazo', '11', 5, 'imagen.jpg'),
('7503000841329', 'Pulpa Tamarindo-clara', '38', 5, 'imagen.jpg'),
('7503000841329', 'Pulpa Tamarindo-Oscura', '45', 10, 'imagen.jpg'),
('7504865414550', 'Pulpas de Sabores', '16', 7, 'imagen.jpg'),
('016757631107', 'Panchos', '55', 6, 'imagen.jpg'),
('725226000206', 'Pulparindo', '24', 10, 'imagen.jpg'),
('7622210457516', 'Halls', '55', 8, 'imagen.jpg'),
('01880400210', 'Chicle Canels', '25', 10, 'imagen.jpg'),
('7506105616069', 'Trident  Yerbabuena 18', '143', 1, 'imagen.jpg'),
('7506105616076', 'Trident Freshmint 18', '143', 1, 'imagen.jpg'),
('7506105616052', 'Trident Menta 18', '143', 1, 'imagen.jpg'),
('7622210171115', 'Trindent Menta 4', '56', 4, 'imagen.jpg'),
('7622210171160', 'Trident Yerbabuena 4', '56', 3, 'imagen.jpg'),
('7502209800892', 'Coco Duro Chico', '12', 1, 'imagen.jpg'),
('7622210416773', 'Bubbaloo Fresa', '39', 1, 'imagen.jpg'),
('7622210416780', 'Bubbaloo Platano', '39', 3, 'imagen.jpg'),
('7622210416797', 'Bubbaloo Mora Azul', '39', 5, 'imagen.jpg'),
('7622210416810', 'Bubbaloo Tutti Frutti', '39', 3, 'imagen.jpg'),
('608890010026', 'Totito Platano', '40', 4, 'imagen.jpg'),
('608890010033', 'Totito Uva', '40', 6, 'imagen.jpg'),
('01880400314', 'Canels Miniatura', '25', 4, 'imagen.jpg'),
('7501011190054', 'Mega Ball', '19', 3, 'imagen.jpg'),
('725226000282', 'Chicle Cubo', '', 2, 'imagen.jpg'),
('7503004543014', 'Cache-Kangurin', '13', 5, 'imagen.jpg'),
('7501060402795', 'Globo Rifa', '75', 2, 'imagen.jpg'),
('025046020621', 'Duvalin BiSabor', '19', 10, 'imagen.jpg'),
('025046021697', 'Duvalin 4 Sabores', '19', 3, 'imagen.jpg'),
('7501088210754', 'Nucita Fresa  y Vainilla', '18', 10, 'imagen.jpg'),
('024142020955', 'Cajeta Montes', '34', 3, 'imagen.jpg'),
('7503003247029', 'Velitas de Goma de Grenetina', '72', 3, 'imagen.jpg'),
('751477403002', 'Winis Barra', '38', 5, 'imagen.jpg'),
('7502253945136', 'Pekas Hubin', '37', 4, 'imagen.jpg'),
('812999013318', 'Chicotazos Buzzy', '16', 9, 'imagen.jpg'),
('016757501103', 'Huevitos de Merengue Confitados', '45', 3, 'imagen.jpg'),
('754177846106', 'Winis Suelto', '58', 6, 'imagen.jpg'),
('018804018114', 'Star Light', '30', 8, 'imagen.jpg'),
('7503020044021', 'Caramelos', '57', 5, 'imagen.jpg'),
('018804015533', 'Paleta Fiesta', '10', 2, 'imagen.jpg'),
('024142020108', 'Cachitos', '49', 6, 'imagen.jpg'),
('724869003278', 'Bombon Mini de la Rosa Malvavisco C', '19', 14, 'imagen.jpg'),
('724869003315', 'Bombon Grande de la Rosa Malvavisco', '20', 6, 'imagen.jpg'),
('724869002240', 'Bombon Paquete Mini Mini', '50', 1, 'imagen.jpg'),
('024142020085', 'Ricos Besos Montes', '50', 5, 'imagen.jpg'),
('024142020009', 'Tomy Montes', '49', 3, 'imagen.jpg'),
('024142003675', 'Fruit Chew Montes', '23', 3, 'imagen.jpg'),
('7500443000450', 'Buffer Toffees Nuez con Canela', '39', 1, 'imagen.jpg'),
('7502230949454', 'Butter Toffees Menta', '39', 1, 'imagen.jpg'),
('7502230946729', 'Butter Toffees Leche', '39', 1, 'imagen.jpg'),
('75002230948914', 'Tutter Toffees Cafe', '39', 2, 'imagen.jpg'),
('7502230948907', 'Butter Toffees Chocolate', '39', 2, 'imagen.jpg'),
('7500443001464', 'Butter Toffees Pay de Queso y Fresa', '39', 1, 'imagen.jpg'),
('725226001432', 'Deli', '30', 9, 'imagen.jpg'),
('018804018152', 'Discos de Mantequilla', '30', 7, 'imagen.jpg'),
('725226000381', 'Caramelitos', '27', 7, 'imagen.jpg'),
('766902001599', 'Combo PiÃ±ata', '119', 5, 'imagen.jpg'),
('608890030208', 'Gajo de Naranja California', '32', 7, 'imagen.jpg'),
('608890030192', 'Goma California', '32', 8, 'imagen.jpg'),
('741217600286', 'Selz Soda', '40', 6, 'imagen.jpg'),
('724869003261', 'Frutas del Bosque', '28', 4, 'imagen.jpg'),
('812999011048', 'Limoncito', '25', 11, 'imagen.jpg'),
('7501025955120', 'Huevitos 1/2K', '43', 8, 'imagen.jpg'),
('7501025955083', 'Huevitos 1K', '79', 3, 'imagen.jpg'),
('75022259626611', 'Bolitochas Surtidas', '51', 5, 'imagen.jpg'),
('744218100038', 'Lucky Gummys Lombrices', '52', 4, 'imagen.jpg'),
('744218100045', 'Lucky Gummy Lombrices Neon', '52', 2, 'imagen.jpg'),
('744218100090', 'Lucky  Gummys Aros de Durazno', '51', 8, 'imagen.jpg'),
('01880454723', 'Chiclosos La Vaquita', '31', 7, 'imagen.jpg'),
('634130102497', 'Pastilla Corazon', '48', 3, 'imagen.jpg'),
('759686651012', 'Picafresa', '36', 1, 'imagen.jpg'),
('744218100120', 'Lucky Gummys Manguitos', '35', 5, 'imagen.jpg'),
('7502246440846', 'Mangomis', '35', 5, 'imagen.jpg'),
('783502101016', 'Dulcereza', '46', 12, 'imagen.jpg'),
('000861040672', 'Paleta Coronado', '13', 5, 'imagen.jpg'),
('713606020128', 'Natillon', '39', 5, 'imagen.jpg'),
('7503003870562', 'GArampiÃ±ado Extra Jumbo', '125', 4, 'imagen.jpg'),
('7503003870784', 'GarampiÃ±ado King Kong', '165', 3, 'imagen.jpg'),
('06016A1', 'Banderilla Mega', '68', 4, 'imagen.jpg'),
('3', 'Banderilla Jumbo', '45', 6, 'imagen.jpg'),
('60189', 'Palanqueta de cacahuate Rosita', '48', 5, 'imagen.jpg'),
('7502230945524', 'Nikolo Cacahuate', '73', 4, 'imagen.jpg'),
('603554054040', 'Brazalete', '66', 5, 'imagen.jpg'),
('719886001116', 'Pelon Original', '44', 9, 'imagen.jpg'),
('7502226815015', 'Lucas Muecas Chamoy', '47', 6, 'imagen.jpg'),
('7502226815046', 'Lucas Muecas Cereza', '47', 3, 'imagen.jpg'),
('719886120169', 'Crayon', '42', 8, 'imagen.jpg'),
('7503008304796', 'Bibi Polvis', '46', 8, 'imagen.jpg'),
('725181414100', 'Lucas Baby Chamoy', '38', 5, 'imagen.jpg'),
('725181640103', 'Lucas Baby Mango', '38', 5, 'imagen.jpg'),
('725181820109', 'Lucas Gusano', '42', 3, 'imagen.jpg'),
('742696900102', 'Paquito Xtremo', '59', 3, 'imagen.jpg'),
('742696600010', 'Paquito Acidito', '59', 3, 'imagen.jpg'),
('742696900157', 'Paquito Sal yLimon', '53', 5, 'imagen.jpg'),
('758806000105', 'Portico', '24', 8, 'imagen.jpg'),
('744218100014', 'Lucky Gummys Ositos', '48', 4, 'imagen.jpg'),
('702752200089', 'Cachitos Periquitos', '40', 7, 'imagen.jpg'),
('603554043068', 'Trueno Pop', '33', 10, 'imagen.jpg'),
('6957342934880', 'Chiflayazo', '54', 1, 'imagen.jpg'),
('603554060423', 'SilvaBird', '52', 2, 'imagen.jpg'),
('6932945613387', 'Funny Spray', '57', 2, 'imagen.jpg'),
('7503015060975', 'Manita Elastica', '66', 4, 'imagen.jpg'),
('7502226812205', 'Salvavidas', '48', 5, 'imagen.jpg'),
('7501031280094', 'Pollitos de Chocolate', '54', 10, 'imagen.jpg'),
('4', 'El Gatito Chocolate', '48', 4, 'imagen.jpg'),
('750105511107', 'Canasta Chocolate', '45', 8, 'imagen.jpg'),
('7502005970010', 'Popote  Anillo', '24', 3, 'imagen.jpg'),
('7501088210990', 'Balones', '34', 1, 'imagen.jpg'),
('7501015501078', 'Chutazo', '63', 3, 'imagen.jpg'),
('7501558211502', 'Vaquero Chocolate', '60', 6, 'imagen.jpg'),
('719886510878', 'Pelon Mini', '37', 6, 'imagen.jpg'),
('742587052293', 'Cerecets', '48', 3, 'imagen.jpg'),
('724869000642', 'Mini Winky', '30', 4, 'imagen.jpg'),
('724869000253', 'Mini Coconugs', '35', 5, 'imagen.jpg'),
('792250101070', 'Obleas mini', '29', 4, 'imagen.jpg'),
('792250101025', 'Obleas Gde', '51', 5, 'imagen.jpg'),
('724863000369', 'Malvabon', '25', 21, 'imagen.jpg'),
('725181510109', 'Skwinkles', '54', 4, 'imagen.jpg'),
('7501000630455', 'Mini Mamut', '32', 5, 'imagen.jpg'),
('7502225961188', 'Malvalleno', '38', 2, 'imagen.jpg'),
('724869001007', 'Mazapan chocolate', '34', 10, 'imagen.jpg'),
('75016158401020', 'Lunetas', '38', 6, 'imagen.jpg'),
('742587035654', 'Flops', '77', 1, 'imagen.jpg'),
('7501059299191', 'Carlos V', '94', 6, 'imagen.jpg'),
('706460243239', 'M&M Cafe', '62', 1, 'imagen.jpg'),
('706646024118', 'Snicker', '62', 4, 'imagen.jpg'),
('706460241198', 'MilkyWay', '62', 5, 'imagen.jpg'),
('7501024523382', 'Hersheys', '58', 5, 'imagen.jpg'),
('724869000543', 'Winky Chico', '28', 23, 'imagen.jpg'),
('724869000321', 'Nugs', '29', 13, 'imagen.jpg'),
('025046501052', 'Bocadin', '45', 8, 'imagen.jpg'),
('7501088210037', 'Cremino Cafe', '49', 3, 'imagen.jpg'),
('7501088210525', 'Cremino Blanco', '49', 10, 'imagen.jpg'),
('724869004077', 'Chhocolate con Almendra de la Rosa', '57', 2, 'imagen.jpg'),
('724869004022', 'Chocolate Estilo Suizo de la Rosa', '50', 8, 'imagen.jpg'),
('7501088211713', 'Mui-Bon', '47', 22, 'imagen.jpg'),
('724869001434', 'Nugs Recreo', '52', 17, 'imagen.jpg'),
('724869100076', 'Mazapan Chico', '50', 22, 'imagen.jpg'),
('724869100106', 'Mazapan Normal', '55', 22, 'imagen.jpg'),
('724869001397', 'Mazapan Gigante', '65', 5, 'imagen.jpg'),
('724869000260', 'Cacahuatesuelto', '48', 4, 'imagen.jpg'),
('7503001403168', 'Chechi Fresco', '49', 4, 'imagen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(8) NOT NULL,
  `nombre` char(20) NOT NULL DEFAULT '',
  `correo` varchar(35) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `foto` text NOT NULL,
  `nivel` char(15) DEFAULT NULL,
  `puesto` char(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`, `foto`, `nivel`, `puesto`) VALUES
(5, 'Admin', 'jacky@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Admin', 'Admin'),
(10, 'Obras', 'jackye@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Obras Publicas', 'Admin'),
(11, 'Hola', 'Hola@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Oficial Mayor', 'Oficial Mayor'),
(12, 'Oficial', 'Miguel@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Oficial Mayor', 'Oficial'),
(13, 'Tesorero', 'teso@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'foto.jpg', 'Tesorero', 'Tesorero');

-- --------------------------------------------------------

--
-- Table structure for table `ventadulce`
--

CREATE TABLE IF NOT EXISTS `ventadulce` (
  `idventa` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detventadulce`
--
ALTER TABLE `detventadulce`
  ADD PRIMARY KEY (`id_detventa`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `ventadulce`
--
ALTER TABLE `ventadulce`
  ADD PRIMARY KEY (`idventa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detventadulce`
--
ALTER TABLE `detventadulce`
  MODIFY `id_detventa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventadulce`
--
ALTER TABLE `ventadulce`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
