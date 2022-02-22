-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 08-08-2020 a las 23:09:10
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `AtleticWeb`
-- 
CREATE DATABASE 'AtleticWeb'
USE 'AtleticWeb'

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Atletas`
--

CREATE TABLE 'Atletas' (
  'IdRe' int(2) UNSIGNED NOT NULL,
  'NomRe' varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  'EdadRe' int(2) UNSIGNED DEFAULT NULL,
  'PaisRe' varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  'DisRe' int(5) UNSIGNED DEFAULT NULL,
  'StAt' char(1) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Atletas`
--

INSERT INTO 'Atletas' ('IdRe', 'NomRe', 'EdadRe', 'PaisRe', 'DisRe', 'StAt') VALUES
(1, 'Oscar Morin', 26, 'Suecia', 1, 'A'),
(2, 'Jesus Carvallo', 38, 'Alemania', 2, 'A'),
(3, 'Pedro Rodriguez', 31, 'Holanda', 1, 'A'),
(4, 'Carlos Veccio', 25, 'Holanda', 4, 'A'),
(5, 'Marianyela Morin', 35, 'Suecia', 5, 'A'),
(6, 'Nabila Medina', 37, 'Alemania', 6, 'I'),
(7, 'Bob Abreu', 34, 'Holanda', 1, 'A'),
(8, 'Omar Vizquel', 32, 'Suecia', 6, 'A'),
(9, 'Grace Ramirez', 33, 'Suecia', 8, 'A'),
(10, 'Jose Altuve', 25, 'Alemania', 7, 'I'),
(11, 'Pedro Gonzalez ', 28, 'Holanda', 4, 'A'),
(12, 'Camila Arias', 34, 'Suecia', 6, 'A'),
(13, 'Julio Vezga', 28, 'Alemania', 9, 'A'),
(14, 'Tony Guerra ', 30, 'Alemania', 9, 'A'),
(15, 'Wilmer Medina', 28, 'Alemania', 6, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Disciplina`
--

CREATE TABLE 'Disciplina' (
  'IdDis' int(2) NOT NULL,
  'DisAt' varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Disciplina`
--

INSERT INTO 'Disciplina' ('IdDis', 'DisAt') VALUES
(1, 'Futbol'),
(2, 'Beisbol'),
(3, 'Tenis'),
(4, 'Natacion'),
(5, 'Patinaje'),
(6, 'BMX'),
(7, 'Surf'),
(8, 'Tenis de Mesa'),
(9, 'Futbol Sala'),
(10, 'Voleibol'),
(11, 'Basquetbol');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Atletas`
--
ALTER TABLE 'Atletas'
  ADD UNIQUE KEY 'IdRe' ('IdRe');

--
-- Indices de la tabla `Disciplina`
--
ALTER TABLE 'Disciplina'
  ADD UNIQUE KEY 'IdDis' ('IdDis');

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Atletas`
--
ALTER TABLE 'Atletas'
  MODIFY 'IdRe' int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `Disciplina`
--
ALTER TABLE 'Disciplina'
  MODIFY 'IdDis' int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;