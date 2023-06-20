-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-06-2023 a las 03:09:54
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mas_quemascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `idarticulo` int NOT NULL AUTO_INCREMENT,
  `idcategoria` int NOT NULL,
  `codigo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `descuento` decimal(11,0) DEFAULT NULL,
  `oferta` tinyint(1) DEFAULT NULL,
  `stock` int NOT NULL,
  `descripcion` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `talla` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `color` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` bit(1) DEFAULT (1),
  `tipo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idarticulo`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `idcategoria`, `codigo`, `nombre`, `precio_venta`, `descuento`, `oferta`, `stock`, `descripcion`, `talla`, `color`, `foto`, `estado`, `tipo`) VALUES
(1, 1, 'J001', 'Juego De Juguetes Para Dientes', '18000.00', NULL, NULL, 5, 'Set dental cachorro', 'U', 'azul', '.././assets/perro/J001.png', b'1', 'Perro'),
(2, 1, 'J002', 'Juguete Para Perro Petstages Hueso Chick-a-Bone Sabor Pollo', '32900.00', NULL, 1, 5, 'Chick-a-Bone de Petstages ofrece una alternativa segura y saludable a los huesos tradicionales que se pueden astillar.\r\n\r\nEste robusto juguete masticable para perros tiene todo el sabor del pollo real, pero está hecho de una mezcla de hueso natural y mater', 'U', NULL, 'perro/J002.png', b'1', 'Perro'),
(3, 1, 'J003', 'Juguete Para Perro Puppis Soga 2 Nudos Hueso - 34 Cm', '8900.00', NULL, NULL, 5, 'El Juguete Puppis Soga Dos Nudos está diseñado con materiales resistentes para que tu perro pueda divertirse tironeando. Las sogas son un tipo de juguete que además de entretener a tu mascota, colaboran en el fortalecimiento de la musculatura de la boca y ', 'U', NULL, '../assets/perro/J003.png', b'1', 'Perro'),
(4, 1, 'J004', 'Gimnasio Para Gato Tipo Silla', '170000.00', NULL, 1, 5, 'Colores sujetos a disponibilidad, el color llega de manera aleatoria.', 'U', NULL, '../assets/gato/JG001.png', b'1', 'Gato'),
(5, 1, 'JG002', 'Rascador Para Gato Afp Incline Cat Scratcher', '45000.00', NULL, NULL, 5, 'Este rascador de gato inclinado corrugado le da a su gato un lugar cómodo para rascarse. Con el diseño de inclinación, tu gato se interesará por él. Los paneles de recarga corrugados prolongan la vida útil de su juego y ayudan a distraer a su gato de rasca', 'M', 'verde', '../assets/gato/JG002.png', b'1', 'Gato'),
(6, 2, 'AB001', 'Shampoo Y Acondicionador Con Clorhexidina Para Mascotas Clorhexin - 240 Ml', '30000.00', NULL, 1, 5, 'Clorhexin Shamppo\r\nShampoo y acondicionador con clorhexidina.\r\n\r\nModo de uso\r\n\r\nMoje completamente al animal y aplique suficiente shampoo para producir espuma; adicione más agua si es necesario. Haga un masaje durante 15 minutos para asegurar un buen conta', NULL, NULL, '../assets/perro/AB001.png', b'1', 'Perro'),
(7, 2, 'AB002', 'Pañales Desechables X12 Und', '31000.00', NULL, NULL, 5, 'Los pañales desechables Hushpet son la solución efectiva y simple para hembras en calor, perros con incontinencia urinaria, cachorros o simplemente para un viaje. Tienen un indicador de humedad que le permite saber cuándo es hora de cambiar\r\na su perro. Ca', 'S', NULL, '../assets/perro/AB002.png', b'1', 'Perro'),
(8, 2, 'AB003', 'Bolsas M-PETS Waste Color Surtido', '5000.00', NULL, NULL, 5, 'Las bolsas de polietileno resistentes ofrecen resistencia y durabilidad confiables\r\nA prueba de fugas, fácil de separar y abrir para borrar el desastre rápidamente.HDPE\r\n\r\nTamaño\r\n4 x 20 pcs\r\n8x 20 pcs\r\nTamaño de la bolsa: 35 x 23 cm', NULL, NULL, '../assets/perro/AB003.png', b'1', 'Perro'),
(9, 2, 'ABG001', 'Cepillo Para Mascotas Ferplast Premium', '45000.00', NULL, NULL, 5, 'Cepillo combinado para perros y gatos de pelo corto, intermedio y largo.eficaz en la eliminación del pelo muerto. Por un lado, es equipado con púas redondeadas en acero inoxidable que quitan el pelo muerto sin dañar la piel, por otro lado, hay cerdas de pó', 'U', 'negro', '../assets/gato/ABG001.png', b'1', 'Gato'),
(10, 2, 'ABG002', '\r\nproductos nuevo\r\n\r\nCortaúñas Para Gato Ferplast Gro5808 - Único', '15000.00', NULL, 1, 5, 'Este cortaúñas es un accesorio importante e indispensable para la rutina de limpieza de tu mascota, ya que podrás cortarle de forma fácil y segura sus uñas largas, evitando así que genere daños en tus sabanas, artículos u otros elementos de tu hogar. Cuent', 'U', NULL, '../assets/gato/ABG002.png', b'1', 'Gato'),
(11, 3, 'APG001', 'Antipulgas Y Garrapatas Para Gato - 2.6 - 7.5 Kg', '41000.00', NULL, NULL, 5, 'El antiparasitario interno y externo para gatos de 2.6 hasta 7.5 Kilos Revolution 6% es un medicamento efectivo para el tratamiento y control de infestaciones por pulgas, garrapatas y sarna sarcóptica.Con Zoetis la salud de tu perro o gato está en buenas m', NULL, NULL, '../assets/gato/APG001.png', b'1', 'Gato'),
(12, 3, 'APG002', 'Collar Antipulgas Y Garrapatas Para Mascota Seresto - <8 Kg', '139000.00', NULL, NULL, 5, 'Seresto ofrece una protección hasta 8 meses contra parásitos externos además de disminuir el riesgo de contraer enfermedades de transmisión vectorial (VBD).\r\n\r\n\r\nEstá indicado frente la leishmaniosis hasta 8 meses reduciendo el riesgo de infección por Leis', 'U', NULL, '../assets/gato/APG002.png', b'1', 'Gato'),
(13, 3, 'APG003', 'Antipulgas Para Gato Power Spot-On - 4 - 8 Kg', '18000.00', NULL, 1, 5, '\r\nPulguicida para felinos en pipeta spot-on.\r\n\r\nFórmula\r\nImidacloprid ………………………………….....8 g\r\nExcipientes c.s.p………………………………..100 mL\r\n\r\nIndicaciones\r\nPrevención y el tratamiento de la infestación por pulgas del gato: Ctenocephalides felis y Ctenocephalides c', NULL, NULL, '../assets/gato/APG003.png', b'1', 'Gato'),
(14, 3, 'AP001', 'Antipulgas Chewable Perros (Una Tableta) - 4 - 10 Kg', '40000.00', NULL, NULL, 5, 'Anti-pulgas Endectocida oral\r\n\r\nTratamiento y prevención de infestación por: pulgas, garrapatas, sarna demodéctica, sarna sarcóptica, sarna otodéctica y miasis.\r\n\r\nDosificación y administración: Vía oral 1 tableta masticable una vez por mes.NexGard® está d', NULL, NULL, '../assets/perro/AP001.png', b'1', 'Perro'),
(15, 3, 'AP002', 'Talco Para Perro Canamor Insecticida - 100 Gr', '15000.00', NULL, NULL, 5, '\r\nEl talco CanAmor Insecticida es ideal para eliminar pulgas, piojos y garrapatas y garantizar la higiene del animal entre baños.\r\n\r\n-Baja toxicidad, seguridad en su aplicación\r\n-Especial uso entre baños\r\n-Para uso en todas las razas de perros\r\n-Aroma agra', NULL, NULL, '../assets/perro/AP002.png', b'1', 'Perro'),
(16, 5, 'AC001', 'Chaqueta Para Perro Feroz Impermeable Pastel', '55000.00', NULL, NULL, 5, 'Chaquetas impermeables especiales para que tu mascota no se moje y se vea siempre a la moda.\r\n\r\nInstrucciones de lavado: Lavar con jabón neutro y NO usar blanqueador, Usar plancha tibia por el reverso, No exprimir, Secar colgado en gancho a la sombra.\r\n\r\n\r', NULL, NULL, '../assets/perro/AC001.png', b'1', 'Perro'),
(17, 5, 'AC002', 'Moño Para Perro Alana & Bandana Flores Lila', '7000.00', NULL, NULL, 5, 'Lleva su OUTFIT al siguiente nivel, con nuestros moños para collar,\r\nTu peludito siempre estará en tendencia y se verá adorable.\r\n\r\n100 % Polyester, antifluído.;Fácil de limpiar.;Seguro y ajustable.;Súper fácil de poner y quitar: Broche para adaptarlo al c', 'U', NULL, '../assets/perro/AC001.png', b'1', 'Perro'),
(18, 5, 'ACG001', 'Arnés De Gatito Correa Rojo-Azul Pawise', '20000.00', NULL, NULL, 5, 'Tu gato lucirá un arnés con correa cómodo ,tiene una correa con ganchos giratorios, que evita los nudos en la correa, además es muy fácil colocación gracias a su hebilla de plástico, es un arnés seguro y cómodo para tu gatito. El material del arnés y corre', NULL, NULL, '../assets/gato/ACG001.png', b'1', 'Gato'),
(19, 5, 'ACG002', 'Collar Para Gato Pawise Verde - Único', '12000.00', NULL, 1, 5, 'Es un collar ajustable para que tu Gato luzca guapo en todo momento. Diseños únicos a la moda y texturas suave, de plástico resistente y seguro. Además, los collares de Pawise traen un cascabel que combina con el resto del collar, dando estilo y color.\r\n\r\n', NULL, NULL, '../assets/gato/ACG002.png', b'1', 'Gato'),
(20, 5, 'ACG003', 'Chaleco Para Gato Dalmata\'s Con Moño', '75000.00', NULL, NULL, 5, 'Chaleco para gato de tela bondeada, traílla de Nylon y mosquetón giratorio, incluye un lindo cascabel.\r\n\r\nColores sujetos a disponibilidad.', 'L', NULL, '../assets/gato/ACG003.png', b'1', 'Gato'),
(21, 4, 'C001', 'Comedero Antireflujo Para Perro (Color Surtido) - Mediano', '26000.00', NULL, NULL, 5, 'Comedero antirreflejo huesos lo mejor para el bienestar de tu mascota, producto ideal para que tu mascota baje la velocidad al momento de comer, evita el reflujo en su cuerpo y es ideal para aquellas mascotas con sobrepeso. Producto biodegradable y amigabl', NULL, NULL, '../assets/perro/C001.png', b'1', 'Perro'),
(22, 4, 'C002', 'Comedero Doble Para Mascotas M-PETS Blanco Con Gris - Único', '29000.00', NULL, NULL, 5, 'El conjunto de tazones dobles es conveniente para servir alimentos y agua al mismo tiempo. También ideal para múltiples familias de mascotas.Fácil de mover, llevar y limpiar.\r\nTamaño\r\n2 x 350 ml\r\nTamaño del tazón: 12.6 (diámetro) x 5.2 (Alto) cm\r\nTamaño de', NULL, NULL, '../assets/perro/C002.png', b'1', 'Perro'),
(23, 4, 'C003', 'Bebedero Y Comedero 2 En 1 Calabaza (Color Surtido)', '16000.00', NULL, NULL, 5, 'Colores sujetos a disponibilidad en tienda, el color llega de manera aleatoria.', 'U', NULL, '../assets/perro/C003.png', b'1', 'Perro'),
(24, 4, 'CG001', 'Comedero Doble Para Mascotas Pawise (Colores Surtidos) - 44x27x6 Cm', '18000.00', NULL, NULL, 5, 'Cuencos dobles de acero inoxidable: vienen con dos cuencos de acero inoxidable de 1,5 tazas, este comedero para mascotas funciona como un juego de cena completo con comida y agua para uno.\r\n\r\nTapete antiderrames: diseñado con una base de silicona antiderra', NULL, NULL, '../assets/gato/CG001.png', b'1', 'Gato'),
(25, 4, 'CG002', 'Comedero Para Gato Ferplast Izar Bowl - Único', '19000.00', NULL, NULL, 5, 'Permiten suministrar agua y comida al mismo tiempo. De cerámica esmaltada, poseen una agradable forma redondeada y una graciosa decoración con un gatito sonriente en la parte interior. ¡Observa las originales partes salientes en forma de orejas! Los comede', NULL, NULL, '../assets/gato/CG002.png', b'1', 'Gato'),
(26, 6, 'CC001', '\r\nCama Para Perro Doble faz SofistiPets Negro - Mediana (20x75x50)', '250000.00', NULL, NULL, 5, 'Espectacular cama para perros! Ideal para un buen descanso y comodidad. Dos colores en una cama, hecha en poliéster y desarmable para lavado.\r\n\r\nLa mediana ideal para perros de hasta 50cm de largo y la grande ideal para perros de hasta 80cm de largo(del cu', NULL, NULL, '../assets/perro/CC001.png', b'1', 'Perro'),
(27, 6, 'CC002', 'Cama Para Mascotas Luxury Vipets (Colores Surtidos)', '120000.00', NULL, 1, 5, 'Hermosa cama para mascotas con cojín desmontable.\r\n\r\nColores sujetos a disponibilidad en tienda, el color llega de manera aleatoria.\r\n\r\nTamaño\r\nS: 43 ancho x 56 largo x 17 Alto Cm\r\nM: 58 ancho x 73 largo x 19 Alto Cm\r\nL: 73 ancho x 96 largo x 22 Alto Cm\r\nX', NULL, NULL, '../assets/perro/CC001.png', b'1', 'Perro'),
(28, 6, 'CCG001', 'Cama Asoleadora Para Gato Piel De Conejo (Colores Surtidos) - Único', '75000.00', NULL, NULL, 5, 'Cama asoleadora para gato , echo en tela importada venus pelo largo, resistente con cadena de marqueteía resistente , se puede desarmar.\r\n\r\nColores sujetos a disponibilidad.\r\n\r\nTamaño:\r\nAncho: 38 Cm\r\nLargo : 50 Cm', NULL, NULL, '../assets/gato/CCG001.png', b'1', ''),
(29, 6, 'CCG002', 'Cama Para Gatos Zee.Cat Bed Polo - 23x46x27 Cm', '125000.00', NULL, NULL, 5, 'La cama para gatos Polo es práctica y súper cómoda. Tiene una pantalla extraíble que envuelve la estructura para proporcionar un ambiente cálido y seguro para el gato. Además, tiene una base antideslizante en caucho natural y también una almohada de doble ', NULL, NULL, '../assets/gato/CCG002.png', b'1', 'Gato'),
(30, 6, 'CCG003', 'Combo Cama Mascota Guamba Corazón Gris - 50x50 Cm', '95000.00', NULL, NULL, 5, 'Elaborada en tela rígida tipo lona semipermeable, relleno de fibra siliconada que nunca se deforma.\r\n\r\nInstrucciones de lavado:\r\nFácil de lavar en casa.\r\nCompletamente desarmable, funda re movible y cojines individuales.\r\nLavar el producto completo en lava', 'M', NULL, '../assets/gato/CCG003.png', b'1', 'Gato'),
(31, 7, 'SP001', 'Snack Para Perro Pixie Hueso Natural - 200 Gr', '6900.00', NULL, NULL, 5, 'Dado que el hueso natural pixie es una rica fuente de calcio, no se lo dejes a tu perrito por periodo de más de 15 minutos al día. Pero si tu perro es muy voraz o ansioso, no permitas que se lo coma todo de una vez. Nunca lo cocines, nuestro hueso pasa por', NULL, NULL, '../assets/perro/SP001.png', b'1', 'Perro'),
(32, 0, 'SP002', 'Snack Para Perro Dr.Clauder\'s Trainee Minis Pollo - 10 Gr', '3900.00', NULL, NULL, 5, 'Snacks de entrenamiento Dr.Clauder \'s fabricados con carne magra y cortados en cubitos. Por tanto, Perfectos como re- compensa rápida durante el entrenamiento o como aperitivo. Especialmente recomendado para perros con alergias ya que consisten en una sola', NULL, NULL, '../assets/perro/SP002.png', b'1', 'Perro'),
(33, 7, 'SP003', 'Snack Para Perro Vita Crunch Bombonera Galleta Avena - 1000 Gr', '23000.00', NULL, 1, 5, '\r\nEs un suplemento alimenticio indicado para perros de cualquier edad o raza como complemento de su dieta diaria.', NULL, NULL, '../assets/perro/SP003.png', b'1', 'Perro'),
(34, 7, 'SPG001', 'Snack Para Gato Br Bombonera Bola De Pelo Control - 350 Gr', '6500.00', NULL, NULL, 5, 'Br For Cat Control Bolas de Pelos es un suplemento alimenticio, para gatos adultos de todas las razas y tamaños, el cual puede suministrarse a diario.', NULL, NULL, '../assets/gato/SPG001.png', b'1', 'Gato'),
(35, 7, 'SPG002', 'Alimento Húmedo Gatofancy Feast Mousse Pescado Y Camarón - 3 Onzas', '7800.00', NULL, NULL, 5, 'La textura esponjosa de la mousse combinada con un sabor delicado para deleitar a tu gato con una preparación gourmet.', NULL, NULL, '../assets/gato/SPG002.png', b'1', 'Gato'),
(36, 8, 'AR001', 'Arena Freemiau Cítrica - 7 Kg', '79000.00', NULL, NULL, 5, 'Arena sanitaria con aroma cítrico absorbente para las heces y orina de los gatos.\r\n\r\nCaracterísticas:\r\n\r\nAlta capacidad de absorción.\r\nNeutraliza los malos olores.\r\nSolidifica heces y orina.\r\nFacilidad y comodidad para el manejo de los residuos.\r\nPresentac', NULL, NULL, '../assets/gato/AR001.png\r\n\r\n\r\n', b'1', 'Gato'),
(37, 8, 'AR002', 'Arena Tidy Cats Instant Action Jarra - 6.35 Kg', '65000.00', NULL, NULL, 5, 'Arena Tidy Cats Instant Action es una arena con un alto poder aglutinante que facilita la recolección y prolongando su uso al no tener que cambiarse toda la arena. La tecnología Tidy Lock cuenta con agentes que combaten el mal olor generando scoops instant', NULL, NULL, '../assets/gato/AR002.png', b'1', 'Gato'),
(38, 8, 'AR003', 'Arenera Sanitario Grande Cabeza Gato (Colores Rosado O Azul Sujetos A Disponibilidad En Tienda) - (5', '159000.00', NULL, NULL, 5, 'Arenera cubierta , producto importado de excelente calidad.Este tipo de arenera es ideal para que sus gatos entren y hagan sus necesidades de manera fácil. Arenero permite que el gato pueda entrar y salir sin ningún problema y con total facilidad.', NULL, NULL, '../assets/gato/AR003.png', b'1', 'Gato'),
(39, 8, 'AR004', 'Kit Para Gato No 3 Am Mascotas (Colores Surtidos)', '19800.00', NULL, NULL, 5, 'Kit # 3 gato ideal para completar el sanitario de tu mascota, todo lo que necesitas, arenera pequeña, pala recogedora para limpiar el baño de tu mascota y por ultimo el tapete de gato que ayuda y mejora la salida de tu mascota del baño, evita que se queden', NULL, NULL, '../assets/gato/AR004.png', b'1', 'Gato'),
(40, 0, 'AR005', 'Tapete Recogedor De Arena Para Gato M-PETS Verde - 60x45 Cm', '27900.00', NULL, 1, 5, 'Tapete Recogedor De Arena Para Gato M-PETS Gris. Mantiene la zona de su lápiz de su gato y hace que su caja de arena se vea bien, ordenada y estéticamente agradable.\r\nReduzca la dispersión de la basura en el piso y mantenga las patas limpias y frescas. Est', NULL, NULL, '../assets/gato/AR005.png', b'1', 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` varchar(256) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idcategoria`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`) VALUES
(1, 'Juguetes', 'Artículos para divertir a tu mascota'),
(2, 'Aseo y belleza', 'Articulos de aseo.'),
(3, 'Anti_pulgas', 'Articulos para combatir pulgas y acaros'),
(4, 'Comederos', 'vasijas para alimentar a la mascota'),
(5, 'Accesorios', 'Articulos de vestir, placas, collares para la mascota.'),
(6, 'Camas y cargadores', 'Articulos para la comodida de la mascota.'),
(7, 'Snack y premios', 'Articulos para consentir y alimentar la mascota.'),
(8, 'Arena', 'Variedad de arenas para gatos.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiasmascotas`
--

DROP TABLE IF EXISTS `historiasmascotas`;
CREATE TABLE IF NOT EXISTS `historiasmascotas` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `ID_Usuario` int DEFAULT NULL,
  `NombreMascota` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Historia` text COLLATE utf8mb4_general_ci,
  `Foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Usuario` (`ID_Usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NumeroTelefono` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
