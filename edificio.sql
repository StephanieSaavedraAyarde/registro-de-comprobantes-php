CREATE schema `edificio`

CREATE TABLE `inquilino` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `departamento` text NOT NULL,
  `piso` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `total` text NOT NULL,
  `image` longblob NOT NULL,
  `idInquilino` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
