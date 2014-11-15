CREATE USER 'ec-webserver'@'localhost' IDENTIFIED BY 'YNFKm8y3TjFQSCyDev6F9RF2NkZ8N5Ft';

GRANT SELECT, INSERT, UPDATE, DELETE ON eventcalendar.* TO 'ec-webserver'@'localhost';
