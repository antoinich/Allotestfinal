API with CodeIgniter 

Clone the project

in application/config/database.php
    insert your hostname (default : localhost), your mysql username and password.

use the dump.sql to create your mysql database.

run the php server

    The M_services model fetch datas from database using limit and offset as parameters
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255070-capture-du-2019-08-08-10-53-07.png
    
    The Api controller use the M_services model to return datas with Json format and config the pagination
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255075-capture-du-2019-08-08-10-52-17.png
    
    The App controller display the view
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255076-capture-du-2019-08-08-10-52-38.png
    
    Ajax is used in the view to fetch datas from the table, the pagination config and create table
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255711-capture-du-2019-08-08-11-14-55.png
    
    You can see the json content at localhost:'yourport'/api/loadrecord
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255173-capture-du-2019-08-08-11-05-26.png
    
    You can see the view at localhost:'yourport'/app/all
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255164-capture-du-2019-08-08-11-03-50.png
    
    https://image.noelshack.com/fichiers/2019/32/4/1565255170-capture-du-2019-08-08-11-04-06.png
    
    
