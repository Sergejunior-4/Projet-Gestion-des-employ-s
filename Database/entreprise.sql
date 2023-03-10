CREATE TABLE `employes` (
  `EMPNO` int(11) NOT NULL,
  `EMPNOM` varchar(11) NOT NULL,
  `EMPPREN` varchar(11) NOT NULL,
  `EMPSEXE` varchar(1) NOT NULL,
  `EMPSALAIRE` int(11) NOT NULL,
  `EMPPRIME` int(11) NOT NULL,
  `SRVNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `employes` (`EMPNO`, `EMPNOM`, `EMPPREN`, `EMPSEXE`, `EMPSALAIRE`, `EMPPRIME`, `SRVNO`) VALUES
(1, 'LEBOSS', 'GILLES', 'M', 6860, 762, 1),
(2, 'ORGAN', 'INGRID', 'F', 5336, 847, 1),
(3, 'DUPLAFOND', 'GREGOIRE', 'M', 5336, 847, 1),
(4, 'VENDUE', 'ROSALIE', 'F', 3049, 152, 2),
(5, 'DUDESERT', 'RAISSA', 'F', 3049, 152, 2),
(6, 'LEBLOND', 'BERTRAND', 'M', 915, 76, 2),
(7, 'LABELLE', 'REINE', 'F', 2744, 152, 3),
(8, 'LEDUR', 'ALAIN', 'M', 1524, 686, 3),
(9, 'DUPONT', 'INES', 'F', 915, 152, 3),
(10, 'DUMONT', 'ADELPHE', 'M', 2287, 229, 4),
(11, 'LEROUX', 'APPOLIN', 'M', 1524, 229, 4),
(12, 'LEDUR', 'AIME', 'M', 991, 15, 4),
(13, 'LEBON', 'ROLAND', 'M', 915, 31, 4),
(14, 'LABRUTE', 'EDITH', 'M', 839, 15, 4),
(15, 'DESTIN', 'RENAUD', 'M', 2439, 152, 5),
(16, 'DUJARDIN', 'NADEGE', 'F', 610, 152, 5),
(17, 'BRILLES', 'EMILIE', 'F', 762, 30, 5),
(18, 'LEBRUN', 'DAVY', 'M', 732, 152, 5),
(19, 'LGRAND', 'MATHIEU', 'M', 762, 152, 5),
(20, 'DESPLANT', 'MAURICE', 'M', 10064, 1111, 6);

CREATE TABLE `intervenir` (
  `PROJNO` int(11) NOT NULL,
  `EMPNO` int(11) NOT NULL,
  `NBHEURES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `intervenir` (`PROJNO`, `EMPNO`, `NBHEURES`) VALUES
(1, 9, 15),
(1, 13, 8),
(1, 14, 8),
(1, 15, 24),
(1, 17, 50),
(2, 14, 70),
(2, 19, 70),
(2, 20, 70),
(3, 6, 10),
(3, 14, 16),
(3, 15, 80),
(3, 20, 85);

CREATE TABLE `projets` (
  `PROJNO` int(11) NOT NULL,
  `PROJLIB` varchar(11) NOT NULL,
  `SRVNO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `projets` (`PROJNO`, `PROJLIB`, `SRVNO`) VALUES
(1, 'CENTRE VILL', 5),
(2, 'NOUVPISCINE', 4),
(3, 'EAUPURIFIEE', 6);

CREATE TABLE `services` (
  `SRVNO` int(11) NOT NULL COMMENT 'Service Number',
  `SRVNOM` varchar(6) NOT NULL COMMENT 'Service Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `services` (`SRVNO`, `SRVNOM`) VALUES
(1, 'DIRECT'),
(2, 'COMMER'),
(3, 'COMPTA'),
(4, 'TERRAS'),
(5, 'MACONN'),
(6, 'ESPACE');

ALTER TABLE `employes`
  ADD PRIMARY KEY (`EMPNO`),
  ADD KEY `SRVNO` (`SRVNO`);

ALTER TABLE `intervenir`
  ADD KEY `PROJNO` (`PROJNO`);

ALTER TABLE `projets`
  ADD PRIMARY KEY (`PROJNO`),
  ADD KEY `SRVNO2` (`SRVNO`);

ALTER TABLE `services`
  ADD PRIMARY KEY (`SRVNO`);

ALTER TABLE `employes`
  MODIFY `EMPNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `employes`
  ADD CONSTRAINT `SRVNO` FOREIGN KEY (`SRVNO`) REFERENCES `services` (`SRVNO`);


ALTER TABLE `intervenir`
  ADD CONSTRAINT `PROJNO` FOREIGN KEY (`PROJNO`) REFERENCES `projets` (`PROJNO`);


ALTER TABLE `projets`
  ADD CONSTRAINT `SRVNO2` FOREIGN KEY (`SRVNO`) REFERENCES `services` (`SRVNO`);
COMMIT;
