Jak utworzy� i zupdatowa� baz� danych:

1.Otw�rz cmd i wejd� do katalogu z projektem (u mnie cd C:/xampp/htdocs/Inzynierka2/Bootstrap) nast�pnie wklej poni�sze komendy:
2.php app/console doctrine:database:create
3.php app/console doctrine:schema:update --force


Po �ci�gni�ciu ka�dego commita ode mnie, przed rozpocz�ciem czegokolwiek, trzeba zupdatowa� baz� wi�c wystarczy wej�� w katalog z projektem i wklei�:
php app/console doctrine:schema:update --force




Je�li z jakich� powod�w trzeba baz� usun�c to tu jest komenda:
php app/console doctrine:database:drop --force






To tylko dla mnie:

php app/console doctrine:generate:entity 
php app/console doctrine:generate:entities AppBundle/Entity/nazwa
