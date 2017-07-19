#Soding

<insert.php>
-this interface is for insert data from user (name, description), and then, send it to database (phpmyadmin)

<show.php>
-this interface will read the data from database (phpmyadmin) and show the data to user in form of table.
-from the table, user can edit or delete the data.
-the table show asc number counting, uniq id, name, date(insert), date(update), edit, delete
-uniq id is auto generate when user insert the data
-date(insert) will be show in the table after user insert the data
-date(update) will be show in the table after user edit the data

<edit.php>
-this interface allow user to edit the data in the database.

<delete.php>
-function code for delete the data from database via show.php table

<database.php>
-function code for connecting with the database(phpmyadmin) for user to do insert, edit, show and delete the data via interface

