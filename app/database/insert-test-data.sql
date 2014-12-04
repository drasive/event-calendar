# genres
INSERT INTO `eventcalendar`.`genres` (`id`, `name`, `created_at`) VALUES ('1', 'Party', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`genres` (`id`, `name`, `created_at`) VALUES ('2', 'Konzert', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`genres` (`id`, `name`, `created_at`) VALUES ('3', 'Theater', '2014-11-16 20:00');

# events
INSERT INTO `eventcalendar`.`events` (`id`, `genre_id`, `name`, `description`, `duration`, `cast`, `image_description`, `created_at`) VALUES ('1', '2', 'Weihnachtsparty', 'Die diesjährige Weinachtsparty.', '3:00:00', 'Sasha Grey, Tori Black, Charlie Laine',
                                                                                                                                              'Dies ist eine eher lange Bildbeschreibung. Eine eher lange Bildbeschreibung. Eine eher lange Bildbeschreibung. Eine eher lange Bildbeschreibung.',
                                                                                                                                              '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`events` (`id`, `genre_id`, `name`, `description`, `duration`, `cast`, `image_description`, `created_at`) VALUES ('2', '1', 'Sommerfreude', 'Konzert zur Feier des Sommerbeginns.', '1:15:00', 'Béatrice Duc', null, '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`events` (`id`, `genre_id`, `name`, `description`, `duration`, `cast`, `image_description`, `created_at`) VALUES ('3', '3', 'Osterfest',
                                                                                                                                              'Das diesjährige Ostertheater. Die ist eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung. Eine lange Beschreibung.',
                                                                                                                                              '1:30:00', 'Dimitri Vranken', 'Dies ist eine kurze Bildbeschreibung.', '2014-11-16 20:00');

# price_groups
INSERT INTO `eventcalendar`.`price_groups` (`id`, `name`, `price`, `created_at`) VALUES ('1', 'Erwachsene', '19.90', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`price_groups` (`id`, `name`, `price`, `created_at`) VALUES ('2', 'Kinder', '0', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`price_groups` (`id`, `name`, `price`, `created_at`) VALUES ('3', 'Senioren', '9.90', '2014-11-16 20:00');

# event_price_group
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('1', '1');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('1', '3');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('2', '1');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('2', '2');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('2', '3');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('3', '1');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('3', '2');
INSERT INTO `eventcalendar`.`event_price_group` (`event_id`, `price_group_id`) VALUES ('3', '3');

# links
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('1', '1', 'http://www.google.com/', 'www.google.com', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('2', '1', 'https://www.bing.com/', 'www.bing.com', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('3', '2', 'https://www.yahoo.com/', 'www.yahoo.com', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('4', '2', 'https://duckduckgo.com/', null, '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('5', '3', 'https://www.baidu.com/', 'www.baidu.com', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`links` (`id`, `event_id`, `url`, `Name`, `created_at`) VALUES ('6', '3', 'http://www.msn.com/', null, '2014-11-16 20:00');

# shows
INSERT INTO `eventcalendar`.`shows` (`id`, `event_id`, `date`, `time`, `created_at`) VALUES ('1', '1', '2014-12-22', '23:00:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`id`, `event_id`, `date`, `time`, `created_at`) VALUES ('2', '1', '2014-12-23', '00:00:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`id`, `event_id`, `date`, `time`, `created_at`) VALUES ('3', '2', '2013-03-20', '19:30:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`id`, `event_id`, `date`, `time`, `created_at`) VALUES ('4', '2', '2013-03-20', '20:15:00', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`shows` (`id`, `event_id`, `date`, `time`, `created_at`) VALUES ('5', '3', '2015-04-05', '19:30:00', '2014-11-16 20:00');

# users
INSERT INTO `eventcalendar`.`users` (`id`, `email`, `password`, `created_at`) VALUES ('1', 'dimitri.vranken@hotmail.ch', '$2y$10$FaK7t40Ahs889I1AGIiS0e71UbyUd0rpTxlCEWkibXudT.7c/Kd6e', '2014-11-16 20:00');
INSERT INTO `eventcalendar`.`users` (`id`, `email`, `password`, `created_at`) VALUES ('2', 'test@test.ch', '$2y$10$FaK7t40Ahs889I1AGIiS0e71UbyUd0rpTxlCEWkibXudT.7c/Kd6e', '2014-11-16 20:00');
