# Announcement:

I'm suspending the development of my add-ons due the change new Zabbix 5.x to MVC. The new structure demands a large rewrite of code, which i can't do at moment.


Estou suspendendo o desenvolvimento dos meus complementos devido à mudança do novo Zabbix 5.x para o desenvolvimento MVC. A nova estrutura exige uma grande reescrita de código, o que não posso fazer no momento.


# ZabPDF

Zabbix PDF reports

![](https://repository-images.githubusercontent.com/191846814/edb21900-8ea9-11e9-9b64-14ff0840547e)

Based on: https://github.com/martinm76/zabbix-pdf-report

Copy config.inc.php.dist to config.inc.php and insert your informations.

Run ./fixrights.sh after you have checked out this repo. 

Folders reports and tmp need to be writable by the webserver. 

Run: chmod 777 tmp reports

WORKS WITH ZABBIX 4.4
