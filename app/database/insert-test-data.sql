# Genres
INSERT INTO `eventcalendar`.`genres` (`Id`, `Name`, `CreationDate`) VALUES ('1', 'Drama', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`genres` (`Id`, `Name`, `CreationDate`) VALUES ('2', 'Kindertheater', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`genres` (`Id`, `Name`, `CreationDate`) VALUES ('3', 'Zwischenstück', '2014-11-16 20:00');

# Events
INSERT INTO `eventcalendar`.`events` (`Id`, `Genre_Id`, `Name`, `Description`, `Duration`, `Cast`, `CreationDate`) VALUES ('1', '2', 'Weihnachtstheater', 'Das diesjährige Weinachtstheater.', '3:00:00', 'Sasha Grey, Belle Knox, Charlie Laine', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`events` (`Id`, `Genre_Id`, `Name`, `Description`, `Duration`, `Cast`, `CreationDate`) VALUES ('2', '1', 'Sommerfreude', 'Theater zur Feier des Sommerbeginns.', '1:15:00', 'Béatrice Duc', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`events` (`Id`, `Genre_Id`, `Name`, `Description`, `Duration`, `Cast`, `CreationDate`) VALUES ('3', '3', 'Ostertheater', 'Das diesjährige Ostertheater.', '1:30:00', 'Dimitri Vranken', '2014-11-16 20:00');

# PriceGroups
INSERT INTO `eventcalendar`.`pricegroups` (`Id`, `Name`, `Price`, `CreationDate`) VALUES ('1', 'Erwachsene', '19.90', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`pricegroups` (`Id`, `Name`, `Price`, `CreationDate`) VALUES ('2', 'Kinder', '0', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`pricegroups` (`Id`, `Name`, `Price`, `CreationDate`) VALUES ('3', 'Senioren', '9.90', '2014-11-16 20:00');

# Event_PriceGroups
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('1', '1');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('1', '3');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('2', '1');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('2', '2');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('2', '3');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('3', '1');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('3', '2');
INSERT INTO `eventcalendar`.`event_pricegroups` (`Event_Id`, `PriceGroup_Id`) VALUES ('3', '3');

# Links
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('1', '1', 'https://www.google.com/', 'Google', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('2', '1', 'https://www.bing.com/', 'Bing', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('3', '2', 'https://www.yahoo.com/', 'Yahoo', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('4', '3', 'https://duckduckgo.com/', 'DuckDuckGo', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('5', '3', 'https://www.baidu.com/', 'Baidu', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`Id`, `Event_Id`, `URL`, `Name`, `CreationDate`) VALUES ('6', '3', 'http://www.msn.com/', 'MSN', '2014-11-16 20:00');

# Shows
INSERT INTO `eventcalendar`.`shows` (`Id`, `Event_Id`, `Date`, `Time`, `CreationDate`) VALUES ('1', '1', '2014-12-22', '23:00:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`Id`, `Event_Id`, `Date`, `Time`, `CreationDate`) VALUES ('2', '1', '2014-12-23', '00:00:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`Id`, `Event_Id`, `Date`, `Time`, `CreationDate`) VALUES ('3', '2', '2015-03-20', '19:30:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`Id`, `Event_Id`, `Date`, `Time`, `CreationDate`) VALUES ('4', '2', '2015-03-20', '20:15:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`Id`, `Event_Id`, `Date`, `Time`, `CreationDate`) VALUES ('5', '3', '2015-04-05', '19:30:00', '2014-11-16 20:00');

# Users
# TODO
